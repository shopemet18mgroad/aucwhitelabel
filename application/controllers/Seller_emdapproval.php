<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_emdapproval extends CI_Controller {

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
	 
	 function __construct() {
        parent::__construct();
        
        // Load session library
        $this->load->library('session');
        // Load the captcha helper
		//$this->load->helper('captcha');
		$this->load->helper('url');
		$this->load->helper('date');
	
		date_default_timezone_set("Asia/Kolkata");
    }
	
	
	public function index()
	{
		$this->load->helper(array('url','html'));	
			$this->load->library('session');
		//echo $this->session->userdata('auth');
		if(!$this->session->has_userdata('username')  || $this->session->userdata('auth') != "SELLER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
				$this->load->model('Admin_model');
		//$doc_array = self::upload_files('upload_dd');
		$doc_array3 = array( 'emdrequest' => true);
		//$upload_dd = array('upload_dd' == Null);
		//$emd_paid = array('emd_paid'=>false);
		$query = $this->Admin_model->getdatafromtable('biddercart', $doc_array3);
		
		//echo '<pre>';
		//print_r($query);die;
		//echo '</pre>';
		$data['sqldat']= $query;
		
	
		$sess = array('sessi'=>$this->session->userdata('username'));

		$this->load->view('seller/header',$sess);
		$this->load->view('seller/emdapproval',$data);
		$this->load->view('seller/footer');
		
	}
}

private function upload_files($nameid)
    {	
	$countfiles = count($_FILES[$nameid]['name']);
      // Looping all files
      for($i=0;$i<$countfiles;$i++){
        if(!empty($_FILES[$nameid]['name'][$i])){
 
          // Define new $_FILES array - $_FILES['file']
          $_FILES['file']['name'] = $_FILES[$nameid]['name'][$i];
          $_FILES['file']['type'] = $_FILES[$nameid]['type'][$i];
          $_FILES['file']['tmp_name'] = $_FILES[$nameid]['tmp_name'][$i];
          $_FILES['file']['error'] = $_FILES[$nameid]['error'][$i];
          $_FILES['file']['size'] = $_FILES[$nameid]['size'][$i];

          // Set preference
           $config['upload_path'] = 'web_files/uploads/';
			$config['allowed_types'] = 'doc|docx|pdf|xlsx|jpg|png|gif';
          $config['max_size'] = '50000000'; // max_size in kb
          $config['file_name'] = $_FILES[$nameid]['name'][$i];
 
          //Load upload library
          $this->load->library('upload',$config); 
		$this->upload->initialize($config);
          // File upload
          if($this->upload->do_upload('file')){
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

	
	public function setdeactive_buyer_emd_dd(){
	
		$compnameurl = $this->uri->segment(3);

		$compnameurl = urldecode($compnameurl);
		
		$compnameurl2 = explode('|',$compnameurl);
		$compname = $compnameurl2[0];
	
		$comp = str_ireplace('-','/',$compnameurl2[1]);
		
		$this->load->model('Admin_model');
		$emd_paid_dd = array('emd_paid_dd'=>true);
		$adaction2 = array('lotno'=>$compname,'auctionid'=>$comp);
		$query = $this->Admin_model->update_custom('biddercart',$emd_paid_dd, $adaction2, $adaction2);
		if($compname){
			echo "HI";
		}else{
			echo "BYE";
		}
	
}
}
