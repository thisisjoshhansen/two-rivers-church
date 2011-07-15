<?php

include('../libs/trcToolkit.php');
include('../models/class.models.TRC_news.php');
$TRC_news = new TRC_news();

// Get all news items
$news = $TRC_news->getAllNews();
foreach( $news as &$n ) {
	$n['postdate'] = formatDateStr($n['postdate']);
}
unset($n);

print '
	<span class="head" style="margin-bottom:20px;">News</span>';
	if( $news ) {
		foreach( $news as $n ) {
			print '
			<span class="date" style="margin-top:.5em;">'.$n['postdate'].'</span>
			<span class="title" style="margin-top:0;"><a href="/?page=newsevents&sub=news&nid='.$n['ID'].'">'.$n['title'].'</a></span>
			<span class="summary">'.$n['summary'].'</span>
			<a class="editButton" onclick="popUpWindow(\'adminNews\', \'admin_newsForm\', '.$n['ID'].');">+<span>Edit!</span></a>
			<a class="deleteButton" onclick="admin_deleteNews('.$n['ID'].');">+<span>Delete!</span></a><br />';
		}
	}
	else {
		print '
		<br />
		<span class="summary">There is no news!</span>';
	}
	print '
	<div id="admin_newsForm" style="position:absolute;display:none;"></div>
	<a class="addButton" onclick="popUpWindow(\'adminNews\', \'admin_newsForm\', \'0\');">+<span>Add News Item!</span></a><br />
';
?>
