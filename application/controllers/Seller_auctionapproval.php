<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_auctionapproval extends CI_Controller {

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
		$this->load->model('Admin_model');
		$this->load->library('session');
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "SELLER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
		$sess['sessi'] = $this->session->userdata('username');
		//$sess['sessi']= "Altec";
		
		$this->load->model('Admin_model');
		$sapproval = array('sapproval'=>false);
		$snamechk = array('susername'=>$sess['sessi']);
		$data['sqld'] = $this->Admin_model->getdatafromtable('sellerprofile', $snamechk);
		$snameseller= $data['sqld'][0]->sname;	
	
	    $snamechk2a = array('sname'=>$snameseller,'saucclosedate_time <'=>$time,);
		
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
				
				$abc = array('auctionid'=>$auctmp,'lotno'=>$auclottmp,'bidderusername'=>$busername );
				$act = $this->Admin_model->getdatafromtable('biddercart', $abc);
			
			
				$approv =$act[0]->sapproval;
				
				
				$datap = $this->Admin_model->maxbidvalue($auctmp, $auclottmp);
			
				
				$aucbidamount = $datap[0]->bidamount;
				$lotname = $datap[0]->slotname;
				$Bidbase = $datap[0]->sbidbase;
				
				$maxvalue = array('sauctionid'=>$auctmp,'slotno'=>$auclottmp,'bidamount'=>$aucbidamount);
				$bidder = $this->Admin_model->getdatafromtable('biddingdata',$maxvalue);
				//print_r($bidder);die;
				if(count($bidder)){
				$mybitvaldatetime = $bidder[0]->Date_time;
				$mybitvalrec = $bidder[0]->bidderusername;
				//
				$approv =$bidder[0]->sapproval;
					
			
				if($aucbidamount === $mybitvalref ){$data['sqldatarec'][] = $auctmp.'|'.$auclottmp.'|'.$lotname.'|'.$mybitvalrec.'|'.$aucbidamount.'|'.$mybitvaldatetime.'|'.$Bidbase;
				
					$xr++;
					}
				
				}
		}
		}
				
		
		}

		
	


		$sess = array('sessi'=>$this->session->userdata('username'));		
					
		 
		$this->load->view('seller/header',$sess);
		$this->load->view('seller/auctionapproval',$data);
		$this->load->view('seller/footer');
		
	}
	}
	public function setdeactive(){
		
		$compnameurl = $this->uri->segment(3);
		
		$compnameurl = urldecode($compnameurl);
		//print_r($compnameurl); die;
		$compnameurl2 = explode('|',$compnameurl);
		$lotno = $compnameurl2[0];
	
		$auctionid = str_ireplace('-','/',$compnameurl2[1]);
		$biddername = $compnameurl2[2];
		$bidamount = $compnameurl2[3];
		//$datetime = $compnameurl2[4];
		//print_r($comp); die;
		$this->load->model('Admin_model');
		$sapproval = array('sapproval'=>true);
		
		$adaction2 = array('lotno'=>$lotno,'auctionid'=>$auctionid,'bidderusername'=>$biddername,'mybid_val'=>$bidamount);
		//print_r($adaction2);die;
		$query = $this->Admin_model->update_custom('biddercart',$sapproval, $adaction2, $adaction2);
		if($lotno){
			echo "HI";
		}else{
			echo "BYE";
		}
	
}
}
