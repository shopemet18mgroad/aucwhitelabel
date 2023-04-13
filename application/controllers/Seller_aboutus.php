<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seller_aboutus extends CI_Controller
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


	function __construct()
	{
		parent::__construct();

		// Load session library
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('date');
		// set tghe srver date and time 
		date_default_timezone_set("Asia/Kolkata");
	}

	public function index()
	{

		if ($this->input->post('submit')) {
			$date =  Date('Y-m-d');
			$this->load->library('fileupload');
			$this->load->library('session');
			$this->load->helper(array('url', 'form', 'file', 'html'));
			$this->load->model('Admin_model');
			//getting the input front the from seller from the view startauction and saving it into  the variable  
			$scategory = $this->input->post('scategory');
			$sauctionid = $this->input->post('sauctionid');
			$sname = $this->input->post('sname');
			$srefid = $this->input->post('srefid');
			$scompanyname = $this->input->post('scompanyname');
			$sfrominpectdate_time = $this->input->post('sfrominpectdate_time');
			$stoinpectdate_time  = $this->input->post('stoinpectdate_time');
			$semddetail = $this->input->post('semddetail');
			$slastdateemdsub = $this->input->post('slastdateemdsub');
			$svinspection = $this->input->post('svinspection');
			$saucstartdate_time = $this->input->post('saucstartdate_time');
			$saucclosedate_time = $this->input->post('saucclosedate_time');
			$sterms_condiaccept = $this->input->post('sterms_condiaccept');
			if ($sterms_condiaccept) {
				$sterms_condiaccept = true;
			}
			$sterms_condexbuyers = $this->input->post('sterms_condexbuyers');
			if ($sterms_condexbuyers) {
				$sterms_condexbuyers = true;
			}
			//$sterms_condiaccept  = $this->input->post('sterms_condiaccept');
			$pic_array1 = self::upload_files('sterms_condiupload');
			//Document upload : counting the pic array for it is uploaded or not.
			if (!count($pic_array1)) {
				echo '<script language="javascript">';
				echo 'alert("Documents Upload Failed")';  //not showing an alert box.
				echo '</script>';
			} else {
				//here serialize the document upload 
				$pic_array1 = serialize($pic_array1);
			}
			//text data entered in the start auction 
			$sterms_text = $this->input->post('sterms_text');

			//$this->load->model('Admin_model');
			//fetching the data from view and inserting into the database 
			$data = array('scategory' => $scategory, 'sauctionid' => $sauctionid, 'sname' => $sname, 'srefid' => $srefid, 'scompanyname' => $scompanyname, 'sfrominpectdate_time' => $sfrominpectdate_time, 'stoinpectdate_time' => $stoinpectdate_time, 'semddetail' => $semddetail, 'slastdateemdsub' => $slastdateemdsub, 'svinspection' => $svinspection, 'saucstartdate_time' => $saucstartdate_time, 'saucclosedate_time' => $saucclosedate_time, 'sterms_condiaccept' => $sterms_condiaccept, 'sterms_condexbuyers' => $sterms_condexbuyers, 'sterms_condiupload' => $pic_array1, 'sterms_text' => $sterms_text);

			$status = $this->Admin_model->insert('auction', $data);
			//setting an array if data is insertd it will transfer data to redirect to seller_addlot page else it will redirect to startauction page
			$transfer = array('category' => $scategory, 'auctionid' => $sauctionid, 'sname' => $sname, 'date' => $date);
			if ($status) {
				//transfering the data and flashing the data 
				$this->session->set_flashdata('txdata', $transfer);
				//redirect to seller _addlot  for adding the lots
				redirect('../seller_addlot');
			} else {
				header('location: ./Seller_startauction/');
			}
		}

		//Loading Admin Model 
		$this->load->model('Admin_model');
		if (!$this->session->has_userdata('username') || $this->session->userdata('auth') != "SELLER") {
			$datainserr = "Invalid Login Session";
			header('location: ' . base_url() . 'login/index_error/' . $datainserr);
			die;
		} else {
			$sess = array('sessi' => $this->session->userdata('username'));
			$active1 = array('susername' => $sess['sessi']);
			$data['scomp'] = $this->Admin_model->get1datafromtable('sellerprofile', $active1);
			//print_r($data['scomp']); die;
			$this->load->view('seller/header', $sess);
			$this->load->view('seller/aboutseller', $data);
			$this->load->view('seller/footer');
		}
	}

	public function get_seller_table()
	{
		$dataw = urldecode($this->uri->segment(3));
		print_r($dataw);
		die;
		//$dataw having the uri segment 
		$this->load->model('Admin_model');
		//$search have the value From the database 
		$search = $this->Admin_model->get_lookalike('sellerprofile', 'scomapnyname', $dataw);
		//The $seach is having the search results 
		if ($search) {
			foreach ($search as $sear) {
				//filtering and view  for the search
				echo "<li onclick=\"getPaging(this.id)\" id=\"" . $sear['scomapnyname'] . "\" class=\"option\">" . $sear['scomapnyname'] . "</li>\n";
			}
		} else {
			//in no resultsthen show no results  
			echo "<li onclick=\"\" value=\"1\" class=\"option\">No Results</li>";
		}
	}

	// Function for upload files 
	//
	private function upload_files($nameid)
	{
		$countfiles = count($_FILES[$nameid]['name']);
		// Looping all files
		for ($i = 0; $i < $countfiles; $i++) {
			if (!empty($_FILES[$nameid]['name'][$i])) {

				// Define new $_FILES array - $_FILES['file']
				$_FILES['file']['name'] = $_FILES[$nameid]['name'][$i];
				$_FILES['file']['type'] = $_FILES[$nameid]['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES[$nameid]['tmp_name'][$i];
				$_FILES['file']['error'] = $_FILES[$nameid]['error'][$i];
				$_FILES['file']['size'] = $_FILES[$nameid]['size'][$i];

				// Set preference
				$config['upload_path'] = 'web_files/uploads/';
				// Allowed types of upload files
				$config['allowed_types'] = 'doc|docx|pdf|xlsx|jpg|png|gif';
				//Maximum size of the file 
				$config['max_size'] = '50000000'; // max_size in kb
				$config['file_name'] = $_FILES[$nameid]['name'][$i];

				//Load upload library
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				// File upload
				if ($this->upload->do_upload('file')) {
					// Get data about the file
					$uploadData = $this->upload->data();
					$filename = $uploadData['file_name'];
					// Initialize array
					$datar[] = $filename;
				}
			}
		}
		return $datar;
	}
}
