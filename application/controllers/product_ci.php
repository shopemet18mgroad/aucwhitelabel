<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Product_ci extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
// load helper
    $this->load->helper(array('url', 'html'));
  }
   public function index(){
     echo "hi";
  }
  public function get_pdf_test(){
      $data = array(
        'title' => 'Add PDF | ERP',
        'data' => 'Test');
	 $ci = &get_instance();
    $data['data'] = $data;
	 
    $ci->load->view("pdffile");
	 
    // Get output html
    $html = $ci->output->get_output();
// add external css library
    //$html .= '<link href="' .base_url().'web_files/css/style.css" rel="stylesheet">';
    // Load pdf library
    $ci->load->library('pdf');
    $ci->dompdf->loadHtml($html);
    // setup size
    $ci->dompdf->setPaper('A4', 'portrait');
    // Render the HTML as PDF
    $ci->dompdf->render();
    // Output  PDF (1 = download and 0 = preview)
    $ci->dompdf->stream("welcome.pdf", array("Attachment" => 0));
  }
 }
?>