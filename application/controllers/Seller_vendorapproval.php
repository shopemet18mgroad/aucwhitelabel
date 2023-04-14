<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_vendorapproval extends CI_Controller {

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
		$this->load->model('Admin_model');
		$adaction = array('adaction'=>false);
		$query = $this->Admin_model->getdatafromtable('buyerprofile', $adaction);
		$adac['activestat']= $query;
		// $query = $this->db->get_where('buyerprofile', $adaction);
		// $adac['activestat']= $query->result_array();
		
		$this->load->library('session');
		//echo $this->session->userdata('auth');
		if(!$this->session->has_userdata('username')  || $this->session->userdata('auth') != "SELLER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('seller/header',$sess);
		$this->load->view('seller/buyerapproval',$adac);
		$this->load->view('seller/footer');
		}
	}
		public function setdeactive_buyer(){
		
		$compname = $this->uri->segment(3);
		$compname = urldecode($compname);
		$this->load->model('Admin_model');
		$adaction = array('adaction'=>true);
		$adaction2 = array('bcompany'=>$compname);
		$query = $this->Admin_model->update_custom('buyerprofile', $adaction, $adaction2, $adaction2);
		if($compname){
			echo "HI";
		}else{
			echo "BYE";
		}
	
	}
	
}
