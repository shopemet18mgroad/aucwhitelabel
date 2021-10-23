
	<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Biddingdatapdf_gen extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
// load helper
    $this->load->helper(array('url', 'html'));
  }
   public function index(){
     echo "hi";
  }
  public function bidding_data(){
	  
		$this->load->helper('url');
		$this->load->model('Admin_model');
		
	    $sauctionid = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
		$slotno = urldecode($this->uri->segment(4));
		$retriveval = array('sauctionid'=>$sauctionid,'slotno'=>$slotno);
		
		$this->load->model('Admin_model');
		
		$data['sqldata'] = $this->Admin_model->getdataDSC('biddingdata',$sauctionid,$slotno);
		
		//print_r($data['sqldata']);die;
	
		if($data){

		
      $data2 = array(
        'title' => $sauctionid,
        'data' => 'List Of Lots');
		
		//print_r( $data2);die;
	 $ci = &get_instance();
    $data['data'] = $data2;
	
    $ci->load->view("bidding_data",$data);	 
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
  public function bidding_data1(){
	  
		$this->load->helper('url');
		$this->load->model('Admin_model');
		
	    $sauctionid = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
		$slotno = urldecode($this->uri->segment(4));
		$retriveval = array('sauctionid'=>$sauctionid,'slotno'=>$slotno);
		
		$this->load->model('Admin_model');
		
		$data['sqldata'] = $this->Admin_model->getdataDSC('biddingdata',$sauctionid,$slotno);
		
		//print_r($data['sqldata']);die;
	
		if($data){

		
      $data2 = array(
        'title' => $sauctionid,
        'data' => 'List Of Lots');
		
		//print_r( $data2);die;
	 $ci = &get_instance();
    $data['data'] = $data2;
	
    $ci->load->view("bidding_data1",$data);	 
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
 }
	?>
