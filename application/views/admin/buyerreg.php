<?php 
	//include('./header.php');
?>
        <!-- End of Topbar -->
<link href="<?php echo base_url()."web_files/";?>css/mediaform.css" rel="stylesheet" type="text/css">
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
    <!--       <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Vendor Profile</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div> -->

          <!-- Content Row -->


          <!-- Content Row -->

         <div class="row w-100">
    
            <!-- Area Chart -->
           <div class="col-md-10 offset-sm-1 p-2">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Personal Info</h6>
               
                </div>
                <!-- Card Body -->
                <div class="card-body">
					 <table class="table table-sm table-borderless">
					 <thead><th width="45%">Personal Info</th>
					  <form action="<?php echo base_url();?>Admin_buyer_basicinfo_add" method="POST"onsubmit="return validateForm()" enctype="multipart/form-data">
					 </thead>
						<tbody>
						<tr><td><img class="img-fluid" src="<?php echo base_url()."web_files/";?>img/manimg.jpg" alt="Chania" width="40" height="35"></td></tr>
						<tr>
							<td class="btxt">Buyer Name:</td>
							<td><input class="form-control w-100" type="text" id="bname" name="bname" readonly></td>
	 							 </tr>
						<tr>												
							<td class="btxt">Company Name:</td>
							<td><input class="form-control w-100" type="text" onkeyup="validate_adminbname()" id="bcompany" name="bcompany" required></td>
							</tr>
						<tr>
							<td class="btxt">Company Type:</td>
							<td><input class="form-control w-100" onkeyup="validate_adminbcompany()" type="text" id="bcomptype" name="bcomptype" required></td>
						</tr>
						
						
						
						
						
						
						<!-- Buyer's Location -->
								<tr>
									<td>Buyer's Location</td>
									<td><input class="form-control w-100" type="text" id="bbuyerlocation" name="bbuyerlocation" size="50" required></td>
								</tr>						
						<tr>
							<td class="btxt">Contact Person:</td>
							<td><input class="form-control w-100" type="text" id="bcontactperson" name="bcontactperson" required></td>
						</tr>
						
						<!-- Contact Person Designation -->
								<tr>
									<td>Contact Person Designation</td>
									<td><input class="form-control w-100" type="text" id="bdesignation" name="bdesignation" size="50"required></td>
								</tr>
						<tr>
							<td class="btxt">UserName:</td>
							<td><input class="form-control w-100" type="text" id="busername" name="busername" required></td>
						</tr>
						
						<!-- Password -->
								<tr>
									<td>Password </td>
									<td><input class="form-control w-100" type="password" id="bpassword" name="bpassword" size="50" onkeyup="validate_username1()"><span id="message1" style="color:black"> </span></td>
								</tr>
								<!-- Confirm Password  -->
								<tr>
									<td>Confirm Password</td>
									<td><input class="form-control w-100" type="password" id="bconfirmpassword" name="bconfirmpassword" size="50"><span id="message2" style="color:black"> </span></td>
								</tr>
						<tr>
							<td class="btxt">CIN Number:</td>
							<td><input class="form-control w-100" type="text" id="bcin" name="bcin" onkeyup="validate_user2()" required></td>
						</tr>  
						<tr>
							<td class="btxt">GST:</td>
							<td><input class="form-control w-100 gst" type="text" id="bgst" name="bgst" onkeyup="validate_company2()"  required></td>
						</tr> 
						<tr>
							<td class="btxt">Pan Number</td>		
							<td><input class="form-control w-100 pan" type="text" id="bpan" name="bpan" required></td>
						</tr> 
						<tr>
							<td class="btxt">PCB Licence NO:</td>
							<td><input class="form-control w-100" type="text" id="bpcb" name="bpcb" required></td>
						</tr> 
					</tbody>
					</table>

				<table class="table table-sm table-borderless">
					 <thead><th width="45%">Contact Info</th>
					 </thead>
						<tbody>
						<tr>
							<td class="btxt">Email:</td>
							<td><input class="form-control w-100" type="email" id="bemail" name="bemail" required></td>
						</tr>
						<tr>
							<td class="btxt">Phone:</td>
							<td><input class="form-control w-100" type="text" id="bphone" name="bphone" required></td>
						</tr>
						<tr>
							<td class="btxt">Postal Address:</td>
							<td><textarea class="form-control w-100" type="text" id="baddress" 	name="baddress" required></textarea></td>
						</tr> 
						<!-- City -->
								<tr>
									<td>City</td>
									<td><input class="form-control w-100" type="text" id="bcity" name="bcity" size="50" required></td>
								</tr>
						 
						<tr>
							<td class="btxt">Pincode:</td>
							<td><input class="form-control w-100" type="text" id="bpin" name="bpin" required></td>
						</tr> 
						<tr>
							<td class="btxt">State /Union Ter.:</td>
							<td><select class="form-control w-100" style="text-align-last:center;" id="bstate" name="bstate">
											<option value="Andra Pradesh" selected>Andra Pradesh</option>
											<option value="Arunachal Pradesh">Arunachal Pradesh</option>
											<option value="Assam">Assam</option>
											<option value="Bihar">Bihar</option>
											<option value="Chhattishgarh">Chhattishgarh</option>
											<option value="Delhi">Delhi</option>
											<option value="Goa">Goa</option>
											<option value="Gujarat">Gujarat</option>
											<option value="Harayana">Harayana</option>
											<option value="Himachal Pradesh">Himachal Pradesh</option>
											<option value="Jharkhand">Jharkhand</option>
											<option value="Karnataka">Karnataka</option>
											<option value="Kerala">Kerala</option>
											<option value="Madhya Pradesh">Madhya Pradesh</option>
											<option value="Maharashtra">Maharashtra</option>
											<option value="Manipur">Manipur</option>
											<option value="Meghalaya">Meghalaya</option>
											<option value="Mizoram">Mizoram</option>
											<option value="Nagaland">Nagaland</option>
											<option value="Odisha">Odisha</option>
											<option value="Punjab">Punjab</option>
											<option value="Rajasthan">Rajasthan</option>
											<option value="Sikkim">Sikkim</option>
											<option value="Tamil Nadu">Tamil Nadu</option>
											<option value="Telangana">Telangana</option>
											<option value="Tripura">Tripura</option>
											<option value="Uttar Pradesh">Uttar Pradesh</option>
											<option value="Uttarakhand">Uttarakhand</option>
											<option value="West Bengal">West Bengal</option>
										</select></td>
						</tr> 
						<tr>
							<td class="btxt">Country:</td>
							<td><input class="form-control w-100" type="text" id="bcountry" name="bcountry" value="INDIA" readonly></td>
						</tr>	 
						</tbody>
					</table>	

				<table class="table table-sm table-borderless">
					 <thead><th width="45%">Account</th>
					 </thead>
					<tbody>
							<tr>
								<td class="btxt">Banker's Name:</td>
								<td><input class="form-control w-100" type="text" id="bbankname" name="bbankname" required></td>
							</tr> 
							<tr>
								<td class="btxt">Account Number:</td>
								<td><input class="form-control w-100" type="text" id="baccountnumber" name="baccountnumber" required></td>
							</tr> 
							<tr>
								<td class="btxt">Branch:</td>
								<td><input class="form-control w-100" type="text" id="bbranch" name="bbranch" required></td>
							</tr> 
							<tr>
								<td class="btxt">IFSC Code:</td>
								<td><input class="form-control w-100" type="text" id="bifsccode" name="bifsccode" required></td>
							</tr>
						</tbody>
					</table>

					<table class="table table-sm table-borderless">
					 <thead><th width="45%">Documents</th>
					 </thead>
						<tbody>
							<tr>
								<td class="btxt">Upload Profile Pic</td>
								<td><div class="input_fields_wrap">
								<input  type="file" id="buploadimagepic" name="buploadimagepic[]">
								</div></td>
							</tr> 
							<tr>
								<td class="btxt">Upload Documents</td>
								<td><div class="input_fields_wrap">
								<input type="file" multiple="multiple" id="bsigneddocument" name="bsigneddocument[]">
								</div></td>
							</tr> 
							<tr><td class="btxt">Reference</td><td><input class="form-control w-100" type="text" id="bref" name="bref" required></td></tr>	
									
						</tbody>
					</table>				
				<a href="#"><button type="submit" name="sb3" onclick="return validatearry2()" class="btn btn-info offset-sm-3 mt-2">Submit</button></a>
												
				<a href="#"><button type="submit" name="sb4" class="btn btn-info offset-sm-1 mt-2">Cancel</button></a>
				</form>								
				
              </div>
	
			  <table class="table table-sm table-borderless">
					 <thead><th width="45%">Category Info</th>
					  <form action="<?php echo base_url();?>Admin_basicinfocategory_add" method="POST" enctype="multipart/form-data">
					 </thead>
						<tbody>
						
						<tr>
							<td class="btxt">Category Type:</td>
							<td><input class="form-control w-100" type="text" id="name" name="name" required></td> 
						</tr>
						
						</tbody>
						</table>
						<div class="col-md-10 text-center mb-2">
            				<a href="#"><button type="submit" name="sb3" class="btn btn-info offset-sm-3 mt-2">Add</button></a>
           
        </div>
						
						
				
				
												
				
			  
		
            </div>
			

            <!-- Pie Chart -->

          </div>
        <!-- /.container-fluid -->

      </div>
	  
	  
      <!-- End of Main Content -->

      <!-- Footer -->
      <!--<footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy;rawmet 2020</span>
          </div>
        </div>
      </footer>-->
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <script type="text/javascript">
	$(document).ready(function() {

		$(".pan").change(function() {
			var inputvalues = $(this).val();
			var regex = /[A-Z]{5}[0-9]{4}[A-Z]{1}$/;
			if (!regex.test(inputvalues)) {
				$(".pan").val("");
				swal("Alert!", "Invalid PAN no", "error");
				return regex.test(inputvalues);
			}
		});

	});
</script>

<script type="text/javascript">
	$(document).ready(function() {

		$(".gst").change(function() {
			var inputvalues = $(this).val();
			var regex = /^([0-9]){2}([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}([0-9]){1}([a-zA-Z]){1}([0-9A-Z]){1}?$/;
			if (!regex.test(inputvalues)) {
				$(".gst").val("");
				swal("Alert!", "Invalid gst no", "error");
				return regex.test(inputvalues);
			}
		});

	});
</script>


<script>
  function validateForm() {
    //collect form data in JavaScript variables
    var pw1 = document.getElementById("bpassword").value;
    var pw2 = document.getElementById("bconfirmpassword").value;


    //check empty password field

    //minimum password length validation
    if (pw1.length < 8) {
      document.getElementById("message1").innerHTML = "**Password length must be atleast 8 characters";
      return false;
    }

    //maximum length of password validation
    if (pw1.length > 15) {
      document.getElementById("message1").innerHTML = "**Password length must not exceed 15 characters";
      return false;
    }

    if (pw1 != pw2) {
      document.getElementById("message2").innerHTML = "**Passwords are not same";
      return false;
    }
  }
</script>
 <?php 
	//include('./footerdata.php');
?>
</body>

</html>
