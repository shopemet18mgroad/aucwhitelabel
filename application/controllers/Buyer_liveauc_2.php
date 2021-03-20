<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyer_liveauc_2 extends CI_Controller {

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
		if(!$this->session->has_userdata('username')|| $this->session->userdata('auth') != "BUYER"){
			$datainserr = "Invalid Login Session";
			header('location: '.base_url().'login/index_error/'.$datainserr);
			die;
		}else{
		$variable = $this->uri->segment(3);
		$vararray = urldecode($variable);
		$vararray2 = explode('|',$vararray);
		$auctionid = str_ireplace('-','/',$vararray2[0]);
		//$lotno = $vararray2[1];
		
		$sess = $this->session->userdata('username');
		$this->load->model('Admin_model');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$active = array('bidderusername'=>$sess['sessi'],'auctionid'=>$auctionid);
		$active2 = array('auctionid'=>$auctionid);
		$query = $this->Admin_model->get('biddercart', $active);
		
		$query2 = $this->Admin_model->getemdlot('biddercart', $auctionid,$sess['sessi']);
		//echo '<pre>';print_r($query2);die;  echo '</pre>';
		$data['sqldata'] = $query;
		
		
		$jk = count($query);
		for($i=0;$i<$jk;$i++){
		$aucstarttime = $data['sqldata'][$i]->aucstartdate_time;
		$tmp1 = explode('.',$aucstarttime);
		$aucstarttime = $tmp1[0];
		$data['st'][$i] = $aucstarttime;
		
		$aucclosetime = $data['sqldata'][$i]->aucclosedate_time;
		$tmp = explode('.',$aucclosetime);
		$aucclosetime = $tmp[0];
		$data['ct'][$i] = $aucclosetime;
		}
		$data['sqldata2'] = $query2;
		//echo '<pre>';
		//print_r($data['sqldata2']); die;
		//echo '</pre>';
		$data['sessi'] = $sess['sessi'];
		
		$data2 = array('liveaucterms_condi'=>true);
		$updatech = array('bidderusername'=>$sess['sessi'],'auctionid'=>$auctionid);
		$this->load->model('Admin_model');
		//$data['sqldata'] = $this->Admin_model->getdatafromtable('auction',$retriveval);
		$status = $this->Admin_model->update_custom('biddercart',$data2,$updatech,$updatech);
		
		
		$this->load->view('buyer/header',$sess);
		$this->load->view('buyer/liveauc_2', $data);
		$this->load->view('buyer/footer');
		}
	}
	public function get_table_ajax(){
		$this->load->helper('url');
		$this->load->library('session');
		date_default_timezone_set('Asia/Kolkata');
		$time =  Date('Y-m-d H:i:s');
		$variable = $this->uri->segment(3);
		$vararray = urldecode($variable);
		$vararray2 = explode('|',$vararray);
		$auctionid = str_ireplace('-','/',$vararray2[0]);
		$lotno = $vararray2[1];
		$sess = $this->session->userdata('username');
		$this->load->model('Admin_model');
		$sess = array('sessi'=>$this->session->userdata('username'));
		$active = array('bidderusername'=>$sess['sessi'],'auctionid'=>$auctionid/*, 'lotno'=>$lotno, */);
		$active2 = array('sauctionid'=>$auctionid/* ,'slotno'=>$lotno, */);
		$query = $this->Admin_model->get('biddercart', $active);
		$query2 = $this->Admin_model->getemdlot('biddercart', $auctionid,$sess['sessi']);
		$lottimesync = 0;
		
		foreach($query as $quer){
		$aucstarttime = $quer->aucstartdate_time;
		$tm = explode('.',$aucstarttime);
		$aucstarttime = $tm[0];
		$st = $aucstarttime;
		$aucclosetime = $quer->aucclosedate_time;
		$t = explode('.',$aucclosetime);
		$aucclosetime = $t[0];
		$ct = $aucclosetime;
		
		
		
		$diff = strtotime($quer->aucclosedate_time)-strtotime($time);
		$years = floor($diff / (365*60*60*24));  
			$months = floor(($diff - $years * 365*60*60*24)/ (30*60*60*24));   
			$days = floor(($diff - $years * 365*60*60*24 -  $months*30*60*60*24)/ (60*60*24)); 
			$hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24)/ (60*60));  
