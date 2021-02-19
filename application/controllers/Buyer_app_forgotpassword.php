<?php

class Buyer_app_forgotpassword extends CI_Controller
{
public function __construct() {
parent::__construct();
        
		$this->load->library('session');
		$this->load->library('email');
		
	}
	   public function index()
	{
		$this->load->helper(array('url','html','date'));
		date_default_timezone_set('Asia/Kolkata');
		$time =  Date('Y-m-d H:i:s');
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->library('session');
		$this->session->sess_expiration = '3600';
		if($this->input->post('email')){
			if($this->input->post('optradio')=="Buyer"){
				$table = "buyerprofile";
				$colname = "bemail";
				$colname2 = "bphone";
			}else if($this->input->post('optradio')=="Seller"){
				$table = "sellerprofile";
				$colname = "semail";
				$colname2 = "sphone";
			}
			$email = $this->input->post('email');
			$phoneno = $this->input->post('phoneno');
			$check_db = array($colname => $email);
			$this->load->model('Admin_model');
			  if($this->Admin_model->check($table, $check_db)){
				  if($table == "buyerprofile"){
					  // get data from table based on session
					  $this->load->model('Admin_model');
					  $newdata = $this->Admin_model->getdatafromtable('buyerprofile',$check_db);
					  //$bname,$busername,$time 
					  $bname = $newdata[0]->bname;
					  $busername = $newdata[0]->busername;
					  $bemail = $newdata[0]->bemail;
					  $otp = rand(00000,99999);
					  
					  $newdata = array('name'=>$bname,'username'=>$busername,'email'=>$bemail,'date_time'=>$time,'otp'=>$otp);
					  
					  //check db otp table username if exist update with otp for same user
					   $check_db2a = array('username' => $busername);
					   
					   $checkresp= $this->Admin_model->check('resetpassword',  $check_db2a);
					   if($checkresp){
						 //update  
						 $status = $this->Admin_model->update_custom('resetpassword',$newdata,$check_db2a,$check_db2a);
						 $to =  $this->input->post('email');  // User email pass here
						 $subject = 'Welcome To Aucjunction';

						 $from = 'shopemet.1.net@gmail.com';              // Pass here your mail id

						 $emailContent = '<!DOCTYPE><html><head>
						 </head><body>
						 <div class="container">
						 <div class="card ml-5 mr-5">
						 <img src="https://www.aucjunction.com/web_files/images/aucjuntn.jpg" class="responsive mt-4" alt="" width="20%;">
						 <div class="card-body ml-4">
						 <p>Dear '.$busername.',</p>
						 <p>OTP to reset your password is : <h1>'.$otp.'</h1></p>
						 <p>Note: This is a system generated mail. Please do not reply to it.</p></div>
						 </div>
						 </div></body></html>"';


						 $config['protocol']    = 'smtp';
						 $config['smtp_host']    = 'ssl://smtp.gmail.com';
						 $config['smtp_port']    = '465';
						 $config['smtp_timeout'] = '60';

						 $config['smtp_user']    = 'shopemet.1.net@gmail.com';    //Important
						 $config['smtp_pass']    = 'Shopemet@auc';  //Important

						 $config['charset']    = 'utf-8';
						 $config['newline']    = "\r\n";
						 $config['mailtype'] = 'html'; // or html
						 $config['validation'] = TRUE; // bool whether to validate email or not 

     

						 $this->email->initialize($config);
						 $this->email->set_mailtype("html");
						 $this->email->from($from);
						 $this->email->to($to);
						 $this->email->subject($subject);
						 $this->email->message($emailContent);
						 $this->email->send();

						 $this->session->set_flashdata('msg',"Mail has been sent successfully");
						 $this->session->set_flashdata('msg_class','alert-success');
					   }else{
						   // inser
						   $status = $this->Admin_model->insert('resetpassword', $newdata);
						   $to =  $this->input->post('email');  // User email pass here
						   $subject = 'Welcome To Aucjunction';

						   $from = 'shopemet.1.net@gmail.com';              // Pass here your mail id

						   $emailContent = '<!DOCTYPE><html><head>
							</head><body>
							<div class="container">
							<div class="card ml-5 mr-5">
							<img src="https://www.aucjunction.com/web_files/images/aucjuntn.jpg" class="responsive mt-4" alt="" width="20%;">
							<div class="card-body ml-4">
							<p>Dear '.$busername.',</p>
							<p>OTP to reset your password is : <h1>'.$otp.'</h1></p>
							<p>Note: This is a system generated mail. Please do not reply to it.</p></div>
							</div>
							</div></body></html>"';
                


							$config['protocol']    = 'smtp';
							$config['smtp_host']    = 'ssl://smtp.gmail.com';
							$config['smtp_port']    = '465';
							$config['smtp_timeout'] = '60';

							$config['smtp_user']    = 'shopemet.1.net@gmail.com';    //Important
							$config['smtp_pass']    = 'shopemet@1';  //Important

							$config['charset']    = 'utf-8';
							$config['newline']    = "\r\n";
							$config['mailtype'] = 'html'; // or html
							$config['validation'] = TRUE; // bool whether to validate email or not 

     

							$this->email->initialize($config);
							$this->email->set_mailtype("html");
							$this->email->from($from);
							$this->email->to($to);
							$this->email->subject($subject);
							$this->email->message($emailContent);
							$this->email->send();

							$this->session->set_flashdata('msg',"Mail has been sent successfully");
							$this->session->set_flashdata('msg_class','alert-success');
							//return redirect('Reset_Password');
							
					   }
						$this->session->set_userdata($newdata);		
					  header('location: '.base_url().'Buyer_app_resetpassword');
				  die;
				  }
				  
				  else if($table == "sellerprofile"){
					   // get data from table based on session
					  $this->load->model('Admin_model');
					  $newdata = $this->Admin_model->getdatafromtable('sellerprofile',$check_db);
					  //$bname,$busername,$time 
					  $sname = $newdata[0]->sname;
					  $susername = $newdata[0]->susername;
					  $semail = $newdata[0]->semail;
					  $otp = rand(00000,99999);
					  
					  $newdata = array('name'=>$sname,'username'=>$susername,'email'=>$semail,'date_time'=>$time,'otp'=>$otp);
					  
					  //check db otp table username if exist update with otp for same user
					   $check_db2a = array('username' => $susername);
					   
					   $checkresp= $this->Admin_model->check('resetpassword',  $check_db2a);
					   if($checkresp){
						 //update  
						 $status = $this->Admin_model->update_custom('resetpassword',$newdata,$check_db2a,$check_db2a);
						 
						 $to =  $this->input->post('email');  // User email pass here
						   $subject = 'Welcome To Aucjunction';

						   $from = 'shopemet.1.net@gmail.com';              // Pass here your mail id

						   $emailContent = '<!DOCTYPE><html><head>
							</head><body>
							<div class="container">
							<div class="card ml-5 mr-5">
							<img src="https://www.aucjunction.com/web_files/images/aucjuntn.jpg" class="responsive mt-4" alt="" width="20%;">
							<div class="card-body ml-4">
							<p>Dear '.$susername.',</p>
							<p>OTP to reset your password is : <h1>'.$otp.'</h1></p>
							<p>Note: This is a system generated mail. Please do not reply to it.</p></div>
							</div>
							</div></body></html>"';
                


							$config['protocol']    = 'smtp';
							$config['smtp_host']    = 'ssl://smtp.gmail.com';
							$config['smtp_port']    = '465';
							$config['smtp_timeout'] = '60';

							$config['smtp_user']    = 'shopemet.1.net@gmail.com';    //Important
							$config['smtp_pass']    = 'shopemet@1';  //Important

							$config['charset']    = 'utf-8';
							$config['newline']    = "\r\n";
							$config['mailtype'] = 'html'; // or html
							$config['validation'] = TRUE; // bool whether to validate email or not 

     

							$this->email->initialize($config);
							$this->email->set_mailtype("html");
							$this->email->from($from);
							$this->email->to($to);
							$this->email->subject($subject);
							$this->email->message($emailContent);
							$this->email->send();

							$this->session->set_flashdata('msg',"Mail has been sent successfully");
							$this->session->set_flashdata('msg_class','alert-success');
							//return redirect('Reset_Password');
					   }else{
						   // inser
						   $status = $this->Admin_model->insert('resetpassword', $newdata);
						   $to =  $this->input->post('email');  // User email pass here
						   $subject = 'Welcome To Aucjunction';

						   $from = 'shopemet.1.net@gmail.com';              // Pass here your mail id

						    $emailContent = '<!DOCTYPE><html><head>
							</head><body>
							<div class="container">
							<div class="card ml-5 mr-5">
							<img src="https://www.aucjunction.com/web_files/images/aucjuntn.jpg" class="responsive mt-4" alt="" width="20%;">
							<div class="card-body ml-4">
							<p>Dear '.$susername.',</p>
							<p>OTP to reset your password is : <h1>'.$otp.'</h1></p>
							<p>Note: This is a system generated mail. Please do not reply to it.</p></div>
							</div>
							</div></body></html>"';
                


							$config['protocol']    = 'smtp';
							$config['smtp_host']    = 'ssl://smtp.gmail.com';
							$config['smtp_port']    = '465';
							$config['smtp_timeout'] = '60';

							$config['smtp_user']    = 'shopemet.1.net@gmail.com';    //Important
							$config['smtp_pass']    = 'shopemet@1';  //Important

							$config['charset']    = 'utf-8';
							$config['newline']    = "\r\n";
							$config['mailtype'] = 'html'; // or html
							$config['validation'] = TRUE; // bool whether to validate email or not 

     

							$this->email->initialize($config);
							$this->email->set_mailtype("html");
							$this->email->from($from);
							$this->email->to($to);
							$this->email->subject($subject);
							$this->email->message($emailContent);
							$this->email->send();

							$this->session->set_flashdata('msg',"Mail has been sent successfully");
							$this->session->set_flashdata('msg_class','alert-success');
							//return redirect('Reset_Password');
					   }
					$this->session->set_userdata($newdata);
					  header('location: '.base_url().'Buyer_app_resetpassword');
					  die;
				  }
			  }else{
				  $datainserr = "Invalid Email Id";
				  header('location: '.base_url().'Buyer_app_forgotpassword/index/'.$datainserr);
				  die;
			  }
			  die;
			  
		}else if($this->input->post('phoneno')){
			if($this->input->post('optradio')=="Buyer"){
				$table = "buyerprofile";
				$colname = "bemail";
				$colname2 = "bphone";
			}else if($this->input->post('optradio')=="Seller"){
				$table = "sellerprofile";
				$colname = "semail";
				$colname2 = "sphone";
			}
			$email = $this->input->post('email');
			$phoneno = $this->input->post('phoneno');
			$check_sdb = array($colname2 => $phoneno);
			$this->load->model('Admin_model');
			  if($this->Admin_model->check($table, $check_db)){
				  if($table == "buyerprofile"){
					  $this->load->model('Admin_model');
					  $newdata = $this->Admin_model->getdatafromtable('buyerprofile',$check_sdb);
					  //$bname,$busername,$time 
					  $bname = $newdata[0]->bname;
					  $busername = $newdata[0]->busername;
					  $otp = rand(00000,99999);
					  
					  $newdata = array('name'=>$bname,'username'=>$busername,'date_time'=>$time,'otp'=>$otp);
					  //check db otp table username if exist update with otp for same user
					   $check_db2a = array('username' => $busername);
					   
					   $checkresp= $this->Admin_model->check('resetpassword',  $check_db2a);
					   if($checkresp){
						 //update  
						 $status = $this->Admin_model->update_custom('resetpassword',$newdata,$check_db2a,$check_db2a);
					   }else{
						   // inser
						   $status = $this->Admin_model->insert('resetpassword', $newdata);
					   }

					  header('location: '.base_url().'Buyer_app_resetpassword');
				  die;
				  }
				  
				  else if($table == "sellerprofile"){
					  // get data from table based on session
					  $this->load->model('Admin_model');
					  $newdata = $this->Admin_model->getdatafromtable('sellerprofile',$check_sdb);
					  //$bname,$busername,$time 
					  $sname = $newdata[0]->sname;
					  $susername = $newdata[0]->susername;
					  $otp = rand(00000,99999);
					  
					  $newdata = array('name'=>$sname,'username'=>$susername,'date_time'=>$time,'otp'=>$otp);
					  //check db otp table username if exist update with otp for same user
					   $check_db2a = array('username' => $susername);
					   
					   $checkresp= $this->Admin_model->check('resetpassword',  $check_db2a);
					   if($checkresp){
						 //update  
						 $status = $this->Admin_model->update_custom('resetpassword',$newdata,$check_db2a,$check_db2a);
					   }else{
						   // inser
						   $status = $this->Admin_model->insert('resetpassword', $newdata);
					   }
					  
					  header('location: '.base_url().'Buyer_app_resetpassword');
					  die;
				  }
			  }else{
				  $datainserr = "Invalid Phone No.";
				  header('location: '.base_url().'Buyer_app_forgotpassword/index'.$datainserr);
				  die;
			  }
			  die;
			  
		}else{
			
			
			$this->load->view('buyer_app/forgotpassword');
			$this->load->view('buyer_app/footer');
		}
		
		
	}
	public function index_error(){
			$alertmsg = $this->uri->segment(3);
			$alertmsg = urldecode($alertmsg);
			echo '<script language="javascript">';
			echo 'alert("'.$alertmsg.'")';  //not showing an alert box.
			echo '</script>';
		
			$this->load->view('buyer_app/forgotpassword');
			$this->load->view('buyer_app/footer');
			
	}



	
}