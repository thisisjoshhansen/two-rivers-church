<?php

session_start();

if( !isset($_SESSION['admin']) ){
	echo '-1';
	exit;
}

if( !isset($_GET['id']) || !isset($_GET['title']) || !isset($_GET['summary']) || !isset($_GET['description']) || !isset($_GET['location']) || !isset($_GET['hour']) || !isset($_GET['minute']) || !isset($_GET['date']) ) {
	echo '0';
	exit;
}

include('../models/class.models.TRC_calendar.php');
$trc_cal = new TRC_calendar();

if( $trc_cal->editEvent($_GET['id'], $_GET['title'], $_GET['summary'], $_GET['description'], $_GET['location'], $_GET['hour'], $_GET['minute'], $_GET['date']) )
	echo '1';
else echo '2';
?>
