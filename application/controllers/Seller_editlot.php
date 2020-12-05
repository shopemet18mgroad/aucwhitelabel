<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_editlot extends CI_Controller {

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
		$this->load->view('seller/editlot');
		$this->load->view('seller/footer');
		}
	}
	
	public function editlot(){
		$retrivevaltmp = urldecode($this->uri->segment(3));
		$retriveval = array('slotno'=>$retrivevaltmp);
		$this->load->model('Admin_model');
		//$this->db->select('*');
		//$this->db->where('addlot', 'addlot.sauctionid = addlot.sauctionid', 'left');
		//$this->db->get_where(addlot, array("slotno"=>$slotno));

		$data['sqldata'] = $this->Admin_model->getdatafromtable
		('addlot',$retriveval);

		$retrivevaltmp = str_ireplace("-","/",$retrivevaltmp);
		$retrivevaltmp2 = urldecode($this->uri->segment(4));
		$retriveval = array('sauctionid'=>$retrivevaltmp,'slotno'=>$retrivevaltmp2);
		$this->load->model('Admin_model');
		$data['sqldata'] = $this->Admin_model->getdatafromtable('addlot',$retriveval);
		$this->load->helper('url');
		
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('seller/header',$sess);
		$this->load->view('seller/editlot', $data);
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
		$this->load->view('seller/editlot', $data);
		$this->load->view('seller/footer');
	} 
	public function deletelot(){
		$delval = $this->uri->segment(3);
		$delval = str_ireplace('-','/',$delval);
		$delval2 = $this->uri->segment(4);
		$delval3 = urldecode($this->uri->segment(5));
		$retriveval = array('sauctionid'=>$delval,'slotno'=>$delval2,'sname'=>$delval3);
		$delval3 = urlencode($delval3);
		$this->load->model('Admin_model');
		$this->Admin_model->delete_data('addlot',$retriveval);
		header('location: '.base_url().'Seller_editforthcom_2/editforthcom_2/'.$delval3);
		die;
	}
	
}