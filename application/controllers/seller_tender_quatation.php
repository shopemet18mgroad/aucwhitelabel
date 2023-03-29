<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_tender_quatation extends CI_Controller {

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
		$this->load->helper(array('url','html','date'));
		date_default_timezone_set('Asia/Kolkata');
		$time =  Date('Y-m-d H:i:s');
		$data2 = array();
		$this->load->model('Admin_model');
		$this->load->library('session');
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "SELLER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
		$sess['sessi'] = $this->session->userdata('username');
		//$sess['sessi']= "Altec";
		
		$this->load->model('Admin_model');
		$sapproval = array('approval'=>false);
		$snamechk = array('susername'=>$sess['sessi']);
		$data['sqld'] = $this->Admin_model->getdatafromtable('sellerprofile', $snamechk);
		$snameseller= $data['sqld'][0]->sname;	
	    $snamechk2a = array('sname'=>$snameseller,'tenderenddate <'=>$time,);
		
		$aucdetails = $this->Admin_model->getdatafromtable_joinbatch('tender',$snameseller); 
        //print_r($aucdetails);die;
			
		if($aucdetails){
			$xr = 0;
		foreach($aucdetails as $aucdet){
			$auct = $aucdet->tenderid;
            $lotno = $aucdet->tslotno;
			$aucdetarray = array('tenderid'=>$auct,'tslotno'=>$lotno);
			$data['sqldat'] = $this->Admin_model->getdatafromtable('tenderdata',$aucdetarray);
				
			
				$xdata = array(); 
				   //print_r($data['sqldat']);die;
				foreach($data['sqldat'] as $datsql){ 
                    
				
				$auctmp = $datsql->tenderid;
				$auclottmp = $datsql->tslotno;
                $datap = $this->Admin_model->minbidvalueted($auctmp, $auclottmp);
				
				if($datap[0]->approval){
					$data2['sqldatarec'][$xr] = $datap;
				}
                
               
		    }
			if($datap[0]->approval){
				$xr++;
			}
            
        }
			// print_r($data2['sqldatarec']);
			// die;
		}

		
	


		$sess = array('sessi'=>$this->session->userdata('username'));		
					
		 
		$this->load->view('seller/header',$sess);
		$this->load->view('seller/tender_quatation',$data2);
		$this->load->view('seller/footer');
		
	}
	}
	public function setdeactive(){
		
		$sl = $this->uri->segment(3);
		$tdata = explode('%7C', $sl);
		$bidusername = $tdata[0];
		$tenderid = str_ireplace('-','/',$tdata[1]);
		$lot = $tdata[2];
		//die;
		//$datetime = $compnameurl2[4];
		//print_r($comp); die;
		$this->load->model('Admin_model');
		$sapproval = array('approval'=>true);
		
		$adaction2 = array('bidderusername'=>$bidusername, 'tenderid'=>$tenderid, 'tslotno'=>$lot);
		//print_r($adaction2);die;
		$query = $this->Admin_model->update_custom('tenderdata',$sapproval, $adaction2, $adaction2);
		if(true){
			echo "HI";
		}else{
			echo "BYE";
		}
	
}
}
