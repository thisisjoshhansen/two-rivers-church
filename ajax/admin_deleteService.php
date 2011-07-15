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

$servIDs = explode(":", $_POST['id']);

if( count($servIDs) > 1) {
	if( $trc_locservs->deleteServices($servIDs) )
		echo '1';
	else echo '2';
}
else {
	if( $trc_locservs->deleteService($servIDs[0]) )
		echo '1';
	else echo '2';
}

?>
