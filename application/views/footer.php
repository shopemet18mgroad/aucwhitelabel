<section id="footer">
		<div class="container">
	<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>WHAT WE DO</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="<?php echo base_url();?>bidders_guide"><i class="fa fa-angle-double-right"></i>Buyer's Guide</a></li>
						<li><a href="<?php echo base_url();?>sellers_guide"><i class="fa fa-angle-double-right"></i>Seller's Guide</a></li>
						<li><a href="<?php echo base_url();?>testimonials"><i class="fa fa-angle-double-right"></i>Testimonial</a></li>
						<li><a href="<?php echo base_url();?>e_auction"><i class="fa fa-angle-double-right"></i>E-Auction Documents</a></li>
						<li><a href="<?php echo base_url();?>auctioning_concept"><i class="fa fa-angle-double-right"></i>Auctioning Concept</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>QUICK LINKS</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="<?php echo base_url();?>home"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="<?php echo base_url();?>about_us"><i class="fa fa-angle-double-right"></i>About Us</a></li>
						<li><a href="<?php echo base_url();?>contact_us"><i class="fa fa-angle-double-right"></i>Contact Us</a></li>
						<li><a href="<?php echo base_url();?>faq"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="<?php echo base_url();?>terms_and_condition"><i class="fa fa-angle-double-right"></i>Terms & Condition</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="row">
						<div class="col newsletter">
							<div class="">
								<div class="text-center ">
								
									<h3><b>Subscribe To News Letters</b></h3>
									<p class="pl-0 ml-0 mb-5 ">Find out what we can do for your business.</p>
									<div class="row text-center justify-content-center">
										<div class="col-auto">
										<form method="post" action="<?php echo base_url();?>#">
											<div class="input-group-lg input-group mb-3 "><input type="text" class="form-control" placeholder="Enter your e-mail Address" aria-label="Recipient's username" aria-describedby="button-addon2" required>
												
												<div class="input-group-append"><button class="btn btn-success" type="submit" id="button-addon2"> <b>Subscribe</b></button></div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href=""><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href=""><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href=""><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href=""><i class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				<hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p class="clf">Shopemet Networks Private Limited CIN NO :- U74999KA2018PTC116853</p>
					<p class="h6">Aucjunction © All right Reversed.</p>
				</div>
				<hr>
			</div>	
		</div>
	</section>
		
		
		

	
  <!-- Bootstrap core JavaScript-->	
   
  <script src="<?php echo base_url()."web_files/";?>js/jquery.min.js"></script> 
   <!--<script src="./js/jquery-3.2.2.js"></script>-->	
  <script src="<?php echo base_url()."web_files/";?>js/popper.min.js"></script>
  <script src="<?php echo base_url()."web_files/";?>js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url()."web_files/";?>js/jquery.easy-ticker.js"></script> 
   <script src="<?php echo base_url()."web_files/";?>weblib/auclib.js" type="text/javascript" charset="utf-8"></script>
  
  <!--  <script src="./js/jquery.autoscroll.js" type="text/javascript" charset="utf-8"></script> Core plugin JavaScript-->
  
 
  
 <script>
  
function validate1(){

	var scomapnyname = document.getElementById("scomapnyname").value;
	var ssellertype = document.getElementById("ssellertype").value;
	var scontactperson = document.getElementById("scontactperson").value;
	var span = document.getElementById("span").value;
	var sstreet = document.getElementById("sstreet").value;
	var scity = document.getElementById("scity").value;
	var spin = document.getElementById("spin").value;
	var sstate = document.getElementById("sstate").value;
	var scountry = document.getElementById("scountry").value;
	var slocation = document.getElementById("slocation").value;
	var semail = document.getElementById("semail").value;
	var sphone = document.getElementById("sphone").value;
	var susername = document.getElementById("susername").value;
	var spassword = document.getElementById("spassword").value;
	var sconfirmpassword = document.getElementById("sconfirmpassword").value;
	var sgst = document.getElementById("sgst").value;
	var scapcha = document.getElementById("captcha").value;
	
	
	//var saddress = document.getElementsByName("saddress");
	//var ssigneddocument = document.getElementsByName("ssigneddocument");
	//var AnswerInput = document.getElementsByName("saddresscount");
	
	
if(scomapnyname == '' || ssellertype == '' || scontactperson == '' || span == '' || sstreet == '' || scity == '' || spin == '' || sstate == '' || scountry == '' || slocation == '' || semail == '' || sphone == '' || susername == '' || spassword == '' || sconfirmpassword == '' || sgst == '' || scapcha == '' ){
		swal("Alert!",  "Company Name, Type of seller, Contact Person, Pan, Street, City, Pin, State/Union Ter., Location, E-Mail, Phone No, User Name, Password , Confirm Password , GST No, Security Code  cannot leave any feild blank!", "error");
		return false;
	}
	if(spassword != sconfirmpassword){
		swal("Alert!",  "Password and Confirm Password Should Match!", "error");
		return false;
	}
	
}
  </script>
  <script>
  
    $('.refreshCaptcha').on('click', function(){
        $.get('<?php echo base_url() .'sellers_registeration/refresh'; ?>', function(data){
            $('#captImg').html(data);
        });
    });
  </script>
   <script>
  function validate_cap(){
	  var captcha = document.getElementById("captcha").value;
		if(captcha.length >= 4){
			$.get('<?php echo base_url() .'sellers_registeration/validate_capatcha/'; ?>'+captcha, function(data){
            //$('#captImg').html(data);
				if($.trim(data) == "Bye"){
					swal("Alert!",  "Invalid Captcha", "error");
					document.getElementById("captcha").value = "";
					return false;
				}else{
					return true;
				}
			});
		}
	 
	  //var b = document.getElementById("spassword").value;

	}
   
  </script>
  <script>
  function validate_username(){
	  var val = document.getElementById("susername").value;
		if(val != ''){
			 $.get('<?php echo base_url() .'sellers_registeration/validate_username/'; ?>'+val, function(data2){				 
				 if($.trim(data2) == "BYE"){
					swal("Alert!",  "Username Already Exists", "error");
					document.getElementById("susername").value = "";
					return false;
				}else{
					return true;
				}
			 });
			
		}else{
			swal("Alert!",  "Please Enter User Name!", "error");
			return false;
		}
  }
  </script>

  
 
 <!-----------------------buyer capcha----------------------------------->
   <script>
  
