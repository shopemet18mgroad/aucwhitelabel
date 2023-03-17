<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_addbatch_info extends CI_Controller {

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
			$sname = $this->input->post('sname');
			 //$slotno = $this->input->post('slotno'); 
			$slotname = $this->input->post('slotname');
			$scategory = $this->input->post('scategory');
			$sdescription = $this->input->post('sdescription');
			//$slotlocation = $this->input->post('slotlocation');	
			//$slastdateemdsub = $this->input->post('slastdateemdsub');
			//$sminincre = $this->input->post('sminincre');
			//$sprice = $this->input->post('sprice');
			//$sstartbidprice = $this->input->post('sstartbidprice');
			$sqty = $this->input->post('sqty');
			$sunitmeasurment = $this->input->post('sunitmeasurment');
			//$sbidbase = $this->input->post('sbidbase');
			//$sgst = $this->input->post('sgst');
			$shsncode = $this->input->post('shsncode');
			//$sothertax = $this->input->post('sothertax');
			//$semdamount = $this->input->post('semdamount');
			//$sliftingperiod2 = $this->input->post('sliftingperiod2');
			//$sliftingperiod = $this->input->post('sliftingperiod');
			//$spcbcertificate = $this->input->post('spcbcertificate');
				
			/* if($this->input->post('spcbcertificate')){
					$spcbcertificate = true;
			}else {
				$spcbcertificate = false;
			} */			
					
			
			$this->load->model('Admin_model');
			
			$srr = array('tenderid'=>$sauctionid);
			$data1 = $this->Admin_model->getdatafromtable('tender_batch',$srr);
				if($data1){
					$lottmp = count($data1);
					 //echo "Hi"; die;
					$slotno = $lottmp + 1;
				}else{
					$slotno = 1;
				}
			
			$data = array('tenderid' => $sauctionid, 'tenderer' => $sname, 'tslotno' => $slotno, 'batchname' => $slotname, 'category' => $scategory, 'batchdes' => $sdescription,  'batchreqqty' => $sqty, 'batchunits' => $sunitmeasurment, 'batchhsncode' => $shsncode);
			
			$status = $this->Admin_model->insert('tender_batch', $data);
			
			


			 $transfer = array('auctionid' => $sauctionid, 'category' => $scategory,'sname'=> $sname);
			   if($status){
				  $this->session->set_flashdata('txdata',$transfer);
				  redirect('../Seller_editforthcomtenders');
			  }else{
				   header('location: ./Seller_addlot/index/');
		
			}
			
			if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "SELLER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
		$sess = array('sessi'=>$this->session->userdata('username'));	
		$this->load->view('seller/header',$sess);
		$this->load->view('seller/addbatch');
		$this->load->view('seller/footer');
		}
	}
		 else if($this->input->post('submit2')){
			$sauctionid = $this->input->post('sauctionid');
			$sname = $this->input->post('sname');
			 //$slotno = $this->input->post('slotno'); 
			$slotname = $this->input->post('slotname');
			$scategory = $this->input->post('scategory');
			$sdescription = $this->input->post('sdescription');
			//$slotlocation = $this->input->post('slotlocation');	
			//$slastdateemdsub = $this->input->post('slastdateemdsub');
			//$sminincre = $this->input->post('sminincre');
			//$sprice = $this->input->post('sprice');
			//$sstartbidprice = $this->input->post('sstartbidprice');
			$sqty = $this->input->post('sqty');
			$sunitmeasurment = $this->input->post('sunitmeasurment');
			//$sbidbase = $this->input->post('sbidbase');
			//$sgst = $this->input->post('sgst');
			$shsncode = $this->input->post('shsncode');
			//$sothertax = $this->input->post('sothertax');
			//$semdamount = $this->input->post('semdamount');
			//$sliftingperiod2 = $this->input->post('sliftingperiod2');
			//$sliftingperiod = $this->input->post('sliftingperiod');
			//$spcbcertificate = $this->input->post('spcbcertificate');
				
			 
			 $this->load->model('Admin_model');
			 
			 $srr = array('tenderid'=>$sauctionid);
			$data1 = $this->Admin_model->getdatafromtable('tender_batch',$srr);
				if($data1){
					$lottmp = count($data1);
					 //echo "Hi"; die;
					$slotno = $lottmp + 1;
				}else{
					$slotno = 1;
				}
			 
			 $data5 = array('tenderid' => $sauctionid, 'tenderer' => $sname, 'tslotno' => $slotno, 'batchname' => $slotname, 'category' => $scategory, 'batchdes' => $sdescription,  'batchreqqty' => $sqty, 'batchunits' => $sunitmeasurment, 'batchhsncode' => $shsncode);
			
             $status1 = $this->Admin_model->insert('tender_batch', $data5);
             //var_dump($status);die;
			 
			 	 $transfer1 = array('auctionid' => $sauctionid, 'category' => $scategory,'sname' => $sname, 'lotno' => $slotno);
				 
						  if($status1){
				  $this->session->set_flashdata('txdata',$transfer1);
				  redirect('../Seller_addtenders');
				  
			  }else{
				   header('location: ./Seller_addlot1/index/');
		
			}
			if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "SELLER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
		$sess = array('sessi'=>$this->session->userdata('username'));
         $this->load->view('seller/header',$sess);
		$this->load->view('seller/addbatch');
		$this->load->view('seller/footer');

			  }
	}	
		
	}

}        
			
	
	

