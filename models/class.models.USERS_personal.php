<?php

require_once('class.models.php');

class USERS_personal extends models {
	# GETTERS
	function getFirst($id) {
		$query = "SELECT first FROM USERS_personal WHERE ID = $id";
		$result = $this->mysqli->query($query) or die(mysqli_error());
		$name = $result->fetch_assoc();

		return $name['first'];
	}

	function getLast($id) {
		$query = "SELECT last FROM USERS_personal WHERE ID = $id";
		$result = $this->mysqli->query($query) or die(mysqli_error());
		$name = $result->fetch_assoc();

		return $name['last'];
	}

}

?>
