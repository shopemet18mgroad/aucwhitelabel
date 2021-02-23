<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seller_editsellerprofile extends CI_Controller
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
		$this->load->model('Admin_model');
		$scomapnyname = $this->uri->segment(3);

		// checking the session 
		if (!$this->session->has_userdata('username') || $this->session->userdata('auth') != "SELLER") {
			$datainserr = "Invalid Login Session";
			//if not logged in the it will redirect to index error
			header('location: ' . base_url() . 'login/index_error/' . $datainserr);
			die;
		} else {
			$sess = array('sessi' => $this->session->userdata('username'));
			$active = array('susername' => $sess['sessi']);
			//getting data from the getdatafromtable and checking with the username 
			$query = $this->Admin_model->getdatafromtable('sellerprofile', $active);
			$data['sqldata'] = $query;
			//$scomapnyname  to con firm the campany nam too 
			$data['scomapnyname'] = $scomapnyname;
			$this->load->view('seller/header', $sess);
			$this->load->view('seller/editsellerprofile', $data);
			$this->load->view('seller/footer');

		}
	}
}
