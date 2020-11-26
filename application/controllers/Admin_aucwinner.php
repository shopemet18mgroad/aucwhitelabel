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
		
		$this->load->model('Admin_model');
		$retrivevaltmp = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
		$retriveval = array('auctionid'=>$retrivevaltmp);
		
		$retrive= urldecode($this->uri->segment(3));

		$ret = array('bcompany'=>$retrive);

		$this->load->model('Admin_model');
		$data['bidwin'] = $this->Admin_model->getdatafromtable('biddercart',$retriveval);
		$data['buyer'] = $this->Admin_model->getdatafromtable('buyerprofile',$ret);
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/aucwinner',$data);
		$this->load->view('admin/footer');
		
	}
	
	/* public function aucwin(){
		
		$this->load->model('Admin_model');
	
		
		$retrive= urldecode($this->uri->segment(3));

		$ret = array('bcompany'=>$retrive);
		
		$data2['buyer'] = $this->Admin_model->getdatafromtable('buyerprofile',$ret);
		print_r(data2); die;
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/aucwinner',$data2);
		$this->load->view('admin/footer');
		
	}
	 */
	
}
