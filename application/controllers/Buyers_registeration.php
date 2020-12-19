<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyers_registeration extends CI_Controller {

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
			$bcompany = $this->input->post('bcompany');
			$bname = $this->input->post('bname');
			$bcomptype = $this->input->post('bcomptype');
			$bbuyerlocation = $this->input->post('bbuyerlocation');
			$bcontactperson = $this->input->post('bcontactperson');
			$bdesignation = $this->input->post('bdesignation');
			$baddress = $this->input->post('baddress');
			$bcity = $this->input->post('bcity');
			$bpin = $this->input->post('bpin');
			//echo $spcb = $this->input->post('spcb');
			$bstate = $this->input->post('bstate');
			$bcountry = $this->input->post('bcountry');
			$bemail = $this->input->post('bemail');
			$bphone = $this->input->post('bphone');
			$bpan = $this->input->post('bpan');
			$busername = $this->input->post('busername');
			//$bpassword = $this->input->post('bpassword');
			//$bconfirmpassword = $this->input->post('bconfirmpassword');
			$bpassword = base64_encode($this->input->post('bpassword'));
			$bgst = $this->input->post('bgst');
			$bpcb = $this->input->post('bpcb');
			$bcin = $this->input->post('bcin');
            $captcha = $this->input->post('captcha');
            $sessCaptcha = $this->session->userdata('captchaCode');
            if($captcha === $sessCaptcha){
              $this->load->model('Admin_model');
			  $data = array('bcompany' => $bcompany, 'bcontactperson' => $bcontactperson,'bcomptype' => $bcomptype, 'bbuyerlocation'=> $bbuyerlocation, 'bname' => $bname, 'baddress' => $baddress, 'bcity' => $bcity, 'bpin' => $bpin, 'bstate' => $bstate, 'bcountry' => $bcountry, 'bemail' => $bemail, 'bphone' => $bphone, 'bpan' => $bpan, 'busername' => $busername, 'bpassword' => $bpassword, 'bgst' => $bgst,'bpcb' => $bpcb, 'bcin' => $bcin);
			  // check if company name exisyt before storing
			  
			  $status = $this->Admin_model->insert('buyerprofile', $data);
			  $transfer = array('company'=> $bcompany, 'bname'=>$bname,'designation'=>$bdesignation, 'address'=>$baddress, 'city' => $bcity, 'pin'=>$bpin, 'username'=>$busername, 'gst'=>$bgst, 'date'=>$date);
			  if($status){
				  $this->session->set_flashdata('txdata',$transfer);
				  redirect('../agreementforbuyer');
			  }else{
				   header('location: ./Buyers_registeration/error_handler/Database Insertion Error. Please Try Again');
			  }
            }else{
                header('location: ./Buyers_registeration/error_handler/Captcha Timed Out. Please Try Later');//echo 'Captcha code does not match, please try again.';
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
		$this->load->view('buyersregisteration',$data);
		$this->load->view('footer');
        
    }
	public function validate_bcompany(){
		$dat = urldecode($this->uri->segment(3));
		$check_db = array('bcompany' => $dat);
		$this->load->model('Admin_model');
			  if($this->Admin_model->check('buyerprofile', $check_db)){
				  echo "BYE";
			  }else{
				  echo "HI";
			  }
		
	}
	
	
	
    public function validate_username1(){
		$dat = urldecode($this->uri->segment(3));
		$check_db = array('busername' => $dat);
		$this->load->model('Admin_model');
			  if($this->Admin_model->check('buyerprofile', $check_db)){
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
		$this->load->view('buyersregisteration',$data);
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
	
	/* 
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('buyersregisteration');
		$this->load->view('footer');
		
	} */
	
}
