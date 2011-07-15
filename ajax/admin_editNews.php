<?php

session_start();

if( !isset($_SESSION['admin']) ){
	echo '-1';
	exit;
}

if( !isset($_GET['id'], $_GET['title']) || !isset($_GET['summary']) || !isset($_GET['news']) ) {
	echo '0';
	exit;
}

include('../models/class.models.TRC_news.php');
$trc_news = new TRC_news();

if( $trc_news->editNews($_GET['id'], $_GET['title'], $_GET['summary'], $_GET['news'], $_SESSION['admin']) )
	return '1';
else return '2';
?>
