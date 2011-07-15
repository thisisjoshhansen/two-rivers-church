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

include('../models/class.models.TRC_calendar.php');
$trc_cal = new TRC_calendar();

$id = $_POST['id'];

if( $id != '0' )
	$curEvent = $trc_cal->getEvent($id);
else
	$curEvent = null;

print '
<div class="popupcontainer">
	<span class="popuphead">';
	if($curEvent) print $curEvent['title'];
	else print 'Add Event';
	print '</span>

	<form id="eventForm" onsubmit="';
	if( $curEvent ) print 'admin_editEvent('.$curEvent['ID'].');';
	else print 'admin_addEvent();';
	print 'return false;">

	<table>
	<tr>	<td class="popupitem">
		<span>Title:</span>
		</td><td>
		<textarea id="title" name="title" class="popuptext" style="height:30px;">';
			if($curEvent) print $curEvent['title'];
		print '</textarea>
		</td>
	</tr>
	<tr>	<td class="popupitem">
		<span style="margin:0px 10px 10px 0px;">Location:</span>
		</td><td valign="top">
		<textarea id="location" name="location" class="popuptext" style="height:30px;">';
			if($curEvent) print $curEvent['location'];
		print '</textarea>
		</td>
	</tr>
	<tr>	<td class="popupitem">
		<span style="margin:0px 10px 10px 0px;">Summary:</span>
		</td><td valign="top">
		<textarea id="summary" name="summary" class="popuptext" style="height:100px;">';
		if($curEvent) print $curEvent['summary'];
		print '</textarea>
		</td>
	</tr>
	<tr>	<td class="popupitem">
		<span style="margin:0px 10px 10px 0px;">Description:</span>
		</td><td valign="top">
		<textarea id="description" name="description" class="popuptext" style="height:200px;">';
			if($curEvent) print $curEvent['description'];
		print '</textarea>
		</td>
	</tr>

	<tr>	<td class="popupitem">

		<script>
		$(function() {
			$( "#datepicker" ).datepicker({
				showOtherMonths: true,
				selectOtherMonths: true,
				dateFormat: "yy-mm-dd",
				showAnim: "fadeIn"
			});
		});
		</script>

		<span style="margin:0px 10px 10px 0px;">Date:</span>
		</td><td valign="top">
			<input type="text" id="datepicker" name="date" style="width:100px;"';
			if($curEvent) print ' value="'.$curEvent['date'].'"';
			print ' />
		</td>
	</tr>

	<tr>	<td class="popupitem">
		<span style="margin:0px 10px 10px 0px;">Time:</span>
		</td><td valign="top">
		<select id="hour" name="hour">';
			for($i=1; $i<=12; $i++) {
				print '<option value="'.$i.'"';
				if(	( $curEvent['hour'] > 12 && ($curEvent['hour']-12)==$i ) ||
					( $curEvent['hour'] <= 12 && $curEvent['hour']==$i ) ||
					( $curEvent['hour'] == 0 && $i==12 ) )
					print ' selected="selected"';
				print '>'.$i.'</option>';
			}
		print'
		</select>
		<b> : </b>
		<select id="minute" name="minute">';
			for($i=0; $i<=59; $i++) {
				print '<option value="'.$i.'"';
				if( $curEvent['minute']==$i )
					print ' selected="selected"';
				if( $i < 10 )
					print '>0'.$i;
				else
					print '>'.$i;
				print '</option>';
			}
		print'
		</select>

		<select id="ampm" name="ampm" style="margin-left:12px;">
			<option value="am"';
				if($curEvent['hour']<12) print ' selected="selected"';
				print '>am</option>
			<option value="pm"';
				if($curEvent['hour']>=12) print ' selected="selected"';
				print '>pm</option>			
		</select>
		</td>
	</tr>

	<tr>	<td colspan="2" style="text-align:center;">
		<input type="submit" class="popupsubmit" value="Submit!" />
		</td>
	</tr>
	</table>

	</form>

	<div style="width:100%;text-align:right;margin-top:20px;padding:0px 10px 10px 0px;">
		<a class="closeWin" onclick="closeWindow(\'admin_eventsForm\');">[close]</a>
	</div>
</div>
';

?>
