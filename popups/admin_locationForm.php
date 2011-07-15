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

include('../models/class.models.TRC_locationServices.php');
$trc_locservs = new TRC_locationServices();

$id = $_POST['id'];

if( $id != '0' ) {
	$loc = $trc_locservs->getLocation($id);
}

print'
<div style="width:300px;padding:8px;border:2px #333 
solid;background:#1E232F;" 
onclick="bringToFront(\'admin_locationForm\');">
	<span style="display:block;margin:10px auto;text-align:center;color:#FFF;font-size:1.4em;font-weight:bold;margin-bottom:30px;">';
	if( $id == '0' ) print 'Add Location:';
	else print $loc['name'].':';
	print '</span>

	<form id="locForm" onsubmit="';
	if( $id == '0' ) print 'admin_addLocation();';
	else print 'admin_editLocation('.$loc['ID'].');';
	print 'return false;">
	<table>
		<tr>
			<td>Name:</td>
			<td colspan="3"><input name="locname" type="text" style="width:240px;height:1.7em;padding:.2em;margin:0px 0px 10px 0px;" ';
			if( $id != 0 ) print 'value="'.$loc['name'].'"';
			print '/><br /></td>
		</tr>
		<tr>
			<td>Street:</td>
			<td colspan="3"><input name="street" type="text" style="width:240px;height:1.7em;padding:.2em;margin:0px 0px 10px 0px;" ';
			if( $id != 0 ) print 'value="'.$loc['street'].'"';
			print '/><br /></td>
		</tr>
		<tr>
			<td>City:</td>
			<td colspan="3"><input name="city" type="text" style="width:240px;height:1.7em;padding:.2em;margin:0px 0px 10px 0px;" ';
			if( $id != 0 ) print 'value="'.$loc['city'].'"';
			print '/><br /></td>
		</tr>
		<tr>
			<td>State:</td>
			<td><input name="state" type="text" style="width:100px;height:1.7em;padding:.2em;margin:0px 0px 10px 0px;" ';
			if( $id != 0 ) print 'value="'.$loc['state'].'"';
			print '/></td>

			<td><span style="padding-left:4px;">Zip:</span></td>
			<td><input name="zip" type="text" style="width:100px;height:1.7em;padding:.2em;margin:0px 0px 10px 0px;" ';
			if( $id != 0 ) print 'value="'.$loc['zip'].'"';
			print '/></td>
		</tr>
		<tr>
			<td colspan="4" style="text-align:center;"><input type="submit" value="Submit!" class="popupsubmit"/></td>
		</tr>
	</table>
	</form>

	<div style="width:100%;text-align:right;margin-top:20px;padding:0px 10px 10px 0px;">
		<a class="closeWin" onclick="closeWindow(\'admin_locationForm\');">[close]</a>
	</div>
</div>';

?>
