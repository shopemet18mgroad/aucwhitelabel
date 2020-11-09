<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyer_editcontact extends CI_Controller {

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
			
		$sess = "avinash";
		//$this->session->userdata('username');
		
		$active = array('busername'=>$sess);
		//load model library use get_where func from tablename buyerprofile
		
		$query = $this->Admin_model->getdatafromtable('buyerprofile', $active);
		$data['sqldata']= $query;
		$this->load->view('buyer/header');
		$this->load->view('buyer/editcontact', $data);
		$this->load->view('buyer/footer');
		
	}
	
}
