<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_bestbuyer extends CI_Controller {

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
	
		
		
		$snamechk2a = array('aucclosedate_time <'=>$time,'sapproval' =>true);
		
		$aucdetails = $this->Admin_model->getdatafromtable('biddercart', $snamechk2a); 

		if($aucdetails){
			$xr = 0;
				$xdata = array(); 
		foreach($aucdetails as $aucdet){
			$auct = $aucdet->auctionid;
			$busername = $aucdet->bidderusername;
				
				$datap = $this->Admin_model->totalmaxvaluebuyer($busername);
				
				if(count($datap)){
				$total = $datap[0]->mybid_val;
				$buyercompany = $datap[0]->bcompany;
				 //print_r($mybitvalrec);die;
				$eventdate = $datap[0]->aucstartdate_time;
				$totaleventapproval = $datap[0]->sapproval;
				
				//print_r($approval); die;
				
				if($totaleventapproval){$data['sqldatarec'][] = $buyercompany.'|'.$eventdate.'|'.$totaleventapproval.'|'.$total;
				$xr++;
					}
				
			
				
					
				}
				
		//$xr++;
		}

		}
		//echo '<pre>'; print_r($data['sqldatarec']); die; echo '</pre>';
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/bestbuyer',$data);
		$this->load->view('admin/footer');
		}
	}
	
}
