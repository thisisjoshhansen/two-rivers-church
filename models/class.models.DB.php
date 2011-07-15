<?php

function &db_connect() {
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';
	$db_name = '2rchurch';

	$conn = mysql_connect($db_host, $db_user, $dbpass) or die("Error connecting to the database!");

	mysql_select_db($db_name);

	return $conn;
}

?>
