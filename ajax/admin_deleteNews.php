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

include('../models/class.models.TRC_news.php');
$trc_news = new TRC_news();

if( $trc_news->deleteNews($_POST['id']) )
	echo '1';
else echo '2';
?>
