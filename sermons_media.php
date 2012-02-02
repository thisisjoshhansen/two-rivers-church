<?php

require_once('vimeo/vimeo.php');
$vimeo = new phpVimeo('53a43bad017df9a37fb1ab3c2d7b1533', 'ddf38cebad92291f');
$vimeo->setToken('77ea11236c268d6d6535703df0eb9a4e','c84f5e9266b8d6ae25021c2e9fff68accd63728a');

/*
Example of getting all videos from an album

$output = '<div class="albumGallery">';
$result = $vimeo->call('vimeo.albums.getVideos', array('album_id' => $albumID,full_response => '1'));
$videos = $result->videos->video;
foreach ($videos as $video) {
   $output .= ' <a href="'.$video->urls->url[0]->_content.'" title="'.$video->title.'" rel="zoombox[group]">';
   $output .= '  <div class="albumGalleryItem">';
   $output .= '   <div class="ImgContainer"><img src="'.$video->thumbnails->thumbnail[1]->_content.'"></div>';
   $output .= '   <div class="albumGalleryCaption">'.$video->title.'</div>';
   $output .= '   <div class="albumGalleryDescription">'.nl2br($video->description).'</div>';
   $output .= '  </div>';
   $output .= ' </a>';
}
 
$output .= '</div>';
 
return $output;
*/

switch( $sub ) {
	case 'currentseries':
		$smarty->display('construction.tpl');

		break;
	case 'sermons':
		$result = $vimeo->call('vimeo.albums.getAll', array());
		echo "<pre>";
		print_r( $result );
		echo "</pre>";

		break;
	case 'media':
		$smarty->display('construction.tpl');

		break;
	default:
		$result = $vimeo->call('vimeo.albums.getAll', array());
		$sermon_array = array();
		
//		foreach($result as $r) {
//			$sermon_array[] = array(	'thumbnail'	=>	"Ephesians.png" )
//		}
		
		$sermon_play = 26773457;
		$sermon_array = array(
						array(	'thumbnail'	=>	'Ephesians.png',
								'passage'		=>	'Ephesians 1:1-3',
								'vimeo_number'	=>	'26773865'
							),
						array(	'thumbnail'	=>	'Ephesians.png',
								'passage'		=>	'Ephesians 1:4-6',
								'vimeo_number'	=>	'26773865'
							),
						array(	'thumbnail'	=>	'Ephesians.png',
								'passage'		=>	'Ephesians 1:7-9',
								'vimeo_number'	=>	'26773865'
							),
						array(	'thumbnail'	=>	'Ephesians.png',
								'passage'		=>	'Ephesians 1:9-12',
								'vimeo_number'	=>	'26773865'
							),
						array(	'thumbnail'	=>	'Ephesians.png',
								'passage'		=>	'Ephesians 1:12-13',
								'vimeo_number'	=>	'26773865'
							),
						array(	'thumbnail'	=>	'Ephesians.png',
								'passage'		=>	'Ephesians 1:13-14',
								'vimeo_number'	=>	'26773865'
							),
						array(	'thumbnail'	=>	'Ephesians.png',
								'passage'		=>	'Ephesians 1:15-16',
								'vimeo_number'	=>	'26773865'
							),
						array(	'thumbnail'	=>	'Ephesians.png',
								'passage'		=>	'Ephesians 1:16-20',
								'vimeo_number'	=>	'26773865'
							),
						array(	'thumbnail'	=>	'Ephesians.png',
								'passage'		=>	'Ephesians 1:20-23',
								'vimeo_number'	=>	'26773865'
							),
						array(	'thumbnail'	=>	'Ephesians.png',
								'passage'		=>	'Ephesians 2:1-2',
								'vimeo_number'	=>	'26773865'
							),
						array(	'thumbnail'	=>	'Ephesians.png',
								'passage'		=>	'Ephesians 2:3-6',
								'vimeo_number'	=>	'26773865'
							)
					);
		

		$smarty->assign('sermon_play', $sermon_play);
		$smarty->assign('sermon_array', $sermon_array);

		$smarty->display('sermonmedia.tpl');
}

?>
