<?php

/*
	models is an abstract class for all data classes

	Purpose: serve as a database API w/ caching support.

	Caching: Supports Memcached caching, fine grained
	within subclasses.  Caching specs found in /docs/dev/CACHING

	@package		Originally for NCF.COLORADO.EDU -> adapted to TRC
	@subpackage	models
	@author		Brian Brooks <brian.brooks@colorado.edu>
	@adaptedby	Jacob Burton <burtonjc35@gmail.com>
	@version		SVN: $Id$
*/

require_once($_SERVER['DOCUMENT_ROOT'].'/libs/gen.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/controls/class.email.php');

class models {
        
	protected $mysqli, $memcached, $memcachedStatus;

	public function __construct() {
		$this->mysqli = new mysqli('localhost', 'root', '', '2rchurch');

		if(mysqli_connect_errno()) {
			printf("Connection failed! Sorry for the inconvenience... Please try again later!");
			$mail = new email();
			$mail->create('burtonjc35@gmail.com', 'The website database server is down!', 'The website database server is down! Let a developer know!', 'TRC dev');
			$mail->send();
			exit();
		}

		$this->mysqli->set_charset("utf8");
		//$this->mysqli->query("SET NAMES 'utf8';");
		//$this->mysqli->query("SET character_set_server = 'utf8';");
		//$this->mysqli->query("SET character_set_database = 'utf8';");

		/*try {
			$this->memcached = new Memcache;
			$this->memcached->connect('127.0.0.1', 11211);
			$this->memcachedStatus = true;
		} catch (Exception $e) {
			$this->memcachedStatus = false;
		}*/

		#uncomment next line to HALT cache
		$this->memcachedStatus = false;
        }
        
        public function __destruct() {
                if($this->mysqli)
                        $this->mysqli->close();
                if($this->memcached)
                        $this->memcached->close();
        }  
      
        public function customQuery($query) {
                return $this->mysqli->query($query);
        }
        
        function is($query) {
                $result = $this->mysqli->query($query);
                return ($result->num_rows >= 1)? true : false;
        }
        
        public function __toString() {
                return var_export($this, TRUE);
        }
        
        public function __serialize() {
                return serialize($this);
        }

}               

?>
