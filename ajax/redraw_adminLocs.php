<?php

include('../models/class.models.TRC_locationServices.php');
$trc_locservs = new TRC_locationServices();
$locations = $trc_locservs->getAllLocations();

print '
<span class="head" style="margin-bottom:20px;">Locations</span>';
foreach( $locations as $location ) {
	print '
	<span class="title">'.$location['name'].'</span>
	<span class="summary">'.
		$location['street'].'<br />'.
		$location['city'].', '.$location['state'].' '.$location['zip']
	.'</span>
	<a class="editButton" onclick="popUpWindow(\'adminLocs\', \'admin_locationForm\', '.$location['ID'].');">+<span>Edit Location!</span></a>
	<a class="deleteButton" onclick="admin_deleteLocation('.$location['ID'].');">+<span>Delete Location!</span></a><br />
	<br />';
}
print '
<div id="admin_locationForm" style="position:absolute;display:none;"></div>
<a class="addButton" onclick="popUpWindow(\'adminLocs\', \'admin_locationForm\', \'0\');">+<span>Add Location!</span></a><br />
';

?>
