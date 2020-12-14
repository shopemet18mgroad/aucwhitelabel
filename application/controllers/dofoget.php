<?php

class dofoget extends CI_Controller
{
public function __construct() {
parent::__construct();
        
		$this->load->library('session');
		$this->load->library('email');
		
	}
	    public function index(){
			$data="";
			$this->load->view('forgotpassword',$data);
		}

	public function doforget()
	{
	    $this->load->helper('url');
		$email= $this->input->post('emailid');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('emailid','emailid','required|xss_clean|trim');
		 if ($this->form_validation->run() == FALSE)
			{
	
				$this->load->view('forgetpassword');
	 
			}
			else
			{
		$q = $this->db->query("select * from sellerprofile where emailid='" . $email . "'");
        if ($q->num_rows > 0) {
            $r = $q->result();
            $user=$r[0];
			$this->load->helper('string');
			$password= random_string('alnum',6);
			$this->db->where('susername', $user->susername);
			$this->db->update('sellerprofile',array('password'=>$password,'pass_encryption'=>MD5($password)));
			$this->load->library('email');
			$this->email->from('contact@example.com', 'sampletest');
			$this->email->to($user->emailid); 	
			$this->email->subject('Password reset');
			$this->email->message('You have requested the new password, Here is you new password:'. $password);	
			$this->email->send();
		    $this->session->set_flashdata('message','Password has been reset and has been sent to email');		
		   redirect('display_doforget');
		   }
		   }
	}
}