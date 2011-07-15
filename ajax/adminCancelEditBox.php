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

	if(	!isset($_GET['b']) ) {
		echo '1'; exit;
	}

	include('../models/class.models.ADMIN_controls.php');

	session_start();

/*	// Only Managers can change training blocks
	if( !isset($_SESSION['manager']) ) {
		echo '2'; exit;
	}
*/
	$admin = new ADMIN_controls();

	$box = $_GET['b'];

	$cont = $admin->getBoxInfo($box);
	
	echo $cont['text'];
?>
