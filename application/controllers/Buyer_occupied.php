<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyer_occupied extends CI_Controller {

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
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "BUYER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
		$sess = array('sessi'=>$this->session->userdata('username'));

		
		$data['sqldat'] = $this->Admin_model->datebetweensess2('biddercart',$time,$sess['sessi']);
		
		   $xr = 0;
		   $xdata = array(); 
			
		foreach($data['sqldat'] as $datsql){ 	
		$auctmp = $datsql->auctionid;
		$auclottmp = $datsql->lotno;
		$username = $sess['sessi'];
		$mybitvalref = $datsql->mybid_val;
		$abc = array('auctionid'=>$auctmp,'lotno'=>$auclottmp,'bidderusername'=>$username );
		$act = $this->Admin_model->getdatafromtable('biddercart', $abc);
		//print_r($act); die;
		$approv =$act[0]->sapproval;
		
		//$active2 = array('auctionid'=>$auctmp,'lotno'=>$auclottmp,'bidderusername'=>$sess['sessi']);
		//$query = $this->Admin_model->getdatafromtable('biddingdata', $active2);
		//$tmpbidval = $query[0]->mybid_val;
		//$active3 = array('sauctionid'=>$auctmp,'slotno'=>$auclottmp);
		//$data['bidamt'] = $this->Admin_model->getdatafromtable('biddingdata', $active3); 
		//$data['tmpbidamt'] = $data['bidamt'][0]->bidamount; 
		$datap = $this->Admin_model->maxbidvalue($auctmp, $auclottmp);
		
		$mybitvalrec = $datap[0]->bidderusername;
		$aucbidamount = $datap[0]->bidamount;
		$mybitvaldatetime = $datap[0]->Date_time;
		$approval = $datap[0]->sapproval;
		//print_r($approval);die;
		if ($approv){
			$approval = true;
		}
		else{
			$approval = false;
		}
		if($username === $mybitvalrec && $approval == true){
			$data['sqldatarec'][$xr] = $auctmp.'|'.$auclottmp.'|'.$aucbidamount.'|'.$mybitvaldatetime;
			$xr++;
		}else{
			
		}
		//print_r($tmpbidamt); die;
	//print_r($data);die;
	  
		//$active4 = array('bidderusername'=>$sess['sessi']);
		/*  $active4 = array('sauctionid'=>$auctmp,'slotno'=>$auclottmp);
		$query3 = $this->Admin_model->getdatafromtable('biddercart',$active4);  */
		
	
		//print_r ($maxbidvalue); die; 
		
	
 		/*  if ($maxbidvalue = $tmpbidamt){
			 $xdata[$xr] = $maxbidvalue[0];
		$xr++;
		}
		else{
			echo "not ok";
	}   */ 
				 	} 
		 

		//$check_array = array('dat'=>);
		$this->load->view('buyer/header',$sess);
		$this->load->view('buyer/occupied',$data);
		$this->load->view('buyer/footer');		
	

}


}
}