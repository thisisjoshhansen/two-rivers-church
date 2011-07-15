<?php

session_start();

if( !isset($_SESSION['admin']) ){
	echo '-1';
	exit;
}

if( !isset($_POST['id']) ) {
	echo '0';
	exit;
}

include('../models/class.models.TRC_calendar.php');
$trc_cal = new TRC_calendar();

if( $trc_cal->deleteEvent($_POST['id']) )
	echo '1';
else echo '2';
?>
