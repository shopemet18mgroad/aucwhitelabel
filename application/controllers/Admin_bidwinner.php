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
		$snamechk2a = array('saucclosedate_time <'=>$time,);
		
		$aucdetails = $this->Admin_model->getdatafromtable('auction', $snamechk2a); 
	
		if($aucdetails){
			
		foreach($aucdetails as $aucdet){
			$auct = $aucdet->sauctionid;
			$aucdetarray = array('sauctionid'=>$auct);
			$data['sqldat'] = $this->Admin_model->getdatafromtable('addlot',$aucdetarray );
			$xr = 0;
				$xdata = array(); 
				   
				foreach($data['sqldat'] as $datsql){ 	
				
				$auctmp = $datsql->sauctionid;
				
				$auclottmp = $datsql->slotno;
				//$username = $sess['sessi'];
				$auc = array('auctionid'=>$auctmp,'lotno'=>$auclottmp);
				$dat['sql']= $this->Admin_model->getdatafromtable('biddercart',$auc );
				foreach($dat['sql'] as $d){
				$biddername =$d->bidderusername;
				$approv =$d->sapproval;
				
				$datap = $this->Admin_model->maxbidvalue($auctmp, $auclottmp);
				 
				$mybitvalrec = $datap[0]->bidderusername;
				$aucbidamount = $datap[0]->bidamount;
				$mybitvaldatetime = $datap[0]->Date_time;
				$approval = $datap[0]->sapproval;
				if ($approv){
			$approval = false;
		}
		else{
			$approval = true;
		}
				//$bidderdatsql = array('bidderusername'=> $mybitvalrec,'mybid_val'=>$aucbidamount, 'auctionid'=>$auctmp,'lotno'=> $auclottmp);
				//$bidderdatsqloutput = $this->Admin_model->getdatafromtable('biddercart',$bidderdatsql);
				//$bidderdatsqloutput->sapproval;
				if($biddername === $mybitvalrec && $approval == false){$data['sqldatarec'][] = $auctmp.'|'.$auclottmp.'|'.$mybitvalrec.'|'.$aucbidamount.'|'.$mybitvaldatetime;
					}
				
			
				}
					
				}
				
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
