<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyer_basicpassword_update extends CI_Controller {

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
			
		$bpassword=$this->input->post('bnewpassword');
		$bpassword = base64_encode($bpassword);
			
		//=================================================================================================
		//==================================================================
		$data4 = array ('bpassword' => $bpassword);
		//$this->load->view('xya', $data);
		
		
		$datainserr = "Data Inserted Successfully";
		$sess = array('sessi'=>$this->session->userdata('username'));
		
		$hidden = array('busername'=>$sess['sessi']);

		$status = $this->Admin_model->update_custom('buyerprofile',$data4,$hidden,$hidden);
		
		header('location: '.base_url().'buyer_dashboard/index/'.$datainserr);
		}
	}
}	

