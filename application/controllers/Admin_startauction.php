<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_startauction extends CI_Controller {

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
	 	 /* public function index(){
		$this->load->helper('url');
		$this->load->view('admin/header');
		$this->load->view('admin/startauction');
		$this->load->view('admin/footer'); 
		}  */
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
    
    public function index(){
        
            if($this->input->post('submit')){
			$date =  Date('Y-m-d'); 
			$this->load->library('fileupload');
			$this->load->helper(array('url','form','file','html'));
			$this->load->model('Admin_model');
			$scategory = $this->input->post('scategory');
			$sauctionid = $this->input->post('sauctionid');
			$sname = $this->input->post('sname');
			$srefid = $this->input->post('srefid');
			$scompanyname = $this->input->post('scompanyname');
			$sfrominpectdate_time = $this->input->post('sfrominpectdate_time');
			$stoinpectdate_time  = $this->input->post('stoinpectdate_time');
			$semddetail = $this->input->post('semddetail');
			$slastdateemdsub = $this->input->post('slastdateemdsub');
			$svinspection = $this->input->post('svinspection');
			$saucstartdate_time = $this->input->post('saucstartdate_time');
			$saucclosedate_time = $this->input->post('saucclosedate_time');
			$sterms_condiaccept = $this->input->post('sterms_condiaccept');
			if($sterms_condiaccept){
					$sterms_condiaccept = true;
			}
			//$sterms_condiaccept  = $this->input->post('sterms_condiaccept');
			$pic_array1 = self::upload_files('sterms_condiupload');
			
			if(!count($pic_array1)){
			echo '<script language="javascript">';
			echo 'alert("Documents Upload Failed")';  //not showing an alert box.
			echo '</script>';
			
		}else{
			$pic_array1 = serialize($pic_array1);
		}
		
				$sterms_text = $this->input->post('sterms_text');
			
			//$this->load->model('Admin_model');
			$data = array('scategory' => $scategory, 'sauctionid' => $sauctionid, 'sname' => $sname,'srefid' => $srefid, 'scompanyname' => $scompanyname, 'sfrominpectdate_time' => $sfrominpectdate_time, 'stoinpectdate_time' => $stoinpectdate_time,'semddetail' => $semddetail,'slastdateemdsub' => $slastdateemdsub, 'svinspection'=> $svinspection, 'saucstartdate_time' => $saucstartdate_time,'saucclosedate_time' => $saucclosedate_time,'sterms_condiaccept'=>$sterms_condiaccept,'sterms_condiupload' => $pic_array1 , 'sterms_text' => $sterms_text);
			
			$status = $this->Admin_model->insert('auction', $data);
			
			 $transfer = array('category'=> $scategory, 'auctionid'=>$sauctionid,'sname' => $sname,'date'=>$date);
			   if($status){
				  $this->session->set_flashdata('txdata',$transfer);
				  redirect('../admin_addlot');
			  }else{
				   header('location: ./admin_startauction/');
			  }
			
			}
			//echo $this->session->userdata('auth');
		if(!$this->session->has_userdata('username')  || $this->session->userdata('auth') != "ADMIN"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{

		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/startauction');
		$this->load->view('admin/footer');
		
		}	   
	}
 public function auc2(){
	 $sdata = urldecode($this->uri->segment(3));
	$this->load->model('Admin_model');
	$search = $this->Admin_model->getdatafromtable('sellerprofile',$sdata);	
 }
 
 
 
 
public function get_seller_table(){
	$dataw = urldecode($this->uri->segment(3));
	$this->load->model('Admin_model');
	$search = $this->Admin_model->get_lookalike('sellerprofile','scomapnyname',$dataw);	
	
	if($search){
		foreach($search as $sear){
			echo "<li onclick=\"getPaging(this.id)\" id=\"".$sear['scomapnyname'].'|'.$sear['sname']."\" class=\"option\">".$sear['scomapnyname']."</li>\n";
			
		}
	}else{
		echo "<li onclick=\"\" value=\"1\" class=\"option\">No Results</li>";
	}
	
}


	
private function upload_files($nameid)
    {	
	$countfiles = count($_FILES[$nameid]['name']);
	$datar;
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
	
	

	

