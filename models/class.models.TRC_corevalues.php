<?php

require_once('class.models.php');

class TRC_corevals extends models {

	// GETTERS
	function getAllVals() {
		$query = "SELECT * FROM corevalues";
		$result = $this->mysqli->query($query) or die(mysql_error());

		while($row = $result->fetch_assoc()) {
			$vals_array[] = $row;
		}

		$vals = array();
		foreach( $vals_array as $val ) {
			$vals[] = array(	'ID'			=> $val['ID'],
							'title'		=> stripslashes($val['title']),
							'summary'		=> stripslashes($val['summary']),
							'description'	=> stripslashes($val['description']));
		}
		return $vals;
	}

}

?>
