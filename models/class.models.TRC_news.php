<?php

require_once('class.models.php');

class TRC_news extends models {

	// GETTERS
	function getAllNews() {
		$query = "SELECT * FROM tr_news ORDER BY postdate DESC";
		$result = $this->mysqli->query($query) or die(mysql_error());

		$news_array = array();
		while($row = $result->fetch_assoc()) {
			$news_array[] = $row;
		}

		$news = array();

		if( count($news_array) ) {
			foreach( $news_array as $new ) {
				$news[] = array(	'ID'		=> $new['ID'],
								'title'	=> stripslashes($new['title']),
								'summary'	=> stripslashes($new['summary']),
								'news'	=> stripslashes($new['news']),
								'postdate'=> $new['postdate'],
								'postedby'=> $new['postedby']);
			}
		}

		return $news;
	}

	function getNews($ID) {
		$query = "SELECT * FROM tr_news WHERE ID=$ID";
		$result = $this->mysqli->query($query) or die(mysql_error());

		$news = $result->fetch_assoc();

		return $news;
	}

	function addNews($title, $summary, $news, $postedby) {
		$query = "INSERT INTO tr_news (title, summary, news, postedby, postdate) 
				VALUES ('$title', '$summary', '$news', '$postedby', CURDATE())";

		if( $this->mysqli->query($query) )
			return 1;
		else return 0;
	}

	function editNews($ID, $title, $summary, $news, $postedby) {
		$query = "UPDATE tr_news
				SET 	title='$title', 
					summary='$summary',
					news='$news',
					postedby='$postedby',
					postdate=CURDATE()
				WHERE ID=$ID";

		if( $this->mysqli->query($query) )
			return 1;
		else return 0;
	}

	function deleteNews($ID) {
		$query = "DELETE FROM tr_news WHERE ID=$ID";
		return $this->mysqli->query($query) or die(mysql_error());
	}

}

?>
