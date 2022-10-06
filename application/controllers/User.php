<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	 
    public function __construct(){
        parent::__construct();
        
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('User_Model');
    }
    

	public function userRegistration(){
		$data = $this->User_Model->userRegistration();
		echo $data;
		
	}
	public function userLogin(){
		$data = $this->User_Model->userLogin();
		echo $data;
		
	}
	
	
}
