<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdf_File2 extends CI_Controller {

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
		$this->load->helper('url');
		$this->load->model('Admin_model');
		//$sname = $this->uri->segment(3);
			$sname = "AUC/Anita/Ferrous/16/53/37";
		$aucencode = str_ireplace('-','/',$sname);
			
			$active = array('sauctionid'=>$aucencode);
			
			$query = $this->Admin_model->getdatafromtable('addlot', $active);
			
			$query2 = $this->Admin_model->getdatafromtable('auction', $active);
			
			$data['sqldata']= $query;
			$data['sqldata2']= $query2;
			$data['sname'] = $sname;
		
			$this->load->view('Pdf_File2',$data);
		
}
	
}
