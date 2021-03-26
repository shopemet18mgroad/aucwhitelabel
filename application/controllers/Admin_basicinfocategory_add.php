<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_basicinfocategory_add extends CI_Controller {

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
	
		$this->load->library('fileupload');
		$this->load->helper(array('url','form','file','html'));
		$this->load->model('Admin_model');
		
		$name = $this->input->post('name');
		
			
	
		
		
		$data = array('name' => $name);
		
		
		$datainserr = "Data Inserted Successfully";
		$status = $this->Admin_model->insert('categories', $data);
		header('location: '.base_url().'admin_buyerreg/index/'.$datainserr);
		
		
		$this->load->view('admin/header');
		$this->load->view('admin/buyerreg');
		$this->load->view('admin/footer');
		
	}
	

	

		
	
}
