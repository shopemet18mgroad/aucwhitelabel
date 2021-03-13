<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_addlot_update extends CI_Controller {

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
		$this->load->library('session');
		$this->load->library('fileupload');
		$this->load->helper(array('url','form','file','html'));
		$this->load->model('Admin_model');
		$sauctionid = $this->input->post('sauctionid');
		$sname = $this->input->post('sname');
		$slotno = $this->input->post('slotno');
		$slotname = $this->input->post('slotname');
		$scategory  = $this->input->post('scategory');
		$sdescription = $this->input->post('sdescription');
		$slotlocation = $this->input->post('slotlocation');
		$sminincre = $this->input->post('sminincre');
		$sprice  = $this->input->post('sprice');
		$sstartbidprice  = $this->input->post('sstartbidprice');
		$sqty = $this->input->post('sqty');
		$sunitmeasurment = $this->input->post('sunitmeasurment');
		$sbidbase  = $this->input->post('sbidbase');
		$sgst = $this->input->post('sgst');
		$shsncode = $this->input->post('shsncode');
		$sothertax = $this->input->post('sothertax');
		$semdamount = $this->input->post('semdamount');
		$sliftingperiod2 = $this->input->post('sliftingperiod2');
		$sliftingperiod = $this->input->post('sliftingperiod');
		$spcbcertificate = $this->input->post('spcbcertificate');
		$status = $this->input->post('status');
		if($status){
			$status = false;
		}
		
		
		
		
		
		
		//==================================================================
		$data2 = array('sauctionid' => $sauctionid,'sname' => $sname, 'slotno' => $slotno, 'slotname' => $slotname, 'scategory' => $scategory, 'sdescription' => $sdescription, 'slotlocation'=> $slotlocation,  'sprice' => $sprice, 'sstartbidprice' => $sstartbidprice, 'sqty' => $sqty,  'sunitmeasurment' => $sunitmeasurment,  'sbidbase' => $sbidbase,  'sgst' => $sgst,'shsncode' => $shsncode,  'sothertax' => $sothertax,  'semdamount' => $semdamount,  'sliftingperiod2' => $sliftingperiod2,  'sliftingperiod' => $sliftingperiod, 'spcbcertificate' => $spcbcertificate,'status' => $status);
		//$this->load->view('xya', $data);
		$datainserr = "Data Inserted Successfully";
		$updatech = array('sauctionid' => $sauctionid,'slotno' => $slotno);
		$status2 = $this->Admin_model->update_custom('addlot',$data2,$updatech,$updatech);
		
		
			header('location: '.base_url().'admin_editforthcom/index/'.$datainserr);
		
		
			
		
	
		
	}
	

	
}
