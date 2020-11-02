<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_addlot_info extends CI_Controller {

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
	
	function __construct() {
        parent::__construct();
        
        // Load session library
        $this->load->library('session');
        // Load the captcha helper
		//$this->load->helper('captcha');
		$this->load->helper('url');
		$this->load->helper('date');
		
		date_default_timezone_set("Asia/Kolkata");
    }
    
	
    public function index(){
        // If captcha form is submitted

		$this->load->library('session');
		$data = $this->session->flashdata('txdata');
		$this->load->library('fileupload');
		$this->load->helper(array('url','form','file','html'));
            if($this->input->post('submit')){
			$sauctionid = $this->input->post('sauctionid');
			 $slotno = $this->input->post('slotno'); 
			$slotname = $this->input->post('slotname');
			$scategory = $this->input->post('scategory');
			$sdescription = $this->input->post('sdescription');
			$slotlocation = $this->input->post('slotlocation');
			$sfrominpectdate_time = $this->input->post('sfrominpectdate_time');
			$stoinpectdate_time  = $this->input->post('stoinpectdate_time');
			$semddetail = $this->input->post('semddetail');	
			$slastdateemdsub = $this->input->post('slastdateemdsub');
			$sprice = $this->input->post('sprice');
			$sstartbidprice = $this->input->post('sstartbidprice');
			$sqty = $this->input->post('sqty');
			$sunitmeasurment = $this->input->post('sunitmeasurment');
			$sbidbase = $this->input->post('sbidbase');
			$sgst = $this->input->post('sgst');
			$sothertax = $this->input->post('sothertax');
			$semdamount = $this->input->post('semdamount');
			$sliftingperiod2 = $this->input->post('sliftingperiod2');
			$sliftingperiod = $this->input->post('sliftingperiod');
			$spcbcertificate = $this->input->post('spcbcertificate');
				
			/* if($this->input->post('spcbcertificate')){
					$spcbcertificate = true;
			}else {
				$spcbcertificate = false;
			} */			
					
			
			$this->load->model('Admin_model');
			$data = array('sauctionid' => $sauctionid, 'slotno' => $slotno, 'slotname' => $slotname, 'scategory' => $scategory, 'sdescription' => $sdescription, 'slotlocation'=> $slotlocation, 'sfrominpectdate_time' => $sfrominpectdate_time, 'stoinpectdate_time' => $stoinpectdate_time, 'semddetail' => $semddetail, 'slastdateemdsub' => $slastdateemdsub, 'sprice' => $sprice, 'sstartbidprice' => $sstartbidprice, 'sqty' => $sqty, 'sunitmeasurment' => $sunitmeasurment, 'sbidbase' => $sbidbase, 'sgst' => $sgst, 'sothertax' => $sothertax, 'semdamount' => $semdamount,'sliftingperiod2' => $sliftingperiod2, 'sliftingperiod' => $sliftingperiod,  'spcbcertificate' => $spcbcertificate);
			
			$status = $this->Admin_model->insert('addlot', $data);
			
			


			 $transfer = array('auctionid' => $sauctionid, 'category' => $scategory);
			   if($status){
				  $this->session->set_flashdata('txdata',$transfer);
				  redirect('../admin_auctiondetails');
			  }else{
				   header('location: ./admin_addlot/index/');
		
			}
			
			
			
		$this->load->view('admin/header');
		$this->load->view('admin/addlot');
		$this->load->view('admin/footer');
		
	}
		 else if($this->input->post('submit2')){
			 $sauctionid = $this->input->post('sauctionid'); 
			$slotno = $this->input->post('slotno');
			$slotname = $this->input->post('slotname');
			$scategory = $this->input->post('scategory');
			$sdescription = $this->input->post('sdescription');
			$slotlocation = $this->input->post('slotlocation');
			$sfrominpectdate_time = $this->input->post('sfrominpectdate_time');
			$stoinpectdate_time  = $this->input->post('stoinpectdate_time');
			$semddetail = $this->input->post('semddetail');	
			$slastdateemdsub = $this->input->post('slastdateemdsub');
			$sprice = $this->input->post('sprice');
			$sstartbidprice = $this->input->post('sstartbidprice');
			$sqty = $this->input->post('sqty');
			$sunitmeasurment = $this->input->post('sunitmeasurment');
			$sbidbase = $this->input->post('sbidbase');
			$sgst = $this->input->post('sgst');
			$sothertax = $this->input->post('sothertax');
			$semdamount = $this->input->post('semdamount');
			$sliftingperiod2 = $this->input->post('sliftingperiod2');
			$sliftingperiod = $this->input->post('sliftingperiod');
			
			$spcbcertificate = $this->input->post('spcbcertificate');
			 
			 $this->load->model('Admin_model');
			 
			 $data5 = array('sauctionid' => $sauctionid, 'slotno' => $slotno, 'slotname' => $slotname, 'scategory' => $scategory, 'sdescription' => $sdescription, 'slotlocation'=> $slotlocation, 'sfrominpectdate_time' => $sfrominpectdate_time, 'stoinpectdate_time' => $stoinpectdate_time, 'semddetail' => $semddetail, 'slastdateemdsub' => $slastdateemdsub, 'sprice' => $sprice, 'sstartbidprice' => $sstartbidprice, 'sqty' => $sqty, 'sunitmeasurment' => $sunitmeasurment, 'sbidbase' => $sbidbase, 'sgst' => $sgst, 'sothertax' => $sothertax, 'semdamount' => $semdamount,'sliftingperiod2' => $sliftingperiod2, 'sliftingperiod' => $sliftingperiod,  'spcbcertificate' => $spcbcertificate);
			 $status1 = $this->Admin_model->insert('addlot', $data5);
			 
			 	 $transfer1 = array('auctionid' => $sauctionid, 'category' => $scategory, 'lotno' => $slotno);
				 
						  if($status1){
				  $this->session->set_flashdata('txdata',$transfer1);
				  redirect('../admin_addlot');
				  
			  }else{
				   header('location: ./admin_addlot1/index/');
		
			}
         $this->load->view('admin/header');
		$this->load->view('admin/addlot');
		$this->load->view('admin/footer');

			  }
	}	
		
	}

            
			
	
	

