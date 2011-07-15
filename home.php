<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

# Get the section
if( isset($_GET['sub']) )
	$section = $_GET['sub'];
else
	$section = 'admin_locsservs';
$smarty->assign('section', $section);

# Validate that the user is signed in
if( !isset($_SESSION['admin']) || $_SESSION['admin'] == '' ) {
	$_SESSION['redir'] = '/?page=home';
	if( isset($section) ) {
		$_SESSION['redir'] .= '&sub='.$section;
	}

	header("Location: /?page=login&msg=redir");
}

include('models/class.models.USERS_personal.php');
$user = new USERS_personal();

$TRC_cal = new TRC_calendar();
$TRC_news = new TRC_news();

$first = $user->getFirst($_SESSION['uid']);
$last = $user->getLast($_SESSION['uid']);
$userName = $first." ".$last;

$smarty->assign('userName', $userName);

switch( $section ) {
	case null:
		break;

	case 'admin_locsservs':
		$trc_locServs = new TRC_locationServices();
		$locations = $trc_locServs->getAllLocations();
		$services = $trc_locServs->getAllServices();

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
		
		break;

	case 'admin_newsevents':
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
		break;

	case 'admin_docvals':
		$TRC_doctrine = new TRC_doctrine();
		$TRC_corevals = new TRC_corevals();

		$doctrine = $TRC_doctrine->getAllDoctrine();
		$corevals = $TRC_corevals->getAllVals();

		$smarty->assign('doctrine', $doctrine);
		$smarty->assign('corevals', $corevals);
		break;

	default:
		
}
	
$smarty->display('home.tpl');

?>
