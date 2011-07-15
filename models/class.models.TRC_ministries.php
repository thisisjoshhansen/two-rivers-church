<?php

require_once('class.models.php');

class TRC_ministries extends models {

	function getAllMinistries() {
		$query = "SELECT * FROM tr_ministries ORDER BY title ASC";
		$result = $this->mysqli->query($query) or die(mysql_error());

		while($row = $result->fetch_assoc()) {
			$min_array[] = $row;
		}

		$ministries = array();
		foreach( $min_array as $min ) {
			$ministries[] = array(	'ID'			=>	$min['ID'],
								'title'		=>	stripslashes($min['title']),
								'description'	=>	stripslashes($min['description']),
								'summary'		=>	stripslashes($min['summary']));
		}

		return $ministries;
	}

}
