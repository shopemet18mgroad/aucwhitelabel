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
		$data = array();
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
		$snamechk2a = array('saucclosedate_time <'=>$time);
		
		$aucdetails = $this->Admin_model->getdatafromtable('auction', $snamechk2a); 
	
		if($aucdetails){
			
		foreach($aucdetails as $aucdet){
			$auct = $aucdet->sauctionid;
			$aucdetarray = array('auctionid'=>$auct,'sapproval'=>false);
			$data['sqldat'] = $this->Admin_model->getdatafromtable('biddercart',$aucdetarray );
			
			$xr = 0;
				$xdata = array(); 
				   
				foreach($data['sqldat'] as $datsql){ 	
				
				$auctmp = $datsql->auctionid;
				
				$auclottmp = $datsql->lotno;
				$busername = $datsql->bidderusername;
				$mybitvalref = $datsql->mybid_val;
				$approv = $datsql->sapproval;
				
				
				$datap = $this->Admin_model->maxbidvalue($auctmp, $auclottmp);
				// print_r($datap);die;
				$aucbidamount = $datap[0]->bidamount;
				$maxvalue = array('bidamount'=>$aucbidamount);
			
				$bidder = $this->Admin_model->getdatafromtable('biddingdata',$maxvalue);
				if(count($bidder)){
				$mybitvalrec = $bidder[0]->bidderusername;
				
				$mybitvaldatetime = $bidder[0]->Date_time;
				$approval = $bidder[0]->sapproval;
				
				//print_r($approval); die;
				
				if($aucbidamount === $mybitvalref){$data['sqldatarec'][] = $auctmp.'|'.$auclottmp.'|'.$mybitvalrec.'|'.$aucbidamount.'|'.$mybitvaldatetime;
				$xr++;
					}
				
			
				
					
				}}
				
		//$xr++;
		}

		}
	
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/bidwinner',$data);
		$this->load->view('admin/footer');
}}
	
	
	public function setdeactive_winner(){
		
		$compnameurl = $this->uri->segment(3);
		
		$compnameurl = urldecode($compnameurl);
		
		$compnameurl2 = explode('|',$compnameurl);
		$compname = $compnameurl2[0];
	
		$comp = str_ireplace('-','/',$compnameurl2[1]);
		$biddername = $compnameurl2[2];
		$bidamount = $compnameurl2[3];
		
		//print_r($comp); die;
		$this->load->model('Admin_model');
		$sapproval = array('sapproval'=>true);
		$adaction2 = array('lotno'=>$compname,'auctionid'=>$comp,'bidderusername'=>$biddername,'mybid_val'=>$bidamount);
		
		$query = $this->Admin_model->update_custom('biddercart',$sapproval, $adaction2, $adaction2);
		if($compname){
			echo "HI";
		}else{
			echo "BYE";
		}
	
}
	
	
	
}
