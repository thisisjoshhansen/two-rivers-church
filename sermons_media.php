<?php

require_once('vimeo/vimeo.php');
$vimeo = new phpVimeo('53a43bad017df9a37fb1ab3c2d7b1533', 'ddf38cebad92291f');
$vimeo->setToken('77ea11236c268d6d6535703df0eb9a4e','c84f5e9266b8d6ae25021c2e9fff68accd63728a');

// Get the info from vimeo to build an array with with all the series and their sermons
$result = $vimeo->call('vimeo.albums.getAll', array('sort' => 'newest'));
$series_array = $result->albums->album;
foreach($series_array as &$series) {
	$result = $vimeo->call('vimeo.albums.getVideos', array('album_id' => $series->id, 'full_response' => true));
	$series->sermons = $result->videos->video;
}

//print '<pre>';
//print_r($series_array[0]);
//print '</pre><br /><br /><br />';
//exit;

// Get the sub page if there is one
$sub = isset($_GET['sub']) ? $_GET['sub'] : null;
switch( $sub ) {
	case 'currentseries':
		break;
	case 'sermons':
		$smarty->display('construction.tpl');exit;
		break;
	case 'media':
		$smarty->display('construction.tpl');exit;
		break;
	default:

}

$smarty->assign('series_array', $series_array);
$smarty->assign('sub', $sub);
$smarty->display('sermonmedia.tpl');

?>
