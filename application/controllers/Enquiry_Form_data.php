<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry_Form_data extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper(array('url','html','date'));
		
		date_default_timezone_set('Asia/Kolkata');
		$time =  Date('Y-m-d H:i:s');
		$this->load->library('session'); 
		//echo $this->session->userdata('auth');
		if(!$this->session->has_userdata('username')  || $this->session->userdata('auth') != "ADMIN"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
		$this->load->model('Admin_model');
		
		
		$data['sqldata'] = $this->Admin_model->gettable('enquiry_form'); 
	
	//print_r($data['sqldata'] ); die;
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/Enquiry_Form',$data);
		$this->load->view('admin/footer');
}}
	
	
public function export_csvenquiry(){ 
		// file name 
		$this->load->model('Admin_model');
		$filename = 'users_'.date('Ymd').'.csv'; 
		header("Content-Description: File Transfer"); 
		header("Content-Disposition: attachment; filename=$filename"); 
		header("Content-Type: application/csv; ");
	   // get data 
	   $usersData = $this->Admin_model->getenquirydataDetails(' enquiry_form');
		//$usersData = $this->Admin_model->getSellerUserDetails();
		//print_r($usersData); die;
		// file creation 
		$file = fopen('php://output','w');
		$header = array("DATE","TIME","COMPANY NAME","ADDRESS","CITY","FIRST NAME","LAST NAME","PHONE","EMAIL","REMARK","LEAD GENERATION","SPOC","lOCATION"); 
		fputcsv($file, $header);
		foreach ($usersData as $key=>$line){ 
			fputcsv($file,$line); 
		}
		fclose($file); 
		exit; 
	}	
	
	
	
}
