<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyer_app_mylist extends CI_Controller {

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
		$data = array();
		if($this->uri->segment(4)){
			$errormsg = urldecode($this->uri->segment(4));
			echo '<script language="javascript">';
			echo 'alert("'.$errormsg.'")';
			echo '</script>';
		}
		$this->load->model('Admin_model');
		$this->load->library('session');
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "BUYER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
		//$data1 = $this->session->flashdata('txdata');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$sess2 = $this->session->userdata('username');
		$emdpaid = array('bidderusername'=>$sess2,'emdpaid'=>false, 'emdrequest' =>false);
		$query = $this->Admin_model->getdatafromtable('biddercart', $emdpaid);
		$data['sqldat']= $query;
		if(count($data['sqldat'])){
		$aucstarttime = $data['sqldat'][0]->aucstartdate_time;
		$tmp1 = explode('.',$aucstarttime);
		$aucstarttime = $tmp1[0];
		$data['st'] = $aucstarttime;
		
		$aucclosetime = $data['sqldat'][0]->aucclosedate_time;
		$tmp = explode('.',$aucclosetime);
		$aucclosetime = $tmp[0];
		$data['ct'] = $aucclosetime;
		}
		$data['sessi']= $sess2;
		$this->load->view('buyer_app/header',$sess);
		$this->load->view('buyer_app/mylist', $data);
		$this->load->view('buyer_app/footer');
	}
	}
	 /* if($this->input->post('submit')){
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
		$this->db->where('auctionid', $auctionid);
	$status = $this->Admin_model->insert('biddercart', $data);
	//$auctionid = $this->db->insert_id();
	
	$transfer = array('upload_dd'=> $upload_dd,'date'=>$date);
			   if($status){
				  $this->session->set_flashdata('txdata',$transfer);
				  
			  }else{
				   header('location: ./Buyer_mylist/');
			  } 
			   */
		
		

	
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

