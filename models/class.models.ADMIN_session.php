<?php

require_once('class.models.php');

class ADMIN_session extends models {

	function updateBox($box, $content, &$db) {
			$box = $db->quote($box);
			$content = $db->quote($content);
			$sql = "UPDATE tr_info SET text=$content WHERE title=$box";
			$result = $db->query($sql);
			if(PEAR::isError($result)) {
			    die("Failed to issue query, error message: " . $result->getMessage());
			} else {
				return 1;
			}
	}
}
?>
