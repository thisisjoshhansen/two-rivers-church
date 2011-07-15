<?php

require_once('class.models.php');

class TRC_doctrine extends models {

	// GETTERS
	function getAllDoctrine() {
		$query = "SELECT * FROM doctrine";
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

}

?>
