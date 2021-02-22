<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seller_dashboard extends CI_Controller
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
		$this->load->library('session');
		//Checking the whether the session is set with username or not 
		//if session is set with the username will give access to the page or says invalid session
		//it will check with the auth variable  is seller or not if not autologout
		if (!$this->session->has_userdata('username') || $this->session->userdata('auth') != "SELLER") {
			$datainserr = "Invalid Login Session";
			header('location: ' . base_url() . 'login/index_error/' . $datainserr);
			die;
		} else {
			$this->load->model('Admin_model');
			//$companyname has the value of company name 
			$scomapnyname = $this->uri->segment(3);
			//
			//Checking the session
			//$sess hold the value of username from the session 
			$sess = array('sessi' => $this->session->userdata('username'));
			//$active hold the username
			$active = array('susername' => $sess['sessi']);
			//Fetching data from the sellerprofile 
			$query = $this->Admin_model->getdatafromtable('sellerprofile', $active);
			$data['sqldata'] = $query;
			$data['scomapnyname'] = $scomapnyname;
			$this->load->view('seller/header', $sess);
			$this->load->view('seller/index', $data);
			$this->load->view('seller/footer');
		}
	}
}
