<?php
/* adminSaveEditBox.php
 * Author: Jacob Burton
 * Package: two rivers church
 * Date: 31 JAN 2011
 *
 * This file will change a text box on the website. It is used so that admins
 * 	can alter the content of the pages themselves. It will return:
 *	-1 if something failed
 *   0 when the update was done successfully
 *   1 when the http paramaters provided were not correct
 *   2 if the user is not logged in as a manager (security check)
 */

	session_start();

	// Check to make sure we have all of the correct http parameters
	if(	!isset($_POST['b']) || !isset($_POST['c']) ) {
		echo '1'; exit;
	}

	// Check to make sure we are an Admin
	if( !isset($_SESSION['admin']) ) {
		echo '2'; exit;
	}

	require_once('../models/class.models.ADMIN_controls.php');
	$admin = new ADMIN_controls();

	$box = $_POST['b'];
	$content = $_POST['c'];

	if( $admin->setBoxContent($box, $content) )
		echo '0';
	else
		echo '-1';
?>
