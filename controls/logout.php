<?php

session_start();

require('../models/class.models.USER_session.php');

session_defaults();

if( isset($SESSION['redir']) ) {
	$loc = $_SESSION['redir'];
	unset($_SESSION['redir']);
} else {
	$loc = "/";
}

header("Location: $loc");

?>
