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
		$sess = array('sessi'=>$this->session->userdata('username'));

//print_r($sess['sessi']);die;
		$data['sqldat'] = $this->Admin_model->datebetweensess2('biddercart',$time,$sess['sessi']);
			$xr = 0;
			$xdata = array();
			
			foreach($data['sqldat'] as $datsql){
				
		$auctmp = $datsql->auctionid;
		$auclottmp = $datsql->lotno;
		$active2 = array('auctionid'=>$auctmp,'lotno'=>$auclottmp,'bidderusername'=>$sess['sessi']);
		$query = $this->Admin_model->getdatafromtable('biddercart', $active2);
		$tmpbidval = $query[0]->mybid_val;
		
		$active3 = array('sauctionid'=>$auctmp,'slotno'=>$auclottmp);
		$query2 = $this->Admin_model->getdatafromtable('biddingdata', $active3);
		
		$tmpbidamt = $query2[0]->bidamount; 
		
		
		$active4 = array('bidderusername'=>$sess['sessi']);
		
		$query3 = $this->Admin_model->getdatafromtable('biddercart',$active4);
		print_r(array($query3[0]->mybid_val)); die;
		$maxvalue = $query3[0]->mybid_val;
		print_r($maxvalue); die;
		 if ($maxvalue = $tmpbidamt){
			$xdata[$xr] = $query3[0];
			$xr++;
			
		}
		else{
			echo "not ok";
		}  
		$data['winner'] = $xdata;	
	$auctmp = $datsql->auctionid;
	$auclottmp = $datsql->lotno;	
		
	$active6 = array('sauctionid'=>$auctmp,'slotno'=>$auclottmp,'bidamount'=>$maxvalue,'bidderusername'=>$sess['sessi']);

		$query7 = $this->Admin_model->getdatafromtable('biddingdata', $active6);
	print_r($query7); die;
					}
				
			
	

		//$check_array = array('dat'=>);
		$this->load->view('buyer/header',$sess);
		$this->load->view('buyer/occupied',$data,$query7);
		$this->load->view('buyer/footer');		
	
	
}


}