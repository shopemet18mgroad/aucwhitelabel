<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_addlot extends CI_Controller {

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
		if($this->uri->segment(4)){
			$errormsg = urldecode($this->uri->segment(4));
			echo '<script language="javascript">';
			echo 'alert("'.$errormsg.'")';
			echo '</script>';
		}
		$this->load->library('session');
		$data = $this->session->flashdata('txdata');
		print_r($data);
		$this->load->view('admin/header');
		$this->load->view('admin/addlot',$data);
		$this->load->view('admin/footer');
		
	} 

	
	
}
