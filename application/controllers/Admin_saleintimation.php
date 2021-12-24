
	<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_saleintimation extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
// load helper
    $this->load->helper(array('url', 'html'));
  }
   public function index(){
     echo "hi";
  }
  public function sale_no(){
	  
		$this->load->helper('url');
		$this->load->model('Admin_model');
		
		$sauctionid = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
		
		
		
		//print_r($sauctionid);die;
		$slotno = urldecode($this->uri->segment(4));
		
		
		$slotname = urldecode($this->uri->segment(5));
		$busername = urldecode($this->uri->segment(6));
		//print_r($busername1); die;
		
		
		 $active = array('busername'=>$busername);
		 
		 $active1 = array('sauctionid'=>$sauctionid);
		 $active3 = array('sauctionid'=>$sauctionid,'slotno'=>$slotno,'slotname'=>$slotname);
		 

	
		
     $data['sqldata1'] = $this->Admin_model->getdatafromtable('buyerprofile', $active);
	 
	 $data['sqldata'] = $this->Admin_model->getdatafromtable('auction', $active1);
	 
	 $data['sqldata2'] = $this->Admin_model->getdatafromtable('addlot', $active3);
	 
	 		//print_r($data['sqldata']);die;
	  
		
		
		
		
		
	
	 
			
			

		
      $data2 = array(
        'title' => $sauctionid,
        'data' => 'List Of Lots');
		
	 $ci = &get_instance();
    $data['data'] = $data2;
	// $data['data'] = $data3;
    $ci->load->view("admin/saleintimation",$data);	 
    // Get output html 
    $html = $ci->output->get_output();
// add external css library
    $html .= '<link href="' .base_url().'web_files/css/style.css" rel="stylesheet">';
    // Load pdf library
    $ci->load->library('pdf');
    $ci->dompdf->loadHtml($html);
    // setup size
    $ci->dompdf->setPaper('A4', 'portrait');
    // Render the HTML as PDF
    $ci->dompdf->render();
    // Output  PDF (1 = download and 0 = preview)
    $ci->dompdf->stream($sauctionid.".pdf", array("Attachment" => 0));
		
  }
 }
	?>