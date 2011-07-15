<?php

include('../models/class.models.TRC_calendar.php');
include('../libs/trcToolkit.php');
$TRC_cal = new TRC_calendar();

// Get upcomming callendar events
$events = $TRC_cal->getAllFutureEvents();
foreach( $events as &$event ) {
	$event['postdate'] = formatDateStr($event['date']);
	$event['time'] = formatTimeStr( $event['hour'], $event['minute'] );
}
unset($event);

print '
	<span class="head" style="margin-bottom:20px;">Events</span>';
	if( $events ) {
		foreach( $events as $event ) {
			print '
			<span class="date" style="margin-top:1.5em;">'.$event['date'].' @ '.$event['time'].'</span>
			<span class="title" style="margin-top:0;"><a href="/?page=newsevents&sub=events&eid='.$event['ID'].'">'.$event['title'].'</a></span>
			<span class="summary">'.$event['summary'].'</span>
			<a class="editButton" onclick="popUpWindow(\'adminEvents\', \'admin_eventsForm\', '.$event['ID'].');">+<span>Edit!</span></a>
			<a class="deleteButton" onclick="admin_deleteEvent('.$event['ID'].');">+<span>Delete!</span></a><br />';
		}
	}
	else {
		print '
		<br />
		<span class="summary">No upcomming events</span>';
	}
	print '
	<div id="admin_eventsForm" style="position:absolute;display:none;"></div>
	<a class="addButton" onclick="popUpWindow(\'adminEvents\', \'admin_eventsForm\', \'0\');">+<span>Add Event!</span></a>';
?>