$minutes = floor(($diff - $years * 365*60*60*24  - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60);  
$seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minutes*60)); 
$Remaining =$hours." Hours ".$minutes." Minutes ".$seconds."Seconds";
		if($diff <= 0){
			$condtion = false;
		}else{
			$condtion = true;
		}
				//$diff = (strtotime($sqldata[0]->aucclosedate_time) - strtotime($time));
				//$diff = abs($time - $sqldata[0]->aucclosedate_time);  
			
		//$datfnl = floor($datediff / (3600)).":".floor($datediff / (60));
if(($quer->aucclosedate_time)>$time){		
		
echo '<input type="hidden" id="telapsed-'.$lottimesync.'" value="'.$diff.'">';	
//foreach($query2 as $que){
echo '<table class="table table-striped table-bordered table-sm text-center w-auto small ml-5" width="100%" cellspacing="0" >';

echo '<thead class="bg-info text-white text-center">';
echo '<tr>';
echo '<th colspan="7">Auction Details</th>';
echo '</tr>';
echo '</thead>';
echo '<thead class="bg-primary text-white">';
echo '<tr>';
echo '';
echo '<th width="22%">Auction Id</th>';
echo '<th>User Name</th>';
echo '<th>Time Elapsed</th>';
echo '<th>Auction Start Date</th>';
echo '<th>Auction Close Date</th>';
echo '<th>Seller Terms & Condition</th>';
echo '</tr>';
echo '</thead>';
echo '';
echo '<tbody>';
echo '<form action="<?php echo base_url();?>" method="POST"  enctype="multipart/form-data">';
echo '<tr>';
echo '';
echo '<td><a href="#">'.$quer->auctionid.'</a></td>';
echo '';
echo '<td>'.$quer->bidderusername.'</td>';
echo '';
echo '<td><h6 id="timer-'.$lottimesync.'" style="color:red">Synchronizing Time</h6></td>';
echo '';
echo '<td>'.$st.'</td>';
echo '<td>'.$ct.'</td>';
echo '<td><a href="#"><u>Click here</u></a></td>';
echo '</tr>';
echo '</tbody>';
echo '</table>';
echo '</form>';
echo '<table class="table table-striped table-sm w-auto small table-bordered mt-4 text-center" id="dataTable" width="100%" cellspacing="0">';
echo '<thead class="bg-warning  text-white text-center">';
echo '<tr>';
echo '<th colspan="14">Open LOT Number</th>';
echo '</tr>';
echo '</thead>';
echo '<thead class="bg-primary text-white">';
echo '<tr>';
echo '<th width="8%">Lot No</th>';
echo '<th>Lot Name</th>';
echo '<th>Location</th>';
echo '<th>Close Time</th>';
//echo '<th>Time Left</th>';
echo '<th>Quantity</th>';
echo '<th>Unit</th>';
echo '<th>Start Price</th>';
echo '<th>My Bid</th>';
echo '<th>Live Status</th>';
echo '<th width="18%">Bid</th>';
echo '<th>Autobid</th>';
echo '</tr>';
echo '</thead>';
if($condtion){
	echo '';
echo '<tbody>';
$lot = $query2[$lottimesync]->slotno - 1;
echo '<tr><td>'.$query2[$lottimesync]->slotno.'</td>';
echo '<td>'.$query2[$lottimesync]->slotname.'</td>';
echo '<td>'.$query2[$lottimesync]->slotlocation.'</td>';
echo '<td>'.$ct.'</td>';
//echo '<td>'.$Remaining.'</td>';
echo '<td>'.$query2[$lottimesync]->sqty.'</td>';
echo '<td>'.$query2[$lottimesync]->sunitmeasurment.'</td>';
echo '<td>'.$query2[$lottimesync]->sstartbidprice.'</td>';
echo '<td>'.$quer->mybid_val.'</td>';
echo '<td>'.$query2[$lottimesync]->cbidval.'</td>';
if($query2[$lottimesync]->sstartbidprice >= $query2[$lottimesync]->cbidval){
	$datbid = $query2[$lottimesync]->sstartbidprice;
	$datbid = $query2[$lottimesync]->sstartbidprice + $query2[$lottimesync]->sminincre;
}else{
	$datbid = $query2[$lottimesync]->cbidval;
}   

//$sessa2 = urlencode($sess['sessi']);
$sessa2 = str_ireplace('@','%40',$sess['sessi']);
$id = $sessa2."|".str_ireplace('/','-',$quer->auctionid)."|".$query2[$lottimesync]->slotno;
echo '<td><div class="form-group row ml-2">';
if($quer->abidding){
	echo '<input class="form-control col-sm-7 mr-2" type="number" value="'.$datbid.'" min="0" step="'.$query2[$lottimesync]->sminincre.'" id="bid-'.$lot.'" name="bid" readonly>';
	echo '<button type="submit" class="btn btn-info" id="'.$id.'" onclick="bid_manual(this.id)" disabled>Bid</button></div>';
	echo '';
	echo '</td>';
echo '<td><a href="'.base_url().'Buyer_liveauc_2/buyer_autobid_disable/'.str_ireplace('/','-',$quer->auctionid).'|'.$query2[$lottimesync]->slotno.'"><button type="button" class="btn btn-info">Disable AutoBid</button></a></td>';
}else{
	echo '<input class="form-control col-sm-7 mr-2" type="number" value="'.$datbid.'" min="0" step="'.$query2[$lottimesync]->sminincre.'" id="bid-'.$lot.'" name="bid">';
	echo '<button type="submit" class="btn btn-info" id="'.$id.'" onclick="bid_manual(this.id)">Bid</button></div>';
	echo '';
	echo '</td>';
echo '<td><a href="'.base_url().'Buyer_liveauc_2/buyer_autobid/'.str_ireplace('/','-',$quer->auctionid).'|'.$query2[$lottimesync]->slotno.'"><button type="button" class="btn btn-info" disabled>AutoBid</button></a></td>';
}


echo '</tr>';
echo '';
echo '</tbody>';
}else{
echo '';
echo '<tbody>';
echo '<tr><td>No Live Data</td>';
echo '<td>No Auctions</td>';
echo '<td>No Auctions</td>';
echo '<td>No Auctions</td>';
echo '<td>No Auctions</td>';
echo '<td>No Auctions</td>';
echo '<td>No Auctions</td>';
echo '<td>No Auctions</td>';
echo '<td>No Auctions</td>';
echo '<td>No Auctions</td>';
echo '<td>No Auctions</td>';
echo '</td>';
echo '</tr>';
echo '';
}}	
	$lottimesync++;
	}
