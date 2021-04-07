<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Enquiry_Form extends CI_Controller
{

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
 
		$this->load->helper(array('url', 'html', 'date'));
		$loc = urldecode($this->uri->segment(3));
		//Setting  default time zone
		date_default_timezone_set('Asia/Kolkata');
		//initaliazing the current time 
		$time =  Date('Y-m-d H:i:s');
		//Loading Admin Model
		$this->load->model('Admin_model');
		$query = $this->Admin_model->gettable('spocs');
		//echo '<pre>'; print_r($data); die; echo '</pre>';
		$adac['sqldata']= $query;
		$adac['loc']= $loc;
		//print_r($adac['sqldata']);die;
		
		$this->load->view('enquiry_app/Enquiry Form',$adac);
	}
	
	 public function validate_enquiry(){//
		$dat = urldecode($this->uri->segment(3));
		$check_db = array('slno' => $dat);
		$this->load->model('Admin_model');
			  if($this->Admin_model->check('spocs', $check_db)){
				  echo "BYE"; 
			  }else{
				 echo "HI";
			  }
		
	}
	public function post_data(){
	$this->load->helper('url');
	echo $company = $this->input->post('company');
	echo $address = $this->input->post('address');
	echo $address2 = $this->input->post('address2');
	echo $name = $this->input->post('name');
	echo $phone = $this->input->post('phone');
	echo $optionalph = $this->input->post('optionalph');
	echo $email = $this->input->post('email');
	echo $website = $this->input->post('website');
	echo $leadgen = $this->input->post('leadgen');
	echo $uid = $this->input->post('uid');
	echo $remarks = $this->input->post('remarks');
	echo $location = $this->input->post('location');
	echo $latlong = $this->input->post('latlong');
	die;
	}
}