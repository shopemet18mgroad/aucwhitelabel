<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->model('Admin_model');	
		$data['sqldata1'] = $this->Admin_model->getdatafromtablehomejoin();
		
		
		$data['lnews'] = $this->Admin_model->gettablenews('latestnews');
		$data['all'] = $this->Admin_model->getdatafromtablejoinallauc();
		 /*  echo "<pre>";
		print_r($data['all']); 
		echo "</pre>";die;  */ 
		$this->load->view('header');
		$this->load->view('home',$data);
		$this->load->view('footer');
		
	}
	
}
