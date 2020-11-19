<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyer_Mylist_dd_upload extends CI_Controller {

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
		if($this->input->post('submit'))
		{
		
		$this->load->helper(array('url','html'));
		$this->load->model('Admin_model');
		$this->load->library('session');
		//$data1 = $this->session->flashdata('txdata');
		$this->input->post('auc');

		$auc = $this->input->post('auc');
		
		//$auc = urldecode($this->uri->segment(4));
		
		//$this->load->library('session');
		//$bidderuname = $this->session->userdata('username');
		$datexp = explode('|',$auc);
		
		$auctionid = str_ireplace('-','/',$datexp[0]);
		
		$lotno = $datexp[1];
		
		/* $data = array('sauctionid'=>$auctionid);
		$data2 = array('sauctionid'=>$auctionid,'slotno'=>$lotno);	
		
		$dat4 = $this->Admin_model->getdatafromtable('addlot',$data2);
		$dat3 = $this->Admin_model->getdatafromtable('auction',$data);
		
		$aucstart = $dat3[0]->saucstartdate_time;
	
		$aucend = $dat3[0]->saucclosedate_time; */
		//$aucstartbid = $dat4[0]->sstartbidprice;
		//$aucstartbidprice = $dat4[0]->sprice;
		
		
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
		
		 if(!count($result2) && !$_FILES['upload_dd']['name'][0]){
			$datainserr = "Atleast One Signed Document Has To Uploaded";
			header('location: '.base_url().'buyer_mylist/index/'.$auctionid.'/'.$datainserr);
			die;
		}  
		}
		
		$doc_array = self::upload_files('upload_dd');
		 if($_FILES['upload_dd']['tmp_name'][0]){
			$doc_array = self::upload_files('upload_dd');
			
			
		} 
	

		  if(!count($doc_array)){
			echo '<script language="javascript">';
			echo 'alert("Documents Upload Failed")';  //not showing an alert box.
			echo '</script>';
			$doc_array = serialize($result2);
		}    else{
			if($result2){
				$doc_array = array_merge($doc_array,$result2);
				$doc_array = serialize($doc_array);
			}else{
				$doc_array = serialize($doc_array);
			}
			
		} 
		
		
		//=================================================================================================
		//==================================================================
		
		
		//$bcheck = array('bidderusername'=>$bidderuname,'auctionid'=>$auctionid,'lotno'=>$lotno);
		
		$data4 = array ('upload_dd' => $doc_array);
		
		// if($this->Admin_model->check('biddercart',$bcheck)){
			// echo "EX";
		// }/* else{
			/* $status = $this->Admin_model->insert('biddercart', $data4);
			echo "IN";
		} */ 
		//$this->load->view('xya', $data);
		
	 	$datainserr = "Data Inserted Successfully";
		//$sess = array('sessi'=>$this->session->userdata('username'));
		$updatech = array('auctionid'=>$auctionid,'lotno' => $lotno);
		$status = $this->Admin_model->update_custom('biddercart',$data4,$updatech,$updatech); 
		if($status){
				  $this->session->set_flashdata('txdata',$transfer);
				  
			  }
		
		header('location: '.base_url().'buyer_mylist/index/'.$datainserr);
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
