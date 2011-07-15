<?php

include('../libs/trcToolkit.php');
include('../models/class.models.TRC_locationServices.php');

$trc_locServs = new TRC_locationServices();
$locations = $trc_locServs->getAllLocations();
$services = $trc_locServs->getAllServices();

// Determine which locations have services
$locIDs = array();
foreach( $services as $service ) {
	if( !in_array($service['locid'], $locIDs) )
		$locIDs[] = $service['locid'];
}
unset( $service );
foreach( $locations as &$location ) {
	if( in_array($location['ID'], $locIDs) )
		$location['hasService'] = 1;
	else
		$location['hasService'] = 0;
}
unset( $location );

$dayOfWeek = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
foreach( $services as &$service ) {
	$service['time'] = $dayOfWeek[$service['dayofweek']]." ".formatTimeStr( $service['hour'], $service['minute'] );
}
unset($service);

print'
	<span class="head" style="margin-bottom:20px;">Services</span>';
	foreach( $locations as $location ) {
		print '
		<span class="title">'.$location['name'].'</span>';
		if( $location['hasService'] ) {
			foreach( $services as $service ) {
				if( $service['locid'] == $location['ID'] ) {
					print '<span class="summary">'.$service['time'].'</span>';
				}
			}
		}
		else {
			print '<span class="summary">No Services</span>';
		}
		print '<br />';
	}
	print '
	<div id="admin_serviceForm" style="position:absolute;display:none;"></div>
	<a class="addButton" onclick="popUpWindow(\'adminServs\', \'admin_serviceForm\', \'0\');">+<span>Manage Services!</span></a>';

?>
