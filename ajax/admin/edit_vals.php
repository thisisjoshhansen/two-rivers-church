<?php

session_start();

if( !isset($_SESSION['admin']) ){
	echo '-1';
	exit;
}

if( !isset($_GET['id'], $_GET['title']) || !isset($_GET['summary']) || !isset($_GET['description']) ) {
	echo '0';
	exit;
}

include($_SERVER['DOCUMENT_ROOT'].'/models/class.models.TRC_corevalues.php');
$trc_vals = new TRC_corevals();

if( $trc_vals->editValue($_GET['id'], $_GET['title'], $_GET['summary'], $_GET['description'] ) )
	echo '1';
else echo '2';
?>
