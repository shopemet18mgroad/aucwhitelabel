<!DOCTYPE html>
<html lang="en">
<head>
  <title>ENQUIRY FORM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  
  <style>
  .img-fluid{
      
            position: fixed;;
 
  z-index: -1;

   
  }
  .form-signin
{
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}
.form-signin .form-signin-heading, .form-signin .checkbox
{
    margin-bottom: 10px;
}
.form-signin .checkbox
{
    font-weight: normal;
}
.form-signin .form-control
{
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form-signin .form-control:focus
{
    z-index: 2;
}
.form-signin input[type="text"]
{
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
.form-signin input[type="password"]
{
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.account-wall
{
    margin-top: 20px;
    padding: 40px 0px 20px 0px;
    background-color: #f7f7f7;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
.login-title
{
    color: #555;
    font-size: 18px;
    font-weight: 400;
    display: block;
}
.profile-img
{
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.need-help
{
    margin-top: 10px;
}
.new-account
{
    display: block;
    margin-top: 10px;
}
  </style>
  
  
  
  
  
  
  
  
</head>
<body>
<br>
<br>
<br>

<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
          
            <div class="account-wall">
                <img class="profile-img"  src="<?php echo base_url()."web_files/";?>img/maku.png" alt="Chania" width="50%" height="100%"
                    alt="">
    
                    
                 <form class="form-signin" action="<?php echo base_url() . "Enquiryform_login"; ?>" method="post">    
                    
               
                 <label class="control-label col-sm-2" for="email"> Username:</label>
                <input type="text" name="user" class="form-control form-control-user" id="exampleInputEmail"  aria-describedby="emailHelp" placeholder="Enter Email Address..." required>
                <br>
                <label class="control-label col-sm-2" for="email"> Password:</label>
                <input type="password" name="pass" class="form-control form-control-user" id="exampleInputPassword"  placeholder="Password"><span id = "message1" style="color:white"></span>
                
               
                
                

                    
                   <div class="form-group pl-3">
						  <div class="custom-control custom-checkbox small">
							<input type="checkbox" class="custom-control-input" id="customCheck" name="optradio" value="enquiry">
							<label class="custom-control-label" for="customCheck">Enquriy</label>
							 </div>
						</div>
                                        <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
             
               
                </form>
            </div>
           
        </div>
    </div>
</div>






  
  
  
    

   

	

  </form>
</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 
  
    <!-- Page level plugins -->
      <script src="<?php echo base_url()."web_files/";?>js/jquery.min.js"></script> 
   <!--<script src="./js/jquery-3.2.2.js"></script>-->	
  <script src="<?php echo base_url()."web_files/";?>js/popper.min.js"></script>
  <script src="<?php echo base_url()."web_files/";?>js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url()."web_files/";?>js/jquery.easy-ticker.js"></script> 
   <script src="<?php echo base_url()."web_files/";?>weblib/auclib.js" type="text/javascript" charset="utf-8"></script>
   <script src="<?php echo base_url()."web_files/";?>/weblib/homevalidate.js" type="text/javascript" charset="utf-8"></script>
   <!--data table-->
  <script src="<?php echo base_url()."web_files/";?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url()."web_files/";?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
 <script src="<?php echo base_url()."web_files/";?>js/demo/datatables-demo.js"></script>

</body>
</html>