<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="title" content=">Aucjunction | Junction For Every auction">
  <meta name="description" content="Junction For Every Auction">
  <meta name="keyword" content="Auction, metal scrapes, Ferrous, Non Ferrous and Minor Metals">
  <meta name="author" content="">
  <title>Aucjunction | Junction For Every auction</title>
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url()."web_files/";?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url()."web_files/";?>css/style.css" rel="stylesheet" type="text/css">
  <script src="<?php echo base_url()."web_files/";?>js/js.js"></script>

  <!-- Custom styles for this template-->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
  <link href="<?php echo base_url()."web_files/";?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="https://code.jquery.com/jquery-3.5.1.js" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" rel="stylesheet">
  <!--<link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet">-->
   <script src=" https://github.com/superRaytin/paginationjs"></script>
   <script src=" http://pagination.js.org"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script>
   div.dataTables_wrapper {
        margin-bottom: 3em;
    }
</script>
</head>
	<body class="" data-spy="scroll" data-target="#myScrollspy">
	<div class="container-fluid top-header">
		<div class="row">
				<div class="col-md-12 contact-header">
					<div class="social pull-right">
						<ul>
							<li><a href="<?php echo base_url()."login"?>"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp Dashboard Login</a></li>
							<li><i class="fa fa-phone" aria-hidden="true"></i>&nbsp Helpline No: +91 9945454505</li>
							<li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						</ul>
					</div>		
				</div>
						
		</div>	
	</div>
		<div class="container">
			<div class="row branding">
				<div class="col-md-6 col-sm-12 pt-4">
					<a href="./home" title="Aucjunction Logo">
					<img class="img-fluid" alt="Aucjunction"  src="<?php echo base_url()."web_files/";?>images/aucjuntn.jpg">
					</a>
				</div>
				<div class="col-md-6 col-sm-12 p-2">
					<div class="input-feild">
					
							<div class="form-group p-1">
							<form  class="user" action="<?php echo base_url()."Home_Login";?>" method="POST" id="bidder" name="myform">
								<input type="text" class="form-control" id="exampleInputEmail" name="user" placeholder="User Name" size="50">
							</div>
						  <div class="form-group p-1">
							<input type="password" class="form-control" id="exampleInputPassword" name="pass" placeholder="Password" size="50">
						  </div>
						  <div class="form-group p-1">
							<button type="submit" name="submit" onclick="return userid4()" class="btn btn-primary"><i class="fa fa-sign-in"></i> Login</button>	
						  </div>
						   
						  
					 </div>
					 <div class="row ml-3">
						<div class="form-group pl-3">
						  <div class="custom-control custom-checkbox small ">
							<input type="checkbox" class="custom-control-input ltype" id="customCheck2" name="ltype"  value="Auctioner">
							<label class="custom-control-label" for="customCheck2">Auctioner</label>
						  </div>
						</div>
						<div class="form-group pl-3">
						  <div class="custom-control custom-checkbox small">
							<input type="checkbox" class="custom-control-input ltype" id="customCheck" name="ltype" value="Bidder">
							<label class="custom-control-label" for="customCheck">Bidder</label>
							
						  </div>
						</div>
						  </form>  
					</div>
				
				</div>
				
			</div>
	     </div>
		 
		
		<div class="container-fluid noticeboard">
			<div class="noticeboard-icon"><i class="fa fa-bell" aria-hidden="true"></i></div>
			<div class="row marqueebox">
			 <marquee><p>Aucjunction10200001 are Scheduled on October 2020&nbsp;|&nbsp;Aucjunction10200002 are Scheduled on October 2020&nbsp;|&nbsp;Aucjunction10200003 are Scheduled on October 2020</p><p></p></marquee>
			</div>
		</div>
		
		
		