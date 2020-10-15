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
	
		$this->load->helper('url');
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
		$suploadprofilepic  = $this->input->post('suploadprofilepic');
		$path = base_url()."web_files/upload/"; 
		$title = "uploaded";
		self::upload_files($path, $title, $suploadprofilepic);
		$ssigneddocument  = $this->input->post('ssigneddocument');
		self::upload_files($path, $title, $ssigneddocument);
		//$count = count($ssigneddocument);
		$data = array(sname => $sname, scomapnyname => $scomapnyname, scontactperson => $scontactperson, scin => $scin, sgst => $sgst, spcb => $spcb, semail => $semail, sphone => $sphone , saddress => $saddress2, saddresscount => $saddresscount, spin => $spin, sstate => $sstate, scountry => $scountry, sbankername => $sbankername, saccountnumber => $saccountnumber, sbranch => $sbranch, sifsccode => $sifsccode, suploadprofilepic => $suploadprofilepic, ssigneddocument => $ssigneddocument );
		$status = $this->Admin_model->insert('auction', $data);
		header('location: '.base_url().'admin_dashboard/index/'.$status.'');
		//$this->load->view('admin/header');
		//$this->load->view('admin/salesreport');
		//$this->load->view('admin/footer');
		
	}
	private function upload_files($path, $title, $files)
    {
        $config = array(
            'upload_path'   => $path,
            'allowed_types' => 'pdf|xlsx|docx',
            'overwrite'     => 1,                       
        );
        $this->load->library('upload', $config);
        $upfile = array();

        foreach ($files['name'] as $key => $image) {
            $_FILES['ssigneddocument']['name']= $files['name'][$key];
            $_FILES['ssigneddocument']['type']= $files['type'][$key];
            $_FILES['ssigneddocument']['tmp_name']= $files['tmp_name'][$key];
            $_FILES['ssigneddocument']['error']= $files['error'][$key];
            $_FILES['ssigneddocument']['size']= $files['size'][$key];

            $fileName = $title .'_'. $image;
            $upfile[] = $fileName;
            $config['file_name'] = $fileName;
            $this->upload->initialize($config);
            if ($this->upload->do_upload('ssigneddocument')) {
                $this->upload->data();
            } else {
                return false;
            }
        }

        return $images;
    }
	
}