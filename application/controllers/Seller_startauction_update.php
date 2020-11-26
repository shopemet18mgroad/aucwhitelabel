<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_startauction_update extends CI_Controller {

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
		$scategory = $this->input->post('scategory');
		$sauctionid = $this->input->post('sauctionid');
		$sname = $this->input->post('sname');
		$scompanyname = $this->input->post('scompanyname');
		$svinspection  = $this->input->post('svinspection');
		$sfrominpectdate_time  = $this->input->post('sfrominpectdate_time');
		$stoinpectdate_time  = $this->input->post('stoinpectdate_time');
		$sstartbidprice  = $this->input->post('sstartbidprice');
		$slastdateemdsub  = $this->input->post('slastdateemdsub');
		$saucstartdate_time  = $this->input->post('saucstartdate_time');
		$saucclosedate_time  = $this->input->post('saucclosedate_time');
		$sterms_condiaccept = $this->input->post('sterms_condiaccept');
		$sterms_text = $this->input->post('sterms_text');
		
		$dataact = array();
		$datacomp = array();
		$dataact = $this->input->post('ssigneddocumentex');
		$datacomp = $this->input->post('ssigneddocumentexcom');
		if($dataact && $datacomp){
			$result = array_diff($dataact,$datacomp);
			$result2 = array_intersect($dataact,$datacomp);
			if(!count($result2) && !$_FILES['sterms_condiupload']['name']){
			$datainserr = "Atleast One Signed Document Has To Uploaded";
			header('location: '.base_url().'Seller_editauction/editauction_alert/'.$sauctionid.'/'.$datainserr);
		}
		}
		
		 /* if(count($result)){
			foreach($result as $res){
			unlink(base_url()."web_files/uploads/".$res);
			} */
	 
		
	   
		 if($_FILES['sterms_condiupload']['tmp_name'][0]){
			$doc_array = self::upload_files('sterms_condiupload');
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
		$data2 = array('scategory' => $scategory, 'sauctionid' => $sauctionid, 'sname' => $sname, 'scompanyname' => $scompanyname, 'svinspection' => $svinspection, 'svinspection' => $svinspection,'sfrominpectdate_time' => $sfrominpectdate_time, 'stoinpectdate_time' => $stoinpectdate_time, 'sstartbidprice' => $sstartbidprice, 'slastdateemdsub' => $slastdateemdsub, 'saucstartdate_time' => $saucstartdate_time, 'saucclosedate_time' => $saucclosedate_time, 'sterms_condiaccept'=> $sterms_condiaccept, 'sterms_condiupload' => $doc_array,'sterms_text' => $sterms_text);
		//$this->load->view('xya', $data);
		$datainserr = "Data Inserted Successfully";
		$updatech = array('sname' => $sname);
		$status = $this->Admin_model->update_custom('auction',$data2,$updatech,$updatech);
		// $status = $this->Admin_model->insert('sellerprofile', $data2);
		header('location: '.base_url().'Seller_editforthcom/index/'.$datainserr);
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
            }else{
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
