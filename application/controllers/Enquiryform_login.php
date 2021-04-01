<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Enquiryform_login extends CI_Controller
{

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
	$this->load->helper('url');
  		
		if($this->input->post('user')){
		
				$table = "enquriyform_login";
				$colname = "enqusername";
				$colname2 = "enqpassword";
				 
			   
			
			$user = $this->input->post('user');
			$pass = $this->input->post('pass');
			$pass = base64_encode($pass);
		
			$check_db = array($colname => $user, $colname2 => $pass);
			//print_r($check_db);die;
			$this->load->model('Admin_model');
		
			
			  if($this->Admin_model->check($table, $check_db)){
				  if($table == "enquriyform_login"){
					   
					  header('location: '.base_url().'Enquiry_Form');
					  die;
					 
				  }
			  }else{
				  $datainserr = "Invalid Password";
				  header('location: '.base_url().'Home');
				  die;
			  }
			  die;
		}
		
		
	
		
		
		

		
		
		$this->load->view('enquiry_app/Enquiryform login');
			  }
			  public function loc(){
				  $this->load->helper('url');
				  //uri
				  echo urldecode($this->uri->segment(3));
			  }
				
			  }
