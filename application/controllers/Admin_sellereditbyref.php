<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_sellereditbyref extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->output->delete_cache();
    }

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
		//$this->load->view('admin/header');
		$this->load->view('admin/sellereditref');
		$this->load->view('admin/footer');
		}
	}
	public function get_table(){
		$datatoquerydb = $this->uri->segment(3);
		$this->load->model('Admin_model');
		$data = $this->Admin_model->get_lookalike('sellerprofile','sref',$datatoquerydb);
		if(count($data)){
			echo '<table class="table table-striped table-bordered table-sm w-auto small text-center mt-5" width="100%" cellspacing="0">';
			echo '<thead class="bg-primary text-white">';
			echo '<tr>';
			echo '<th>S.No.</th>';
			echo '<th>Company Name</th>';
			echo '<th>Contact Person</th>';
			echo '<th>Contact No.</th>';
			echo '<th>Email Id</th>';
			echo '<th>City</th>';
			echo '<th>Reference</th>';
			echo '<th>Date</th>';
			echo '<th>Action</th>';
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
			$row_count = 1;
			foreach($data as $dat){
				echo '<tr>';
				echo '<td data-label="S.No.">'.$row_count.'</td>';				
				echo '<td data-label="Company Name">'.$dat['scomapnyname'].'</td>';
				echo '<td data-label="Contact Person">'.$dat['scontactperson'].'</td>';
				echo '<td data-label="Contact No.">'.$dat['sphone'].'</td>';
				echo '<td data-label="Email Id">'.$dat['semail'].'</td>';
				echo '<td data-label="City">'.$dat['scity'].'</td>';
				echo '<td data-label="Reference">'.$dat['sref'].'</td>';
				echo '<td data-label="Date">'.$dat['sagreementdate'].'</td>';
				echo '<td width="10%" data-label="Action"><a href="'.base_url().'admin_editseller/edit_seller/'.$dat['scomapnyname'].'">';	
				echo '<i class="fa fa-edit"></i>';
				echo '</a>';	
				echo '</td>';
				echo '</td>';
				echo '</tr>';
		$row_count++;	}
			echo '</tbody>';
			echo '</table>';
		}else{
			echo '<table class="table table-striped table-bordered table-sm text-center mt-5" width="100%" cellspacing="0">';
			echo '<thead class="bg-primary text-white">';
			echo '<tr>';
			echo '<th>S.No.</th>';
			echo '<th>Company Name</th>';
			echo '<th>Contact Person</th>';
			echo '<th>Contact No.</th>';
			echo '<th>Email Id</th>';
			echo '<th>City</th>';
			echo '<th>Reference</th>';
			echo '<th>Date</th>';
			echo '<th>Action</th>';
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
			echo '<tr>';
				echo '<td>No Records Found</td>';
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
	
public function export_csv(){ 
		// file name 
		$datatoquerydb = $this->uri->segment(3);
		$this->load->model('Admin_model');
		$filename = 'users_'.date('Ymd').'.csv'; 
		header("Content-Description: File Transfer"); 
		header("Content-Disposition: attachment; filename=$filename"); 
		header("Content-Type: application/csv; ");
	   // get data 
	   $usersData = $this->Admin_model->getSellerUserDetails('sellerprofile','sref',$datatoquerydb);
		//$usersData = $this->Admin_model->getSellerUserDetails();
		//print_r($usersData); die;
		// file creation 
		$file = fopen('php://output','w');
		$header = array("COMPANY NAME","CONTACT PERSON","CONTACT NO.","EMAIL ID","CITY","REFERENCE","DATE"); 
		fputcsv($file, $header);
		foreach ($usersData as $key=>$line){ 
			fputcsv($file,$line); 
		}
		fclose($file); 
		exit; 
	}	
	
	
}




