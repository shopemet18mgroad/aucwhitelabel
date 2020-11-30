<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_reauction extends CI_Controller {

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

		$sess = array('sessi'=>$this->session->userdata('username'));
		
		$retrivevaltmp = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
		$retriveval = array('sauctionid'=>$retrivevaltmp);
		$data['scomp'] = $this->Admin_model->getsomedatafromtable('auction', $retriveval);
		  
	//print_r($data['scomp']); die;
		$this->load->view('seller/header',$sess);
		$this->load->view('seller/reauction',$data);
		$this->load->view('seller/footer');
		
	}
	
}
