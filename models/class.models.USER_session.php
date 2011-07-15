<?php

require_once('class.models.php');

function session_defaults() {
	$_SESSION['logged'] = false;
	$_SESSION['uid'] = 0;
	$_SESSION['username'] = '';
	$_SESSION['cookie'] = 0;
	$_SESSION['remember'] = false;
	$_SESSION['admin'] = 0;
	$_SESSION['user'] = 0;
}

if (!isset($_SESSION['uid']) || $_SESSION['uid'] == 0)
	session_defaults();

class USER_session extends models {
	var $failed = false; // failed login attempt
	var $date; // current date GMT
	var $id = 0; // the current user's id
	function User() {
		$this->date = gmdate("'Y-m-d'");
		if($_SESSION['logged']) {
			$this->_checkSession();
		} elseif ( isset($_COOKIE['mtwebLogin']) ) {
			$this->_checkRemembered($_COOKIE['mtwebLogin']);
		}
	}

	function _checkLogin($username, $password, $remember) {
		//$username = $this->mysqli->quote($username);
		//$password = $this->mysqli->quote(md5($password));
		$query = "SELECT * FROM USERS_personal WHERE username='$username' AND password='$password'";
		$result = $this->mysqli->query($query);

		if ( is_object($result) ) {
			$userVals = $result->fetch_assoc();
			$this->_setSession($userVals, $remember);
			return true;
		} else {
			$this->failed = true;
			$this->_logout();
			return false;
		}
	}

	function _setSession(&$userVals, $remember, $init = true) {
		$this->ID = $userVals['ID'];
		$_SESSION['uid'] = $userVals['ID'];
		$_SESSION['username'] = htmlspecialchars($userVals['username']);
		$_SESSION['cookie'] = $userVals['cookie'];
		$_SESSION['logged'] = true;
		if($remember) {
			$this->updateCookie($userVals['cookie'], true);
		}
		if($init) {
			$query = "UPDATE users_personal SET session = '".session_id()."', ip = '".$_SERVER['REMOTE_ADDR']."' WHERE " .
			"ID = ".$this->ID."";
			$this->mysqli->query($query);
		}
	}

	function updateCookie($cookie, $save) {
		$_SESSION['cookie'] = $cookie;
		if ($save) {
			$cookie = serialize(array($_SESSION['username'], $cookie) );
			set_cookie('mtwebLogin', $cookie, time() + 31104000, '/directory/');
		}
	}

	function _checkRemembered($cookie) {
		list($username, $cookie) = @unserialize($cookie);
		if (!$username or !$cookie) return;
		//$username = $this->mysqli->quote($username);
		//$cookie = $this->mysqli->quote($cookie);
		$query = "SELECT * FROM users_personal WHERE " .
		"(username = $username) AND (cookie = $cookie)";
		$result = $this->mysqli->fetch_assoc($query);
		if (is_object($result) ) {
			$this->_setSession($result, true);
		}
	}

	function _checkSession() {
		//$username = $this->mysqli->quote($_SESSION['username']);
		//$cookie = $this->mysqli->quote($_SESSION['cookie']);
		//$session = $this->mysqli->quote(session_id());
		//$ip = $this->mysqli->quote($_SERVER['REMOTE_ADDR']);
		$query = "SELECT * FROM users_personal WHERE " .
			"(username = ".$_SESSION['username'].") AND (cookie = ".$_SESSION['cookie'].") AND " .
			"(session = ".session_id().") AND (ip = ".$_SERVER['REMOTE_ADDR'].")";
		$result = $this->mysqli->getRow($query);
		if(is_object($result) ) {
			$this->_setSession($result, false, false);
		} else {
			$this->_logout();
		}
	}

	function _logout() {
		session_defaults();
	}
} 
?>
