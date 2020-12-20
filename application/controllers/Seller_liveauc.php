<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_liveauc extends CI_Controller {

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
		$this->load->helper(array('url','html','date'));
		date_default_timezone_set('Asia/Kolkata');
		$time =  Date('Y-m-d H:i:s');
		$this->load->library('session');
		if(!$this->session->has_userdata('username')  || $this->session->userdata('auth') != "SELLER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
		$this->load->model('Admin_model');
		$this->load->library('session');
		$sess['sessi'] = $this->session->userdata('username');
		//$active = array('susername'=>$sess['sessi']);
		$data['sqldata'] = $this->Admin_model->datebetween8($time,$sess['sessi']);
	
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		//$check_array = array('dat'=>);
		$this->load->view('seller/header',$sess);
		$this->load->view('seller/liveauc',$data);
		$this->load->view('seller/footer');
		
	}}
	
	public function get_table(){
		$datatoquerydb = $this->uri->segment(3);
		$this->load->helper(array('url','html','date'));
		date_default_timezone_set('Asia/Kolkata');
		$time =  Date('Y-m-d H:i:s');
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$active = array('susername'=>$sess['sessi']);
		$this->load->model('Admin_model');
		$data = $this->Admin_model->get_lookalikesess8('sauctionid',$datatoquerydb,$time,$active );
		if(count($data)){
			
			echo '<table class="table table-striped table-bordered table-sm text-center mt-5" width="100%" cellspacing="0">';
			echo '<thead class="bg-primary text-white">';
			echo '<tr>';
			echo '<th>Auction Id</th>';
			
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
			echo '<tr>';
				echo '<td>No Records Found</td>';
				echo '</tr>';
			echo '</tbody>';
			echo '</table>';
		



	}
}
}