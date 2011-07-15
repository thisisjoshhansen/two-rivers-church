<?php

session_start();

error_reporting(E_ALL);
ini_set("display_errors", 1);

# SMARTY includes
require('libs/smarty/Smarty.class.php');
$smarty = new Smarty();
include('includes/SmartyVars.php');

# PHP includes
include("libs/trcToolkit.php");
include('includes/topNav.php');

# MODELS
include("models/class.models.USER_session.php");
include("models/class.models.TRC_info.php");
include("models/class.models.TRC_news.php");
include("models/class.models.TRC_calendar.php");
include("models/class.models.TRC_locationServices.php");
include("models/class.models.TRC_corevalues.php");
include("models/class.models.TRC_doctrine.php");
include("models/class.models.TRC_ministries.php");

$smarty->assign('sessionType', 'none');
if( isset($_SESSION['admin']) ) {
	if( $_SESSION['admin'] )
		$smarty->assign('sessionType', 'admin');
}
// start the logic to get the correct page.
$page = '';
if( !empty($_GET['page'])) $page = $_GET['page'];

$sub = '';
if( !empty($_GET['sub'])) $sub = $_GET['sub'];

switch( $page ) {
	case 'newhere':
		$TRC_info = new TRC_info();
		$TRC_corevals = new TRC_corevals();

		$infoTitles = array('docstatement', 'corevalues', 'locsservs', 'newsevents');
		$info = $TRC_info->getMultItems($infoTitles);

		$corevals = $TRC_corevals->getAllVals();

		$smarty->assign('corevals', $corevals);
		$smarty->assign('info', $info);
		$smarty->display('newhere.tpl');
		break;

	case 'whoweare':
		$TRC_info = new TRC_info();
		$TRC_corevals = new TRC_corevals();
		$TRC_doctrine = new TRC_doctrine();

		switch( $sub ) {
			case 'doctrine';
				$info = $TRC_info->getSpecItem('jesus');
				$doctrine = $TRC_doctrine->getAllDoctrine();

				$smarty->assign('info', $info);
				$smarty->assign('doctrine', $doctrine);
				$smarty->display('doctrine.tpl');

				break;
			case 'corevalues':
				$corevals = $TRC_corevals->getAllVals();

				$smarty->assign('corevals', $corevals);
				$smarty->display('corevalues.tpl');

				break;
			case 'ministries';
				$TRC_ministries = new TRC_ministries();
				$ministries = $TRC_ministries->getAllMinistries();
//print_r($ministries);exit;
				if( isset($_GET['mid']) )
					$smarty->assign('mid', $_GET['mid']);
				else
					$smarty->assign('mid', $ministries[0]['ID']);

				$smarty->assign('ministries', $ministries);

				$smarty->display('ministries.tpl');

				break;
			case 'leadership':
				$info_array = array('spudduffey', 'davemuniz', 'dayvidsanchez');
				$info = $TRC_info->getMultItems($info_array);

				$smarty->assign('info', $info);
				$smarty->display('leadership.tpl');

				break;
			default:
				$info_array = array('history', 'docstatement', 'corevalues', 'comcovenent', 'mission', 'vision', 'ministries');
				$info = $TRC_info->getMultItems($info_array);

				$smarty->assign('info', $info);

				$smarty->display('whoweare.tpl');

				break;
		}

		break;

	case 'locationservices':
		$TRC_locServs = new TRC_locationServices();

		switch( $sub ) {
			case 'directions':
				$smarty->display('construction.tpl');
				break;
			case 'commingsermons':
				$smarty->display('construction.tpl');
				break;
			default:
				$locations = $TRC_locServs->getAllLocations();
				$services = $TRC_locServs->getAllServices();

				// Determine which locations have services
				$locIDs = array();
				foreach( $services as $service ) {
					if( !in_array($service['locid'], $locIDs) )
						$locIDs[] = $service['locid'];
				}
				unset( $service );
				foreach( $locations as &$location ) {
					if( in_array($location['ID'], $locIDs) )
						$location['hasService'] = 1;
					else
						$location['hasService'] = 0;
				}
				unset( $location );
	
				$dayOfWeek = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
				foreach( $services as &$service ) {
					$service['time'] = $dayOfWeek[$service['dayofweek']]." ".formatTimeStr( $service['hour'], $service['minute'] );
				}

				$smarty->assign('locations', $locations);
				$smarty->assign('services', $services);

				$smarty->display('locationservices.tpl');
				break;
		}
		break;

	case 'newsevents':
		$TRC_cal = new TRC_calendar();
		$TRC_news = new TRC_news();

		switch( $sub ) {
			case 'trblog':
				$smarty->display('construction.tpl');
				break;
			case 'news':
				// Get all news items
				$news = $TRC_news->getAllNews();
				foreach( $news as &$n ) {
					$n['postdate'] = formatDateStr($n['postdate']);
				}
				$smarty->assign('news', $news);
				
				if( isset($_GET['nid']) )
					$smarty->assign('nid', $_GET['nid']);
				else
					if(count($news))
						$smarty->assign('nid', $news[0]['ID']);
					else
						$smarty->assign('nid', '');
				
				$smarty->display('news.tpl');
				break;
			case 'events':
				// Get upcomming callendar events
				$events = $TRC_cal->getAllFutureEvents();
				foreach( $events as &$event ) {
					$event['date'] = formatDateStr($event['date']);
					$event['time'] = formatTimeStr( $event['hour'], $event['minute'] );
				}
				$smarty->assign('events', $events);
				
				if( isset($_GET['eid']) )
					$smarty->assign('eid', $_GET['eid']);
				else
					$smarty->assign('eid', $events[0]['ID']);
				
				$smarty->display('events.tpl');
				break;
			default:
				// Get upcomming callendar events
				$events = $TRC_cal->getAllFutureEvents();
				foreach( $events as &$event ) {
					$event['postdate'] = formatDateStr($event['date']);
					$event['time'] = formatTimeStr( $event['hour'], $event['minute'] );
				}
				$smarty->assign('events', $events);
	
				// Get all news items
				$news = $TRC_news->getAllNews();
				foreach( $news as &$n ) {
					$n['postdate'] = formatDateStr($n['postdate']);
				}
				$smarty->assign('news', $news);

				$smarty->display('newsevents.tpl');
				break;
		}
		break;

	case 'giving':
		$TRC_info = new TRC_info();

		$info = $TRC_info->getSpecItem('giving');
		$smarty->assign('info', $info);
		$smarty->display('giving.tpl');
		break;

	case 'footer':
		switch( $sub ) {
			case 'contactus':
				$smarty->display('contactus.tpl');
				break;
			case 'sitemap':
				$smarty->display('construction.tpl');
				break;
		}
		break;

	case 'login':
		if( isset($_GET['msg']) ) {
			if( $_GET['msg'] == 'bad' )
				$smarty->assign('msg', 'bad');
			elseif( $_GET['msg'] == 'redir' )
				$smarty->assign('msg', 'redir');
			else
				$smarty->assign('msg', 0);

			unset($_GET['msg']);
		}
		else
			$smarty->assign('msg', 0);

		$smarty->display('login.tpl');
		break;

	case 'home':
		include('home.php');
		break;
	default:
		$smarty->display('index.tpl');
}

?>
