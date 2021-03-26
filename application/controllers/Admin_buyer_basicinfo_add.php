<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_buyer_basicinfo_add extends CI_Controller {

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
		$this->load->library('fileupload');
		$this->load->helper(array('url','form','file','html'));
		$this->load->model('Admin_model');
		
		$bname = $this->input->post('bname');
		$bcompany = $this->input->post('bcompany');
		$bcomptype  = $this->input->post('bcomptype');
		$bbuyerlocation = $this->input->post('bbuyerlocation');
		$bcontactperson  = $this->input->post('bcontactperson');
		$busername = $this->input->post('busername');
		//$bpassword = password_hash('default_auc123',PASSWORD_BCRYPT);
		$bpassword = base64_encode($this->input->post('bpassword'));
		$bcin  = $this->input->post('bcin');
		$bgst  = $this->input->post('bgst');
		$bpcb  = $this->input->post('bpcb');
		$bemail  = $this->input->post('bemail');
		$bphone  = $this->input->post('bphone');
		$baddress  = $this->input->post('baddress');
		$bpin  = $this->input->post('bpin');
		$bpan  = $this->input->post('bpan');
		$bstate  = $this->input->post('bstate');
		$bcountry  = $this->input->post('bcountry');
		$bbankname  = $this->input->post('bbankname');
		$baccountnumber  = $this->input->post('baccountnumber');
		$bbranch  = $this->input->post('bbranch');
		$bifsccode  = $this->input->post('bifsccode');
		$pic_array1 = self::upload_files('buploadimagepic');
		$doc_array1 = self::upload_files('bsigneddocument');
		$bref  = $this->input->post('bref');
		
			if(!count($pic_array1)){
			echo '<script language="javascript">';
			echo 'alert("Documents Upload Failed")';  //not showing an alert box.
			echo '</script>';
		}else{
			$pic_array1 = serialize($pic_array1);
		}
		if(!count($doc_array1)){
			echo '<script language="javascript">';
			echo 'alert("Documents Upload Failed")';  //not showing an alert box.
			echo '</script>';
		}else{
			$doc_array1 = serialize($doc_array1);
		}
	
						/* 
		$path = base_url()."web_files/upload/";
		$title = "uploaded";
		
		self::upload_files($path, $title, $buploadprofilepic);
		$bsigneddocument  = $this->input->post('bsigneddocument');
		self::upload_files($path, $title, $bsigneddocument); */
		//$count = count($bsigneddocument);
		
		
		$data = array('bname' => $bname, 'bcompany' => $bcompany, 'bcomptype' => $bcomptype,'bbuyerlocation' => $bbuyerlocation ,'bcontactperson' => $bcontactperson,'busername' => $busername,'bpassword'=> $bpassword, 'bcin' => $bcin,' bgst' => $bgst, 'bpcb' => $bpcb, 'bemail' => $bemail , 'bphone' => $bphone, 'baddress' => $baddress, 'bpin' => $bpin, 'bpan' => $bpan, 'bstate' => $bstate, 'bcountry' => $bcountry, 'bbankname' => $bbankname, 'baccountnumber' => $baccountnumber, 'bbranch' => $bbranch, 'bifsccode' => $bifsccode, 'buploadimagepic' => $pic_array1, 'bsigneddocument' => $doc_array1, 'bref' => $bref);
		$datainserr = "Data Inserted Successfully";
		$status = $this->Admin_model->insert('buyerprofile', $data);
		header('location: '.base_url().'admin_buyerreg/index/'.$datainserr);
		
		
		//$this->load->view('admin/header');
		//$this->load->view('admin/salesreport');
		//$this->load->view('admin/footer');
		
	}
	
	public function validate_adminbcompany(){
		$dat = urldecode($this->uri->segment(3));
		$check_db = array('bcompany' => $dat);
		$this->load->model('Admin_model');
			  if($this->Admin_model->check('buyerprofile', $check_db)){
				  echo "BYE";
			  }else{
				  echo "HI";
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
