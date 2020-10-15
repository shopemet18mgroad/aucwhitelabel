<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_seller_basicinfo_add extends CI_Controller {

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
		$this->load->library('fileupload');
		echo $this->fileupload->send_email();
		die;
		$this->load->helper(array('url','form','file','html'));
		$this->load->model('Admin_model');
		$sname = $this->input->post('sname');
		$scomapnyname = $this->input->post('scomapnyname');
		$scontactperson  = $this->input->post('scontactperson');
		$scin  = $this->input->post('scin');
		$sgst  = $this->input->post('sgst');
		$spcb  = $this->input->post('spcb');
		$semail  = $this->input->post('semail');
		$sphone  = $this->input->post('sphone');
		$saddress  = $this->input->post('saddress');
		$saddress2 = serialize($saddress);
		$saddresscount  = $this->input->post('saddresscount');
		$spin  = $this->input->post('spin');
		$sstate  = $this->input->post('sstate');
		$scountry  = $this->input->post('scountry');
		$sbankername  = $this->input->post('sbankername');
		$saccountnumber  = $this->input->post('saccountnumber');
		$sbranch  = $this->input->post('sbranch');
		$sifsccode  = $this->input->post('sifsccode');
		//$suploadprofilepic  = $this->input->post('suploadprofilepic');
		//echo $countfiles = count($_FILES['ssigneddocument']['name']);
		//$suploadprofilepic = $_FILES['ssigneddocument']['name'];
		
		//die;
		print_r(self::upload_files('ssigneddocument'));
		die;
		$data = array(sname => $sname, scomapnyname => $scomapnyname, scontactperson => $scontactperson, scin => $scin, sgst => $sgst, spcb => $spcb, semail => $semail, sphone => $sphone , saddress => $saddress2, saddresscount => $saddresscount, spin => $spin, sstate => $sstate, scountry => $scountry, sbankername => $sbankername, saccountnumber => $saccountnumber, sbranch => $sbranch, sifsccode => $sifsccode, suploadprofilepic => $suploadprofilepic, ssigneddocument => $ssigneddocument );
		$this->load->view('xya', $data);
		$status = $this->Admin_model->insert('auction', $data);
		header('location: '.base_url().'admin_dashboard/index/'.$status.'');
		//$this->load->view('admin/header');
		//$this->load->view('admin/salesreport');
		//$this->load->view('admin/footer');
		
	}
	
	private function upload_file($filenameee,$nameid)
    {
        if(!empty($filenameee)){
                $config['upload_path'] = 'web_files/uploads/';
                $config['allowed_types'] = 'doc|docx|pdf|xlsx';
                $config['file_name'] = $filenameee;
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                if($this->upload->do_upload($nameid)){
                    $uploadData = $this->upload->data();
                    $flname = $uploadData['file_name'];
                }else{
                    $flname = 'Unable';
                }
            }else{
                $flname = 'aa';
            }
			return $flname;
    }
	private function upload_files($nameid)
    {	
		
	$countfiles = count($_FILES[$nameid]['name']);
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
			$config['allowed_types'] = 'doc|docx|pdf|xlsx';
          $config['max_size'] = '50000'; // max_size in kb
          $config['file_name'] = $_FILES[$nameid]['name'][$i];
 
          //Load upload library
          $this->load->library('upload',$config); 
 
          // File upload
          if($this->upload->do_upload('file')){
            // Get data about the file
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

            // Initialize array
            $data[] = $filename;
          }
        }
 
      }
	  return $data;
    }
	
}