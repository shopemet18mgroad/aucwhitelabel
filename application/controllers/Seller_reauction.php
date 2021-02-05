<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_reauction extends CI_Controller {

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
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Admin_model');
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "SELLER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
		$sess = array('sessi'=>$this->session->userdata('username'));
		
		$retrivevaltmp = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
		$retrivevaltmp1 = urldecode($this->uri->segment(4));
		$retriveval = array('sauctionid'=>$retrivevaltmp);
		$retriveval1 = array('sauctionid'=>$retrivevaltmp,'slotno'=>$retrivevaltmp1);
		//print_r($retriveval); die;
		$data['scomp'] = $this->Admin_model->getdatafromtable('auction', $retriveval);
		$data['scomps'] = $this->Admin_model->getdatafromtable('addlot', $retriveval1);
		//print_r($data['scomps']); die;
	//print_r($data['scomp']); die;
		$this->load->view('seller/header',$sess);
		$this->load->view('seller/reauction',$data);
		$this->load->view('seller/footer');
		
	}
	}
}
