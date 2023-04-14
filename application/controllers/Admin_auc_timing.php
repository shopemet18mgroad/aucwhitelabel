<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_auc_timing extends CI_Controller {

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
		$date =  "2023-02-20";//Date('Y-m-d'); 
		if($this->uri->segment(3)){
			$errormsg = urldecode($this->uri->segment(3));
			echo '<script language="javascript">';
			echo 'alert("'.$errormsg.'")';
			echo '</script>';
		}
		//echo $this->session->userdata('auth');
		if(!$this->session->has_userdata('username')  || $this->session->userdata('auth') != "ADMIN"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
			$sess = array('sessi'=>$this->session->userdata('username'));
			$data = $this->Admin_model->datebetweenhome($date);
			//print_r($data);die;
			$this->load->view('admin/header',$sess);
			$this->load->view('admin/index_auc_time');
			$this->load->view('admin/footer');
		}
		
	}
	
	
	
}