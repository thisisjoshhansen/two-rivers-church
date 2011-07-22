<?php

require_once('class.models.php');

class TRC_corevals extends models {

	// GETTERS
	function getAllVals() {
		$query = "SELECT * FROM corevalues ORDER BY ID ASC";
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

	function getValue($ID) {
		$query = "SELECT * FROM corevalues WHERE ID=$ID";
		$result = $this->mysqli->query($query) or die(mysql_error());

		$news = $result->fetch_assoc();

		return $news;
	}

	function getValByTitle($title) {
		$query = "SELECT * FROM corevalues WHERE title='$title'";
		$result = $this->mysqli->query($query) or die(mysql_error());

		$val = $result->fetch_assoc();

		return $val;
	}

	function getMinVal() {
		$query = "SELECT MIN(ID) FROM corevalues";
		$result = $this->mysqli->query($query) or die(mysql_error());

		$minVal = $result->fetch_assoc();

		return $minVal['MIN(ID)'];
	}

	function addValue($title, $summary, $description) {
		$query = "INSERT INTO corevalues (title, summary, description) 
				VALUES ('$title', '$summary', '$description')";

		if( $this->mysqli->query($query) )
			return 1;
		else return 0;
	}

	function deleteValue($ID) {
		$query = "DELETE FROM corevalues WHERE ID=$ID";
		return $this->mysqli->query($query) or die(mysql_error());
	}

	function editValue($ID, $title, $summary, $description) {
		$query = "UPDATE corevalues
				SET 	title='$title', 
					summary='$summary',
					description='$description'
				WHERE ID=$ID";

		if( $this->mysqli->query($query) )
			return 1;
		else return 0;
	}

}

?>
