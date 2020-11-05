<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyer_basicinfo_update extends CI_Controller {

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
	//	$bname = $this->input->post('bname');
		//$bcompany = $this->input->post('bcompany');
	//	$bcontactperson = $this->input->post('bcontactperson');
	//	$bcomptype = $this->input->post('bcomptype');
		$baddress  = $this->input->post('baddress');
		$bpin = $this->input->post('bpin');

		//$bstate = $this->input->post('bstate');
		//$bcountry  = $this->input->post('bcountry');
		//$bpcb  = $this->input->post('bpcb');
		//=================================================================================================
		//==================================================================
		$data2 = array (/*'bname' => $bname,'bcompany' => $bcompany, 'bcontactperson' => $bcontactperson, 'bcomptype' => $bcomptype, */ 'baddress' => $baddress, 'bpin' => $bpin, 'bstate'=> $bstate,/*  'bcountry' => $bcountry, 'bpcb' => $bpcb */);
		//$this->load->view('xya', $data);
		
		$datainserr = "Data Inserted Successfully";
		$updatech = array('baddress' => $baddress);
		$status = $this->Admin_model->update_custom('buyerprofile',$data2,$updatech,$updatech);
		
		header('location: '.base_url().'buyer_dashboard/index/'.$datainserr);
		}
	}

	
}
