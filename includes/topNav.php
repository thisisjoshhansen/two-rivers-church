<?php
	/*	PACKAGE:	two rivers church
	*	DATE:		3 OCT 2010
	*	Purpose:	builds the elements of the topNavBar. to add a tab, just add the arrays
	*				for titles and links and it will dynamically update the bar.
	*	NOTES:		i used absolute possitioning in topNavBar.css to arrange the bar
	*				so you will also have to rework the pixle possitioning
	*				umm...the building part is easy enough with the arrays, but if you are
	*				needing to modify the php at the bottom that actually builds the display
	*				i am sorry and feel bad for you. it is...complicated... 
	*/
	$page = '';
	$sub = '';
	if( !empty($_GET['page']) ) $page = $_GET['page'];
	if( !empty($_GET['sub']) ) $sub = $_GET['sub'];
	$smarty->assign('page', $page);
	$smarty->assign('sub', $sub);

	$smarty->assign('topNavObjs',
		array(
			array(
				'title'	=> 'i am new here',
				'link'	=> 'newhere',
				'subs'	=> array()
			),
			array(
				'title'	=> 'who we are',
				'link'	=> 'whoweare',
				'subs'	=> array(	'what we believe'	=> 'doctrine',
								'core values'		=> 'corevalues',
								'ministries'		=> 'ministries',
								'leadership'		=> 'leadership')
			),
			array(	
				'title'	=> 'locations & services',
				'link'	=> 'locationservices',
				'subs'	=> array(	'get directions'		=> 'directions',
								'upcomming sermons'		=> 'commingsermons' )
			),
			array(
				'title' 	=> 'news & events',
				'link'	=> 'newsevents',
				'subs'	=> array(	'two rivers blog'	=> 'trblog',
								'latest news'		=> 'news',
								'upcomming events'	=> 'events' ),
			),
			array(
				'title' 	=> 'giving',
				'link'	=> 'giving',
				'subs'	=> array()
			),
		)
	);
?>
