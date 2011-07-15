<?php

require_once('class.models.php');

class TRC_locationServices extends models {
	#############
	# LOCATIONS #
	#############
	function addLocation($name, $street, $city, $state, $zip) {
		$query = "INSERT INTO tr_locations (name, street, city, state, zip) 
				VALUES ('$name', '$street', '$city', '$state', '$zip')";

		if( $this->mysqli->query($query) )
			return 1;
		else return 0;
	}

	function deleteLocation($ID) {
		$query = "DELETE FROM tr_locations WHERE ID=$ID";

		if( $this->mysqli->query($query) )
			return 1;
		else return 0;
	}

	function editLocation($ID, $name, $street, $city, $state, $zip) {
		$query = "UPDATE tr_locations
				SET 	name='$name', 
					street='$street',
					city='$city',
					state='$state',
					zip='$zip'
				WHERE ID=$ID";

		if( $this->mysqli->query($query) )
			return 1;
		else return 0;
	}

	// GETTERS
	function getAllLocations() {
		$query = "SELECT * FROM tr_locations ORDER BY ID ASC";
		$result = $this->mysqli->query($query) or die(mysql_error());

		while($row = $result->fetch_assoc()) {
			$loc_array[] = $row;
		}

		$locations = array();
		foreach( $loc_array as $loc ) {
			$locations[] = array(	'ID' => $loc['ID'],
								'name' => stripslashes($loc['name']),
								'street' => stripslashes($loc['street']),
								'city' => $loc['city'],
								'state' => $loc['state'],
								'zip' => $loc['zip']);
		}

		return $locations;
	}

	function getLocation($id) {
		$query = "SELECT * FROM tr_locations WHERE ID=$id";
		$result = $this->mysqli->query($query) or die(mysql_error());

		while($row = $result->fetch_assoc()) {
			$loc_array[] = $row;
		}

		$locations = array();
		foreach( $loc_array as $loc ) {
			$locations = array(	'ID' => $loc['ID'],
							'name' => stripslashes($loc['name']),
							'street' => stripslashes($loc['street']),
							'city' => $loc['city'],
							'state' => $loc['state'],
							'zip' => $loc['zip']);
		}

		return $locations;
	}

	// SETTERS
	function setLocationName($ID, $name) {
	}



	############
	# SERVICES #
	############
	function addService($location, $day, $hour, $min) {
		$query = "INSERT INTO tr_services (locid, dayofweek, hour, minute) 
				VALUES ('$location', '$day', '$hour', '$min')";

		return $this->mysqli->query($query) or die(mysql_error());
	}

	function deleteService($ID) {
		$query = "DELETE FROM tr_services WHERE ID=$ID";
		return $this->mysqli->query($query) or die(mysql_error());
	}

	function deleteServices($IDarray) {
		$query = "DELETE FROM tr_services WHERE ID=".intval($IDarray[0]);
		for( $i=1; $i<count($IDarray); $i++) {
			$query .= " OR ID=".intval($IDarray[$i]);
		}

		return $this->mysqli->query($query) or die(mysql_error());
	}

	// GETTERS
	function getAllServices() {
		$query = "SELECT * FROM tr_services ORDER BY locID ASC, dayofweek ASC";
		$result = $this->mysqli->query($query) or die(mysql_error());

		while($row = $result->fetch_assoc()) {
			$serv_array[] = $row;
		}

		$services = array();
		foreach( $serv_array as $serv ) {
			$services[] = array('ID' => stripslashes($serv['ID']),
							'locid' => stripslashes($serv['locid']),
							'dayofweek' => stripslashes($serv['dayofweek']),
							'hour' => stripslashes($serv['hour']),
							'minute' => stripslashes($serv['minute']));
		}

		return $services;
	}

	function getService($id) {
		$query = "SELECT * FROM tr_services WHERE ID=$id";
		$result = $this->mysqli->query($query) or die(mysql_error());

		while($row = $result->fetch_assoc()) {
			$serv_array[] = $row;
		}

		$service = array();
		foreach( $serv_array as $serv ) {
			$service = array('ID' => $serv['ID'],
							'locid' => $serv['locid'],
							'dayofweek' => $serv['dayofweek'],
							'hour' => $serv['hour'],
							'minute' => $serv['minute']);
		}

		return $service;
	}

	// SETTERS
	function setServiceTime($ID, $name) {
	}
}

?>
