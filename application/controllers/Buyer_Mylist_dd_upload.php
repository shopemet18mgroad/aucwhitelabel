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
		//$this->input->post('auc');
		$auc = $this->input->post('auc');
		$kaa=0;
		foreach($_FILES['upload_dd']['name'] as $b){
			if($b != ""){
				$kab = $kaa;
			}
			$kaa++;
		}
		echo $kab;
		//$auc = urldecode($this->uri->segment(4));
		
		//$this->load->library('session');
		//$bidderuname = $this->session->userdata('username');
		$datexp = explode('|',$auc[$kab]);
		$username =  urlencode($datexp[0]);
		$auctionid = str_ireplace('-','/',$datexp[1]);
		$lotno = $datexp[2];
		/* $data = array('sauctionid'=>$auctionid);
		$data2 = array('sauctionid'=>$auctionid,'slotno'=>$lotno);	
		
		$dat4 = $this->Admin_model->getdatafromtable('addlot',$data2);
		$dat3 = $this->Admin_model->getdatafromtable('auction',$data);
		
		$aucstart = $dat3[0]->saucstartdate_time;
	
		$aucend = $dat3[0]->saucclosedate_time; */
		//$aucstartbid = $dat4[0]->sstartbidprice;
		//$aucstartbidprice = $dat4[0]->sprice;
		
		/* 
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
		} */
			 if(!$_FILES['upload_dd']['name'][$kab]){
				$datainserr = "Atleast One Signed Document Has To Uploaded";
				header('location: '.base_url().'buyer_mylist/index/'.$auctionid.'/'.$datainserr);
				die;
			}else{
				$doc_array = self::upload_files('upload_dd');
			}  
			if(!count($doc_array)){
			echo '<script language="javascript">';
			echo 'alert("Documents Upload Failed")';  //not showing an alert box.
			echo '</script>';
			}else{
				$doc_array = serialize($doc_array);
			}
			
			
				
			$data4 = array ('upload_dd' => $doc_array);
			$datainserr = "Data Inserted Successfully";
			$username = urldecode($username);
		//$sess = array('sessi'=>$this->session->userdata('username'));
			$updatech = array('bidderusername'=>$username,'auctionid'=>$auctionid,'lotno' => $lotno);
			$status = $this->Admin_model->update_custom('biddercart',$data4,$updatech,$updatech); 
			if($status){
				
			} 
			 header('location: '.base_url().'buyer_mylist/index/'.$datainserr);
		}
		//=================================================================================================
		//==================================================================
		
		
		//$bcheck = array('bidderusername'=>$bidderuname,'auctionid'=>$auctionid,'lotno'=>$lotno);
		
		
		
		// if($this->Admin_model->check('biddercart',$bcheck)){
			// echo "EX";
		// }/* else{
			/* $status = $this->Admin_model->insert('biddercart', $data4);
			echo "IN";
		} */ 
		//$this->load->view('xya', $data);
		
		}
		
		
		public function emdreq(){
		$this->load->helper('url');
			
		$retrivevaltmp =($this->uri->segment(3));
		
		$retrivevaltmp = urldecode($retrivevaltmp);
	//print_r($retrivevaltmp); die;
		$retrivevaltmp2 = urldecode(str_ireplace('-','/',$this->uri->segment(4)));
			
		$retrivevaltmp3 = urldecode($this->uri->segment(5));
		
		$data2 = array('emdrequest'=>3);
		$datainserr = "Data Inserted Successfully";
		$updatech = array('bidderusername'=>$retrivevaltmp,'auctionid'=>$retrivevaltmp2,'lotno'=>$retrivevaltmp3);
		$this->load->model('Admin_model');
		
		
		$status2 = $this->Admin_model->update_custom('biddercart',$data2,$updatech,$updatech);
	
		if($status2){
				
			} 
			 header('location: '.base_url().'buyer_mylist/index/'.$datainserr);
				
	
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
