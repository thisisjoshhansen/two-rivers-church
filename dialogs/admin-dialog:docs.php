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

include($_SERVER['DOCUMENT_ROOT'].'/models/class.models.TRC_doctrine.php');
$trc_doctrine = new TRC_doctrine();

$id = $_POST['id'];

if( $id != '0' )
	$docItem = $trc_doctrine->getDoctrine($id);
else
	$docItem = null;
//print_r($docItem);
print '
	<span id="admin-dialog:docs-title" style="display:none">';
		if($docItem) print $docItem['title'];
		else print 'New TRC Doctrine';
		print '
	</span>

	<p class="validateTips">**All form fields are required.</p>

	<form id="docsForm">
	<fieldset>
		<label for="title">Title</label>
		<textarea name="title" id="title" class="text ui-widget-content ui-corner-all" style="height:2.2em;">';
			if( $docItem ) print $docItem['title'];
			print
		'</textarea>
		<label for="summary">Summary</label>
		<textarea name="summary" id="summary" value="" class="text ui-widget-content ui-corner-all" style="height:6.6em;">';
			if( $docItem ) print $docItem['summary'];
			print
		'</textarea>
		<label for="description">Description</label>
		<textarea name="description" id="description" value="" class="text ui-widget-content ui-corner-all" style="height:10em;">';
			if( $docItem ) print $docItem['description'];
			print
		'</textarea>
		<input name="id" id="id" style="display:none" value="'.$id.'" />
	</fieldset>
	</form>

';

?>
