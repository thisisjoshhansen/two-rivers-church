<?php

session_start();

if( !isset($_SESSION['admin']) ){
	echo '-1';
	exit;
}

if( !isset($_POST['id']) ){
	echo '0';
	exit;
}

include('../models/class.models.TRC_news.php');
$trc_news = new TRC_news();

$id = $_POST['id'];

if( $id != '0' )
	$newsItem = $trc_news->getNews($id);
else
	$newsItem = null;

print '
<div class="popupcontainer" style="width:450px;" 
onclick="bringToFront(\'admin_newsForm\');">
	<span class="popuphead">';
	if($newsItem) print $newsItem['title'];
	else print 'Add News';
	print '</span>

	<form id="newsForm" onsubmit="';
	if( $newsItem ) print 'admin_editNews('.$newsItem['ID'].');';
	else print 'admin_addNews();';
	print 'return false;">

	<table>
	<tr>	<td class="popupitem">
		<span>Title:</span>
		</td><td>
		<textarea name="title" class="popuptext" style="height:30px;">';
			if($newsItem) print $newsItem['title'];
		print '</textarea>
		</td>
	</tr>
	<tr>	<td class="popupitem">
		<span style="margin:0px 10px 10px 0px;">Summary:</span>
		</td><td valign="top">
		<textarea name="summary" class="popuptext" style="height:100px;">';
		if($newsItem) print $newsItem['summary'];
		print '</textarea>
		</td>
	</tr>
	<tr>	<td class="popupitem">
		<span style="margin:0px 10px 10px 0px;">Description:</span>
		</td><td valign="top">
		<textarea name="news" class="popuptext" style="height:200px;">';
			if($newsItem) print $newsItem['news'];
		print '</textarea>
		</td>
	</tr>
	<tr>	<td colspan="2" style="text-align:center;">
		<input type="submit" class="popupsubmit" value="Submit!" />
		</td>
	</tr>
	</table>

	<div style="width:100%;text-align:right;margin-top:20px;padding:0px 10px 10px 0px;">
		<a class="closeWin" onclick="closeWindow(\'admin_newsForm\');">[close]</a>
	</div>
	</form>
</div>
';

?>
