<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyer_mylist extends CI_Controller {

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
		 //$this->load->database();  
         //load the model  
         //$this->load->model('Admin_model');  
         //load the method of model  
         //$data['h']=$this->Admin_model->select();  
         //return the data in view  
		$this->load->helper(array('url','html'));
		$this->load->model('Admin_model');
		$emdpaid = array('emdpaid'=>false);
		$query = $this->Admin_model->getdatafromtable('biddercart', $emdpaid);
		$data['sqldat']= $query;
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));

		$this->load->view('buyer/header',$sess);
		$this->load->view('buyer/mylist', $data);
		$this->load->view('buyer/footer');
	
		if($this->input->post('submit')){
			$date =  Date('Y-m-d'); 
			$this->load->library('fileupload');
			$this->load->helper(array('url','form','file','html'));
			$this->load->model('Admin_model');
			$auctionid = $this->input->post('auctionid');
			$lotno = $this->input->post('lotno');
			$upload_dd = $this->input->post('upload_dd');
			$pic_array1 = self::upload_files('upload_dd');
			
			if(!count($pic_array1)){
			echo '<script language="javascript">';
			echo 'alert("Documents Upload Failed")';  //not showing an alert box.
			echo '</script>';
			
		}else{
			$pic_array1 = serialize($pic_array1);
		}
		
		
	$data = array('auctionid' => $auctionid, 'lotno' => $lotno,'upload_dd' => $pic_array1);
		
	$status = $this->Admin_model->insert('biddercart', $data);
	//$auctionid = $this->db->insert_id();
	
	$transfer = array('upload_dd'=> $upload_dd,'date'=>$date);
			   if($status){
				  $this->session->set_flashdata('txdata',$transfer);
				  
			  }else{
				   header('location: ./Buyer_mylist/');
			  }  
			  
		/* 	  $sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('buyer/header',$sess);
		$this->load->view('buyer/mylist');
		$this->load->view('buyer/footer'); */
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
	


}

