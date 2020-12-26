
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-9 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-4">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row ">
			 <div class="col-lg-6 mt-5"><br><img class="thumbnail" alt="Aucjunction" src="<?php echo base_url()."web_files/";?>images/aucjuntn.jpg" height="40%" width="100%">
			 <br><br>
			 <h3 class="text-center text-info">Just Bid it And Auction is all yours...</h3></div>
              <div class="col-lg-6 bg-info">
                <div class="p-3">
                  <div class="text-center">
                    <h1 class="h2 text-gray-900 text-white mb-4">Reset Password</h1>
                  </div>
                  <form class="user" action="<?php echo base_url()."";?>" onsubmit ="return validateForm()" method="post">
                    <div class="form-group">
                      <input type="text" name="OTP" class="form-control form-control-user" id="OTP" maxlength="4" placeholder="Enter OTP">
                    </div>
                    <div class="form-group">
                      <input type="password" name="newpassword" class="form-control form-control-user" id="newpassword" placeholder="Enter New Password"><span id = "message1" style="color:white"> </span>
                    </div>
                   <div class="form-group">
                      <input type="password" name="confirmpassword" class="form-control form-control-user" id="confirmpassword" placeholder="Enter Confirm Password"><span id = "message2" style="color:white"> </span>
                    </div>
                    <button name="submit" type="submit" onclick="return validateForm()" class="btn btn-primary btn-user btn-block">
                      <b>SUBMIT</b>
                    </button>
                    <!-- <hr>
                    <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a> -->
                 
				  <hr>
					  
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
	var ah = document.getElementById("OTP").value;
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
