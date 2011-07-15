<?php

require_once('class.models.php');

class ADMIN_controls extends models {
	// GETTERS
	function getBoxInfo($box) {
		$query = "SELECT * FROM tr_info WHERE title = '$box';";
		$result = $this->mysqli->query($query) or die(mysqli_error());

		$item = $result->fetch_assoc();

		$cont = array(	'text'	=> stripslashes($item['text']),
					'title'	=> stripslashes($item['title']));

		return $cont;
	}

	// SETTERS
	function setBoxContent($box, $content) {
		$query = "UPDATE tr_info SET text='$content' WHERE title='$box';";
		$result = $this->mysqli->query($query) or die(0);

		return 1;
	}
}
?>
