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
    }
    
    public function index(){
        // If captcha form is submitted
        if($this->input->post('submit')){
            $inputCaptcha = $this->input->post('captcha');
            $sessCaptcha = $this->session->userdata('captchaCode');
            if($inputCaptcha === $sessCaptcha){
                echo 'Captcha code matched.';
            }else{
                echo 'Captcha code does not match, please try again.';
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
		$this->load->view('header');
		$this->load->view('sellersregisteration',$data);
		$this->load->view('footer');
        
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
