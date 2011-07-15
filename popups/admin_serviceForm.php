<?php

include('../libs/trcToolkit.php');

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

$locs = $trc_locservs->getAllLocations();
$servs = $trc_locservs->getAllServices();

// Determine which locations have services
$locIDs = array();
foreach( $servs as $serv ) {
	if( !in_array($serv['locid'], $locIDs) )
		$locIDs[] = $serv['locid'];
}
unset( $serv );
foreach( $locs as &$loc ) {
	if( in_array($loc['ID'], $locIDs) )
		$loc['hasService'] = 1;
	else
		$loc['hasService'] = 0;
}
unset( $loc );

$dayOfWeek = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
foreach( $servs as &$serv ) {
	$serv['time'] = $dayOfWeek[$serv['dayofweek']]." ".formatTimeStr( $serv['hour'], $serv['minute'] );
}
unset($serv);

print'
<div style="padding:20px;border:2px #333 solid;background:#1E232F;float:left;" onclick="bringToFront(\'admin_serviceForm\');">
	<span style="display:block;margin:0px auto 10px auto;text-align:center;color:#FFF;font-size:1.4em;font-weight:bold;margin-bottom:30px;">
	Service Management:</span>

	<div style="background:#FFF;border:1px #000 inset;float:left;padding:12px;font-size:.8em;color:#000;margin-bottom:10px;">
		<span style="float:left;font-weight:bold;font-size:1.1em;margin-bottom:10px;width:226px;">Location:</span>
		<form id="radioLocForm">';
			foreach( $locs as $loc ) {
				print '
				<div style="clear:both;height:4px;"></div>
				<input type="radio" name="servLocation" onChange="hideDiv(\'loc\\.serv\\[0\\]\');hideDiv(\'addService\');';
					foreach( $locs as $l ) {
						print 'hideDiv(\'loc\\.serv\\['.$l['ID'].'\\]\');';
					} print '
					showDiv(\'loc\\.serv\\['.$loc['ID'].'\\]\');" value="'.$loc['ID'].'" style="float:left;">'.$loc['name'].'
				</input>';
			}
			unset($loc);unset($l);
			print'
		</form>
		<div style="clear:both;height:4px;"></div>
	</div>

	<div style="clear:both;height:4px;"></div>

	<div style="background:#FFF;border:1px #000 inset;float:left;padding:12px;font-size:.8em;color:#000;margin-bottom:10px;">
		<span style="float:left;font-weight:bold;font-size:1.1em;margin-bottom:10px;width:226px;">Services:</span>

		<div id="loc.serv[0]" style="clear:both;float:left;color:#888;">
			<span>Please select a location...</span>
		</div>';

		foreach($locs as $loc) {
			print'
			<div id="loc.serv['.$loc['ID'].']" style="clear:both;float:left;display:none;">
			<form id="'.$loc['ID'].':servCheckBoxs">';
				if( $loc['hasService'] ) {
					foreach( $servs as $serv ) {
						if( $serv['locid'] == $loc['ID'] ) {
							print '<input type="checkbox" name="'.$loc['name'].':serv'.'" value="'.$serv['ID'].'">'.$serv['time'].'</input><br />';
						}
					}
					unset($serv);
					print '
					<div id="deleteAddServs">
						<a class="deleteButton" onclick="admin_deleteService(\''.$loc['ID'].':servCheckBoxs\')" style="float:left;">+<span>Delete Service!</span></a>';
				} else {
					print '
					<span style="color:#888;float:left;">There are no services for this location...</span>				
					<div id="deleteAddServs">';
				}
					print'

						<a class="addButton" onclick="toggleDiv(\'addService\')" style="float:right;margin:0 0 0 10px;">+<span>Add Service!</span></a>
					</div>
				</form>
			</div>';
		}
		unset($loc);
		print'
	</div>

	<div id="addService" style="clear:both;float:left;display:none;">
		<form onsubmit="admin_addService(this);return false;">
			<div style="width:200px;background:#FFF;border:1px #FFF inset;float:left;font-size:.8em;color:#000;padding:12px;width:226px;margin-top:5px;">
				<span style="float:left;font-weight:bold;font-size:1.1em;margin-bottom:10px;">Add Service:</span>

				<div style="clear:both"></div>

				<span style="float:left;margin-right:4px;">
					Day:
						<select name="servDay" style="font-size:.8em;">
							<option value="0" SELECTED>Sunday</option>
							<option value="1">Monday</option>
							<option value="2">Tuesday</option>
							<option value="3">Wednesday</option>
							<option value="4">Thursday</option>
							<option value="5">Friday</option>
							<option value="6">Saturday</option>
						</select>
				</span>

				<div style="clear:both"></div>

				<span style="float:left;margin:12px 4px 0px 0px;">
					Hour:
						<select name="servHour" style="font-size:.8em;">
							<option value="7" SELECTED>7 am</option>
							<option value="8">8 am</option>
							<option value="9">9 am</option>
							<option value="10">10 am</option>
							<option value="11">11 am</option>
							<option value="12">12 pm</option>
							<option value="13">1 pm</option>
							<option value="14">2 pm</option>
							<option value="15">3 pm</option>
							<option value="16">4 pm</option>
							<option value="17">5 pm</option>
							<option value="18">6 pm</option>
							<option value="19">7 pm</option>
							<option value="20">8 pm</option>
							<option value="21">9 pm</option>
						</select>

					Minute:
						<select name="servMin" style="font-size:.8em;">
							<option value="0" SELECTED>00</option>
							<option value="5">05</option>
							<option value="10">10</option>
							<option value="15">15</option>
							<option value="20">20</option>
							<option value="25">25</option>
							<option value="30">30</option>
							<option value="35">35</option>
							<option value="40">40</option>
							<option value="45">45</option>
							<option value="50">50</option>
							<option value="55">55</option>
						</select>
				</span>

				<div style="clear:both"></div>

				<div style="float:left;width:100%;text-align:center;margin-top:20px;">
					<input type="submit" value="Add Service!"/>
				</div>
			</div>
		</form>
	</div>

	<div style="clear:both;float:left;width:100%;text-align:right;margin-top:20px;">
		<a class="closeWin" onclick="closeWindow(\'admin_serviceForm\');">[close]</a>
	</div>
</div>
';

?>
