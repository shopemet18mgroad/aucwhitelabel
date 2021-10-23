<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_bidhistory extends CI_Controller {

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
		$this->load->helper('url');	
		$this->load->library('session');
		//echo $this->session->userdata('auth');
		if(!$this->session->has_userdata('username')  || $this->session->userdata('auth') != "ADMIN"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/bidhistory',$data);
		$this->load->view('admin/footer');
		}
}
	public function bidhistory2(){
		$retrivevaltmp = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
		$retrivevaltmp2 = urldecode($this->uri->segment(4));
		$retriveval = array('sauctionid'=>$retrivevaltmp,'slotno'=>$retrivevaltmp2);
		
		$this->load->model('Admin_model');
		
		$data['sqldata'] = $this->Admin_model->getdataDSC('biddingdata',$retrivevaltmp,$retrivevaltmp2);
		//echo '<pre>'; print_r($data['sqldata']); die; echo '</pre>';
		
		$this->load->helper('url');
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/bidhistory',$data);
		$this->load->view('admin/footer');
	}
	 public function bidhistory2_alert(){
		$retrivevaltmp = $this->uri->segment(3);
		$retrivevaltmp2 = urldecode($this->uri->segment(4));
		echo '<script language="javascript">';
			echo 'alert("'.$retrivevaltmp2.'")';  //not showing an alert box.
			echo '</script>';
		$retriveval = array('sauctionid'=>$retrivevaltmp);
		$this->load->model('Admin_model');
		$data['sqldata'] = $this->Admin_model->getdatafromtable('auction',$retriveval);
		$this->load->helper('url');
	    $this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/bidhistory',$data);
		$this->load->view('admin/footer');
	} 
	 	public function export_csvbiddata(){ 
		$sauctionid = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
		$slotno = urldecode($this->uri->segment(4));
		$retriveval = array('sauctionid'=>$sauctionid,'slotno'=>$slotno);
		
		$this->load->model('Admin_model');
		
		$usersData = $this->Admin_model->getdataDSC('biddingdata',$sauctionid,$slotno);
		if($usersData){
		$filename = 'users_'.date('Ymd').'.csv'; 
		header("Content-Description: File Transfer"); 
		header("Content-Disposition: attachment; filename=$filename"); 
		header("Content-Type: application/csv; ");
	   // get data 
	  
		$file = fopen('php://output','w');
		$header = array("AUCTION ID","LOT NO","LOT NAME" ,"BID BASE","BIDDER USER NAME","CLOSE TIME","BIDDING AMOUNT");
	    fputcsv($file,$header);
		foreach ($usersData as $line){ 
			fputcsv($file,array($line->sauctionid,$line->slotno,$line->slotname,$line->sbidbase,$line->bidderusername,$line->Date_time,$line->bidamount)); 
		}
		
		fclose($file); 
		exit; 
	
		}
}
		public function export_csvbiddata1(){ 
		$sauctionid = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
		$slotno = urldecode($this->uri->segment(4));
		$retriveval = array('sauctionid'=>$sauctionid,'slotno'=>$slotno);
		
	 $this->load->model('Admin_model');
		
		$usersData = $this->Admin_model->getdataDSC('biddingdata',$sauctionid,$slotno);
		
		
		
		
		if($usersData){
		$filename = 'users_'.date('Ymd').'.csv'; 
		header("Content-Description: File Transfer"); 
		header("Content-Disposition: attachment; filename=$filename"); 
		header("Content-Type: application/csv; ");
	   // get data 
	  
		$file = fopen('php://output','w');
		$header = array("AUCTION ID","LOT NO","LOT NAME" ,"BID BASE","CLOSE TIME","BIDDING AMOUNT");
	    fputcsv($file,$header);
		foreach ($usersData as $line){ 
			fputcsv($file,array($line->sauctionid,$line->slotno,$line->slotname,$line->sbidbase,$line->Date_time,$line->bidamount)); 
		}
		
		fclose($file); 
		exit; 
	
		}
}
		}
