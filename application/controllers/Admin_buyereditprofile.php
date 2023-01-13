<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_buyereditprofile extends CI_Controller {

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
		$this->load->view('admin/buyereditprofile');
		$this->load->view('admin/footer');
		}	
	}
		public function get_table(){
		$datatoquerydb = $this->uri->segment(3);
		$this->load->model('Admin_model');
		$data = $this->Admin_model->get_lookalike('buyerprofile','bcompany',$datatoquerydb);
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
			echo '<th>Date</th>';
			echo '<th>Status</th>';
			echo '<th>Agreement Download</th>';
			echo '<th>Action</th>';
			echo '<th>Subscription Status</th>';
			echo '<th>Subscription Amount</th>';
			echo '<th>Subscription Type</th>';
			echo '<th>Comment</th>';
			echo '<th>Subscription Date</th>';
			echo '<th>Subscription Action</th>';
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
			$row_count = 1;
			foreach($data as $dat){
				echo '<tr>';
				echo '<td data-label="S.No.">'.$row_count.'</td>';
				echo '<td data-label="Company Name">'.$dat['bcompany'].'</td>';
				echo '<td data-label="Contact Person">'.$dat['bcontactperson'].'</td>';
				echo '<td data-label="Contact No.">'.$dat['bphone'].'</td>';
				echo '<td data-label="Email Id">'.$dat['bemail'].'</td>';
				echo '<td data-label="City">'.$dat['bcity'].'</td>';
				echo '<td data-label="Date">'.$dat['bagreementdate'].'</td>';
				$status = $dat['adaction'];
				$subscription = $dat['subscription'];
				if($status == 1){
				echo '<td style="color:green; data-label="Status"><b>'."ACTIVE".'</b></td>';
				}else{
				echo '<td style="color:red;" data-label= "Status"><b>'."INACTIVE".'</b></td>';	
				}
				if($dat['adaction'] == 1){
				echo '<td data-label="Agreement Download"><a href="'.base_url().'Agreementforbuyerpdf_gen/auc_no/'.$dat['bcompany'].'" target="_blank"><i class="fa fa-download"></i></a></td>';
				}else{
					echo '<td data-label="Agreement Download">'.'</td>';
				}
				echo '<td data-label="Action"><a href="'.base_url().'admin_editbuyer/edit_buyer/'.$dat['bcompany'].'">';
				echo '<i class="fa fa-edit"></i>';
				echo '</a>';
				echo '<a href="'.base_url().'admin_editbuyer/delete_buyer/'.$dat['bcompany'].'" class="btn btn-sm text-white delete-confirm">';
				echo '<i class="fa fa-trash" style="color:black"></i>';
				echo '</a>';
				echo '<a href="'.base_url().'Admin_buyereditprofile/INACTIVE/'.$dat['bcompany'].'" class="btn btn-sm text-white ">';
				echo '<i class="fa fa-window-close" aria-hidden="true"  style="color:red"></i>';
				echo '</a>';
				
				echo '</td>';
				$subscription = $dat['subscription'];
				if($subscription == 1){
				echo '<td style="color:green;" data-label = "Subscription Status"><b>'."Subscribed".'</b></td>';
				}else{
				echo '<td style="color:red;" data-label= "Subscription Status"><b>'."Unsubscribed".'</b></td>';	
				}
				echo '<td data-label= "Subscription Amount">'.$dat['subscription_amount'].'</td>';
				echo '<td data-label ="Subscription Type">'.$dat['subscription_type'].'</td>';
				echo '<td data-label ="Comment">'.$dat['comment'].'</td>';
				echo '<td data-label ="Subscription Date">From<br>'.$dat['subscription_fromdate'].'<br>To<br>'.$dat['subscription_todate'].'</td>';
				
				echo '<td data-label=" Subscription Action">';
				echo '<a href="'.base_url().'Admin_buyereditprofile/Subscribed/'.$dat['bcompany'].'" class="btn btn-sm text-white ">';
				echo '<i class="fa fa-check-circle" aria-hidden="true"  style="color:green"></i>';
				echo '</a>';
				echo '<a href="'.base_url().'Admin_buyereditprofile/Unsubscribed/'.$dat['bcompany'].'" class="btn btn-sm text-white ">';
				echo '<i class="fas fa-times-circle" aria-hidden="true"  style="color:red"></i>';
				echo '</a>';
				echo '</td>';
				echo '</tr>';
		$row_count++;	}
			echo '</tbody>';
			echo '</table>';
		}else{
			echo '<table class="table table-striped table-bordered table-sm text-center mt-5" width="100%" cellspacing="0">';
			echo '<thead class="bg-primary text-white">';
			echo '<tr>';
			echo '<th>Buyer Name</th>';
			echo '<th>Company Type</th>';
			echo '<th>Contact Person</th>';
			echo '<th>Location</th>';
			echo '<th>City</th>';
			echo '<th>Status</th>';
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
echo "<script>\n";
echo "$('.delete-confirm').on('click', function (event) {\n";
echo "    event.preventDefault();\n";
echo "    const url = $(this).attr('href');\n";
echo "    swal({\n";
echo "        title: 'Are you sure?',\n";
echo "        text: 'This record and it`s details will be permanantly deleted!',\n";
echo "        icon: 'warning',\n";
echo "        buttons: [\"Cancel\", \"Yes!\"],\n";
echo "    }).then(function(value) {\n";
echo "        if (value) {\n";
echo "            window.location.href = url;\n";
echo "        }\n";
echo "    });\n";
echo "});\n";
echo "</script>\n";


	}
	
	public function export_csv1(){ 
		// file name 
		$datatoquerydb = $this->uri->segment(3);
		$this->load->model('Admin_model');
		$filename = 'users_'.date('Ymd').'.csv'; 
		header("Content-Description: File Transfer"); 
		header("Content-Disposition: attachment; filename=$filename"); 
		header("Content-Type: application/csv; ");
	   // get data 
	   $usersData = $this->Admin_model->getBuyerUserDetails('buyerprofile','bcompany',$datatoquerydb);
		//$usersData = $this->Admin_model->getSellerUserDetails();
		//print_r($usersData); die;
		// file creation 
		$file = fopen('php://output','w');
		$header = array("COMPANY NAME","CONTACT PERSON","CONTACT NO.","EMAIL ID","CITY","DATE"); 
		fputcsv($file, $header);
		foreach ($usersData as $key=>$line){ 
			fputcsv($file,$line); 
		}
		fclose($file); 
		exit; 
	}
	public function INACTIVE(){
		$this->load->helper('url');
		$this->load->library('session');
		$dat = urldecode($this->uri->segment(3));
		$data = array('bcompany'=>$dat);
		$this->load->model('Admin_model');
		$dat4 = $this->Admin_model->getdatafromtable('buyerprofile',$data);
			
		$Buyername = $dat4[0]->bname;	
		$companyname = $dat4[0]->bcompany;
		$username = $dat4[0]->busername;
		
		$update = array('adaction'  => false);
		
		$updatecheck = array('bname'=>$Buyername,'bcompany'=>$companyname,'busername'=>$username);
		$status = $this->Admin_model->update_custom('buyerprofile',$update,$updatecheck,$updatecheck);
		
		
		header('location: '.base_url().'Admin_buyereditprofile/index/');
		die;
	}
	
	
	public function Subscribed(){
		$this->load->helper('url');
		$this->load->library('session');
		$dat = urldecode($this->uri->segment(3));
		$data = array('bcompany'=>$dat);
		$this->load->model('Admin_model');
		$dat4 = $this->Admin_model->getdatafromtable('buyerprofile',$data);
			
		$Buyername = $dat4[0]->bname;	
		$companyname = $dat4[0]->bcompany;
		$username = $dat4[0]->busername;
		
		$update = array('subscription' => true);
		
		$updatecheck = array('bname'=>$Buyername,'bcompany'=>$companyname,'busername'=>$username);
		$status = $this->Admin_model->update_custom('buyerprofile',$update,$updatecheck,$updatecheck);
		
		
		header('location: '.base_url().'Admin_buyereditprofile/index/');
		die;
	}
	
	public function Unsubscribed(){
		$this->load->helper('url');
		$this->load->library('session');
		$dat = urldecode($this->uri->segment(3));
		$data = array('bcompany'=>$dat);
		$this->load->model('Admin_model');
		$dat4 = $this->Admin_model->getdatafromtable('buyerprofile',$data);
			
		$Buyername = $dat4[0]->bname;	
		$companyname = $dat4[0]->bcompany;
		$username = $dat4[0]->busername;
		
		$update = array('subscription' => false);
		
		$updatecheck = array('bname'=>$Buyername,'bcompany'=>$companyname,'busername'=>$username);
		$status = $this->Admin_model->update_custom('buyerprofile',$update,$updatecheck,$updatecheck);
		
		
		header('location: '.base_url().'Admin_buyereditprofile/index/');
		die;
	}
}

