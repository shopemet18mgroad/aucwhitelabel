<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_seller_basicinfo_update extends CI_Controller {

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
		$sname = $this->input->post('sname');
		$scomapnyname = $this->input->post('scomapnyname');
		$ssellertype = $this->input->post('ssellertype');
		$scontactperson  = $this->input->post('scontactperson');
		$sdesignation = $this->input->post('sdesignation');
		//$susername = $this->input->post('susername');
		//$spassword = password_hash('default_auc123',PASSWORD_BCRYPT);
		//$spassword = base64_encode('default_auc123');
		//$spassword = base64_encode($this->input->post('spassword'));
		$scin  = $this->input->post('scin');
		$sgst  = $this->input->post('sgst');
		$span  = $this->input->post('span');
		$spcb  = $this->input->post('spcb');
		$semail  = $this->input->post('semail');
		$sphone  = $this->input->post('sphone');
		$saddress  = $this->input->post('saddress');
		$saddress2 = serialize($saddress);
		$saddresscount  = $this->input->post('saddresscount');
		$saddresscount = serialize($saddresscount);
		$spin  = $this->input->post('spin');
		$sstate  = $this->input->post('sstate');
		$scountry  = $this->input->post('scountry');
		$sbankername  = $this->input->post('sbankername');
		$saccountnumber  = $this->input->post('saccountnumber');
		$servperc  = $this->input->post('servperc');
		$sbranch  = $this->input->post('sbranch');
		$sifsccode  = $this->input->post('sifsccode');
		$profileimage[] = $this->input->post('profileimage');
		$profileimage2 = serialize($profileimage);
		$dataact = array();
		$datacomp = array();
		$dataact = $this->input->post('ssigneddocumentex');
		$datacomp = $this->input->post('ssigneddocumentexcom');
		$sref  = $this->input->post('sref');
		if($dataact && $datacomp){
			$result = array_diff($dataact,$datacomp);
			$result2 = array_intersect($dataact,$datacomp);
			if(count($result)){
			foreach($result as $res){
			unlink(base_url()."web_files/uploads/".$res);
			}
			}
			if(!count($result2) && !$_FILES['ssigneddocument']['name'][0]){
				$datainserr = "Atleast One Signed Document Has To Uploaded";
				header('location: '.base_url().'admin_editseller/edit_seller_alert/'.$scomapnyname.'/'.$datainserr);
				die;
			}
		}
		
	    if($_FILES['suploadprofilepic']['tmp_name'][0]){
			unlink("../web_files/uploads/".$profileimage[0]);
			$pic_array = self::upload_files('suploadprofilepic');
		}
		if($_FILES['ssigneddocument']['tmp_name'][0]){
			$doc_array = self::upload_files('ssigneddocument');
		}
		
		if(!count($pic_array)){
			echo '<script language="javascript">';
			echo 'alert("No Image Upload Failed")';  //not showing an alert box.
			echo '</script>';
			$pic_array = $profileimage2;
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
		$data2 = array('servperc' => $servperc,'sname' => $sname,'scomapnyname' => $scomapnyname, 'ssellertype' => $ssellertype, 'scontactperson' => $scontactperson, 'sdesignation' => $sdesignation, 'scin' => $scin, 'sgst' => $sgst, 'span' => $span,'spcb' => $spcb, 'semail' => $semail, 'sphone' => $sphone , 'saddress' => $saddress2, 'saddresscount' => $saddresscount, 'spin' => $spin, 'sstate' => $sstate, 'scountry' => $scountry, 'sbankername' => $sbankername, 'saccountnumber' => $saccountnumber, 'sbranch' => $sbranch, 'sifsccode' => $sifsccode, 'suploadprofilepic' => $pic_array, 'ssigneddocument' => $doc_array, 'sref' => $sref);
		//$this->load->view('xya', $data);
		$datainserr = "Data Inserted Successfully";
		$updatech = array('scomapnyname' => $scomapnyname);
		$status = $this->Admin_model->update_custom('sellerprofile',$data2,$updatech,$updatech);
		// $status = $this->Admin_model->insert('sellerprofile', $data2);
		header('location: '.base_url().'admin_sellereditprofile/index/'.$datainserr);
		//$this->load->view('admin/header');
		//$this->load->view('admin/salesreport');
		//$this->load->view('admin/footer');
		
	}
	
/*private function upload_file($filenameee,$nameid)
    {
        if(!empty($filenameee)){
                $config['upload_path'] = 'web_files/uploads/';
                $config['allowed_types'] = 'jpg|png';
                $config['file_name'] = $filenameee;
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                if($this->upload->do_upload($nameid)){
                    $uploadData = $this->upload->data();
                    $flname = $uploadData['file_name'];
                }else{
                    $flname = 'Unable';
                }
            }else{`
                $flname = 'aa';
            }
			return $flname;
    }*/
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
