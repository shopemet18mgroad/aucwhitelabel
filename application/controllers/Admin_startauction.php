<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_startauction extends CI_Controller {

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
	 	 /* public function index(){
		$this->load->helper('url');
		$this->load->view('admin/header');
		$this->load->view('admin/startauction');
		$this->load->view('admin/footer'); 
		}  */
		
		function __construct() {
        parent::__construct();
        
        // Load session library
        $this->load->library('session');
        // Load the captcha helper
		//$this->load->helper('captcha');
		$this->load->helper('url');
		$this->load->helper('date');
		date_default_timezone_set("Asia/Kolkata");
    }
    
    public function index(){
        // If captcha form is submitted
        if($this->input->post('submit2')){
			$date =  Date('Y-m-d'); 
			$scategory = $this->input->post('scategory');
			$sauctionid = $this->input->post('sauctionid');
			$svinspection = $this->input->post('svinspection');
			$sonlineaucdate_time = $this->input->post('sonlineaucdate_time');
			$sterms_condiaccept = $this->input->post('sterms_condiaccept');
			$sterms_condiupload = $this->input->post('sterms_condiupload');
            $sesssterms_condiupload = $this->session->userdata('sterms_condiupload');
            if($sterms_condiupload === $sesssterms_condiupload){
              $this->load->model('Admin_model');
			  $data = array('scategory' => $scategory, 'sauctionid' => $sauctionid, 'svinspection' => $svinspection, 'sonlineaucdate_time'=> $sonlineaucdate_time, 'sterms_condiaccept' => $sterms_condiaccept, 'sterms_condiupload' => $sterms_condiupload);
			  // check if company name exisyt before storing
			  
			  $status = $this->Admin_model->insert('auction', $data);
			  $transfer = array('category'=> $scategory, 'auctionid'=>$sauctionid,'venueofinspection'=>$svinspection);
			  if($status){
				  $this->session->set_flashdata('txdata',$transfer);
				  redirect('../admin/addlot');
			  }else{
				   header('location: ./Admin_startauction/error_handler/Database Insertion Error. Please Try Again');
			  }
            }/* else{
                header('location: ./sellers_registeration/error_handler/Captcha Timed Out. Please Try Later');//echo 'Captcha code does not match, please try again.';
            } */
        }
        
        // Captcha configuration
        $config = array(
            //'img_path'      => 'web_files/captcha_images/',
            //'img_url'       => 'web_files/captcha_images/',
            'font_path'     => base_url().'system/fonts/textb.ttf',
            'img_width'     => '200',
            'img_height'    => 50,
            'word_length'   => 4,
			'font_size' => 20,
			'colors' => array(
			'background' => array(255, 255, 255),
			'border' => array(255, 255, 255),
			'text' => array(0, 0, 0),
			'grid' => array(255, 200, 255)
			)
        );
        //$captcha = create_captcha($config);
        // Unset previous captcha and set new captcha word
        //$this->session->unset_userdata('captchaCode');
        //$this->session->set_userdata('captchaCode', $captcha['word']);
        // Pass captcha image to view
        //$data['captchaImg'] = $captcha['word'];
		//$data['ImgFileName'] = $captcha['filename'];
        // Load the view
		//this->load->helper('url');
		$this->load->view('admin/header');
		$this->load->view('admin/startauction',$data);
		$this->load->view('admin/footer');
        
    }
	
	public function error_handler(){
		$dat = urldecode($this->uri->segment(3));
		 echo '<script language="javascript">';
		echo 'alert("'.$dat.'")';  //not showing an alert box.
		echo '</script>';
		$config = array(
            //'img_path'      => 'web_files/captcha_images/',
            //'img_url'       => 'web_files/captcha_images/',
            'font_path'     => base_url().'system/fonts/textb.ttf',
            'img_width'     => '200',
            'img_height'    => 50,
            'word_length'   => 4,
			'font_size' => 20,
			'colors' => array(
			'background' => array(255, 255, 255),
			'border' => array(255, 255, 255),
			'text' => array(0, 0, 0),
			'grid' => array(255, 200, 255)
			)
        );
        //$captcha = create_captcha($config);
        // Unset previous captcha and set new captcha word
        //$this->session->unset_userdata('captchaCode');
        //$this->session->set_userdata('captchaCode', $captcha['word']);
        // Pass captcha image to view
        //$data['captchaImg'] = $captcha['word'];
		//$data['ImgFileName'] = $captcha['filename'];
        // Load the view
		//$this->load->helper('url');
		$this->load->view('admin/header');
		$this->load->view('admin/startauction',$data);
		$this->load->view('admin/footer');
		//echo $this->uri->segment(3);
	}
}
