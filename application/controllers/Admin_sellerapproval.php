<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_sellerapproval extends CI_Controller {

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
		
		$query = $this->Admin_model->getdatafromtable('sellerprofile', $adaction);
		$adac['activestat']= $query->result_array();
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/sellerapproval',$adac);
		$this->load->view('admin/footer');
		
	}
	public function setdeactive_seller(){
		
		$compname = $this->uri->segment(3);
		$this->load->model('Admin_model');
		$adaction = array('adaction'=>true);
		$adaction2 = array('scomapnyname'=>$compname);
		$query = $this->Admin_model->update_custom('sellerprofile', $adaction, $adaction2, $adaction2);
		if($compname){
			echo "HI";
		}else{
			echo "BYE";
		}
	
	}
	
}
