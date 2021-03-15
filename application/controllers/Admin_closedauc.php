<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_closedauc extends CI_Controller {

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
		if(!$this->session->has_userdata('username') || $this->session->userdata('auth') != "ADMIN"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
		$this->load->model('Admin_model');
		

		$data['sqldat'] = $this->Admin_model->dateclosedauc($time);
		
		  
		   
		   $xr = 0;
		   $xdata = array(); 
		   
		 foreach($data['sqldat'] as $datsql){ 	
		$auctmp = $datsql->sauctionid;
		$lotmp = $datsql->slotno;
		//$auclottmp = $datsql->lotno;
			

		//$username = $sess['sessi'];
		
		//$mybitvalref = $datsql->mybid_val;
			
		//print_r($mybitvalref); die;
		$datap = $this->Admin_model->maxbidvalue($auctmp,$lotmp);
		//print_r($datap); die;
		$aucbidamount = $datap[0]->bidamount;
		$lotname = $datap[0]->slotname;
		//$myauction = $datap[0]->sauctionid;
		//$mylotno = $datap[0]->slotno;
		$maxvalue = array('sauctionid'=>$auctmp,'slotno'=>$lotmp,'bidamount'=>$aucbidamount);
		$bidder = $this->Admin_model->getdataDSCclosedate('biddingdata',$maxvalue);
		if(count($bidder)){
		$mybitvaldatetime = $bidder[0]->Date_time;
		$mybitvalrec = $bidder[0]->bidderusername;
		
	
		
		//$myapproval = $datap[0]->sapproval;
	  if($aucbidamount){  
			$data['sqldatarec'][$xr] = $auctmp.'|'.$lotmp.'|'.$mybitvalrec.'|'.$aucbidamount.'|'.$mybitvaldatetime.'|'.$lotname;
			//print_r($data['sqldatarec']);die;
			$xr++; 
		 } else{
			
		}   
		
		}
		
		 }
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/closedauc',$data);
		$this->load->view('admin/footer');
		}
	}

	/* public function get_table(){
		$datatoquerydb = $this->uri->segment(3);
		$this->load->helper(array('url','html','date'));
		date_default_timezone_set('Asia/Kolkata');
		$time =  Date('Y-m-d H:i:s');
		$this->load->model('Admin_model');

		$data = $this->Admin_model->datebetsess2('biddercart',$time);
		if(count($data)){
			echo '<table class="table table-striped table-bordered table-sm text-center mt-5" width="100%" cellspacing="0">';
			echo '<thead class="bg-primary text-white">';
			echo '<tr>';
			echo '<th>Auction Id</th>';
			echo '<th>Lot No</th>';
			echo '<th>Starting Date</th>';
			echo '<th>Closing Date</th>';
			echo '<th>Bid Final Value</th>';
			echo '<th>Status</th>';
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
			foreach($data as $dat){
				echo '<tr>';
				
				echo '<td>'.$dat['auctionid'].'</td>';
				echo '<td>'.$dat['lotno'].'</td>';
				echo '<td>'.$dat['aucstartdate_time'].'</td>';
				echo '<td>'.$dat['aucclosedate_time'].'</td>';
				echo '<td>'.$dat['bidmaxvalue'].'</td>';
				echo '<td>'.$dat['bidmaxvalue'].'</td>';
				echo '</tr>';
			}
			echo '</tbody>';
			echo '</table>';
		}else{
			echo '<table class="table table-striped table-bordered table-sm text-center mt-5" width="100%" cellspacing="0">';
			echo '<thead class="bg-primary text-white">';
			echo '<tr>';
			echo '<th>Auction Id</th>';
			echo '<th>Lot No</th>';
			echo '<th>Starting Date</th>';
			echo '<th>Closing Date</th>';
			echo '<th>Bid Final Value</th>';
			echo '<th>Status</th>';
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
			echo '<tr>';
				echo '<td>No Records Found</td>';
				echo '<td>No Records Found</td>';
				echo '<td>No Records Found</td>';
				echo '<td>No Records Found</td>';
				echo '<td>No Records Found</td>';
				echo '<td>No Records Found</td>';
				echo '</tr>';
				echo '</tbody>';
				echo '</table>';
		}



	}
	
	 */
}
