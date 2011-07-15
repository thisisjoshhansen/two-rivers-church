<?php

session_start();

if( !isset($_SESSION['admin']) ){
	echo '-1';
	exit;
}

if( !isset($_GET['id']) || !isset($_GET['locname']) || !isset($_GET['street']) || !isset($_GET['city']) || !isset($_GET['state']) || !isset($_GET['zip']) ) {
	echo '0';
	exit;
}

include('../models/class.models.TRC_locationServices.php');
$trc_locservs = new TRC_locationServices();

if( $trc_locservs->editLocation($_GET['id'], $_GET['locname'], $_GET['street'], $_GET['city'], $_GET['state'], $_GET['zip']) ) {
	echo '1';
	exit;
}
else echo '2';
?>
