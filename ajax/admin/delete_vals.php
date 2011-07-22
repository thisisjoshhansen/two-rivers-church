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

include($_SERVER['DOCUMENT_ROOT'].'/models/class.models.TRC_corevalues.php');
$trc_vals = new TRC_corevals();

if( $trc_vals->deleteValue($_POST['id']) )
	echo '1';
else echo '2';
?>
