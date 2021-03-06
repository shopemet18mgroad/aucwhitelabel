<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_addanotherlot extends CI_Controller {

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
		$this->load->model('Admin_model');
		
		//echo $this->session->userdata('auth');
		if(!$this->session->has_userdata('username')  || $this->session->userdata('auth') != "ADMIN"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
			$this->load->model('Admin_model');
			$sess = array('sessi'=>$this->session->userdata('username'));
		$retrivevaltmp = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
		$retrivevaltmp1 = urldecode($this->uri->segment(4));
		$retrivevaltmp2 = urldecode($this->uri->segment(5));
		
		$retriveval1 = array('sauctionid'=>$retrivevaltmp,'sname'=>$retrivevaltmp1,'slotno'=>$retrivevaltmp2);
		
		$data['scomps'] = $this->Admin_model->getdatafromtable('addlot', $retriveval1);	
			//print_r($data['scomps']); die;
		
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/addanotherlot',$data);
		$this->load->view('admin/footer');
		}
	} 


		
	
}
