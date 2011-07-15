<?php

require_once('class.models.php');

class TRC_info extends models {
	##############
	# INFO TABLE #
	##############
	// GETTERS
	function getAllInfo() {
		$query = "SELECT * FROM tr_info";
		$result = $this->mysqli->query($query) or die(mysqli_error());

		while($row = $result->fetch_assoc()) {
			$info_array[] = $row;
		}

		$info = array();
		foreach( $info_array as $item ) {
			$info[$item['title']] = array('text' => stripslashes($item['text']),
									'title' => stripslashes($item['title']));
		}

		return $info;
	}

	function getSpecItem($title) {
		$query = "SELECT * FROM tr_info WHERE title = '$title'";
		$result = $this->mysqli->query($query) or die(mysql_error());
		$item = $result->fetch_assoc();

		$info[$item['title']] = array(	'text'	=>	stripslashes($item['text']),
									'title'	=>	stripslashes($item['title']));

		return $info;
	}

	function getMultItems($titleArray) {
		$query = "SELECT * FROM tr_info WHERE title = '".$titleArray[0]."'";

		for( $i=1; $i<count($titleArray); $i++ ) {
			$query .= " OR title = '".$titleArray[$i]."'";
		}
		$result = $this->mysqli->query($query) or die(mysql_error());

		while($row = $result->fetch_assoc()) {
			$info_array[] = $row;
		}

		$info = array();
		foreach( $info_array as $item ) {
			$info[$item['title']] = array(	'text'	=>	stripslashes($item['text']),
										'title'	=>	stripslashes($item['title']));
		}

		return $info;
	}

	// SETTERS
	function setItemTitle($ID, $name) {
	}

	##################
	# DOCTRINE TABLE #
	##################
	// GETTERS
	function getAllDoctrine() {
		$query = "SELECT * FROM tr_doctrine ORDER BY title ASC";
		$result = $this->mysqli->query($query) or die(mysql_error());

		while($row = $result->fetch_assoc()) {
			$doc_array[] = $row;
		}

		$doctrine = array();
		foreach( $doc_array as $doc ) {
			$doctrine[$doc['title']] = array(	'title' => stripslashes($doc['title']),
										'text' => stripslashes($doc['text']),
										'summary' => stripslashes($doc['summary']));
		}

		return $doctrine;
	}

	// SETTERS
	function setDoctrineTitle($ID, $name) {
	}

	####################
	# MINISTRIES TABLE #
	####################
	// GETTERS
	function getAllMinistries() {
		$query = "SELECT * FROM tr_ministries ORDER BY title ASC";
		$result = $this->mysqli->query($query) or die(mysql_error());

		while($row = $result->fetch_assoc()) {
			$min_array[] = $row;
		}

		$ministries = array();
		foreach( $min_array as $min ) {
			$ministries[$min['title']] = array('ID'			=>	$min['ID'],
										'title'		=>	stripslashes($min['title']),
										'description'	=>	stripslashes($min['description']),
										'summary'		=>	stripslashes($min['summary']));
		}

		return $ministries;
	}

	// SETTERS
	function setMinistryName($ID, $name) {
	}

}

?>
