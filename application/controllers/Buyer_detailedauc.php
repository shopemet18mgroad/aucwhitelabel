<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyer_detailedauc extends CI_Controller {

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
		$this->load->view('buyer/header',$sess);
		$this->load->view('buyer/detailedauc');
		$this->load->view('buyer/footer');
		
	}
	
	public function get_table(){
		$datatoquerydb = $this->uri->segment(3);
		$this->load->model('Admin_model');		
		$data = $this->Admin_model->get_lookalike('auction','sauctionid',$datatoquerydb);
		if(count($data)){
			echo '<table class="table table-striped table-bordered table-sm text-center mt-5" width="100%" cellspacing="0">';
			echo '<thead class="bg-warning  text-white text-center">';
			echo '<th colspan="21">Auction Details</th>';
			echo '<thead class="bg-primary text-white">';
			echo '<tr>';
			echo '<th>Auction Id</th>';
			echo '<th>Company Name</th>';
			echo '<th>Location</th>';
			echo '<th>Starting Date</th>';
			echo '<th>Closing Date</th>';
			echo '<th>Download</th>';
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
			foreach($data as $dat){
				echo '<tr>';
				echo '<td><a href="'.base_url().'buyer_viewdetail/viewdetail/'.str_ireplace('/','-',$dat['sauctionid']).
				'">';
				echo $dat['sauctionid'];
				echo '</a>';
				echo '</td>';
				echo '<td>'.$dat['scompanyname'].'</td>';
				echo '<td>'.$dat['svinspection'].'</td>';
				echo '<td>'.$dat['sonlineaucdate_time'].'</td>';
				echo '<td>'.$dat['saucclosedate_time'].'</td>';
				echo '<td><a href="'.base_url().''.$dat['sname'].'">';
				echo '<i class="fa fa-download"></i>';
				echo '</a>';
				echo '</td>';
			
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
			echo '<th>Location</th>';
			echo '<th>Starting Date</th>';
			echo '<th>Closing Date</th>';
			echo '<th>Download</th>';
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
			echo '<tr>';
				echo '<td><a href="'.base_url().'#">';
				echo '<td>No Records Found</td>';
				echo '<td>No Records Found</td>';
				echo '<td>No Records Found</td>';
				echo '<td>No Records Found</td>';
				echo '<td>No Records Found</td>';
				echo '<td>No Records Found</td>';
				echo '</tr>';
			echo '</tbody>';
			echo '</table>';
		}



	}
}
