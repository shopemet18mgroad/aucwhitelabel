<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_basicinfo_update extends CI_Controller {

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
		$this->load->library('session');
		$this->load->model('Admin_model');
		//$busername = $this->uri->segment(3);	
		$saddress  = $this->input->post('saddress');
		$saddress2 = serialize($saddress);
		$saddresscount  = $this->input->post('saddresscount');
		$saddresscount = serialize($saddresscount);
		$scity = $this->input->post('scity');
		$spin = $this->input->post('spin');
		
		
	//=================================================================================================
		//==================================================================
		$data2 = array ('saddress' => $saddress2, 'saddresscount' => $saddresscount, 'scity' => $scity, 'spin' => $spin);
		//$this->load->view('xya', $data);
		
		$datainserr = "Data Inserted Successfully";
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		
		$hidden = array('susername'=>$sess['sessi']);
		
		//$updatech = array('baddress' => $baddress);
		$status = $this->Admin_model->update_custom('sellerprofile',$data2,$hidden,$hidden);
		
		header('location: '.base_url().'Seller_dashboard/index/'.$datainserr);
		}
	}


	
}
