<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sellers_registeration extends CI_Controller {

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
	function __construct() {
        parent::__construct();
        
        // Load session library
        $this->load->library('session');
        // Load the captcha helper
		$this->load->helper('captcha');
		$this->load->helper('url');
		$this->load->helper('date');
		date_default_timezone_set("Asia/Kolkata");
    }
    
    public function index(){
        // If captcha form is submitted
        if($this->input->post('submit2')){
			$date =  Date('Y-m-d'); 
			$scomapnyname = $this->input->post('scomapnyname');
			$sname = $this->input->post('sname');
			$ssellertype = $this->input->post('ssellertype');
			$scontactperson = $this->input->post('scontactperson');
			$sdesignation = $this->input->post('sdesignation');
			$span = $this->input->post('span');
			$saddress  = $this->input->post('saddress');
			$saddress2 = serialize($saddress);
			$saddresscount  = $this->input->post('saddresscount');
			$saddresscount = serialize($saddresscount);
			$scity = $this->input->post('scity');
			$sgst = $this->input->post('sgst');
			//echo $spcb = $this->input->post('spcb');
			$semail = $this->input->post('semail');
			$sphone = $this->input->post('sphone');
			$slocation = $this->input->post('slocation');
			$spin = $this->input->post('spin');
			$sstate = $this->input->post('sstate');
			$scin = $this->input->post('scin');
			$spcb = $this->input->post('spcb');
			$scountry = $this->input->post('scountry');
			$susername = $this->input->post('susername');
			//$spassword = $this->input->post('spassword');
			$spassword = base64_encode($this->input->post('spassword'));
            $captcha = $this->input->post('captcha');
            $sessCaptcha = $this->session->userdata('captchaCode');
            if($captcha === $sessCaptcha){
              $this->load->model('Admin_model');
			  $data = array('scomapnyname' => $scomapnyname,'sname' => $sname, 'ssellertype' => $ssellertype, 'scontactperson' => $scontactperson, 'sdesignation'=> $sdesignation, 'span' => $span, 'saddress' => $saddress2, 'saddresscount' => $saddresscount, 'scity' => $scity, 'sgst' => $sgst, 'semail' => $semail, 'sphone' => $sphone, 'slocation' => $slocation, 'spin' => $spin, 'sstate' => $sstate, 'spcb' => $spcb, 'scin' => $scin, 'scountry' => $scountry, 'susername' => $susername, 'spassword' => $spassword, 'servperc' => $servperc);
			  // check if company name exisyt before storing
			  
			  $status = $this->Admin_model->insert('sellerprofile', $data);
			  $transfer = array('company'=> $scomapnyname, 'sname'=>$sname,'designation'=>$sdesignation, 'saddresscount' => $saddresscount, 'city' => $scity, 'pin'=>$spin, 'username'=>$susername, 'location'=>$slocation, 'date'=>$date);
			  if($status){
				  $this->session->set_flashdata('txdata',$transfer);
				  redirect('../Agreementforseller');
			  }else{
				   header('location: ./sellers_registeration/error_handler/Database Insertion Error. Please Try Again');
			  }
            }else{
                header('location: ./sellers_registeration/error_handler/Captcha Timed Out. Please Try Later');//echo 'Captcha code does not match, please try again.';
            }
        }
        
        // Captcha configuration
        $config = array(
            'img_path'      => 'web_files/captcha_images/',
            'img_url'       => 'web_files/captcha_images/',
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
        $captcha = create_captcha($config);
        // Unset previous captcha and set new captcha word
        $this->session->unset_userdata('captchaCode');
        $this->session->set_userdata('captchaCode', $captcha['word']);
        // Pass captcha image to view
        $data['captchaImg'] = $captcha['word'];
		$data['ImgFileName'] = $captcha['filename'];
        // Load the view
		//$this->load->helper('url');
		$this->load->view('header2');
		$this->load->view('sellersregisteration',$data);
		$this->load->view('footer');
        
    }
    public function validate_username(){
		$dat = $this->uri->segment(3);
		$check_db = array('susername' => $dat);
		$this->load->model('Admin_model');
			  if($this->Admin_model->check('sellerprofile', $check_db)){
				  echo "BYE";
			  }else{
				  echo "HI";
			  }
		
	}
    public function refresh(){
        // Captcha configuration
        $config = array(
            'img_path'      => 'web_files/captcha_images/',
            'img_url'       => 'web_files/captcha_images/',
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
        $captcha = create_captcha($config);
        // Unset previous captcha and set new captcha word
        $this->session->unset_userdata('captchaCode');
        $this->session->set_userdata('captchaCode',$captcha['word']);
        
        // Display captcha image
		echo "<img src='".base_url()."web_files/captcha_images/".$captcha['filename']."'>";
		//echo $captcha['filename'];
    }
	public function error_handler(){
		$dat = urldecode($this->uri->segment(3));
		 echo '<script language="javascript">';
		echo 'alert("'.$dat.'")';  //not showing an alert box.
		echo '</script>';
		$config = array(
            'img_path'      => 'web_files/captcha_images/',
            'img_url'       => 'web_files/captcha_images/',
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
        $captcha = create_captcha($config);
        // Unset previous captcha and set new captcha word
        $this->session->unset_userdata('captchaCode');
        $this->session->set_userdata('captchaCode', $captcha['word']);
        // Pass captcha image to view
        $data['captchaImg'] = $captcha['word'];
		$data['ImgFileName'] = $captcha['filename'];
        // Load the view
		//$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('sellersregisteration',$data);
		$this->load->view('footer');
		//echo $this->uri->segment(3);
	}
	public function validate_capatcha(){
        // Captcha configuration
		$inputCaptcha = $this->uri->segment(3);
		 $sessCaptcha = $this->session->userdata('captchaCode');
            if($inputCaptcha === $sessCaptcha){
				echo "HI";
			}else{
				echo "Bye";
			}
       
        // Unset previous captcha and set new captcha word
       
    }
	
}
