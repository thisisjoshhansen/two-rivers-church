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

include('../models/class.models.TRC_locationServices.php');
$trc_locservs = new TRC_locationServices();

if( $trc_locservs->deleteLocation($_POST['id']) )
	echo '1';
else echo '2';
?>
