<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyer_forthcomingtender extends CI_Controller {

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
		
		//$this->load->model("Admin_model");
		//$data["addlot"] = $this->Admin_model->fetch_all();
		$this->load->helper(array('url','html'));
		$this->load->library('session');
		
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "BUYER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
		
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('buyer/header',$sess);
		$this->load->view('buyer/forthcomingtender');
		$this->load->view('buyer/footer');
		}
		
	}
	
	public function get_table(){
		$time =  Date('Y-m-d H:i:s');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$datatoquerydb = $this->uri->segment(3);
		$this->load->model('Admin_model');
		$data = $this->Admin_model->get_lookalike_ted('tender_batch','batchdes',$datatoquerydb);
        //print_r($data);
		if(count($data)){
			  
			
			echo '<table id="myTable" class="table table-striped table-bordered table-sm text-center mt-5" w-auto small width="100%" cellspacing="0">';
			echo '<thead class="bg-warning text-white">';
			echo '<tr>';
			echo '<th colspan="12">Add Lot In Your List</th>';
			echo '</tr>';
			echo '<thead class="bg-primary text-white">';
			echo '<tr>';
			echo '<th>Tenderer Id</th>';
			echo '<th>Batch No</th>';
			echo '<th>Batch Name</th>';
			echo '<th>Start Time</th>';
			echo '<th>Category</th>';
			echo '<th>Batch Description</th>';
			echo '<th>Seller / Company Name</th>';
			echo '<th>Quantity</th>';
			echo '<th>Download</th>';
			echo '<th>Add to Mylist</th>';
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
			
			foreach($data as $dat){
				$sauc = str_ireplace('-','/',$dat['tenderid']);
				$saucqarray = array('tenderid'=>$sauc);
				$respdata = $this->Admin_model->getdatafromtable('tender',$saucqarray);
				$q = $this->Admin_model->buyersubscriptionfetch('buyerprofile', $sess['sessi']);
				$subscription = $q[0]->subscription;
			
				if($respdata){
					echo '<tr>';

				 echo '<td style="color:blue" data-label="Auction Id">'; 


				//echo $dat['sauctionid'];	
				echo $aucencode = str_ireplace('/','-',$dat['tenderid']);
				//echo '</a>'; 
				echo '</td>'; 
				echo '<td data-label="Lot No">'.$dat['tslotno'].'</td>';
				echo '<td data-label="Lot Name">'.$dat['batchname'].'</td>';
				$aucstarttime = $respdata[0]->tenderstartdate;
				$tm = explode('.',$aucstarttime);
				$aucstarttime = $tm[0];
				$st = $aucstarttime;
				echo '<td data-label="Auction Start Time">'.$st.'</td>';
				echo '<td data-label="Category">'.$dat['category'].'</td>';
				echo '<td data-label="Lot Description">'.$dat['batchdes'].'</td>';
				if($subscription == true){
				echo '<td data-label="Seller / Company Name">'.$dat['tenderer'].'</td>';
				}
				else{
				echo '<td style="color:red">'."Pay Subscription".'</td>';	
				}
				echo '<td  data-label="Quantity">'.$dat['batchreqqty'].'</td>';
				
				if($subscription == true){
				echo '<td><a href="'.base_url().'/pdf_gen/auc_no/'.$aucencode.'/'.($dat['tenderer']).'" target="_blank"><i class="fa fa-download"></i></a></td>';
				}else{echo '<td></td>';}
				echo '';

				echo '<td data-label="Add to Mylist">';
				$desc = str_ireplace(',','%2C',$dat['batchdes']);
				$desc2 = str_ireplace('(','%28',$desc );
				$desc3 = str_ireplace(')','%29',$desc2 );
				echo'<button type="button" id="'.$aucencode.'|'.$dat['tslotno'].'" onClick="addtocart(this.id)">';
				echo'<i class="fas fa-heart" id="'.$aucencode.'|'.$dat['tslotno'].'"></i>';
				echo'</button>';
				echo '</td>';
				echo '</tr>';
				}else{
					
				}
				
			}
			echo '</tbody>';
			echo '</table>';
		}else{
			echo '<table class="table table-striped table-bordered table-sm text-center mt-5" width="100%" cellspacing="0">';
			echo '<thead class="bg-primary text-white">';
            echo '<tr>';
			echo '<th>Tenderer Id</th>';
			echo '<th>Batch No</th>';
			echo '<th>Batch Name</th>';
			echo '<th>Start Time</th>';
			echo '<th>Category</th>';
			echo '<th>Batch Description</th>';
			echo '<th>Seller / Company Name</th>';
			echo '<th>Quantity</th>';
			echo '<th>Download</th>';
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
				echo '<td>No Records Found</td>';
				echo '<td>No Records Found</td>';
				echo '</tr>';
			echo '</tbody>';
			echo '</table>';
			
		}



	}
		
	public function Addtocart(){
		$dat = urldecode($this->uri->segment(3));
		$this->load->library('session');
		$bidderuname = $this->session->userdata('username');
		$datexp = explode('|',$dat);
		$auctionid = str_ireplace('-','/',$datexp[0]);
		$lotno = $datexp[1];
		//print_r($sdescription); die;
		$data = array('tenderid'=>$auctionid);
		$data2 = array('tenderid'=>$auctionid,'tslotno'=>$lotno);		
		$dat4 = $this->Admin_model->getdatafromtable('tender_batch',$data2);
		$dat3 = $this->Admin_model->getdatafromtable('tender',$data);
		$aucstart = $dat3[0]->tenderstartdate;
		$aucend = $dat3[0]->tenderenddate;
		$bcheck = array('bidderusername'=>$bidderuname,'tenderid'=>$auctionid,'tslotno'=>$lotno);
		$cartdata = array(
		'bidderusername'  => $bidderuname,'tenderid'=>$auctionid,'tslotno' => $lotno,'tenderstartdate'=>$aucstart,'tenderenddate'=>$aucend);
		if($this->Admin_model->check('tendercart',$bcheck)){
			echo "EX";
		}else{
			$status = $this->Admin_model->insert('tendercart', $cartdata);
			echo "IN";
		}
		die;
		
		
	
	}
	
}
?>