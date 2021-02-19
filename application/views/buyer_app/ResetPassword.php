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

      <div class="col-xl-9 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-4">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
			 <div class="col-xs-12 col-sm-11 mt-4"><br><img class="thumbnail" alt="Aucjunction" src="<?php echo base_url()."web_files/";?>images/aucjuntn.jpg" height="20%" width="100%">
			 <br><br>
			 <h3 class="text-center text-info w-100">Just Bid it And<br>Auction is all yours...</h3>
              <div class="col-lg-6 mt-4">
                <div class="p-3">
                  <div class="text-center">
                    <h1 class="h2 text-gray-900 text-white mb-4">Reset Password</h1>
                  </div>
                  <form class="user" action="<?php echo base_url()."Buyer_app_resetpassword/resetpass/";?>" method="post">
                    <div class="form-group">
                      <input type="text" name="otp" class="form-control form-control-user" id="otp" maxlength="5" placeholder="Enter OTP">
                    </div>
                    <div class="form-group">
                      <input type="password" name="newpassword" class="form-control form-control-user" id="newpassword" placeholder="Enter New Password"><span id = "message1" style="color:white"></span>
                    </div>
                   <div class="form-group">
                      <input type="password" name="confirmpassword" class="form-control form-control-user" id="confirmpassword" placeholder="Enter Confirm Password"><span id = "message2" style="color:white"></span>
                    </div>
                    <button name="submit" type="submit" onclick="return validateForm()" class="btn btn-primary btn-user btn-block">
                      <b>SUBMIT</b>
                    </button>
                   
					  
		 </form>		  
                  
                 
                
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>



<script>
function validateForm() {
    //collect form data in JavaScript variables	
	var ah = document.getElementById("otp").value;
    var pw1 = document.getElementById("newpassword").value;
    var pw2 = document.getElementById("confirmpassword").value;
   
  if(ah == ''){
		swal("Alert!",  "Please Enter OTP!", "error");
		return false;
	}
    //check empty password field

    //minimum password length validation
    if(pw1.length < 8) {
      document.getElementById("message1").innerHTML = "**Password length must be atleast 8 characters";
      return false;
    }

    //maximum length of password validation
    if(pw1.length > 15) {
      document.getElementById("message1").innerHTML = "**Password length must not exceed 15 characters";
      return false;
    }
	if(pw1 != pw2) {
      document.getElementById("message2").innerHTML = "**Passwords are not same";
      return false;
    }
  
     
 }
</script> 
