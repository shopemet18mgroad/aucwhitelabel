<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_forthcomingauc_2 extends CI_Controller {

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
		$this->load->library('session');
		//echo $this->session->userdata('auth');
		if(!$this->session->has_userdata('username')  || $this->session->userdata('auth') != "ADMIN"){
		$datainserr = "Invalid Login Session";
		header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->model('Admin_model');
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/forthcomingauc_2');
		$this->load->view('admin/footer');
		}
	}

	
	public function forthcomingauc_2(){
	
		$retrivevaltmp = urldecode($this->uri->segment(3));
		$retrivevaltmp2 = urldecode(str_ireplace('-','/',$this->uri->segment(4)));
		
		$retriveval = array('sname'=>$retrivevaltmp);
		$this->load->model('Admin_model');

		$data['sqldata'] = $this->Admin_model->getdatafromtablejoin7('addlot','auction','sauctionid',$retrivevaltmp2);
		//echo '<pre>';
		//print_r($data['sqldata']); die;
		//echo '</pre>';
		$data['sellerinfo'] = $this->Admin_model->getdatafromtable('sellerprofile',$retriveval);

		$this->load->helper('url');
		
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/forthcomingauc_2', $data);
		$this->load->view('admin/footer');
	}
	public function forthcomingauc_2_alert(){
		$retrivevaltmp = $this->uri->segment(3);
		$retrivevaltmp2 = urldecode(str_ireplace('-','/',$this->uri->segment(4)));
		echo '<script language="javascript">';
			echo 'alert("'.$retrivevaltmp2.'")';  //not showing an alert box.
			echo '</script>';
		$retriveval = array('sauctionid'=>$retrivevaltmp2);
		$this->load->model('Admin_model');
		
		$data['sqldata'] = $this->Admin_model->getdatafromtable('auction',$retriveval);
		$this->load->helper('url');
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/forthcomingauc_2', $data);
		$this->load->view('admin/footer');
	}
	public function approve(){
		$this->load->helper('url');
		$retrivevaltmp = str_ireplace('-','/',$this->uri->segment(3));
		
		$retrivevaltmp1 = urldecode($retrivevaltmp);
	
		$retrivevaltmp2 = urldecode($this->uri->segment(4));
			
		$retrivevaltmp3 = urldecode($this->uri->segment(5));
		//print_r($retrivevaltmp3 ); die;
		$data2 = array('status'=>true);
		$updatech = array('sname'=>$retrivevaltmp3,'slotno'=>$retrivevaltmp2,'sauctionid'=>$retrivevaltmp1);
		$this->load->model('Admin_model');
		//$data['sqldata'] = $this->Admin_model->getdatafromtable('auction',$retriveval);
		$status = $this->Admin_model->update_custom('addlot',$data2,$updatech,$updatech);
		$retrivevaltmp5 = str_ireplace('/','-',$this->uri->segment(3));
		 //$status = $this->Admin_model->insert('sellerprofile', $data2);
		header('location: '.base_url().'admin_forthcomingauc_2/forthcomingauc_2/'.$retrivevaltmp3.'/'.$retrivevaltmp5);
		
		
	}
	public function reject(){
		$this->load->helper('url');
		$retrivevaltmp = str_ireplace('-','/',$this->uri->segment(3));
		$retrivevaltmp1 = urldecode($retrivevaltmp);
		$retrivevaltmp2 = urldecode($this->uri->segment(4));
		$retrivevaltmp3 = urldecode($this->uri->segment(5));
		$data2 = array('status'=>2);
		$updatech = array('sname'=>$retrivevaltmp3,'sauctionid'=>$retrivevaltmp1,'slotno'=>$retrivevaltmp2);
		$this->load->model('Admin_model');
		//$data['sqldata'] = $this->Admin_model->getdatafromtable('auction',$retriveval);
		$status = $this->Admin_model->update_custom('addlot',$data2,$updatech,$updatech);
		// $status = $this->Admin_model->insert('sellerprofile', $data2);
		$retrivevaltmp5 = str_ireplace('/','-',$this->uri->segment(3));
		header('location: '.base_url().'admin_forthcomingauc_2/forthcomingauc_2/'.$retrivevaltmp3.'/'.$retrivevaltmp5);
		
		die;
	}

	
}
