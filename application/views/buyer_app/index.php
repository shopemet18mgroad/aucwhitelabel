<html lang="en">

<head>
<meta charset="utf-8">


  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Buyer Dashboard</title>
  <link href="<?php echo base_url()."web_files/";?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url()."web_files/";?>css/style.css" rel="stylesheet" type="text/css">
  <script src="<?php echo base_url()."web_files/";?>js/js.js"></script>
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url()."web_files/";?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://code.jquery.com/jquery-3.5.1.js" rel="stylesheet">
    <script src=" https://github.com/superRaytin/paginationjs"></script>
  <script src=" http://pagination.js.org"></script>
 <link href="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()."web_files/";?>css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?php echo base_url()."web_files/";?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <script src="<?php echo base_url()."web_files/";?>js/js.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 

</head>

<body id="page-top" data-spy="scroll" data-target="#myScrollspy" data-offset="1">
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-9 col-md-9 ">

        <div class="card o-hidden border-0 shadow-lg my-4">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
			 <div class="col-xs-10 col-sm-11 mt-4"><br><img class="thumbnail" alt="Aucjunction" src="<?php echo base_url()."web_files/";?>images/aucjuntn.jpg" height="20%" width="100%">
			 <br><br>
			 <h3 class="text-center text-info w-100">Just Bid it And<br>Auction is all yours...</h3>
                <div class="">
                  <div class="text-center mt-5">
                    <h1 class="h2 text-gray-900">Welcome</h1>
                  </div>
                  <form class="user" action="<?php echo base_url()."Buyer_app_login";?>" method="post">
                    <div class="form-group">
                      <center><input type="text" name="user" class="form-control form-control-user w-75" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter User Name" required></center>
                    </div>
                    <div class="form-group">
                      <center><input type="password" name="pass" class="form-control form-control-user w-75" id="exampleInputPassword" placeholder="Password" required></center>
                    </div>
                    <!--<div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck" name="remember_me">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>-->
					<input type="hidden" class="form-check-input" value="Buyer_App" name="optradio" checked> 
                    <button name="submit" type="submit"  class="btn btn-primary btn-user btn-block w-75">
                      Login
                    </button>
					
					
                   
						  
		 </form>		  
               <div class="text-center mt-3">
                    <a class="small " href="<?php echo base_url()."Buyer_app_forgotpassword";?>">Forgot Password?</a>
                  </div>  
				  <div class="text-center mt-3">
                    <a class="small " href="<?php echo base_url()."Buyer_app_registeration";?>">Registration</a>
                  </div>
                 
                </div>
                </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url()."web_files/";?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url()."web_files/";?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url()."web_files/";?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url()."web_files/";?>js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url()."web_files/";?>vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url()."web_files/";?>js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url()."web_files/";?>js/demo/chart-pie-demo.js"></script>
  
  <!--data table-->
<script src="<?php echo base_url()."web_files/";?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()."web_files/";?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
  
 <script src="<?php echo base_url()."web_files/";?>js/demo/datatables-demo.js"></script>
