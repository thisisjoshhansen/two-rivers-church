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

include($_SERVER['DOCUMENT_ROOT'].'/models/class.models.TRC_doctrine.php');
$trc_doc = new TRC_doctrine();

if( $trc_doc->deleteDoctrine($_POST['id']) )
	echo '1';
else echo '2';
?>
