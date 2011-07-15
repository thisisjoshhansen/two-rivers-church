<?php
	// open the connection
	$db_connection = mysql_connect("localhost", "root")
		or die ('Oops, I cannot connect to the database.');

	// Select the database
	mysql_select_db( '2rchurch' , $db_connection );
	
?>
