<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_emdprofile extends CI_Controller {

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
		$this->load->helper('url');$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/emdprofile');
		$this->load->view('admin/footer');
		
	}
	
	public function get_table(){
		//$emdpaid = $this->uri->segment(3);
		$this->load->model('Admin_model');
		
		$emdpaid = array('emd_paid'=>true);
	
		$data = $this->Admin_model->getdatafromtable('biddercart','auctionid',$emdpaid);
		
		print_r($data); die;
		
		if(count($data)){
			echo '<table class="table table-striped table-bordered table-sm text-center mt-5" width="100%" cellspacing="0">';
			echo '<thead class="bg-primary text-white">';
			echo '<tr>';
			echo '<th>Auction Id</th>';
			echo '<th>Company Name</th>';
			echo '<th>Start Date</th>';
			echo '<th>Location</th>';
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
			foreach($data as $dat){
				echo '<tr>';
				echo '<td><a href="'.base_url().'admin_emdpaid/emdpaid_2/'.urlencode($dat['sname']).
				'">';
				echo $dat['auctionid'];
				echo '</a>';
				echo '</td>';
				echo '<td>'.$dat['biddercompanyname'].'</td>';
				echo '<td>'.$dat['aucstartdate_time'].'</td>';
				echo '<td>'.$dat['location'].'</td>';
				echo '</tr>';
			}
			echo '</tbody>';
			echo '</table>';
		}else{
			echo '<table class="table table-striped table-bordered table-sm text-center mt-5" width="100%" cellspacing="0">';
			echo '<thead class="bg-primary text-white">';
			echo '<tr>';
			echo '<th>Auction Id</th>';
			echo '<th>Company Name</th>';
			echo '<th>Start Date</th>';
			echo '<th>Location</th>';
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
			echo '<tr>';
				echo '<td><a href="'.base_url().'#">';
				echo '<td>No Records Found</td>';
				echo '<td>No Records Found</td>';
				echo '<td>No Records Found</td>';
				
				echo '</tr>';
			echo '</tbody>';
			echo '</table>';
		}



	}
	
}
