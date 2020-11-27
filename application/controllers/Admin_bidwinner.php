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
		$this->load->model('Admin_model');
		//$this->load->library('session');
		//$sess = array('sessi'=>$this->session->userdata('username'));
		

		//$this->load->model('Admin_model');
		$sapproval = array('sapproval'=>false);
		$data['sqldat'] = $this->Admin_model->getdatafromtable('biddercart', $sapproval); 
		
	//print_r($data['sqldat'][1]); die;
	//$data['sqldat'] = $this->Admin_model->datebetweensess2('biddercart',$time,$sess['sessi']);
		
		   $xr = 0;
		   $xdata = array(); 
		   
		   	foreach($data['sqldat'] as $datsql){ 	
		$auctmp = $datsql->auctionid;
		$auclottmp = $datsql->lotno;
		
		//$username = $sess['sessi'];
		
		$mybitvalref = $datsql->mybid_val;
		print_r($mybitvalref ); die;
		$datap = $this->Admin_model->maxbidvalue($auctmp, $auclottmp);
		
		$mybitvalrec = $datap[0]->bidderusername;
		$aucbidamount = $datap[0]->bidamount;
		$mybitvaldatetime = $datap[0]->Date_time;
		$myapproval = $datap[0]->sapproval;
		if($aucbidamount === $mybitvalref){
			$data['sqldatarec'][$xr] = $auctmp.'|'.$auclottmp.'|'.$aucbidamount.'|'.$mybitvaldatetime.'|'.$myapproval;
			$xr++;
		}else{
			
		}
		
		}
		/* $this->load->model('Admin_model');
		$sapproval = array('sapproval'=>false);
		
		$query = $this->Admin_model->getdatafromtable('biddercart', $sapproval);
		
		$data2['sqldat2']= $query;*/
		
		$this->load->library('session'); 
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/bidwinner',$data);
		$this->load->view('admin/footer');
		
	}
	
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
		$adaction2 = array('slotno'=>$compname,'sauctionid'=>$comp);
		
		$query = $this->Admin_model->update_custom('biddercart',$sapproval, $adaction2, $adaction2);
		if($compname){
			echo "HI";
		}else{
			echo "BYE";
		}
	
}
	
	
	
}
