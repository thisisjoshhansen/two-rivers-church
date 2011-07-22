<?php

switch( $sub ) {
	case 'currentseries':
		$smarty->display('construction.tpl');

		break;
	case 'sermons':
		$smarty->display('construction.tpl');

		break;
	case 'media':
		$smarty->display('construction.tpl');

		break;
	default:
		$sermon_play = 26773865;

		$smarty->assign('sermon_play', $sermon_play);

		$smarty->display('sermonmedia.tpl');
}

?>
