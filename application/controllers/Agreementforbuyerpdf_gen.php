
	<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Agreementforbuyerpdf_gen extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
// load helper
    $this->load->helper(array('url', 'html'));
  }
   public function index(){
     echo "hi";
  }
  public function auc_no(){
	  
		$this->load->helper('url');
		$this->load->model('Admin_model');
		
	
		
	   $username = urldecode($this->uri->segment(3)); 
	   $date = urldecode($this->uri->segment(4)); 
		 $address = urldecode($this->uri->segment(5));
		  $city = urldecode($this->uri->segment(6));
		   $pin = urldecode($this->uri->segment(7));
		    $company = urldecode($this->uri->segment(8));
			 $designation = urldecode($this->uri->segment(9));
			 $bname = urldecode($this->uri->segment(10));
	  
		
		  $data['username'] = $username;
		  $data['date'] =  $date;
		  $data['address'] = $address ;
		  $data['city'] = $city;
		  $data['pin'] = $pin;
		  $data['company'] = $company;
		   $data['designation'] = $designation;
		    $data['bname'] = $bname;
	

			
			

		
      $data2 = array(
        'title' => $username,
        'data' => 'List Of Lots');
		
		//print_r( $data2);die;
	 $ci = &get_instance();
    $data['data'] = $data2;
	
    $ci->load->view("agreementforbuyerpdf",$data);	 
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
    $ci->dompdf->stream($username.".pdf", array("Attachment" => 0));
		
  }
 }
	?>
