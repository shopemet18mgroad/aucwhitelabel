<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_relot extends CI_Controller {

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
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('Admin_model');
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "SELLER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
			$sess = array('sessi'=>$this->session->userdata('username'));
			$this->load->model('Admin_model');
			$auc = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
			$sname = urldecode($this->uri->segment(4));
			$lot = urldecode($this->uri->segment(5));
			$retriveval1 = array('sauctionid'=>$auc,'sname'=>$sname,'slotno'=>$lot);
		$data['scomps'] = $this->Admin_model->getdatafromtable('addlot', $retriveval1);
		//print_r($data['scomps']); die;
		$this->load->view('seller/header',$sess);
		$this->load->view('seller/relot',$data);
		$this->load->view('seller/footer');
		
	}
	}
}
