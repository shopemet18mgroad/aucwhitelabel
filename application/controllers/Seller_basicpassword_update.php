<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_basicpassword_update extends CI_Controller {

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
			
		$spassword=$this->input->post('snewpassword');
		$spassword = base64_encode($spassword);
			
		//=================================================================================================
		//==================================================================
		$data4 = array ('spassword' => $spassword);
		//$this->load->view('xya', $data);
		
		
		$datainserr = "Data Inserted Successfully";
		$sess = array('sessi'=>$this->session->userdata('username'));
		
		$hidden = array('susername'=>$sess['sessi']);

		$status = $this->Admin_model->update_custom('sellerprofile',$data4,$hidden,$hidden);
		
		header('location: '.base_url().'seller_dashboard/index/'.$datainserr);
		}
	}
}	

