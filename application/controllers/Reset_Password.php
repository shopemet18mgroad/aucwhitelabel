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
		$this->load->helper(array('url','html','date'));
		date_default_timezone_set('Asia/Kolkata');
		$time =  Date('Y-m-d H:i:s');
		$this->load->helper('url');
		$this->load->library('session');	
		$this->load->model('Admin_model');
		/* $otp = $this->input->post('otp');
		$newpassword = $this->input->post('newpassword');
		$confirmpassword = $this->input->post('confirmpassword');
		$data2 = array('otp' => $otp,'newpassword' => $newpassword, 'confirmpassword' => $confirmpassword);
		//$this->load->view('xya', $data);
		$datainserr = "Data Inserted Successfully";
		$updatech = array('otp' => $otp);
		$status = $this->Admin_model->update_custom('buyerprofile',$data2,$updatech,$updatech);
		
		
			
		header('location: '.base_url().''.$datainserr); */
			
			$this->load->view('header2');
			$this->load->view('ResetPassword');
			$this->load->view('footer');
		
		
		
	}
	

	
}