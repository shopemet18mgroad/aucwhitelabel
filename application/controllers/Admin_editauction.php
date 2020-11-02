<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_editauction extends CI_Controller { 

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
		$this->load->view('admin/header');
		$this->load->view('admin/editauction');
		$this->load->view('admin/footer');
		
	}
	
	
	public function editauction(){
		$retrivevaltmp = urldecode($this->uri->segment(3));
		
		$retriveval = array('sname'=>$retrivevaltmp);
		$this->load->model('Admin_model');
		$data['sqldata'] = $this->Admin_model->getdatafromtable('auction',$retriveval);
		$this->load->helper('url');
		$this->load->view('admin/header');
		$this->load->view('admin/editauction', $data);
		$this->load->view('admin/footer');
	}
	public function editauction_alert(){
		$retrivevaltmp = $this->uri->segment(3);
		$retrivevaltmp2 = urldecode($this->uri->segment(4));
		echo '<script language="javascript">';
			echo 'alert("'.$retrivevaltmp2.'")';  //not showing an alert box.
			echo '</script>';
		$retriveval = array('sname'=>$retrivevaltmp);
		$this->load->model('Admin_model');
		$data['sqldata'] = $this->Admin_model->getdatafromtable('auction',$retriveval);
		$this->load->helper('url');
		$this->load->view('admin/header');
		$this->load->view('admin/editauction', $data);
		$this->load->view('admin/footer');
	}
}
