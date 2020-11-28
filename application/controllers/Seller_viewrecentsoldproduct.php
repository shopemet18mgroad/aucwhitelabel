<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_viewrecentsoldproduct extends CI_Controller {

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
		$sess = array('sessi'=>$this->session->userdata('username'));
		

		$this->load->model('Admin_model');
		$sapproval = array('sapproval'=>false);
		$data['sqldat'] = $this->Admin_model->getdatafromtable('biddercart', $sapproval); 
		
	//print_r($data['sqldat'][1]); die;
	//$data['sqldat'] = $this->Admin_model->datebetweensess2('biddercart',$time,$sess['sessi']);
		
		   $xr = 0;
		   $xdata = array(); 
		   
		foreach($data['sqldat'] as $datsql){ 	
		$auctmp = $datsql->auctionid;
		$auclottmp = $datsql->lotno;
		$username = $sess['sessi'];
		$mybitvalref = $datsql->mybid_val;
		
		$datap = $this->Admin_model->maxbidvalue($auctmp, $auclottmp);
		$mybitvalrec = $datap[0]->bidderusername;
		$aucbidamount = $datap[0]->bidamount;
		$mybitvaldatetime = $datap[0]->Date_time;
		$myapproval = $datap[0]->sapproval;
		if($username === $mybitvalrec){
			$data['sqldatarec'][$xr] = $auctmp.'|'.$auclottmp.'|'.$mybitvalrec.'|'.$aucbidamount.'|'.$mybitvaldatetime.'|'.$myapproval;
			$xr++;
		}else{
			
		}
		
		}
		
		$sess = array('sessi'=>$this->session->userdata('username'));		
		$this->load->helper('url');
		$this->load->view('seller/header',$sess);
		$this->load->view('seller/viewrecentsoldproduct',$data);
		$this->load->view('seller/footer');
		
	}
	
}
