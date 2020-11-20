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
		$this->load->helper(array('url','html'));
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->model('Admin_model');
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/forthcomingauc_2');
		$this->load->view('admin/footer');
		
	}

	
	public function forthcomingauc_2(){
	
		$retrivevaltmp = urldecode($this->uri->segment(3));
		
		$retriveval = array('sname'=>$retrivevaltmp);
		$this->load->model('Admin_model');

		/* $this->db->select('*');
			$this->db->join('addlot', 'addlot.sauctionid = auction.sauctionid', 'left');
		 */
		//$this->db->select('*');
		/* $this->db->join('addlot', 'addlot.ID = auction.ID');
		$this->db->join('sellerprofile', 'sellerprofile.ID = auction.ID');
		$this->db->from('auction'); */ 
		//$this->db->join('addlot', 'addlot.ID = auction.ID', 'left');
		//$this->db->join('sellerprofile', 'sellerprofile.ID = auction.ID', 'left');
		
		/* $data['sqldata'] = $this->Admin_model->getdatafromtable
		('auction',$retriveval);
 */
		$data['sqldata'] = $this->Admin_model->getdatafromtablejoin('addlot','auction','sauctionid',$retrivevaltmp);
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
		$retrivevaltmp2 = urldecode($this->uri->segment(4));
		echo '<script language="javascript">';
			echo 'alert("'.$retrivevaltmp2.'")';  //not showing an alert box.
			echo '</script>';
		$retriveval = array('sname'=>$retrivevaltmp);
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
		$retrivevaltmp2 = urldecode($this->uri->segment(4));
		$retrivevaltmp3 = urldecode($this->uri->segment(5));
		$data2 = array('status'=>true);
		$updatech = array('sname'=>$retrivevaltmp3,'sauctionid'=>$retrivevaltmp,'slotno'=>$retrivevaltmp2);
		$this->load->model('Admin_model');
		//$data['sqldata'] = $this->Admin_model->getdatafromtable('auction',$retriveval);
		$status = $this->Admin_model->update_custom('addlot',$data2,$updatech,$updatech);
		// $status = $this->Admin_model->insert('sellerprofile', $data2);
		header('location: '.base_url().'admin_forthcomingauc_2/forthcomingauc_2/'.urlencode($retrivevaltmp3));
		
		die;
	}
	public function reject(){
		$this->load->helper('url');
		$retrivevaltmp = str_ireplace('-','/',$this->uri->segment(3));
		$retrivevaltmp2 = urldecode($this->uri->segment(4));
		$retrivevaltmp3 = urldecode($this->uri->segment(5));
		$data2 = array('status'=>2);
		$updatech = array('sname'=>$retrivevaltmp3,'sauctionid'=>$retrivevaltmp,'slotno'=>$retrivevaltmp2);
		$this->load->model('Admin_model');
		//$data['sqldata'] = $this->Admin_model->getdatafromtable('auction',$retriveval);
		$status = $this->Admin_model->update_custom('addlot',$data2,$updatech,$updatech);
		// $status = $this->Admin_model->insert('sellerprofile', $data2);
		header('location: '.base_url().'admin_forthcomingauc_2/forthcomingauc_2/'.urlencode($retrivevaltmp3));
		
		die;
	}

	
}
