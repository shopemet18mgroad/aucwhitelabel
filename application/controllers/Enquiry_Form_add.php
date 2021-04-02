<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry_Form_add extends CI_Controller {

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
	 function __construct() {
        parent::__construct();
        
        // Load session library
        $this->load->library('session');
        // Load the captcha helper
		//$this->load->helper('captcha');
		$this->load->helper('url');
		$this->load->helper('date');
	
		date_default_timezone_set("Asia/Kolkata");
    }
	 
	 
	 
	public function index()
	{
	if($this->input->post('spoc')){
			$date =  Date('Y-m-d'); 
			$this->load->library('fileupload');
			$this->load->helper(array('url','form','file','html'));
			$this->load->model('Admin_model');
			
			
			$date = $this->input->post('date');
			
			$companyname = $this->input->post('companyname');
			$vaddress = $this->input->post('vaddress');
			$vcity = $this->input->post('vcity');
			$first  = $this->input->post('first');
			$last = $this->input->post('last');
			$phone = $this->input->post('phone');
			$email = $this->input->post('email');
			$remarks = $this->input->post('remarks');
			$leadgeneration = $this->input->post('leadgeneration');
			$spoc = $this->input->post('spoc');
			$location = $this->input->post('loc');
			$website = $this->input->post('website');
			
			
		
		   
		  
			$data = array('date'=>$date,'companyname' => $companyname, 'vaddress' => $vaddress,
			'vcity' => $vcity, 'first' => $first,
			'last' => $last,'phone' => $phone, 'email'=> $email,
			'remarks' => $remarks,'leadgeneration'=>$leadgeneration,
			'spoc'=>$spoc ,'location'=>$location,'website'=>$website);

	$datainserr = "Data Inserted Successfully";
		$status = $this->Admin_model->insert('enquiry_form', $data);
		header('location: '.base_url().'Enquiry_Form/succ/');
			
			
			 
			

	}



}
	}
	
		
		
		
		