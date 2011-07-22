<?php

include($_SERVER['DOCUMENT_ROOT'].'/models/class.models.TRC_doctrine.php');
$trc_doctrine = new TRC_doctrine();
$doctrine = $trc_doctrine->getAllDoctrine();

if( isset( $_GET['id'] ) ) {
	if( $_GET['id'] == 0 ) {
		$curDoc = $trc_doctrine->getDocByTitle($_GET['title']);
	} else {
		$curDoc = $trc_doctrine->getDoctrine($_GET['id']);
	}
} else {
	$curDoc['ID'] = $trc_doctrine->getMinDoc();
}

print '
	<div style="float:left;width:150px;">
		<div style="float:left;">
			<span class="head" style="margin-bottom:20px;">Doctrine</span>';
			foreach( $doctrine as $doc ) {
				print
				'<span class="title" onclick="showTopicDiv(\''.$doc['ID'].'\', \'docs\');" style="margin:0px 0px 12px 12px;cursor:pointer;font-size:.9em;">'.$doc['title'].'</span>';
			}
			print
			'<a class="addButton" onclick="openDialog(\'0\', \'docs\');">+<span>Add Doctrine!</span></a>
		</div>
	</div>

	<div style="margin-left:200px;">';
		foreach( $doctrine as $doc ) {
			print
			'<div id="docs:'.$doc['ID'].'" style="min-height:375px;position:relative;'; if( $curDoc['ID'] != $doc['ID'] ) print 'display:none;'; print '">

				<span class="title" style="clear:none;font-size:1.5em;margin-bottom:20px;">'.$doc['title'].'</span>
				<div style="position:absolute;top:0;right:0;width:200px;">
					<a class="editButton" onclick="openDialog('.$doc['ID'].', \'docs\');">+<span>Edit!</span></a>
					<a class="deleteButton" onclick="admin_deleteItem('.$doc['ID'].', \'docs\');">+<span>Delete!</span></a>
				</div>

				<span class="title" style="font-size:.8em;clear:none;">Summary</span>
				<span class="summary" style="font-size:.8em;clear:none;margin-bottom:10px;">'.$doc['summary'].'</span>

				<span class="title" style="font-size:.8em;clear:none;">Description</span>
				<span class="summary" style="clear:none;">'.$doc['description'].'</span>

			</div>';

		}
	print
	'</div>';

?>