echo '</tbody>';
	

echo '</table>';
	
	}
	
	
	 public function liveauc_2(){
		$retrivevaltmp = urldecode($this->uri->segment(3));
		$retriveval = array('sauctionid'=>$retrivevaltmp);
		$this->load->model('Admin_model');
		$data['sqldata'] = $this->Admin_model->getdatafromtable('auction',$retriveval);
		$this->load->helper('url');
		$this->load->view('buyer/header');
		$this->load->view('buyer/liveauc_2', $data);
		$this->load->view('buyer/footer');
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
		$this->load->view('buyer/header');
		$this->load->view('buyer/liveauc_2', $data);
		$this->load->view('buyer/footer');
	} 
	public function get_currency(){
		$data = urldecode($this->uri->segment(3));
		$this->load->library('Currency');
		echo $this->currency->getIndianCurrency($data);
		die;
	}
	public function storebidval(){
		$this->load->helper('url');
		$this->load->model('Admin_model');
		$this->load->library('session');
		date_default_timezone_set('Asia/Kolkata');
		$time =  Date('Y-m-d H:i:s');
		$data = urldecode($this->uri->segment(3));
		$data2 = explode('|',$data);
		$username = str_ireplace('%40','@',$data2[0]);
		$auctionid = str_ireplace('-','/',$data2[1]);
		$lotno = $data2[2];
		$bitval = $data2[3];
		$dataforupdate = array('cbidval' => $bitval);
		$dataforupdate2 = array('mybid_val' => $bitval);
		$active2 = array('sauctionid'=>$auctionid,'slotno'=>$lotno);
		$active3 = array('bidderusername'=>$username,'auctionid'=>$auctionid,'lotno'=>$lotno);
		$active4 = array('auctionid'=>$auctionid,'lotno'=>$lotno);
		//$query = $this->Admin_model->getdatafromtable('biddercart', $active);
		$query2 = $this->Admin_model->getdatafromtable('addlot', $active2);
		$query3 = $this->Admin_model->getdatafromtable('biddercart', $active3);
		$diff = strtotime($query3[0]->aucclosedate_time)-strtotime($time);
		$newtimestamp = strtotime($query3[0]->aucclosedate_time.'+ 5 minute');
		$newtimestamp2 =  date('Y-m-d H:i:s', $newtimestamp);
		$dataforupdate3 = array('aucclosedate_time' => $newtimestamp2);
		$dataforupdate4 = array('saucclosedate_time' => $newtimestamp2);
		$dataforupdate5 = array('bidderusername' => $username, 'sauctionid'=>$auctionid,'slotno'=>$lotno,'Date_time'=>$time,'bidamount'=>$bitval);
			$sbid = $query2[0]->sstartbidprice;
			 $inval = $query2[0]->sminincre;
			 $total = $sbid + $inval; 
		if($query2[0]->status){
			if($query2[0]->cbidval >= $bitval || $bitval < $total){
				echo "Higher Bid Value";
				die;
			}else{
				if($diff >= 5 && $diff < 180){
					$this->Admin_model->insert('biddingdata', $dataforupdate5);
					$this->Admin_model->update_custom('addlot',$dataforupdate,$active2,$active2);
					$this->Admin_model->update_custom('biddercart',$dataforupdate2,$active3,$active3);
					$this->Admin_model->update_custom('biddercart',$dataforupdate3,$active4,$active4);
					$this->Admin_model->update_custom('auction',$dataforupdate4,$active2,$active4);
					
					//$this->Admin_model->update_custom('auction',$dataforupdate4,$active2,$active4);
				}else{
					if($diff < 5){
						echo "Bidding Closed";
						die;
					}else{
						$this->Admin_model->update_custom('addlot',$dataforupdate,$active2,$active2);
						$this->Admin_model->update_custom('biddercart',$dataforupdate2,$active3,$active3);
						//$this->Admin_model->update_custom('biddingdata',$dataforupdate5,$active2,$active4);
						$this->Admin_model->insert('biddingdata', $dataforupdate5);
						
					}
					
				}
				echo "Done";
				//header('location: '.base_url().'Buyer_liveauc_2/index/'.$auctionid.'|'.$lotno);
				die;
			}
		}else{
			echo "Bidding Closed";
			die;
		}die;
	}
	public function buyer_autobid(){
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Admin_model');
		$url = $this->uri->segment(3);
		$urltoexplode = urldecode($url);
		$urltoexplode2 = explode('|',$urltoexplode);
		$auctionid = $urltoexplode2[0];
		$auctionid = str_ireplace('-','/',$auctionid);
		$lotid = $urltoexplode2[1];
		$active = array('sauctionid'=>$auctionid,'slotno'=>$lotid);
		$data['sqldata'] = $this->Admin_model->getdatafromtable('addlot',$active);
		$data['sqldata2'] = $this->session->userdata('username');
		 $sess = array('sessi'=>$this->session->userdata('username'));
		$this->load->view('buyer/header',$sess);
		$this->load->view('buyer/autobid',$data);
		$this->load->view('buyer/footer');
	}
	public function buyer_autobid_set(){
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Admin_model');
		$user = $this->uri->segment(3);
		$user2 = explode('|',urldecode($user));
		$bidslab = $user2[0];
		$expprice = $user2[1];
		$user = $user2[2];
		$auctionid = str_ireplace('-','/',$user2[3]);
		$auclot = $user2[4];
		$active = array('bidderusername'=>$user,'auctionid'=>$auctionid,'lotno'=>$auclot);
		$dataforupdate = array('abidmaxvalue'=>$expprice,'abidslab'=>$bidslab,'abidding'=>true);
		$this->Admin_model->update_custom('biddercart',$dataforupdate,$active,$active);
		echo "Done";
	}
	public function buyer_autobid_disable(){
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Admin_model');
		$user = $this->uri->segment(3);
		$user2 = explode('|',urldecode($user));
		echo $user = $this->session->userdata('username');
		echo $auctionid = $user2[0];
		echo $auctionid2 = str_ireplace('-','/',$user2[0]);
		echo $auclot = $user2[1];
		$active = array('bidderusername'=>$user,'auctionid'=>$auctionid2,'lotno'=>$auclot);
		$dataforupdate = array('abidding'=>false);
		$this->Admin_model->update_custom('biddercart',$dataforupdate,$active,$active);
		header('location: '.base_url().'buyer_liveauc_2/index/'.$auctionid.'|'.$auclot);
		
	}
	public function get_table_ajax_liveauc_index(){
		date_default_timezone_set('Asia/Kolkata');
		$time =  Date('Y-m-d H:i:s');
		$this->load->model('Admin_model');
		$this->load->helper('url','html');
		$this->load->library('session');
		$sess = array('sessi'=>$this->session->userdata('username'));
		//print_r($sess['sessi']);die;
		$datalivemenu = $this->Admin_model->datebetweensess('biddercart',$time,$sess['sessi']);
		$count = 0;
		foreach($datalivemenu as $datamenu){
			$auclink = str_ireplace('/','-',$datamenu->auctionid);
			$auclink = str_ireplace(' ','%20',$auclink);
			echo "<tr>\n";
			echo "<td><a href=".base_url()."Buyer_app_liveauc_2/index/".$auclink." data-toggle='modal' data-target='#myModal-1'>".$datamenu->auctionid."</a></td>\n";
			echo "<td>".$datamenu->sname."</td>\n";
			//echo "<td>".$datamenu->description."</td>\n";
			echo "</tr>";
echo '<div class="modal" id="myModal-1>';
			//The Modal
echo '<div class="modal-dialog">';
echo '<div class="modal-content">';
echo '';

echo '<div class="modal-header">';
echo '<h6 class="modal-title"><b>WWW.AUCJUNCTION.COM Says</b></h6>';
echo '<button type="button" class="close" data-dismiss="modal">&times;</button>';
echo '</div>';
echo '';
echo '<div class="modal-body">';
echo '<div class="form-check form-check-inline">';
echo '<input type="checkbox" class="form-check-input" id="liveaucterms_condi" name="liveaucterms_condi" value="0">';
echo '<label class="form-check-label" for="exampleCheck1"></label>';
echo '</div>';
echo '<b>I fully agree with the BUYER, SELLER and AUCJUNCTION Terma & Conditions of this e-Auction.</b>';
echo '';
echo '</div>';
echo '';

echo '<div class="modal-footer">';
echo '</div>';
echo '';
echo '</div>';
echo '</div>';
echo '</div>';
//<!--------Model --------->
$count++;
		}
		
				
	}
}
