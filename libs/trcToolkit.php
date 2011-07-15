<?php
	///////////////////////////
	//		PHP TOOLKIT	//
	///////////////////////////
	
	// functions to be used in the pages called by the index
	function formatDateStr( $oldDateStr ) {
		$monthArray = array("january", "february", "march", "april", "may", 
							"june", "july", "august", "septimber", "october", 
							"november", "december");
		$oldDateArray = array();
		$oldDateArray = explode("-", $oldDateStr);
		$oldDateArray[1] = (int)$oldDateArray[1];
		$date = $oldDateArray[2] . " " . $monthArray[ $oldDateArray[1] - 1 ] . " " . $oldDateArray[0];
		return $date;
	}
	
	function formatTimeStr( $hour, $minute ) {
		$hour_ampm = "am";
		if( $hour > 12 ) {
			$hour -= 12;
			$hour_ampm = "pm";
		}
		if( $minute == 0 ) $minute = "00";
		$time = $hour.":".$minute." ".$hour_ampm;
		return $time;
	}
	
?>
