<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_emdpaid extends CI_Controller {

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
		$this->load->library('session');
		//echo $this->session->userdata('auth');
		if(!$this->session->has_userdata('username')  || $this->session->userdata('auth') != "ADMIN"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/emdpaid');
		$this->load->view('admin/footer');
		}
	}
	public function emdpaid_2(){
	
		$retrivevaltmp = urldecode($this->uri->segment(3));
		
		$retriveval = array('sname'=>$retrivevaltmp);
		$this->load->model('Admin_model');

		$data['sqldata'] = $this->Admin_model->getdatafromtablejoin('addlot','auction','sauctionid',$retrivevaltmp);
		$data['sellerinfo'] = $this->Admin_model->getdatafromtable('sellerprofile',$retriveval);

		$this->load->helper('url');
		
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/emdpaid', $data);
		$this->load->view('admin/footer');
	}
	
}
