<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_editforthcom_2 extends CI_Controller {

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
		$this->load->helper('url');
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/editforthcom_2');
		$this->load->view('admin/footer');
		
	}
	
	public function get_table(){
		$datatoquerydb = $this->uri->segment(3);
		$this->load->model('Admin_model');
		$data = $this->Admin_model->get_lookalike('addlot','slotname',$datatoquerydb);
		if(count($data)){
			echo '<table class="table table-striped table-bordered table-sm text-center mt-5" width="100%" cellspacing="0">';
			echo '<thead class="bg-primary text-white">';
			echo '<tr>';
			echo '<th>Auction Id</th>';
			echo '<th>Lot No</th>';
			echo '<th>Lot Name</th>';
			echo '<th>Category</th>';
			echo '<th>Description</th>';
			echo '<th>Location Of Lot</th>';
			echo '<th>Inspection Date & Time</th>';
			echo '<th>EMD Details</th>';
			echo '<th>Last Date Of Submiting EMD</th>';
			echo '<th>Expected Price</th>';
			echo '<th>Starting Bid Price</th>';
			echo '<th>Qty</th>';
			echo '<th>Unit Of Measurment</th>';
			echo '<th>Bid Base</th>';
			echo '<th>GST</th>';
			echo '<th>Other Tax</th>';
			echo '<th>EMD Amount</th>';
			echo '<th>Lifting Period</th>';
			echo '<th>PCB Certificate</th>';
			echo '<th>Download</th>';
			echo '<th>Action</th>';
			echo '</tr>';
			echo '</thead>';
			echo '<tbody>';
			foreach($data as $dat){
				echo '<tr>';
				echo '<td>'.$dat['sauctionid'].'</td>';
				echo '<td>'.$dat['slotno'].'</td>';
				echo '<td>'.$dat['slotname'].'</td>';
				echo '<td>'.$dat['scategory'].'</td>';
				echo '<td>'.$dat['sdescription'].'</td>';
				echo '<td>'.$dat['slotlocation'].'</td>';
				echo '<td>'.$dat['sfrominpectdate_time'].$dat['stoinpectdate_time'].'</td>';
			
				echo '<td>'.$dat['semddetail'].'</td>';
				echo '<td>'.$dat['slastdateemdsub'].'</td>';
				echo '<td>'.$dat['sprice'].'</td>';
				echo '<td>'.$dat['sstartbidprice'].'</td>';
				echo '<td>'.$dat['sqty'].'</td>';
				echo '<td>'.$dat['sunitmeasurment'].'</td>';
				echo '<td>'.$dat['sbidbase'].'</td>';
				echo '<td>'.$dat['sgst'].'</td>';
				echo '<td>'.$dat['sothertax'].'</td>';
				echo '<td>'.$dat['semdamount'].'</td>';
				echo '<td>'.$dat['sliftingperiod2'].$dat['sliftingperiod'].'</td>';
				
				echo '<td>'.$dat['spcbcertificate'].'</td>';
				echo '<td><a href="'.base_url().'admin_editforthcom_2/editforthcom_2/'.$dat['slotname'].'">';
				echo '<i class="fa fa-download"></i>';
				echo '</a>';
				echo '<td><a href="'.base_url().'admin_editlot/editlot/'.$dat['slotname'].'">';
				echo '<i class="fa fa-edit"></i>';
				echo '</a>';
				echo '<a href="'.base_url().'admin_editlot/delete_lot/'.$dat['slotname'].'">';
				echo '<i class="fa fa-trash" style="color:black"></i>';
				echo '</a>';
				echo '</td>';
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
			echo '<th>Lot No</th>';
			echo '<th>Lot Name</th>';
			echo '<th>Category</th>';
			echo '<th>Description</th>';
			echo '<th>Location Of Lot</th>';
			echo '<th>Inspection Date & Time</th>';
			echo '<th>EMD Details</th>';
			echo '<th>Last Date Of Submiting EMD</th>';
			echo '<th>Expected Price</th>';
			echo '<th>Starting Bid Price</th>';
			echo '<th>Qty</th>';
			echo '<th>Unit Of Measurment</th>';
			echo '<th>Bid Base</th>';
			echo '<th>GST</th>';
			echo '<th>Other Tax</th>';
			echo '<th>EMD Amount</th>';
			echo '<th>Lifting Period</th>';
			echo '<th>PCB Certificate</th>';
			echo '<th>Download</th>';
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
				echo '<td>No Records Found</td>';
				echo '<td>No Records Found</td>';
				echo '<td>No Records Found</td>';
				echo '<td>No Records Found</td>';
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
	
	public function editforthcom_2(){
		$retrivevaltmp = urldecode($this->uri->segment(3));
		
		$retriveval = array('slotname'=>$retrivevaltmp);
		$this->load->model('Admin_model');
		$data['sqldata'] = $this->Admin_model->getdatafromtable('addlot',$retriveval);
		
	
		$this->load->helper('url');
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/editforthcom_2', $data);
		$this->load->view('admin/footer');
	}
	public function editforthcom_2_alert(){
		$retrivevaltmp = $this->uri->segment(3);
		$retrivevaltmp2 = urldecode($this->uri->segment(4));
		echo '<script language="javascript">';
			echo 'alert("'.$retrivevaltmp2.'")';  //not showing an alert box.
			echo '</script>';
		$retriveval = array('slotname'=>$retrivevaltmp);
		$this->load->model('Admin_model');
		$data['sqldata'] = $this->Admin_model->getdatafromtable('addlot',$retriveval);
		
	
				
		$this->load->helper('url');
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/editforthcom_2', $data);
		$this->load->view('admin/footer');
	}
	
}
