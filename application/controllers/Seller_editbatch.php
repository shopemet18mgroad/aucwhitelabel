<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_editbatch extends CI_Controller {

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
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "SELLER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('seller/header',$sess);
		$this->load->view('seller/editbatch');
		$this->load->view('seller/footer');
		}
	}
	
	public function editlot(){
		$retrivevaltmp = urldecode($this->uri->segment(3));
		$retriveval = array('tenderid'=>$retrivevaltmp);
        //print_r($retriveval);die;
		$this->load->model('Admin_model');
		//$this->db->select('*');
		//$this->db->where('addlot', 'addlot.sauctionid = addlot.sauctionid', 'left');
		//$this->db->get_where(addlot, array("slotno"=>$slotno));
        //$retrivevaltmp = str_ireplace("-","/",$retrivevaltmp);
		// $data['sqldata'] = $this->Admin_model->getdatafromtable
		// ('tender_batch',$retriveval);

		$retrivevaltmp = str_ireplace("-","/",$retrivevaltmp);
		$retrivevaltmp2 = urldecode($this->uri->segment(4));
		$retriveval = array('tenderid'=>$retrivevaltmp,'tslotno'=>$retrivevaltmp2);
		$this->load->model('Admin_model');
		$data['sqldata'] = $this->Admin_model->getdatafromtable('tender_batch',$retriveval);
		$this->load->helper('url');
		
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('seller/header',$sess);
		$this->load->view('seller/editbatch', $data);
		$this->load->view('seller/footer');	
		}
		
		
		public function editlot_alert(){
		$retrivevaltmp = $this->uri->segment(3);
		$retrivevaltmp2 = urldecode($this->uri->segment(4));
		echo '<script language="javascript">';
			echo 'alert("'.$retrivevaltmp2.'")';  //not showing an alert box.
			echo '</script>';
		$retriveval = array('sauctionid'=>$retrivevaltmp);
		$this->load->model('Admin_model');
		$data['sqldata'] = $this->Admin_model->getdatafromtable('addlot',$retriveval);
		$this->load->helper('url');
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('seller/header',$sess);
		$this->load->view('seller/editbatch', $data);
		$this->load->view('seller/footer');
	} 

	public function deletelot(){
		$this->load->helper('url');
		$retrivevalauc = str_ireplace('-','/',$this->uri->segment(3));
		$retrivevaltmp1 = urldecode($retrivevalauc);
		$retriveval2 = urldecode($this->uri->segment(4));
		
		
		$retrivevaldel = array('sauctionid'=>$retrivevaltmp1,'slotno'=>$retriveval2);
		$this->load->model('Admin_model');
		if($retrivevalauc){
			$this->Admin_model->delete_data('addlot', $retrivevaldel);
	
		}
		$this->load->helper('url');
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
		header('location: '.base_url().'Seller_editforthcomtenders/index/'.$retrivevaltmp1);
		//$this->load->view('seller/header',$sess);
		//$this->load->view('seller/editforthcom');
		//$this->load->view('seller/footer');
	}
	
}