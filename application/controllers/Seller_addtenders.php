<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_addtenders extends CI_Controller {

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
		if($this->uri->segment(4)){
			$errormsg = urldecode($this->uri->segment(4));
			echo '<script language="javascript">';
			echo 'alert("'.$errormsg.'")';
			echo '</script>';
		}
		$this->load->library('session');
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "SELLER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
		$data = $this->session->flashdata('txdata');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('seller/header',$sess);
		$this->load->view('seller/addbatch',$data);
		$this->load->view('seller/footer');
		
	}
}
}