<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_salesdata extends CI_Controller {

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
		
		$retrivevaltmp = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
		$retriveval = array('sauctionid'=>$retrivevaltmp);
		
		$retrivevaltmp2 = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
		$retriveval2 = array('auctionid'=>$retrivevaltmp);
	
		$this->load->model('Admin_model');
		$data['sqldata'] = $this->Admin_model->getdatafromtable('auction',$retriveval);
		
		$datsql = $this->Admin_model->admindateclosedauc('biddercart',$time, $retrivevaltmp2);
		//print_r($datsql); die;

		  $xr = 0;
		  $xdata = array(); 
		   
		 //foreach($data['sqldat'] as $datsql){ 	
		$auctmp = $datsql[0]->auctionid;
		$lotmp = $datsql[0]->lotno;
		$mybitvalref = $datsql[0]->mybid_val;
			
		//print_r($mybitvalref); die;
		$datap = $this->Admin_model->maxbidvalue($auctmp,$lotmp);
		//print_r($datap); die;
		$myauction = $datap[0]->sauctionid;
		$mylotno = $datap[0]->slotno;
		$mybitvalrec = $datap[0]->bidderusername;
		$aucbidamount = $datap[0]->bidamount;
		$mybitvaldatetime = $datap[0]->Date_time;
		//$myapproval = $datap[0]->sapproval;
		 if($aucbidamount){   
			$data['sqldatarec'][$xr] = $myauction.'|'.$mylotno.'|'.$mybitvalrec.'|'.$aucbidamount.'|'.$mybitvaldatetime;
			
			$xr++; 
		   } else{
			
		}    
		
		//}
		
		
		
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/salesdata',$data);
		$this->load->view('admin/footer');
		
	}
	
}
