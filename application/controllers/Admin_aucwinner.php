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
		$aucw = urldecode($this->uri->segment(3));
		print_r($aucw); die;
		$auc = array('auctionid'=>$aucwi);
		$this->load->model('Admin_model');
		

		$data['aucwin'] = $this->Admin_model->getdatafromtable('biddercart',$auc);
		
		$this->load->helper('url');
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/aucwinner',$data);
		$this->load->view('admin/footer');
		
	}
	
	public function aucwinner2_alert(){
		$aucw = $this->uri->segment(3);
		
		$aucwi2 = urldecode($this->uri->segment(4));
		echo '<script language="javascript">';
			echo 'alert("'.$aucwi2.'")';  //not showing an alert box.
			echo '</script>';
		$retriveval = array('auctionid'=>$aucwi);
		$this->load->model('Admin_model');
		
		$data['aucwin'] = $this->Admin_model->getdatafromtable('biddercart',$aucwi);
		$this->load->helper('url');
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/aucwinner', $data);
		$this->load->view('admin/footer');
	}
}
