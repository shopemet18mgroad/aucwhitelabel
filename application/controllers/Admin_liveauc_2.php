<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_liveauc_2 extends CI_Controller {

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
		/* $this->load->library('currency');
		echo $this->currency->getIndianCurrency(7288);die; */
		//echo $this->session->userdata('auth');
		if(!$this->session->has_userdata('username')  || $this->session->userdata('auth') != "ADMIN"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
		$retrivevaltmp = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
		$retriveval = array('sauctionid'=>$retrivevaltmp);
		$this->load->model('Admin_model');
		$data['sqldata'] = $this->Admin_model->getdatafromtable('auction',$retriveval);
		//$datediff = (strtotime($time) - strtotime($data['sqldata'][0]->saucclosedate_time));
		//echo floor($datediff / (60));
		//echo gmdate("H:i:s", floor($datediff / (60)));
		$data['sqldatalot'] = $this->Admin_model->getdatafromtable('addlot',$retriveval);
		
		$sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('admin/header',$sess);
		$this->load->view('admin/liveauc_2',$data);
		$this->load->view('admin/footer');
		}
	}
	
	public function liveauc_2(){
		$retrivevaltmp = urldecode($this->uri->segment(3));
		
		$retriveval = array('sauctionid'=>$retrivevaltmp);
		$this->load->model('Admin_model');
		$data['sqldata'] = $this->Admin_model->getdatafromtable('auction',$retriveval);
		
	
		$this->load->helper('url');
		$this->load->view('admin/header');
		$this->load->view('admin/liveauc_2', $data);
		$this->load->view('admin/footer');
	}
	public function liveauc_2_alert(){
		$retrivevaltmp = $this->uri->segment(3);
		$retrivevaltmp2 = urldecode($this->uri->segment(4));
		echo '<script language="javascript">';
			echo 'alert("'.$retrivevaltmp2.'")';  //not showing an alert box.
			echo '</script>';
		$retriveval = array('sauctionid'=>$retrivevaltmp);
		$this->load->model('Admin_model');
		$data['sqldata'] = $this->Admin_model->getdatafromtable('auction',$retriveval);
		$this->load->helper('url');
		$this->load->view('admin/header');
		$this->load->view('admin/liveauc_2', $data);
		$this->load->view('admin/footer');
	}
	public function get_table_ajax(){
		
		$retrivevaltmp = urldecode(str_ireplace('-','/',$this->uri->segment(3)));
		$retriveval = array('sauctionid'=>$retrivevaltmp);
		$this->load->model('Admin_model');
		$sqldata = $this->Admin_model->getdatafromtable('auction',$retriveval);
		$sqldatalot = $this->Admin_model->getdatafromtable('addlot',$retriveval);
		//echo gmdate("H:i:s", floor($datediff / (60)));
		date_default_timezone_set('Asia/Kolkata');
		$time =  Date('Y-m-d H:i:s');
		$datediff = (strtotime($time) - strtotime($sqldata[0]->saucclosedate_time));
		$bal = gmdate("H:i:s", floor($datediff / (60)));
		
		if($sqldatalot){
			foreach($sqldatalot as $sqlot){
				
				echo '<tr>';
				echo '<td>'.$sqlot->slotname.'</td>';
				echo '<td>'.$sqlot->slotlocation.'</td>';
				echo '<td>'.$sqldata[0]->saucclosedate_time.'</td>';
				echo '<td>'.$bal.'</td>';
				echo '<td>'.$sqlot->sqty.'</td>';
				echo '<td>'.$sqlot->sunitmeasurment.'</td>';
				echo '<td>'.$sqlot->sprice.'</td>';
				echo '<td>'.$sqlot->cbidval.'</td>';
				echo '</tr>';
			}
		}

	}
}
