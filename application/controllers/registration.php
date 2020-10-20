<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

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
		$dataw = $this->uri->segment(3);
		$datad = $this->uri->segment(4);
		$update = array('sagreement'=>true,'sagreementdate'=>$datad);
		$this->load->model('Admin_model');
		$this->Admin_model->update_custom('sellerprofile',$update,'susername',$dataw);
		$this->load->view('header');
		$this->load->view('registration');
		$this->load->view('footer');
		
	}
	public function tandcok()
	{
		$this->load->helper('url');
		$dataw = $this->uri->segment(3);
		$update = array('sterms_condi'=>true);
		$this->load->model('Admin_model');
		$this->Admin_model->update_custom('sellerprofile',$update,'susername',$dataw);
		$this->load->view('header');
		$this->load->view('registration');
		$this->load->view('footer');
		
	}
	
	
}
