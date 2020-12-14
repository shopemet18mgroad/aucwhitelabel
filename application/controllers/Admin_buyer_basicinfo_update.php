<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_buyer_basicinfo_update extends CI_Controller {

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
		$bcomptype = $this->input->post('bcomptype');
		$bcontactperson  = $this->input->post('bcontactperson');
		//$busername = $this->input->post('busername');
		//$bpassword = password_hash('default_auc123',PASSWORD_BCRYPT);
		//$bpassword = base64_encode('default_auc123');
		$bpassword = base64_encode($this->input->post('bpassword'));
		$bcin = $this->input->post('bcin');
		$bgst = $this->input->post('bgst');
		$bpan = $this->input->post('bpan');
		$bpcb  = $this->input->post('bpcb');
		$bemail  = $this->input->post('bemail');
		$bphone  = $this->input->post('bphone');
		$baddress  = $this->input->post('baddress');
		$bpin  = $this->input->post('bpin');
		$bstate  = $this->input->post('bstate');
		$bcountry  = $this->input->post('bcountry');
		$bbankname  = $this->input->post('bbankname');
		$baccountnumber  = $this->input->post('baccountnumber');
		$bbranch  = $this->input->post('bbranch');
		$bifsccode  = $this->input->post('bifsccode');
		$profileimage2[] = $this->input->post('profileimage2');
		$profileimage3 = serialize('profileimage2');
		$dataact = array();
		$datacomp = array();
		$dataact = $this->input->post('bsigneddocumentex');
		$datacomp = $this->input->post('bsigneddocumentexcom');
		if($dataact && $datacomp){
			$result = array_diff($dataact,$datacomp);
			$result2 = array_intersect($dataact,$datacomp);
		if(count($result)){
			foreach($result as $res){
			unlink(base_url()."web_files/uploads/".$res);
			}
		}
		
		if(!count($result2) && !$_FILES['bsigneddocument']['name'][0]){
			$datainserr = "Atleast One Signed Document Has To Uploaded";
			header('location: '.base_url().'admin_editbuyer/edit_buyer_alert/'.$bcompany.'/'.$datainserr);
			die;
		}
		}
		
		
		
		 if($_FILES['buploadimagepic']['tmp_name'][0]){
			unlink(base_url()."web_files/uploads/".$profileimage2[0]);
			$pic_array = self::upload_files('buploadimagepic');
		}
		if($_FILES['bsigneddocument']['tmp_name'][0]){
			$doc_array = self::upload_files('bsigneddocument');
		}
	
		
		if(!count($pic_array)){
			echo '<script language="javascript">';
			echo 'alert("Image Upload Failed")';  //not showing an alert box.
			echo '</script>';
			$pic_array = $profileimage3;
		}else{
			$pic_array = serialize($pic_array);
		}
		if(!count($doc_array)){
			echo '<script language="javascript">';
			echo 'alert("Documents Upload Failed")';  //not showing an alert box.
			echo '</script>';
			$doc_array = serialize($result2);
		}else{
			if($result2){
				$doc_array = array_merge($doc_array,$result2);
				$doc_array = serialize($doc_array);
			}else{
				$doc_array = serialize($doc_array);
			}
			
		}
		
		
		
		//=================================================================================================
		
		
		
		//==================================================================
		$data2 = array('bname' => $bname,'bcompany' => $bcompany, 'bcomptype' => $bcomptype, 'bcontactperson' => $bcontactperson, 'bpassword'=> $bpassword, 'bcin' => $bcin, 'bgst' => $bgst,'bpan' => $bpan,'bpcb' => $bpcb, 'bemail' => $bemail, 'bphone' => $bphone,'baddress' => $baddress, 'bpin' => $bpin, 'bstate' => $bstate, 'bcountry' => $bcountry, 'bbankname' => $bbankname, 'baccountnumber' => $baccountnumber, 'bbranch' => $bbranch, 'bifsccode' => $bifsccode, 'buploadimagepic' => $pic_array, 'bsigneddocument' => $doc_array);
		//$this->load->view('xya', $data);
		$datainserr = "Data Inserted Successfully";
		$updatech = array('bcompany' => $bcompany);
		$status = $this->Admin_model->update_custom('buyerprofile',$data2,$updatech,$updatech);
		// $status = $this->Admin_model->insert('sellerprofile', $data2);
		header('location: '.base_url().'Admin_buyerreg/index/'.$datainserr);
	die;
		//$this->load->view('admin/header');
		//$this->load->view('admin/salesreport');
		//$this->load->view('admin/footer');
		
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
