<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_forthcomingauc extends CI_Controller {

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
		//echo $this->session->userdata('auth');
		if(!$this->session->has_userdata('username')  || $this->session->userdata('auth') != "ADMIN"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/forthcomingauc');
		$this->load->view('admin/footer');
		}	
	}
	
	public function get_table(){
		$datatoquerydb = $this->uri->segment(3);
		$this->load->helper(array('url','html','date'));
		date_default_timezone_set('Asia/Kolkata');
		$time =  Date('Y-m-d H:i:s');
		$this->load->model('Admin_model');
		$data = $this->Admin_model->get_adminforthlookalike('auction','sname',$datatoquerydb,$time);
		if(count($data)){
			echo '<table class="table table-striped table-bordered table-sm text-center mt-5" width="100%" cellspacing="0">';
			echo '<thead class="bg-primary text-white">';
			echo '<tr>';
			echo '<th>Auction Id</th>';
			echo '<th>Company Name</th>';
			echo '<th>Download</th>';
			echo '<th>Start Date/Time</th>';
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
			foreach($data as $dat){
				echo '<tr>';
				$passaucid2 = str_ireplace('/','-',$dat['sauctionid']);
				echo '<td><a href="'.base_url().'admin_forthcomingauc_2/forthcomingauc_2/'.($dat['sname']).'/'.$passaucid2.
				'">';
				echo $dat['sauctionid'];
				$passaucid = str_ireplace('/','-',$dat['sauctionid']);
				echo '</a>';
				echo '</td>';
				echo '<td>'.$dat['scompanyname'].'</td>';
				echo '<td><a href="'.base_url().'/pdf_gen/auc_no/'.$passaucid.'/'.($dat['sname']).'" target="_blank"><i class="fa fa-download"></i></a></td>';
				echo '<td>'.$dat['saucstartdate_time'].'</td>';
				
				echo '</tr>';
			}
			echo '</tbody>';
			echo '</table>';
		}else{
			echo '<table class="table table-striped table-bordered table-sm text-center mt-5" width="100%" cellspacing="0">';
			echo '<thead class="bg-primary text-white">';
			echo '<tr>';
			echo '<th>Auction Id</th>';
			echo '<th>Seller Name</th>';
			echo '<th>Download</th>';
			echo '<th>Start Date/Time</th>';
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
			echo '<tr>';
				echo '<td>No Records Found</td>';
				echo '<td>No Records Found</td>';
				echo '<td>No Records Found</td>';
				echo '<td>No Records Found</td>';
				echo '</a>';
				echo '</td>';
				echo '</tr>';
				echo '</tbody>';
				echo '</table>';
		}



	}
	
}
