<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {

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

		$this->load->helper(array('url', 'html', 'date'));
		//Setting  default time zone
		date_default_timezone_set('Asia/Kolkata');
		//initaliazing the current time 
		$time =  Date('Y-m-d H:i:s');
		//Loading Admin Model
		$this->load->model('Admin_model');
		$data['sql'] = $this->Admin_model->datebetweenhomemarquee($time);
		
		$this->load->view('header', $data);
		$this->load->view('faq');
		$this->load->view('footer');
		
	}
	
}
