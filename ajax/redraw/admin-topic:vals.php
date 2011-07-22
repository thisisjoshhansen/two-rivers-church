<?php

include($_SERVER['DOCUMENT_ROOT'].'/models/class.models.TRC_corevalues.php');

$trc_corevals = new TRC_corevals();
$corevals = $trc_corevals->getAllVals();

if( isset( $_GET['id'] ) ) {
	if( $_GET['id'] == 0 ) {
		$curVal = $trc_corevals->getValByTitle($_GET['title']);
	} else {
		$curVal = $trc_corevals->getValue($_GET['id']);
	}
} else {
	$curVal['ID'] = $trc_corevals->getMinVal();
}

print '

	<div style="float:left;width:150px;">
		<div style="float:left;">
			<span class="head" style="margin-bottom:20px;">Core Values</span>';
			foreach( $corevals as $coreval) {
				print
				'<span class="title" onclick="showValueDiv(\''.$coreval['ID'].'\');" style="margin:0px 0px 12px 12px;cursor:pointer;font-size:.9em;">'.$coreval['title'].'</span>';
			}
			print
			'<a class="addButton" onclick="openDialog(\'0\', \'vals\');" style="">+<span>Add a Core Value!</span></a>
		</div>
	</div>

	<div style="margin-left:200px;">';
		$i = 0;
		foreach( $corevals as $coreval ) {
			print
			'<div id="valID:'.$coreval['ID'].'" style="min-height:375px;position:relative;';if( $coreval['ID'] != $curVal['ID'] ) print 'display:none;'; print'">

				<span class="title" style="clear:none;font-size:1.5em;margin-bottom:20px;">'.$coreval['title'].'</span>
				<div style="position:absolute;top:0;right:0;width:200px;">
					<a class="editButton" onclick="openDialog('.$coreval['ID'].', \'vals\');">+<span>Edit!</span></a>
					<a class="deleteButton" onclick="admin_deleteItem('.$coreval['ID'].', \'vals\');">+<span>Delete!</span></a>
				</div>

				<span class="title" style="font-size:.8em;clear:none;">Summary</span>
				<span class="summary" style="font-size:.8em;clear:none;margin-bottom:10px;">'.$coreval['summary'].'</span>

				<span class="title" style="font-size:.8em;clear:none;">Description</span>
				<span class="summary" style="clear:none;">'.$coreval['description'].'</span>

			</div>';

		}
	print
	'</div>';

?>