function validate(){

	var bcompany = document.getElementById("bcompany").value;
	var bcomptype = document.getElementById("bcomptype").value;
	var bbuyertype = document.getElementById("bbuyertype").value;
	var bbuyerlocation = document.getElementById("bbuyerlocation").value;
	var bcontactperson = document.getElementById("bcontactperson").value;
	var bdesignation = document.getElementById("bdesignation").value;
	var baddress = document.getElementById("baddress").value;
	var bcity = document.getElementById("bcity").value;
	var bpin = document.getElementById("bpin").value;
	var bstate = document.getElementById("bstate").value;
	var bcountry = document.getElementById("bcountry").value;
	var bemail = document.getElementById("bemail").value;
	var bphone = document.getElementById("bphone").value;
	var bpan = document.getElementById("bpan").value;
	var busername = document.getElementById("busername").value;
	var bpassword = document.getElementById("bpassword").value;
	var bconfirmpassword = document.getElementById("bconfirmpassword").value;
	var bgst = document.getElementById("bgst").value;
	var bcapcha = document.getElementById("captcha").value; 
	//var saddress = document.getElementsByName("saddress");
	//var ssigneddocument = document.getElementsByName("ssigneddocument");
	//var AnswerInput = document.getElementsByName("saddresscount");
	
if(bcompany == '' || bcomptype == '' || bbuyertype == '' || bbuyerlocation == '' || bcontactperson == '' || bdesignation == ''|| baddress == '' || bcity == '' || bpin == '' || bstate == '' || bcountry == '' || bemail == '' || bphone == '' || bpan == '' || busername == '' || bpassword == '' || bconfirmpassword == '' || bgst == ''|| bcapcha == '' ){
		swal("Alert!",  "Company, Company Type, Buyer Type, Buyer's Location, Contact Person, Postal Address, City, Pin, State/Union Ter, E-Mail, Phone No, Pan No, User Name, Password , Confirm Password , GST No, Security Code  cannot leave any feild blank!", "error");
		return false;
	}
	
	if(bpassword != bconfirmpassword){
		swal("Alert!",  "Password and Confirm Password Should Match!", "error");
		return false;
	}
	
}
  </script>
 <script>
  
    $('.refreshCaptcha').on('click', function(){
        $.get('<?php echo base_url() .'Buyers_registeration/refresh'; ?>', function(data){
            $('#captImg').html(data);
        });
    });
  </script>
   <script>
  function validate_cap1(){
	  var captcha = document.getElementById("captcha").value;
		if(captcha.length >= 4){
			$.get('<?php echo base_url() .'Buyers_registeration/validate_capatcha/'; ?>'+captcha, function(data){
            $('#captImg').html(data);
				if($.trim(data) == "Bye"){
					swal("Alert!",  "Invalid Captcha", "error");
					document.getElementById("captcha").value = "";
					return false;
				}else{
					return true;
				}
			});
		}
	 
	 // var b = document.getElementById("bpassword").value;

	}
   
  </script>
  <script>
  function validate_username1(){
	  var val = document.getElementById("busername").value;
		if(val != ''){
			 $.get('<?php echo base_url() .'Buyers_registeration/validate_username1/'; ?>'+val, function(data2){				 
				 if($.trim(data2) == "BYE"){
					swal("Alert!",  "Username Already Exists", "error");
					document.getElementById("busername").value = "";
					return false;
				}else{
					return true;
				}
			 });
			
		}else{
			swal("Alert!",  "Please Enter User Name!", "error");
			return false;
		}
  }

   </script>
   <script>
  function validate_tanc(){
	   var agree = document.getElementById('agreement');
	   var user = document.getElementById('user').value;
	   if(agree.checked){
				$.get('<?php echo base_url() .'registration/complete/'; ?>'+user, function(data2){						
				 if($.trim(data2) == "HI"){
					swal("Thank You!", "Data Stored Successfully", "success");
				}else{
					alert(data2);
					swal("Alert!", "Terms and condition Failed Store", "error");
					return false;
				}
			 });
	   }else{
		    swal("Alert!", "Please Tick On Accept Agreement To Complete Registration", "error");
			return false;
	   }
	  

  }
  </script>
</body>

</html>
