<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_buyer_basicinfo_add extends CI_Controller {

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
		$bname = $this->input->post('bname');
		$bcompany = $this->input->post('bcompany');
		$bcomptype  = $this->input->post('bcomptype');
		$bcontactperson  = $this->input->post('bcontactperson');
		$bcin  = $this->input->post('bcin');
		$bgst  = $this->input->post('bgst');
		$bpcb  = $this->input->post('bpcb');
		$bemail  = $this->input->post('bemail');
		$bphone  = $this->input->post('bphone');
	
		$baddress  = $this->input->post('baddress');
		$bpin  = $this->input->post('bpin');
		$bstate  = $this->input->post('bstate');
		$bcountry  = $this->input->post('bcountry');
		$bbankname  = $this->input->post('bbankname');
		$baccountnumber  = $this->input->post('baccountnumber');
		$bbranch  = $this->input->post('bbranch');
		$bifsccode  = $this->input->post('bifsccode');
		$buploadprofilepic  = $this->input->post('buploadprofilepic');
		
		$path = base_url()."web_files/upload/";
		$title = "uploaded";
		
		self::upload_files($path, $title, $buploadprofilepic);
		$bsigneddocument  = $this->input->post('bsigneddocument');
		self::upload_files($path, $title, $bsigneddocument);
		//$count = count($bsigneddocument);
		$data = array(bname => $bname, bcompany => $bcompany, bcomptype => $bcomptype, bcontactperson => $bcontactperson, bcin => $bcin, bgst => $bgst, bpcb => $bpcb, bemail => $bemail , bphone => $bphone, baddress => $baddress, bpin => $bpin, bstate => $bstate, bcountry => $bcountry, bbankname => $bbankname, baccountnumber => $baccountnumber, bbranch => $bbranch, bifsccode => $bifsccode, buploadprofilepic => $buploadprofilepic, bsigneddocument => $bsigneddocument );
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
            $_FILES['bsigneddocument']['name']= $files['name'][$key];
            $_FILES['bsigneddocument']['type']= $files['type'][$key];
            $_FILES['bsigneddocument']['tmp_name']= $files['tmp_name'][$key];
            $_FILES['bsigneddocument']['error']= $files['error'][$key];
            $_FILES['bsigneddocument']['size']= $files['size'][$key];

            $fileName = $title .'_'. $image;
            $upfile[] = $fileName;
            $config['file_name'] = $fileName;
            $this->upload->initialize($config);
            if ($this->upload->do_upload('bsigneddocument')) {
                $this->upload->data();
            } else {
                return false;
            }
        }

        return $images;
    }
	
}