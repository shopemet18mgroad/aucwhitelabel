<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_bestseller extends CI_Controller {

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
	
		
		
		$snamechk2a = array('saucclosedate_time <'=>$time);
		
		$aucdetails = $this->Admin_model->getdatafromtable('auction', $snamechk2a); 
		
		if($aucdetails){
			$xr = 0;
				$xdata = array(); 
		foreach($aucdetails as $aucdet){
			//$auct = $aucdet->sauctionid;
			$sname = $aucdet->sname;
				
				$datap = $this->Admin_model->totalmaxvalueseller($sname);
				
				if(count($datap)){
				$total = $datap[0]->mybid_val;
				$sellercompany = $datap[0]->scomapnyname;
				 //print_r($mybitvalrec);die;
				$eventdate = $datap[0]->aucstartdate_time;
				$totaleventapproval = $datap[0]->sapproval;
				
				//print_r($approval); die;
				
				if($totaleventapproval){$data['sqldatarec'][] = $sellercompany.'|'.$eventdate.'|'.$totaleventapproval.'|'.$total;
				$xr++;
					}
				
			
				
					
				}
				
		//$xr++;
		}

		}
		//echo '<pre>';print_r($data['sqldatarec']); die; echo '</pre>';
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/bestseller',$data);
		$this->load->view('admin/footer');
		}
	}
	
}
