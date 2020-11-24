<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_basicaccount_update extends CI_Controller {

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
		if($this->input->post('submit'))
		{
		$this->load->helper(array('url','html'));
		$this->load->model('Admin_model');
		$this->load->library('session');
		
		$sbankername  = $this->input->post('sbankername');
		$saccountnumber	 = $this->input->post('saccountnumber');
		$sbranch  = $this->input->post('sbranch');
		$sifsccode = $this->input->post('sifsccode');
		//=================================================================================================
		//==================================================================
		$data3 = array ('sbankername' => $sbankername, 'saccountnumber' => $saccountnumber	, 'sbranch' => $sbranch, 'sifsccode' => $sifsccode);
		
		//$this->load->view('xya', $data);
		
		$datainserr = "Data Inserted Successfully";
		$sess = array('sessi'=>$this->session->userdata('username'));
		$hidden = array('susername'=>$sess['sessi']);
		$status = $this->Admin_model->update_custom('sellerprofile',$data3,$hidden,$hidden);
		
		header('location: '.base_url().'Seller_dashboard/index/'.$datainserr);
		}
	}
	
}
