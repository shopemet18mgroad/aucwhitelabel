<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_sellerreauction_update extends CI_Controller {

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
		$sname = $this->input->post('sname');
		$sauctionid = $this->input->post('sauctionid');
		$scompanyname = $this->input->post('scompanyname');
		$saucstartdate_time = $this->input->post('saucstartdate_time');
		$saucclosedate_time  = $this->input->post('saucclosedate_time');
	
		 $data2 = array('sname' => $sname,'sauctionid' => $sauctionid, 'scompanyname' => $scompanyname, 'saucstartdate_time' => $saucstartdate_time, 'saucclosedate_time' => $saucclosedate_time);
		//$this->load->view('xya', $data);
		$datainserr = "Data Inserted Successfully";
		$updatech = array('sauctionid' => $sauctionid );
		$status = $this->Admin_model->update_custom('auction',$data2,$updatech,$updatech);
		header('location: '.base_url().'Admin_unsoldproduct/index'.$datainserr);
		
	
		
	}
	
}
