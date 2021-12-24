<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_addlot_info extends CI_Controller {

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
			$this->load->helper('captcha');
			$this->load->library('fileupload');
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->helper('file');
			$this->load->helper('html');
			$this->load->helper('date');
			
			date_default_timezone_set("Asia/Kolkata");
}
	
    public function index(){
        // If captcha form is submitted

		$this->load->library('session');
		$data = $this->session->flashdata('txdata');
		$this->load->library('fileupload');
		$this->load->helper(array('url','form','file','html'));
            
			if($this->input->post('submit')){
			$sauctionid = $this->input->post('sauctionid');
			$sname = $this->input->post('sname');
			$slotno = $this->input->post('slotno'); 
			$slotname = $this->input->post('slotname');
			$scategory = $this->input->post('scategory');
			$sdescription = $this->input->post('sdescription');
			$slotlocation = $this->input->post('slotlocation');	
			$slastdateemdsub = $this->input->post('slastdateemdsub');
			$sminincre = $this->input->post('sminincre');
			$sprice = $this->input->post('sprice');
			$sstartbidprice = $this->input->post('sstartbidprice');
			$sqty = $this->input->post('sqty');
			$sunitmeasurment = $this->input->post('sunitmeasurment');
			$sbidbase = $this->input->post('sbidbase');
			$sgst = $this->input->post('sgst');
			$shsncode = $this->input->post('shsncode');
			$sothertax = $this->input->post('sothertax');
			$semdamount = $this->input->post('semdamount');
			$sliftingperiod2 = $this->input->post('sliftingperiod2');
			$sliftingperiod = $this->input->post('sliftingperiod');
			$spcbcertificate = $this->input->post('spcbcertificate');
			
	           $a= $_FILES['uploadproductimage']['name']; 
			   
			   
	
		       $pic_array1 = self::upload_files('uploadproductimage');
		
	    
			
	               if(!count($pic_array1)){
			         echo '<script language="javascript">';
			         echo 'alert("Documents Upload Failed")';  //not showing an alert box.
			         echo '</script>';
		             }else{
			       $pic_array1 = serialize($pic_array1);
		         }
			
			
			
			
		
				
	
			
			$this->load->model('Admin_model');
			
			$srr = array('sauctionid'=>$sauctionid);
			$data1 = $this->Admin_model->getdatafromtable('addlot',$srr);
				if($data1){
					$lottmp = count($data1);
					 //echo "Hi"; die;
					$slotno = $lottmp + 1;
				}else{
					$slotno = 1;
				}
			
			$data = array('sauctionid' => $sauctionid, 'sname' => $sname, 'slotno' => $slotno, 'slotname' => $slotname, 'scategory' => $scategory, 'sdescription' => $sdescription, 'slotlocation'=> $slotlocation,'sminincre' => $sminincre, 'sprice' => $sprice,'sstartbidprice' => $sstartbidprice, 'sqty' => $sqty, 'sunitmeasurment' => $sunitmeasurment, 'sbidbase' => $sbidbase, 'sgst' => $sgst,'shsncode' => $shsncode, 'sothertax' => $sothertax, 'semdamount' => $semdamount,'sliftingperiod2' => $sliftingperiod2, 'sliftingperiod' => $sliftingperiod,  'spcbcertificate' => $spcbcertificate ,'uploadproductimage' =>$pic_array1);
			
			//print_r($data); die;
		
			
			$status = $this->Admin_model->insert('addlot', $data);
			
			


			 $transfer = array('auctionid' => $sauctionid, 'category' => $scategory,'sname'=> $sname);
			   if($status){
				  $this->session->set_flashdata('txdata',$transfer);
				  redirect('../admin_auctiondetails');
			  }else{
				   header('location: ./admin_addlot/index/');
		
			}
			
			
			//echo $this->session->userdata('auth');
		if(!$this->session->has_userdata('username')  || $this->session->userdata('auth') != "ADMIN"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
	
		$sess = array('sessi'=>$this->session->userdata('username'));
			
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/addlot',$data);
		$this->load->view('admin/footer');
		}
	}
		 else if($this->input->post('submit2')){
			 $sauctionid = $this->input->post('sauctionid'); 
			 $sname = $this->input->post('sname');
			$slotno = $this->input->post('slotno');
			$slotname = $this->input->post('slotname');
			$scategory = $this->input->post('scategory');
			$sdescription = $this->input->post('sdescription');
			$slotlocation = $this->input->post('slotlocation');
			$sminincre = $this->input->post('sminincre');
			$sprice = $this->input->post('sprice');
			$sstartbidprice = $this->input->post('sstartbidprice');
			$sqty = $this->input->post('sqty');
			$sunitmeasurment = $this->input->post('sunitmeasurment');
			$sbidbase = $this->input->post('sbidbase');
			$sgst = $this->input->post('sgst');
			$shsncode = $this->input->post('shsncode');
			$sothertax = $this->input->post('sothertax');
			$semdamount = $this->input->post('semdamount');
			$sliftingperiod2 = $this->input->post('sliftingperiod2');
			$sliftingperiod = $this->input->post('sliftingperiod');
			
			$spcbcertificate = $this->input->post('spcbcertificate');
		    $a= $_FILES['uploadproductimage']['name']; 
		      $pic_array1 = self::upload_files('uploadproductimage');
		
	   if(!count($pic_array1)){
			echo '<script language="javascript">';
			echo 'alert("Documents Upload Failed")';  //not showing an alert box.
			echo '</script>';
		}else{
			$pic_array1 = serialize($pic_array1);
		}
		
	
			
			 
			 $this->load->model('Admin_model');
			 
			 $srr = array('sauctionid'=>$sauctionid);
			$data1 = $this->Admin_model->getdatafromtable('addlot',$srr);
				if($data1){
					$lottmp = count($data1);
					 //echo "Hi"; die;
					$slotno = $lottmp + 1;
				}else{
					$slotno = 1;
				}
			 
			 
			 $data5 = array('sauctionid' => $sauctionid,'sname' => $sname, 'slotno' => $slotno, 'slotname' => $slotname, 'scategory' => $scategory, 'sdescription' => $sdescription, 'slotlocation'=> $slotlocation,'sminincre' => $sminincre, 'sprice' => $sprice,'sstartbidprice' => $sstartbidprice, 'sqty' => $sqty, 'sunitmeasurment' => $sunitmeasurment, 'sbidbase' => $sbidbase, 'sgst' => $sgst,'shsncode' => $shsncode, 'sothertax' => $sothertax, 'semdamount' => $semdamount,'sliftingperiod2' => $sliftingperiod2, 'sliftingperiod' => $sliftingperiod,  'spcbcertificate' => $spcbcertificate,'uploadproductimage' =>$pic_array1);
			 
			 $status1 = $this->Admin_model->insert('addlot', $data5);
			 
			 	 $transfer1 = array('auctionid' => $sauctionid, 'category' => $scategory,'sname' => $sname, 'lotno' => $slotno);
				 
						  if($status1){
				  $this->session->set_flashdata('txdata',$transfer1);
				  redirect('../admin_addlot');
				  
			  }else{
				   header('location: ./admin_addlot1/index/');
		
			}
			
			echo $this->session->userdata('auth');
		if(!$this->session->has_userdata('username')  || $this->session->userdata('auth') != "ADMIN"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
		$sess = array('sessi'=>$this->session->userdata('username'));
         $this->load->view('admin/header');
		$this->load->view('admin/addlot',$data5 );
		$this->load->view('admin/footer');

			  }
	}	
		
	}
	
	
	
	
	
	
	
	
