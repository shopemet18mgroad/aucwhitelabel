<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

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

		$this->load->helper(array('url', 'html', 'date','cookie'));
		//Setting  default time zone
		date_default_timezone_set('Asia/Kolkata');
		//initaliazing the current time 
		$time =  Date('Y-m-d H:i:s');
		$this->load->library('session');
		$this->session->sess_expiration = '3600';
	
		if ($this->input->post('user')) {
			if ($this->input->post('optradio') == "Buyer") {
				$table = "buyerprofile";
				$colname = "busername";
				$colname2 = "bpassword";
			} else if ($this->input->post('optradio') == "Seller") {
				$table = "sellerprofile";
				$colname = "susername";
				$colname2 = "spassword";
			} else {
				$table = "adminprofile";
				$colname = "ausername";
				$colname2 = "apassword";
			}
		
			$user = $this->input->post('user');
			$pass = $this->input->post('pass');
			$pass = base64_encode($pass);
			

			$remember = $this->input->post('remember_me');
			if (isset($remember)){
				$this->load->helper('cookie');
                $cookie = array(
                        'name'   => 'remember_me',
                        'value'  => $user.'|'.$pass,                            
                        'expire' => '3600',                                                                            
                        'secure' => TRUE
                        );
               set_cookie($cookie);
			}
			
			
			//print_r($remember); die;
			$check_db = array($colname => $user, $colname2 => $pass, 'adaction' => true);
			$this->load->model('Admin_model');
			
			if ($this->Admin_model->check($table, $check_db)) {
			
				if ($table == "buyerprofile") {
					$newdata = array('username' => $user, 'auth' => 'BUYER', 'logged_in' => TRUE);
					$this->session->set_userdata($newdata);
						
						
					header('location: ' . base_url() . 'buyer_dashboard');
					die;
				} else if ($table == "sellerprofile") {
					$newdata = array('username' => $user, 'auth' => 'SELLER', 'logged_in' => TRUE);
					$this->session->set_userdata($newdata);
					header('location: ' . base_url() . 'seller_dashboard');
					die;
				} else {
					$newdata = array('username' => $user, 'auth' => 'ADMIN', 'logged_in' => TRUE);
					$this->session->set_userdata($newdata);
					header('location: ' . base_url() . 'admin_dashboard');
					die;
			}}
			else {
				$datainserr = "Invalid Password Password length must be 8 characters ";
				header('location: ' . base_url() . 'login/index_error/' . $datainserr);
				die;
			}
			die;
		}
		else {

			$this->load->model('Admin_model');
		$data['sql'] = $this->Admin_model->datebetweenhomemarquee($time);
		        if(get_cookie('remember_me')!=''){
            $cookie = explode('|',get_cookie('remember_me'));
			//print_r($cookie);
			$cook['user'] = $cookie[0];
			$cook['pass'] = $cookie[1];
        }else{
			$cook['user'] = '';
			$cook['pass'] = '';
		}
		$this->load->view('header', $data);
			$this->load->view('login',$cook);
			$this->load->view('footer');
	}
	}
	public function index_error()
	{
		$alertmsg = $this->uri->segment(3);
		$alertmsg = urldecode($alertmsg);
		echo '<script language="javascript">';
		echo 'alert("' . $alertmsg . '")';  //not showing an alert box.
		echo '</script>';
		$cook['user'] = '';
		$cook['pass'] = '';
		$this->load->view('header');
		$this->load->view('login',$cook);
		$this->load->view('footer');
	}
}
