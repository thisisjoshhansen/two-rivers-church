<?php

/*
	Purpose: to provide OO mail support with validation

	@package		Originally for NCF.COLORADO.EDU -> adapted to TRC
	@subpackage	models
	@author		Brian Brooks <brian.brooks@colorado.edu>
	@adaptedby	Jacob Burton <burtonjc35@gmail.com>
	@version		SVN: $Id$
*/

/*
	Typical usage:

	$mail = new email();
	$mail->create('test@test.com', 'subject', 'body', 'NCF', 'ncf@colorado.edu');
	if($mail->send())
		echo "sent!";
	else
		echo "mail not sent!";
*/

require_once('/var/trc/libs/gen.php');

class email {
        
        protected $to, $subject, $body, $headers;
        
        public function create($to, $subject, $body, $from, $replyTo) {
                $this->to = $to;
                $this->subject = $subject;
                $this->body = $body;
                $this->headers = 'From: '.$from."\r\n".'Reply-To: '.$replyTo;;
        }
        
        public function send() {
                if($this->validate()) {
                        foreach($this->to as $email) {
                                mail($email, $this->subject, $this->body, $this->headers);
                        }
                        return 1;
                }
                return 0;
        }
        
        private function validate() {
                $this->to = explode(',', $this->to);
                foreach($this->to as &$email) {
                        $email = ltrim($email);
                        $email = rtrim($email);
                        if(!is_emailaddr($email))
                                return False;
                }
                
                return ($this->subject && $this->body);
        }
}

?>
