<?php

class forgotpassword extends CI_Controller
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

						 $emailContent = '<!DOCTYPE><html><head></head><body>
						 <p>Hi  '.$busername.',</p>
						 <p>Please Enter the OTP code '.$otp.' to create new password.</p>
						 <table width="600px" style="border:1px solid #cccccc;margin: auto;border-spacing:0;"><tr><td style="background:#000000;padding-left:3%"><img src="<?php echo base_url()."web_files/";?>img/aucjunction.jpg" class="img-fluid" alt="" width="20%;"></td></tr>';
						 $emailContent .='<tr><td style="height:20px"></td></tr>';
						 $emailContent .='<td><center>'.$otp.'</center></td>';


						 $emailContent .= $this->input->post('otp');  //   Post message available here
			
						 $emailContent .='<tr><td style="height:20px"></td></tr>';
						 $emailContent .= "<tr><td style='background:#;color: #999999;padding: 2%;text-align: center;font-size: 13px;'><p style='margin-top:1px;'><a href='http://Aucjunction.com/' target='_blank' style='text-decoration:none;color: #60d2ff;'>www.Aucjunction.com</a></p></td></tr></table></body></html>";
                


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
					   }else{
						   // inser
						   $status = $this->Admin_model->insert('resetpassword', $newdata);
						   $to =  $this->input->post('email');  // User email pass here
						   $subject = 'Welcome To Aucjunction';

						   $from = 'shopemet.1.net@gmail.com';              // Pass here your mail id

						   $emailContent = '<!DOCTYPE><html><head></head><body>
						   <table width="600px" style="border:1px solid #cccccc;margin: auto;border-spacing:0;"><tr><td style="background:#000000;padding-left:3%"><img src="web_files/images/aucjuntn.jpg" width="300px" vspace=10 /></td></tr>';
						   $emailContent .='<tr><td style="height:20px"></td></tr>';
						   $emailContent .='<td>'.$otp.'</td>';


						   $emailContent .= $this->input->post('otp');  //   Post message available here
			
						   $emailContent .='<tr><td style="height:20px"></td></tr>';
						   $emailContent .= "<tr><td style='background:#000000;color: #999999;padding: 2%;text-align: center;font-size: 13px;'><p style='margin-top:1px;'><a href='http://Aucjunction.com/' target='_blank' style='text-decoration:none;color: #60d2ff;'>www.Aucjunction.com</a></p></td></tr></table></body></html>";
                


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
					  header('location: '.base_url().'Reset_Password');
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

						   $emailContent = '<!DOCTYPE><html><head></head><body><table width="600px" style="border:1px solid #cccccc;margin: auto;border-spacing:0;"><tr><td style="background:#000000;padding-left:3%"><img src="web_files/images/aucjuntn.jpg" width="300px" vspace=10 /></td></tr>';
						   $emailContent .='<tr><td style="height:20px"></td></tr>';
						   $emailContent .='<td>'.$otp.'</td>';


						   $emailContent .= $this->input->post('otp');  //   Post message available here
			
						   $emailContent .='<tr><td style="height:20px"></td></tr>';
						   $emailContent .= "<tr><td style='background:#000000;color: #999999;padding: 2%;text-align: center;font-size: 13px;'><p style='margin-top:1px;'><a href='http://Aucjunction.com/' target='_blank' style='text-decoration:none;color: #60d2ff;'>www.Aucjunction.com</a></p></td></tr></table></body></html>";
                


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

						   $emailContent = '<!DOCTYPE><html><head></head><body><table width="600px" style="border:1px solid #cccccc;margin: auto;border-spacing:0;"><tr><td style="background:#000000;padding-left:3%"><img src="web_files/images/aucjuntn.jpg" width="300px" vspace=10 /></td></tr>';
						   $emailContent .='<tr><td style="height:20px"></td></tr>';
						   $emailContent .='<td>'.$otp.'</td>';


						   $emailContent .= $this->input->post('otp');  //   Post message available here
			
						   $emailContent .='<tr><td style="height:20px"></td></tr>';
						   $emailContent .= "<tr><td style='background:#000000;color: #999999;padding: 2%;text-align: center;font-size: 13px;'><p style='margin-top:1px;'><a href='http://Aucjunction.com/' target='_blank' style='text-decoration:none;color: #60d2ff;'>www.Aucjunction.com</a></p></td></tr></table></body></html>";
                


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
					  header('location: '.base_url().'Reset_Password');
					  die;
				  }
			  }else{
				  $datainserr = "Invalid Email Id";
				  header('location: '.base_url().'forgotpassword/index_error/'.$datainserr);
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

					  header('location: '.base_url().'Reset_Password');
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
					  
					  header('location: '.base_url().'Reset_Password');
					  die;
				  }
			  }else{
				  $datainserr = "Invalid Phone No.";
				  header('location: '.base_url().'forgotpassword/index_error/'.$datainserr);
				  die;
			  }
			  die;
			  
		}else{
			
			$this->load->view('header2');
			$this->load->view('forgotpassword');
			$this->load->view('footer');
		}
		
		
	}
	public function index_error(){
			$alertmsg = $this->uri->segment(3);
			$alertmsg = urldecode($alertmsg);
			echo '<script language="javascript">';
			echo 'alert("'.$alertmsg.'")';  //not showing an alert box.
			echo '</script>';
			$this->load->view('header');
			$this->load->view('forgotpassword');
			$this->load->view('footer');
			
	}



	
}