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
		$bcin = $this->input->post('bcin');
		$bgst = $this->input->post('bgst');
		
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
		$profileimage = $this->input->post('profileimage');
		$dataact = array();
		$datacomp = array();
		$dataact = $this->input->post('bsigneddocumentex');
		$datacomp = $this->input->post('bsigneddocumentexcom');
		if($dataact && $datacomp){
			$result = array_diff($dataact,$datacomp);
			$result2 = array_intersect($dataact,$datacomp);
		}
		
		if(count($result)){
			foreach($result as $res){
			unlink(base_url()."web_files/uploads/".$res);
			}
		}
		if(!count($result2) && !$_FILES['bsigneddocument']['name']){
			$datainserr = "Atleast One Signed Document Has To Uploaded";
			header('location: '.base_url().'admin_editbuyer/edit_buyer_alert/'.$bcompany.'/'.$datainserr);
		}
	    if($_FILES['buploadimage1']['name']){
			unlink("../../web_files/uploads/".$profileimage);
			$pic_array = self::upload_files('buploadimage1');
		}
		if($_FILES['bsigneddocument']['name']){
			$doc_array = self::upload_files('bsigneddocument');
		}
		
		if(!count($pic_array)){
			echo '<script language="javascript">';
			echo 'alert("Image Upload Failed")';  //not showing an alert box.
			echo '</script>';
			$pic_array = $profileimage;
		}else{
			$pic_array = serialize($pic_array);
		}
		if(!count($doc_array)){
			echo '<script language="javascript">';
			echo 'alert("Documents Upload Failed")';  //not showing an alert box.
			echo '</script>';
			$doc_array = serialize($result2);
		}else{
			$doc_array = array_merge($doc_array,$result2);
			$doc_array = serialize($doc_array);
		}
		
		//=================================================================================================
		
		
		
		//==================================================================
		$data2 = array('bname' => $bname, 'bcomptype' => $bcomptype, 'bcontactperson' => $bcontactperson, 'bcin' => $bcin, 'bgst' => $bgst,'bpcb' => $bpcb, 'bemail' => $bemail, 'bphone' => $bphone,'baddress' => $baddress, 'bpin' => $bpin, 'bstate' => $bstate, 'bcountry' => $bcountry, 'bbankname' => $bbankname, 'baccountnumber' => $baccountnumber, 'bbranch' => $bbranch, 'bifsccode' => $bifsccode, 'buploadimage1' => $pic_array, 'bsigneddocument' => $doc_array);
		//$this->load->view('xya', $data);
		$datainserr = "Data Inserted Successfully";
		$updatech = array('bcompany' => $bcompany);
		$status = $this->Admin_model->update_custom('buyerprofile',$data2,$updatech,$updatech);
		// $status = $this->Admin_model->insert('sellerprofile', $data2);
		header('location: '.base_url().'Admin_buyerreg/index/'.$datainserr);
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
