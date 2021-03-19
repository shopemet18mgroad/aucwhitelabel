
	<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Agreementforsellerpdf_gen extends CI_Controller {

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

	   $date = urldecode($this->uri->segment(3)); 
		 $comp = urldecode($this->uri->segment(4));
		  $city = urldecode($this->uri->segment(5));
		   $pin = urldecode($this->uri->segment(6));
		    $company = urldecode($this->uri->segment(7));
			 $designation = urldecode($this->uri->segment(8));
			 $sname = urldecode($this->uri->segment(9));
			 
	  
		
		  
		  $data['date'] =  $date;
		  $data['comp'] = $comp ;
		  $data['city'] = $city;
		  $data['pin'] = $pin;
		  $data['company'] = $company;
		   $data['designation'] = $designation;
		    $data['sname'] = $sname;
			 
	

			
			

		
      $data2 = array(
        'title' => $company,
        'data' => 'List Of Lots');
		
		//print_r( $data2);die;
	 $ci = &get_instance();
    $data['data'] = $data2;
	
    $ci->load->view("agreementforsellerpdf",$data);	 
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
    $ci->dompdf->stream($company.".pdf", array("Attachment" => 0));
		
  }
 }
	?>
