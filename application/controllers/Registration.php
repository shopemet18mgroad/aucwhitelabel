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
		
		$uname = array('username'=>$dataw);
		$update = array('sagreement'=>true,'sagreementdate'=>$datad);
		$update2 = array('bagreement'=>true,'bagreementdate'=>$datad);

		$this->load->model('Admin_model');
		$this->Admin_model->update_custom('sellerprofile',$update,'susername',$dataw);
		$this->Admin_model->update_custom('buyerprofile',$update2,'busername',$dataw);
		$this->load->view('header');
		$this->load->view('registration',$uname);
		$this->load->view('footer');
		
	}
	public function tandcok()
	{
		$this->load->helper('url');
		$dataw = $this->uri->segment(3);
		$update = array('sterms_condi'=>true);
		$update2 = array('bterms_condi'=>true);

		$pass = array('username'=> $dataw);
		$this->load->model('Admin_model');
		$this->Admin_model->update_custom('sellerprofile',$update,'susername',$dataw);
		$this->Admin_model->update_custom('buyerprofile',$update2,'susername',$dataw);
		$this->load->view('header');
		$this->load->view('registration', $pass);
		$this->load->view('footer');
		
	}
	public function complete()
	{
		$this->load->helper('url');
		$dataw = $this->uri->segment(3);
		$update = array('sterms_condi'=>true);
		//$pass = array('username'=> $dataw);
		$this->load->model('Admin_model');
		$this->Admin_model->update_custom('sellerprofile',$update,'susername',$dataw);
		echo "HI";
		
	}
<<<<<<< HEAD
<<<<<<< HEAD


	public function complete2()
	{
		$this->load->helper('url');
		$dataw = $this->uri->segment(3);
		$update2 = array('bterms_condi'=>true);
		//$pass = array('username'=> $dataw);
		$this->load->model('Admin_model');
		$this->Admin_model->update_custom('buyerprofile',$update2,'busername',$dataw);
		echo "HI";
		
	}

=======
	
>>>>>>> parent of 3696f2e... registration done by seema
=======
	
>>>>>>> parent of 3696f2e... registration done by seema
	
}
