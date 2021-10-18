<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_emdrequest extends CI_Controller {

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
		$this->load->helper(array('url','html'));	
		$this->load->library('session');
		//echo $this->session->userdata('auth');
		if(!$this->session->has_userdata('username')  || $this->session->userdata('auth') != "ADMIN"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
		$this->load->model('Admin_model');
		$emdrequest = array('emdrequest'=>3);
		$query = $this->Admin_model->getdatafromtable('biddercart', $emdrequest);
		$data['sqldat']= $query;
		
		$sess = array('sessi'=>$this->session->userdata('username'));



		$this->load->view('admin/header',$sess);
		$this->load->view('admin/emdrequest',$data);
		$this->load->view('admin/footer');
		}
	}
	
		public function setdeactive_buyer_emd(){
		
		$compnameurl = $this->uri->segment(3);
		//print_r($compnameurl); die;
		//$compnameurl3 = urldecode($this->uri->segment(4));
		
		$compnameurl = urldecode($compnameurl);
		$compnameurl2 = explode('|',$compnameurl);
		$compnameurl3 = explode('|',$compnameurl);
		$compname = $compnameurl2[0];
	
		$comp = str_ireplace('-','/',$compnameurl2[1]);
		$com = urldecode($compnameurl3[2]);
		$this->load->model('Admin_model');
		$emdrequest = array('emdrequest'=>true);
		$adaction2 = array('lotno'=>$compname,'auctionid'=>$comp,'bidderusername'=>$com);
		$query = $this->Admin_model->update_custom('biddercart',$emdrequest, $adaction2, $adaction2);
		if($compname){
			echo "HI";
		}else{
			echo "BYE";
		}
		}
		
		public function setdeactive_buyer_emd1(){
		
		$lotno = urldecode($this->uri->segment(3));
		$auctionid = urldecode(str_ireplace('-','/',$this->uri->segment(4)));
		//$auctionid = urldecode($this->uri->segment(4));
		$bidderusername = urldecode($this->uri->segment(5));
		
		$this->load->model('Admin_model');
		$adaction2 = array('lotno'=>$lotno,'auctionid'=>$auctionid,'bidderusername'=>$bidderusername);
		
		//print_r($adaction2);die;
		$query = $this->Admin_model->delete_data('biddercart',$adaction2);
		$this->load->helper('url');
		$this->load->library('session');
		
		
		if($lotno){
			header('location: '.base_url().'admin_emdrequest/index/');
		}else{
			echo "BYE";
		}
	
	}
	
	

	
}
