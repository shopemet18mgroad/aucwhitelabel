
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
                    <h1 class="h2 text-gray-900 text-white mb-4">Welcome</h1>
                  </div>
                  <form class="user" action="<?php echo base_url()."login";?>" method="post">
                    <div class="form-group">
                      <input type="text" name="user" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="pass" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck" name="remember_me">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button name="submit" type="submit"  class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                    <!-- <hr>
                    <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a> -->
                 
				  <hr>
				  <div class="text-center">
				  <div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" value="Buyer" name="optradio" checked>Buyer
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" value="Seller" name="optradio">Seller
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" value="Admin" name="optradio">Admin
  </label>
</div>
	</div>			  
		 </form>		  
                  
                  <div class="text-center">
                    <a class="small text-white" href="<?php echo base_url()."dofoget"?>">Forgot Password?</a>
                  </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

