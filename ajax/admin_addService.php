<?php

session_start();

if( !isset($_SESSION['admin']) ){
	echo '-1';
	exit;
}

if( !isset($_GET['location']) || !isset($_GET['day']) || !isset($_GET['hour']) || !isset($_GET['min']) ) {
	echo '0';
	exit;
}

include('../models/class.models.TRC_locationServices.php');
$trc_locservs = new TRC_locationServices();

if( $trc_locservs->addService($_GET['location'], $_GET['day'], $_GET['hour'], $_GET['min']) )
	echo '1';
else echo '2';
?>
