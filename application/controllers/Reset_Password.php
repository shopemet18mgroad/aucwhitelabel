<?php

class Reset_Password extends CI_Controller
{
public function __construct() {
parent::__construct();
        
		$this->load->library('session');
		$this->load->library('email');
		
	}
	   public function index()
	{
		
		$this->load->helper('url');
		$this->load->library('session');
		
			
			$this->load->view('header2');
			$this->load->view('ResetPassword');
			$this->load->view('footer');
		
		
		
	}
	

	
}