public function validate_lotno(){
		
		$this->load->model('Admin_model');
		$data = $this->Admin_model->gettable('addlot');
		//print_r($dat);die;
		$dat = array($data->slotno);
		
		$dat = $this->uri->segment(3);
		
		$check_db = array('slotno' => $dat);
		$this->load->model('Admin_model');
			  if($this->Admin_model->check('addlot', $check_db)){
				  echo "BYE";
			  }else{
				  echo "HI";
			  }
		
	}

private function upload_files($nameid){
    	
 
	$countfiles=1;
      // Looping all files
      for($i=0;$i<$countfiles;$i++){
        if(!empty($_FILES[$nameid]['name'][$i])){
 
          // Define new $_FILES array - $_FILES['file']
          $_FILES['file']['name'] = $_FILES[$nameid]['name'];
          $_FILES['file']['type'] = $_FILES[$nameid]['type'];
          $_FILES['file']['tmp_name'] = $_FILES[$nameid]['tmp_name'];
          $_FILES['file']['error'] = $_FILES[$nameid]['error'];
          $_FILES['file']['size'] = $_FILES[$nameid]['size'];

          // Set preference
           $config['upload_path'] = 'web_files/uploads/';
			$config['allowed_types'] = 'doc|docx|pdf|xlsx|jpg|png|gif|jpeg';
          $config['max_size'] = '50000000'; // max_size in kb
          $config['file_name'] = $_FILES[$nameid]['name'][$i];
 
          //Load upload library
          $this->load->library('upload',$config); 
		$this->upload->initialize($config);
          // File upload
          if($this->upload->do_upload('file')){
            // Get data about the file
            $uploadData = $this->upload->data();
		//print_r( $uploadData ); die;
            $filename = $uploadData['file_name'];
            // Initialize array
            $datar[] = $filename;
          }
        }
 
      }
	return $datar;
    }	








}
            
			
	
	

