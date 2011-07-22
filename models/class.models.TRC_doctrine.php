<?php

require_once('class.models.php');

class TRC_doctrine extends models {

	// GETTERS
	function getAllDoctrine() {
		$query = "SELECT * FROM doctrine ORDER BY ID ASC";
		$result = $this->mysqli->query($query) or die(mysql_error());

		while($row = $result->fetch_assoc()) {
			$docs_array[] = $row;
		}

		$docs = array();
		foreach( $docs_array as $doc ) {
			$docs[] = array(	'ID'			=> $doc['ID'],
							'title'		=> stripslashes($doc['title']),
							'summary'		=> stripslashes($doc['summary']),
							'description'	=> stripslashes($doc['description']));
		}
		return $docs;
	}

	function getDoctrine($ID) {
		$query = "SELECT * FROM doctrine WHERE ID=$ID";
		$result = $this->mysqli->query($query) or die(mysql_error());

		$doc = $result->fetch_assoc();

		return $doc;
	}

	function getDocByTitle($title) {
		$query = "SELECT * FROM doctrine WHERE title='$title'";
		$result = $this->mysqli->query($query) or die(mysql_error());

		$doc = $result->fetch_assoc();

		return $doc;
	}

	function getMinDoc() {
		$query = "SELECT MIN(ID) FROM doctrine";
		$result = $this->mysqli->query($query) or die(mysql_error());

		$minDoc = $result->fetch_assoc();

		return $minDoc['MIN(ID)'];
	}

	function addDoctrine($title, $summary, $description) {
		$query = "INSERT INTO doctrine (title, summary, description) 
				VALUES ('$title', '$summary', '$description')";

		if( $this->mysqli->query($query) )
			return 1;
		else return 0;
	}

	function deleteDoctrine($ID) {
		$query = "DELETE FROM doctrine WHERE ID=$ID";
		return $this->mysqli->query($query) or die(mysql_error());
	}

	function editDoctrine($ID, $title, $summary, $description) {
		$query = "UPDATE doctrine
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
