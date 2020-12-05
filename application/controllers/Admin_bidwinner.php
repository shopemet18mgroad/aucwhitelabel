<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_bidwinner extends CI_Controller {

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
		$this->load->helper(array('url','html','date'));
		date_default_timezone_set('Asia/Kolkata');
		$time =  Date('Y-m-d H:i:s');
		$this->load->library('session'); 
		//echo $this->session->userdata('auth');
		if(!$this->session->has_userdata('username')  || $this->session->userdata('auth') != "ADMIN"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
		$this->load->model('Admin_model');
		$sapproval = array('sapproval'=>false);
		$data['sqldat'] = $this->Admin_model->getdatafromtable('biddercart', $sapproval);
		
				//print_r($data['sqldat']); die;
		
		$xr = 0;
		   $xdata = array(); 
		   
		 foreach($data['sqldat'] as $datsql){ 	
		$auctmp = $datsql->auctionid;
		$lotmp = $datsql->lotno;
		
		
		//$mybitvalref = $datsql->mybid_val;
					

		//print_r($mybitvalref); die;
		$datap = $this->Admin_model->maxbidvalue($auctmp,$lotmp);
		//print_r($datap); die;

		$myauction = $datap[0]->sauctionid;
		$mylotno = $datap[0]->slotno;
		$mybitvalrec = $datap[0]->bidderusername;
		$aucbidamount = $datap[0]->bidamount;
		//print_r($aucbidamount); die;
		$mybitvaldatetime = $datap[0]->Date_time;
		//$myapproval = $datap[0]->sapproval;
		 if($aucbidamount){   
			$data['sqldatarec'][$xr] = $myauction.'|'.$mylotno.'|'.$mybitvalrec.'|'.$aucbidamount.'|'.$mybitvaldatetime;
			
			$xr++; 
		   } else{
			
		}    
		
		}
		//print_r($data['sqldatarec']);die;
		
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/bidwinner',$data);
		$this->load->view('admin/footer');
}}
	
	
	public function setdeactive_winner(){
		
		$compnameurl = $this->uri->segment(3);
		
		$compnameurl = urldecode($compnameurl);
		//print_r($compnameurl); die;
		$compnameurl2 = explode('|',$compnameurl);
		$compname = $compnameurl2[0];
	
		$comp = str_ireplace('-','/',$compnameurl2[1]);
		//print_r($comp); die;
		$this->load->model('Admin_model');
		$sapproval = array('sapproval'=>true);
		$adaction2 = array('lotno'=>$compname,'auctionid'=>$comp);
		
		$query = $this->Admin_model->update_custom('biddercart',$sapproval, $adaction2, $adaction2);
		if($compname){
			echo "HI";
		}else{
			echo "BYE";
		}
	
}
	
	
	
}
