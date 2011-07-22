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

include($_SERVER['DOCUMENT_ROOT'].'/models/class.models.TRC_corevalues.php');
$trc_vals = new TRC_corevals();

$id = $_POST['id'];

if( $id != '0' )
	$valItem = $trc_vals->getValue($id);
else
	$valItem = null;

print '
	<span id="admin-dialog:vals-title" style="display:none">';
		if($valItem) print $valItem['title'];
		else print 'New TRC Core Value';
		print '
	</span>

	<p class="validateTips">**All form fields are required.</p>

	<form id="valsForm">
	<fieldset>
		<label for="title">Title</label>
		<textarea name="title" id="title" class="text ui-widget-content ui-corner-all" style="height:2.2em;">';
			if( $valItem ) print $valItem['title'];
			print
		'</textarea>
		<label for="summary">Summary</label>
		<textarea name="summary" id="summary" value="" class="text ui-widget-content ui-corner-all" style="height:6.6em;">';
			if( $valItem ) print $valItem['summary'];
			print
		'</textarea>
		<label for="description">Description</label>
		<textarea name="description" id="description" value="" class="text ui-widget-content ui-corner-all" style="height:10em;">';
			if( $valItem ) print $valItem['description'];
			print
		'</textarea>
		<input name="id" id="id" style="display:none" value="'.$id.'" />
	</fieldset>
	</form>

';

?>
