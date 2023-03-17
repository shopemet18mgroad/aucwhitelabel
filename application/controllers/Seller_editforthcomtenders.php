<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_editforthcomtenders extends CI_Controller {

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
		$this->load->helper(array('url','html'));
		$this->load->library('session');
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "SELLER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
			//Loading the Admin model 
		$this->load->model('Admin_model');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$active = array('susername'=>$sess['sessi']);
		$data['sqldata'] = $this->Admin_model->getdatafromtable('sellerprofile', $active);
		$query = $data['sqldata'][0]->sname;
		$data['sqld'] = $this->Admin_model->getdatafromtablejoin('tender','sellerprofile', 'sname',$query);
		// This will check for the session username and load the views 
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('seller/header',$sess);
		$this->load->view('seller/editforthcomtenders',$data);
		$this->load->view('seller/footer');
		}
	}
	public function index_alert()
	{
 // loading the helper array with the uri segment 
		$this->load->helper(array('url','html'));
		$retrivevaltmp2 = urldecode($this->uri->segment(3));
		echo '<script language="javascript">';
			echo 'alert("'.$retrivevaltmp2.'")';  //not showing an alert box.
			echo '</script>';
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('seller/header',$sess);
		$this->load->view('seller/editforthcomtenders');
		$this->load->view('seller/footer');
		
	}
}