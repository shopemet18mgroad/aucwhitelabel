<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_auctiondetails extends CI_Controller {

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
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/auctiondetails');
		$this->load->view('admin/footer');
		
	}
	
	public function get_table(){
		$datatoquerydb = $this->uri->segment(3);
		$this->load->model('Admin_model');
		$data = $this->Admin_model->get_lookalike('auction','sname',$datatoquerydb);
		if(count($data)){
			echo '<table class="table table-striped table-bordered table-sm text-center mt-5" width="100%" cellspacing="0">';
			echo '<thead class="bg-warning text-white">';
		echo '<tr>';
			echo '<th colspan="12">Auction Details</th>';
			echo '</tr>';
			echo '<thead class="bg-primary text-white">';
			echo '<tr>';
			echo '<th>Auction Id</th>';
			echo '<th>Seller</th>';
			echo '<th>Category</th>';
			echo '<th>Venue Of Inspection</th>';
			echo '<th>Online Auction Start And Close Date</th>';
			echo '<th>Aucjunction Terms & Conditions</th>';
			echo '<th>Upload Terms & Conditions	</th>';
			echo '<th>Download</th>';
			echo '<th>Action</th>';
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
			foreach($data as $dat){
				echo '<tr>';
				echo '<td><a href="'.base_url().'admin_editforthcom_2/editforthcom_2/'.$dat['sname'].
				'">';
				echo $dat['sauctionid'];
				//echo $aucfl = unserialize($dat['sterms_condiupload']);
				echo '</a>';
				echo '</td>';
				echo '<td>'.$dat['sname'].'</td>';
				echo '<td>'.$dat['scategory'].'</td>';
				echo '<td>'.$dat['svinspection'].'</td>';
				echo '<td>'.$dat['saucstartdate_time'].$dat['saucclosedate_time'].'</td>';
				echo '<td>'.$dat['sterms_condiaccept'].'</td>';
				echo '<td>'.$dat['sterms_condiupload'].'</td>';
				//echo '<td>'.$aucfl.'</td>';
				echo '<td><a href="'.base_url().'Admin_editauction/editauction/'.$dat['sname'].'">';
				echo '<i class="fa fa-download"></i>';
				echo '</a>';
				echo '</td>';
				echo '<td><a href="'.base_url().'Admin_editauction/editauction/'.$dat['sname'].'">';
				echo '<i class="fa fa-edit"></i>';
				echo '</a>';
				echo  '<a href="'.base_url().'Admin_editauction/delete_auction/'.$dat['sname'].'">';
				echo '<i class="fa fa-trash" style="color:black"></i>';
				echo '</a>';
				echo '</td>';
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
			echo '<th>Seller</th>';
			echo '<th>Category</th>';
			echo '<th>Venue Of Inspection</th>';
			echo '<th>Online Auction Start And Close Date</th>';
			echo '<th>Aucjunction Terms & Conditions</th>';
			echo '<th>Upload Terms & Conditions	</th>';
			echo '<th>Download</th>';
			echo '<th>Action</th>';
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
				echo '<td><a href="'.base_url().'#">';
				echo '<i class="fa fa-edit"></i>';
				echo '</a>';
				echo '<a href="'.base_url().'#">';
				echo '<i class="fa fa-trash" style="color:black"></i>';
				echo '</a>';
				echo '</td>';
				echo '</td>';
				echo '</tr>';
			echo '</tbody>';
			echo '</table>';
		}



	}
	
}
