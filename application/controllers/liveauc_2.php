<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Liveauc_2 extends CI_Controller {

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
<<<<<<< HEAD
		$this->load->view('buyer/header');
		$this->load->view('buyer/liveauc_2');
		$this->load->view('buyer/footer');
=======
		$this->load->view('admin/header');
		$this->load->view('admin/liveauc_2');
		$this->load->view('admin/footer');
>>>>>>> 843ca034dcfab55cb759e4e775bdf28ee7316b96
		
	}
	
}
