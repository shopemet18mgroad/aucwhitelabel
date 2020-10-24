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
		$this->load->view('admin/header');
		$this->load->view('admin/welcome_message');
		$this->load->view('admin/footer');
		
	}
	
		public function send($value='')
	{
	
	$this->load->library('email');
	$config = array(
	'mailtype'=>"html",);
	
	$this->email->initialize($config);
	$this->email->from('shopemet18@gmail.com','Preeti');
	$this->email->to('preetisahu0706@gmail.com');
		$this->email->subject('Codeignator send email');
		$this->email->message(str_replace("{contents}",$this->email_text(),$this->email_template()));
		
		$this->email->attach(FCPATH . 'documents/Test-pdf-document.pdf');
		
		if()

	}
	
}
