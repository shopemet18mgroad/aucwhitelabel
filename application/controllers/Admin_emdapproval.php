<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_emdapproval extends CI_Controller {

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
			
		$this->load->model('Admin_model');
		$emd_paid_dd = array('emd_paid_dd'=>false);
		$emd_paid = array('emd_paid'=>false);
		$query = $this->Admin_model->getdatafromtable('biddercart', $emd_paid_dd);
		$data['sqldat']= $query;
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));

		$this->load->view('admin/header',$sess);
		$this->load->view('admin/emdapproval',$data);
		$this->load->view('admin/footer');
		
	}
	
	public function setdeactive_buyer_emd_dd(){
	
		$compnameurl = $this->uri->segment(3);
		$compnameurl = urldecode($compnameurl);
		$compnameurl2 = explode('|',$compnameurl);
		$compname = $compnameurl2[0];
	
		$comp = str_ireplace('-','/',$compnameurl2[1]);
		
		$this->load->model('Admin_model');
		$emd_paid_dd = array('emd_paid_dd'=>true);
		$adaction2 = array('lotno'=>$compname,'auctionid'=>$comp);
		$query = $this->Admin_model->update_custom('biddercart',$emd_paid_dd, $adaction2, $adaction2);
		if($compname){
			echo "HI";
		}else{
			echo "BYE";
		}
	
}
}
