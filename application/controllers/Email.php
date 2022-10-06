<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Email extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library("session");
		$this->load->helper('url');
		$this->load->library('form_validation');
		
		$this->load->config('email');
        $this->load->library('email');



	}
	
	function registrationEmail() {
		$from = $this->config->item('smtp_user');
		$to = "harshkumar283@gmail.com";
		$subject ="notification";
		$message ="hello";
		$this->email->set_newline("\r\n");
		$this->email->from($from);
		$this->email->to($to);
     	$this->email->subject($subject);
		$this->email->message($message);
        $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
        $this->email->set_header('Content-type', 'text/html');

		if ($this->email->send()) {
			echo 'Your Email has successfully been sent.';
		} else {
			show_error($this->email->print_debugger());
		}
    }
	
	function registrationEmailTemplate($lastId) { 
		$data['lastId'] = $lastId;
        $this->load->view('email-verification.php',$data);           
	}
	
	
	function forgotEmailTemplate($pass) { 
		$data['password'] = $pass;
        $this->load->view('forgot-password.php',$data);           
	}
	
	
	
	
}