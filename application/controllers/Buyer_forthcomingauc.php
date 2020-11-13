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
		$data = $this->Admin_model->get_lookalike('addlot','scategory',$datatoquerydb);
		if(count($data)){
			  
			
			echo '<table id="datatable" onchange="myFunction()" class="table table-striped table-bordered table-sm text-center mt-5" width="100%" cellspacing="0">';
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
				echo '<td style="color:blue"><a href="'.base_url().'buyer_mylist/my_cart/'.urlencode($dat['scategory']).
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
				echo '<td>
				<button type="button" onclick"add_cart()" herf="<?php echo base_url()."Buyer_forthcomingauc/Addtocart/";?><i class="fas fa-heart" aria-hidden="true"></i></button>
				</td>';
				
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
		
		public function Addtocart(){
	
		$dat = $this->uri->segment(3);
		$check_db = array('sauctionid' => $dat);
		$this->load->model('Admin_model');
			  if($this->Admin_model->insert('biddercart', $check_db)){
				  echo "BYE";
			  }else{
				  echo "HI";
			  }
	}
	
}
