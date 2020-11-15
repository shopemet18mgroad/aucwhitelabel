<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyer_forthcomingauc extends CI_Controller {

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
		$this->load->model('Admin_model');
		$this->load->helper('url');
		$this->load->helper('date');
		date_default_timezone_set("Asia/Kolkata");
    }
	 
	 
	public function index()
	{
		
		$this->load->model("Admin_model");
		$data["addlot"] = $this->Admin_model->fetch_all();
		$this->load->helper(array('url','html'));
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('buyer/header',$sess);
		$this->load->view('buyer/forthcomingauc',$data);
		$this->load->view('buyer/footer');

		
	}
	
	public function get_table(){
		$datatoquerydb = $this->uri->segment(3);
		$this->load->model('Admin_model');
		$data = $this->Admin_model->get_lookalike('addlot','sdescription',$datatoquerydb);
		if(count($data)){
			  
			
			echo '<table id="myTable" class="table table-striped table-bordered table-sm text-center mt-5" width="100%" cellspacing="0">';
			echo '<thead class="bg-warning text-white">';
			echo '<tr>';
			echo '<th colspan="12">Add Lot In Your List</th>';
			echo '</tr>';
			echo '<thead class="bg-primary text-white">';
			echo '<tr>';
			echo '<th>Auction Id</th>';
			echo '<th>Lot Name</th>';
			echo '<th>Category</th>';
			echo '<th>Lot Description</th>';
			echo '<th>Seller / Company Name</th>';
			echo '<th>Quantity</th>';
			echo '<th>GST</th>';
			echo '<th>Location</th>';
			echo '<th>Add to Mylist</th>';
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
			foreach($data as $dat){
				echo '<tr>';
				echo '<td style="color:blue"><a href="'.base_url().'buyer_mylist/my_cart/'.urlencode($dat['sdescription']).
				'">';
				echo $dat['sauctionid'];	
				echo '</a>';
				echo '</td>';
				echo '<td>'.$dat['slotname'].'</td>';
				echo '<td>'.$dat['scategory'].'</td>';
				echo '<td>'.$dat['sdescription'].'</td>';
				echo '<td>'.$dat['sname'].'</td>';
				echo '<td>'.$dat['sqty'].'</td>';
				echo '<td>'.$dat['sgst'].'</td>';
				echo '<td>'.$dat['slotlocation'].'</td>';
				echo '<td><a href="'.base_url().'Buyer_forthcomingauc/Addtocart/'.urlencode($dat['sauctionid']).'">';
				echo'<button type="button" onClick="HeartFunction()">';
				echo'<i class="fas fa-heart" id="heart"></i>';
				echo'</button>';
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
			echo '<th>Lot Name</th>';
			echo '<th>Lot Description</th>';
			echo '<th>Seller / Company Name</th>';
			echo '<th>Quantity</th>';
			echo '<th>GST</th>';
			echo '<th>Location</th>';
			echo '<th>Add to Mylist</th>';
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
				echo '<td>No Records Found</td>';
				echo '</tr>';
			echo '</tbody>';
			echo '</table>';
			
		}



	}
		
	function Addtocart($sauctionid){
		
		$dat = $this->Admin_model->get_table('addlot','sauctionid');
		
		$data = array(
		'sauctionid'  => $dat['sauctionid'],
		'slotname' => $dat['slotname'],
		);
		
		
		$status = $this->Admin_model->insert('biddercart', $data);
		
		//header('location: ./Buyer_forthcomingauc/index/');
		$this->load->helper('url');
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('buyer/header',$sess);
		$this->load->view('buyer/forthcomingauc',$data);
		$this->load->view('buyer/footer');
	}
	
}
?>