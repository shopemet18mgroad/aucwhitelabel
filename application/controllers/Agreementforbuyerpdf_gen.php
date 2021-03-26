
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
		
	
		
	   $bcompany = urldecode($this->uri->segment(3)); 
	   
	   
	 
	   
	   
	   $scomp = array('bcompany' => $bcompany,'adaction' => true);
	   
	 
		
			 
	  
		$data['dat'] = $this->Admin_model->getdatafromtable('buyerprofile',$scomp ); 
	   
	   
	   
	   
	   
	  
		
      $data2 = array(
        'title' => $bcompany,
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
    $ci->dompdf->stream($bcompany.".pdf", array("Attachment" => 0));
		
  }
 }
	?>
