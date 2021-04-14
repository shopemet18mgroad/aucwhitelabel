<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry_Form_data extends CI_Controller {

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
		$this->load->helper(array('url','html','date'));
		
		date_default_timezone_set('Asia/Kolkata');
		$time =  Date('Y-m-d H:i:s');
		$this->load->library('session'); 
		//echo $this->session->userdata('auth');
		if(!$this->session->has_userdata('username')  || $this->session->userdata('auth') != "ADMIN"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
		$this->load->model('Admin_model');
		
		
		$data['sqldata'] = $this->Admin_model->gettable('enquiry_form'); 
		$data['sqldata1'] = $this->Admin_model->gettable('spocs');
	
	//print_r($data['sqldata'] ); die;
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/Enquiry_Form',$data);
		$this->load->view('admin/footer');
}
}
	
	
public function export_csvenquiry(){ 
		// file name 
		$slno = $this->uri->segment(3);
		$this->load->model('Admin_model');
		$filename = 'users_'.date('Ymd').'.csv'; 
		header("Content-Description: File Transfer"); 
		header("Content-Disposition: attachment; filename=$filename"); 
		header("Content-Type: application/csv; ");
	   // get data 
	   $usersData = $this->Admin_model->getenquirydataDetails($slno);
	   $usersData1 = $this->Admin_model->getenquirydataDetails1();
		//$usersData = $this->Admin_model->getSellerUserDetails();
		//print_r($usersData); die;
		// file creation 
		if($slno){
		$file = fopen('php://output','w');
		
		$header = array("DATE","COMPANY NAME","ADDRESS","CITY","FIRST NAME","LAST NAME","PHONE","EMAIL","REMARK","LEAD GENERATION","SPOC","lOCATION","WEBSITE","LATLONG"); 
		fputcsv($file, $header);
		$i = 0;
		foreach ($usersData as $line){ 
			 if($line->latlong != "" && $line->latlong != "NA" && $line->latlong != NULL){
			  $loca = explode('|',$line->latlong);
			  if($loca[0] == "na"||$loca[0] == NULL|| $loca[0] == "NA"){
				   $latlong="#";
			  }else{
				  $latlong = "https://www.google.com/maps/?q=".$loca[0].",".$loca[1];
			  }
			 
		  }else{
			   $latlong="#";
		  } 
			
			fputcsv($file,array($line->date,$line->companyname,$line->vaddress,$line->vcity,$line->first,$line->last,$line->phone,$line->email,$line->remarks,$line->leadgeneration,$line->spoc,$line->location,$line->website,$latlong)); 
		}
		fclose($file); 
		exit; 
}	
else {
		$file = fopen('php://output','w');

		$header = array("DATE","COMPANY NAME","ADDRESS","CITY","FIRST NAME","LAST NAME","PHONE","EMAIL","REMARK","LEAD GENERATION","SPOC","lOCATION","WEBSITE"); 
		fputcsv($file, $header);
		$i = 0;
		foreach ($usersData1 as $line){ 
			
			fputcsv($file,array($line->date,$line->companyname,$line->vaddress,$line->vcity,$line->first,$line->last,$line->phone,$line->email,$line->remarks,$line->leadgeneration,$line->spoc,$line->location,$line->website)); 

		$header = array("DATE","COMPANY NAME","ADDRESS","CITY","FIRST NAME","LAST NAME","PHONE","EMAIL","REMARK","LEAD GENERATION","SPOC","lOCATION","WEBSITE","LATLONG"); 
		fputcsv($file, $header);
		$i = 0;
		foreach ($usersData1 as $line){ 
			 if($line->latlong != "" && $line->latlong != "NA" && $line->latlong != NULL){
			  $loca = explode('|',$line->latlong);
			  if($loca[0] == "na"||$loca[0] == NULL|| $loca[0] == "NA"){
				   $latlong="#";
			  }else{
				   $latlong = "https://www.google.com/maps/?q=".$loca[0].",".$loca[1];
			  }
			 
		  }else{
			   $latlong="#";
		  }
			
			fputcsv($file,array($line->date,$line->companyname,$line->vaddress,$line->vcity,$line->first,$line->last,$line->phone,$line->email,$line->remarks,$line->leadgeneration,$line->spoc,$line->location,$line->website,$latlong)); 

		}
		fclose($file); 
		exit; 
}

}

	
	
}}
