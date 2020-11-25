<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_aucwinner extends CI_Controller {

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
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/aucwinner');
		$this->load->view('admin/footer');
		
	}
	
	public function aucwinner2(){
		$this->load->helper(array('url','html','date'));
		date_default_timezone_set('Asia/Kolkata');
		$time =  Date('Y-m-d H:i:s');
		
		$retrivevaltmp2 = $this->uri->segment(3);
		
		$retrivevaltmp = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
		
		$retriveval = array('auctionid'=>$retrivevaltmp);

		$this->load->model('Admin_model');
		$data['bidwin'] = $this->Admin_model->dateclosedauc('biddercart',$time);
		//print_r($data['bidwin']); die;
		$data['busername'] = $data['bidwin'][0]->bidderusername; 	
		//$data['mybid_val'] = $data['bidwin'][0]->mybid_val; 
			
		$active = array('busername'=>$data['busername']);
		$data['buyerdet'] = $this->Admin_model->getdatafromtable('buyerprofile',$active);
		
		$active2 = array('sauctionid'=>$retrivevaltmp,'bidderusername'=>$data['busername']);
		$data['bidding'] = $this->Admin_model->getdatafromtable('biddingdata',$active2);
		
		$data['bidata'] =$data['bidding'][0]->bidamount;
	
		
		$data['maxbid_val'] = $this->Admin_model->maxbidvalue('biddercart');
		// print_r($data['maxbid_val']); die;
		
		
		if($data['bidata'] == $data['maxbid_val']){
			
		echo "hi";
		 
		}
		
	
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/aucwinner',$data);
		$this->load->view('admin/footer');
		
	}
	
	
}
