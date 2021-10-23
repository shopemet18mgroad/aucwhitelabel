<!DOCTYPE html>
<?php //print_r($search);die;?>
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
   
   
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
   <script>
   div.dataTables_wrapper {
        margin-bottom: 3em;
    }
</script> 
	<style>
	#typedtext {

  font-size:10px; 
marign-top:2px;

 
  letter-spacing:2px; 
  font-weight: bold;
  color: black;

}
.errspan {
        float: right;
        margin-right:10px;
        margin-top: -30px;
        position: relative;
        z-index: 2;
        color: black;
    }
	

/* body {
  font-family: "Open Sans", sans-serif;*/
  line-height: 1.25;
}

table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: relative;
  
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .72em;
}

table tr {
  padding: .35em;
}

table th,
table td {
  padding: .620em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

    
 
  
  
  
  
  
  
  
  @media only screen and (max-width: 768px) {
    table caption {
		font-size: 1.3em;
        overflow: hidden;
        overflow-x: hidden;
        display:block;
    }
}
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow-x: visible;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;

  }
  
  table td::before {
    
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
   
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
  
 
}
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}

	}




	</style>
</head>


	<body class="" data-spy="scroll" data-target="#myScrollspy">
	<div class="container-fluid top-header">
		<div class="row">
				<div class="col-md-12 contact-header">
					<div class="social pull-right">
						<ul>

  
 
						
							<li><a href="<?php echo base_url()."login"?>"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp Dashboard Login</a></li>
							<li><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp Helpline No: +91 9945454505 <i class="fa fa-phone" aria-hidden="true"></i>&nbsp Landline No:080 42332722</li>
							<li></li>
							<li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							

							
						</ul>
					</div>		
				</div>
						
		</div>	
	</div>
				 <div id="typedtext" class="ml-5">
  
  </div>
  
   <script>
	
// set up text to print, each item in array is new line
var aText = new Array(
"Be INFORMED , Be PREPARED , Be SMART , be SAFE ,be READY to fight #COVID19"

);
var iSpeed = 100; // time delay of print out
var iIndex = 0; // start printing array at this posision
var iArrLength = aText[0].length; // the length of the text array
var iScrollAt = 20; // start scrolling up at this many lines
 
var iTextPos = 0; // initialise text position
var sContents = ''; // initialise contents variable
var iRow; // initialise current row
 
function typewriter()
{
 sContents =  ' ';
 iRow = Math.max(0, iIndex-iScrollAt);
 var destination = document.getElementById("typedtext");
 
 while ( iRow < iIndex ) {
  sContents += aText[iRow++] + '<br />';
 }
 destination.innerHTML = sContents + aText[iIndex].substring(0, iTextPos) ;
 if ( iTextPos++ == iArrLength ) {
  iTextPos = 0;
  iIndex++;
  if ( iIndex != aText.length ) {
   iArrLength = aText[iIndex].length;
   setTimeout("typewriter()", 500);
  }
 } else {
  setTimeout("typewriter()", iSpeed);
 }
}


typewriter();


</script>
	
	
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
							<input type="password" class="form-control" id="exampleInputPassword" name="pass" placeholder="Password" size="50"><i class="bi bi-eye-slash errspan" id="togglePassword"></i>
							<script>
const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#exampleInputPassword');
togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
});
</script>
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
							<a class="pl-3" href="<?php echo base_url()."forgotpassword";?>"><b><u>Forgot Password?</u></b></a>
						  </div>
						</div>
						  </form>  
					</div>
				
				</div>
				
			</div>
	     </div>
		 <div class="mynav">
			 <nav class="navbar navbar-expand-lg navbar-dark navbarclr" id="myScrollspy">
				  
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
					  <li class="nav-item active">
						<a class="nav-link" href="<?php echo base_url();?>home">Home <span class="sr-only">(current)</span></a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="<?php echo base_url();?>contact_us">Contact Us</a>
					  </li>
					 <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  Registration
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						  <a class="dropdown-item" href="<?php echo base_url();?>sellers_registeration">Seller's Registration</a>
						  <a class="dropdown-item" href="<?php echo base_url();?>buyers_registeration">Buyer's Registration</a>
						</div>
					  </li>
					   <li class="nav-item">
						<a class="nav-link" href="#">Press Release</a>
					  </li>
					  <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  Popular Categories
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						  <a class="dropdown-item" href="<?php echo base_url();?>categories/type/Ferrous">Ferrous</a>
						  <a class="dropdown-item" href="<?php echo base_url();?>categories/type/Non_ferrous">Non Ferrous</a>
						  <a class="dropdown-item" href="<?php echo base_url();?>categories/type/Machinery_and_Equipments">Machinery &amp; Equipments</a>
						  <a class="dropdown-item" href="<?php echo base_url();?>categories/type/Hazardous">Hazardous</a>
						   <a class="dropdown-item" href="<?php echo base_url();?>categories/type/Electronic_Items">Electronic Items</a>
						  <a class="dropdown-item" href="<?php echo base_url();?>categories/type/Packaging_Items">Packaging Items</a>
						  <a class="dropdown-item" href="<?php echo base_url();?>categories/type/Uncleared_Cargo">Uncleared Cargo</a>
						  <a class="dropdown-item" href="<?php echo base_url();?>categories/type/Spares">Spares</a>
						   <a class="dropdown-item" href="<?php echo base_url();?>categories/type/Vehicles">Vehicles</a>
						  <a class="dropdown-item" href="<?php echo base_url();?>categories/type/PCB">PCB</a>
						  <a class="dropdown-item" href="<?php echo base_url();?>categories/type/RA">RA</a>
						   <a class="dropdown-item" href="<?php echo base_url();?>categories/type/Others">Others</a>
						</div>
					  </li>
					 
					</ul>
					<div class="srmfldnav">
						<form method="post" action="<?php echo base_url();?>Search" class="form-inline my-2 my-lg-0">
						  <input class="form-control mr-sm-2" type="search" placeholder="Search For the product here" name="search" aria-label="Search For the product here" size="50" required>
						  <button href="#" class="btn btn-outline-light my-2 my-sm-0" name="submit" type="submit"><i class="fa fa-search" aria-hidden="true"></i> Search</button>
						  				   	
						 
						</form>
					</div>
 				
				  </div>
				</nav>
		</div>
		<div class="container-fluid">
			 <div class="row">
					<img class="imgsize-header" src="<?php echo base_url()."web_files/";?>images/aucjuntionbanner.png"></img>
			 </div>	
		</div>
		<div class="container-fluid noticeboard">
			<div class="noticeboard-icon"><i class="fa fa-bell" aria-hidden="true"></i></div>
			<div class="row marqueebox">
			
			 <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"><p><?php if (isset($sql)) {
				   foreach ($sql as $s) { ?><?php echo $s->sauctionid; ?> are Scheduled on <?php $saucstartdate_time = $s->saucstartdate_time;
							  $tmp = explode('.',$saucstartdate_time);
							  $saucstartdate_time = $tmp[0];
							  echo $saucstartdate_time;?>&nbsp;|&nbsp;<?php }} ?></p></marquee>
			</div>
		</div>
		
		
		