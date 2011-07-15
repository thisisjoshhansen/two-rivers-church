<?php

require_once('class.models.php');

class TRC_calendar extends models {

	// GETTERS
	function getAllFutureEvents() {
		$query = "SELECT * FROM CAL_events WHERE date >= CURDATE()
				ORDER BY date ASC, hour ASC, minute ASC";
		$result = $this->mysqli->query($query) or die(mysql_error());

		while($row = $result->fetch_assoc()) {
			$event_array[] = $row;
		}

		$events = array();

		if( !empty($event_array) ) {
			foreach( $event_array as $event ) {
				$events[] = array(	'ID'			=> stripslashes($event['ID']),
								'title'		=> stripslashes($event['title']),
								'summary'		=> stripslashes($event['summary']),
								'description'	=> stripslashes($event['description']),
								'location'	=> stripslashes($event['location']),
								'date'		=> stripslashes($event['date']),
								'hour'		=> stripslashes($event['hour']),
								'minute'		=> stripslashes($event['minute']));
			}
		}

		return $events;
	}

	function getEvent($ID) {
		$query = "SELECT * FROM CAL_events WHERE ID=$ID";
		$result = $this->mysqli->query($query) or die(mysql_error());

		$event = $result->fetch_assoc();

		return $event;
	}

	function addEvent($title, $summary, $description, $location, $hour, $minute, $date) {
		$query = "INSERT INTO CAL_events (title, summary, description, location, hour, minute, date) 
				VALUES ('$title', '$summary', '$description', '$location', '$hour', '$minute', '$date')";

		if( $this->mysqli->query($query) )
			return 1;
		else return 0;
	}

	function editEvent($ID, $title, $summary, $description, $location, $hour, $minute, $date) {
		$query = "UPDATE CAL_events
				SET 	title='$title', 
					summary='$summary',
					description='$description',
					location='$location',
					hour='$hour',
					minute='$minute',
					date='$date'
				WHERE ID=$ID";

		if( $this->mysqli->query($query) )
			return 1;
		else return 0;
	}

	function deleteEvent($ID) {
		$query = "DELETE FROM CAL_events WHERE ID=$ID";
		return $this->mysqli->query($query) or die(mysql_error());
	}

}

?>
