<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pdf_gen extends CI_Controller
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
  public function auc_no(){
	  
		$this->load->helper('url');
		$this->load->model('Admin_model');
		$aucf = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
		$snam = urldecode($this->uri->segment(4));
		$aucfl = unserialize($this->uri->segment(5));
		
		print_r($aucfl); die;
			//$sname = "AUC/Anita/Ferrous/16/53/37";
		//$aucencode = str_ireplace('-','/',$aucf);	
					
			$active = array('sauctionid'=>$aucf,'sterms_condiupload'=>$aucfl);
			$active2 = array('sname'=>$snam);
			$query = $this->Admin_model->getdatafromtable('addlot', $active);
			
			$query2 = $this->Admin_model->getdatafromtable('auction', $active);
			$query3 = $this->Admin_model->getdatafromtable('sellerprofile',$active2);
			//print_r($query3); die;
			$data['sqldata']= $query;
				
			$data['sqldata2']= $query2;
			$data['sql']=$query3 ;
			$data['sauctionid'] = $aucf;
			//print_r($aucf); die;
			//$this->load->view('Pdf_File2',$data);
      $data2 = array(
        'title' => $aucf,
        'data' => 'List Of Lots');
	 $ci = &get_instance();
    $data['data'] = $data2;
    $ci->load->view("pdf_File2",$data);	 
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
    $ci->dompdf->stream($aucf.".pdf", array("Attachment" => 0));
  }
 }
?>