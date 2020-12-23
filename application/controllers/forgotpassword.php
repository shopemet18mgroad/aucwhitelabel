<?php

class forgotpassword extends CI_Controller
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
		$this->session->sess_expiration = '3600';
		if($this->input->post('email')){
			if($this->input->post('optradio')=="Buyer"){
				$table = "buyerprofile";
				$colname = "bemail";
				$colname2 = "bphone";
			}else if($this->input->post('optradio')=="Seller"){
				$table = "sellerprofile";
				$colname = "semail";
				$colname2 = "sphone";
			}
			$email = $this->input->post('email');
			$phoneno = $this->input->post('phoneno');
			$check_db = array($colname => $email);
			$this->load->model('Admin_model');
			  if($this->Admin_model->check($table, $check_db)){
				  if($table == "buyerprofile"){
					  $newdata = array('bemail'=>$email);
					  header('location: '.base_url().'Reset_Password');
					  die;
				  }else if($table == "sellerprofile"){
					  $newdata = array('semail'=>$email);
					  header('location: '.base_url().'Reset_Password');
					  die;
				  }
			  }else{
				  $datainserr = "Invalid Email Id";
				  header('location: '.base_url().'forgotpassword/index_error/'.$datainserr);
				  die;
			  }
			  die;
			  
		}else{
			
			$this->load->view('header2');
			$this->load->view('forgotpassword');
			$this->load->view('footer');
		}
		
		
	}
	public function index_error(){
			$alertmsg = $this->uri->segment(3);
			$alertmsg = urldecode($alertmsg);
			echo '<script language="javascript">';
			echo 'alert("'.$alertmsg.'")';  //not showing an alert box.
			echo '</script>';
			$this->load->view('header');
			$this->load->view('forgotpassword');
			$this->load->view('footer');
			
	}

	
}