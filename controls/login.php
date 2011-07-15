<?php

session_start();

require('../models/class.models.USER_session.php');

if( isset($_POST['login_userName']) && isset($_POST['login_userPass']) ) {
	$userName = strtolower($_POST['login_userName']);
	$userPass = md5($_POST['login_userPass']);
	$remember = 0;
//print $userName."<br /><br />".$userPass;exit;
	$date = gmdate("'Y-m-d'");

	$user = new USER_session();

	session_defaults();

	if( $user->_checkLogin($userName, $userPass, $remember) ) {

		$_SESSION['admin'] = $_SESSION['uid'];

		if( isset($_SESSION['redir']) ) {
			$loc = $_SESSION['redir'];
			unset($_SESSION['redir']);
		} else {
			$loc = "/?page=home";
		}

		header("Location: $loc");
		exit;
	}
	else {
		header("Location: /?page=login&msg=bad");
		exit;
	}
} else {
	header("Location: /?page=login&msg=bad");
}

?>
