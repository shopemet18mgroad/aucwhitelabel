<?php 
	//include('./headerdata.php');
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
    <div class=" col-md-10 offset-sm-1">
              <div class="card shadow mb-3">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Personal Info</h6>
               
                </div>
                <!-- Card Body -->
                <div class="card-body">
					 <table class="table table-sm table-borderless">
					 <thead><th width="45%">Basic Info</th>
					 <form action = "<?php echo base_url();?>admin_seller_basicinfo_add" method="POST" onsubmit="return validateForm()" enctype="multipart/form-data">
					 </thead>
						<tbody>
						<tr><td ><img class="img-fluid" src="<?php echo base_url()."web_files/";?>img/manimg.jpg" alt="Chania" width="40" height="35"></td></tr>
						<tr>
							<td class="btxt">Seller Name:</td>
							<td><input class="form-control w-100" type="text" id="sname" name="sname" readonly></td>
	 							 </tr>
						<tr>												
							<td class="btxt">Company Name:</td>
							<td><input class="form-control w-100" onkeyup="validate_adminsname()" type="text" id="scomapnyname" name="scomapnyname" required></td>
							</tr>
						<tr>
							<td class="btxt">Company Type:</td>
							<td><select class="form-control w-100" style="text-align-last:center;"  id="ssellertype" name="ssellertype">
							<option value="Govt Regd Company" selected>Govt Regd Company</option>
							<option value="Ltd, Pvt Ltd, LLP, Corp">Ltd, Pvt Ltd, LLP, Corp</option>
							<option value="Partnership, Proprietorship, OPC" >Partnership, Proprietorship, OPC</option>
							<option value="Other">Other</option>
							</select></td>
						</tr>  
						<tr>
							<td class="btxt">Contact Person:</td>
							<td><input class="form-control w-100" onkeyup="validate_adminscompany()" type="text" id="scontactperson" name="scontactperson" required></td>
						</tr>
						<tr>
							<td class="btxt">Contact Person Designation:</td>
							<td><input class="form-control w-100" type="text" id="sdesignation" name="sdesignation" required></td>
						</tr>
						<tr>
							<td class="btxt">Pan Number:</td>
							<td><input class="form-control w-100 pan" type="text" id="span" name="span" required></td>
						</tr>
						<tr>
								<td>Address</td>
								<td>
								<div class="input_fields_wrap1">
								<select class="form-control w-100  p-1" id="saddress" name="saddress[]">
									<option value="select" selected>SELECT</option>
									<option value="Corporate Office">Corporate Office</option>
									<option value="Manufacturing Unit">Manufacturing Unit</option>
									<option value="Headquarter">Headquarter</option>
								
									</select>
									
									<textarea class="form-control float-left mt-2 p-2 w-100" type="text" id="saddresscount" name="saddresscount[]" ></textarea>
								<a class="add_field_button1"><button type="button" class="btn btn-sm btn-primary ml-1 mb-5 mt-3"> <i class="fa fa-plus text-white"></i></button></a>
									</div>
									</td>
								
							</tr>
					
						<tr>
							<td class="btxt">UserName:</td>
							<td><input class="form-control w-100" type="text" id="susername" name="susername" required></td>
						</tr>
						<!-- Password -->
                <tr>
                  <td>Password *</td>
                  <td><input class="form-control w-100" type="password" id="spassword" name="spassword" size="50" onkeyup="validate_username()"><span id="message1" style="color:BLACK"> </span></td>
                </tr>
                <!-- Confirm Password -->
                <tr>
                  <td>Confirm Password *</td>
                  <td><input class="form-control w-100" type="password" id="sconfirmpassword" name="sconfirmpassword" size="50"><span id="message2" style="color:BLACK"> </span></td>
                </tr>
						<tr>
							<td class="btxt">CIN Number:</td>
							<td><input class="form-control w-100" type="text" id="scin" name="scin" onkeyup="validate_user()" required></td>
						</tr> 
												
						<tr>
							<td class="btxt">GST:</td>
							<td><input class="form-control w-100 gst" type="text" id="sgst" name="sgst" onkeyup="validate_company()" required></td>
						</tr> 
						<tr>
							<td class="btxt">PCB Licence NO:</td>
							<td><input class="form-control w-100" type="text" id="spcb" name="spcb" required></td>
						</tr> 
					</tbody>
					</table>			

				<table class="table table-sm table-borderless">
					 <thead><th width="45%">Contact Info</th>
					 </thead>
						<tbody>
						<tr>
							<td class="btxt">Email:</td>
							<td><input class="form-control w-100" type="email" id="semail" name="semail" required></td>
						</tr>
						<tr>
							<td class="btxt">Phone:</td>
							<td><input class="form-control w-100" type="text" id="sphone" name="sphone" required></td>
						</tr>
						
							<tr>
							<td class="btxt">Pin:</td>
							<td><input class="form-control w-100" type="text" id="spin" name="spin" required></td>
							</tr>
									<!-- City -->
							<tr>
							<td>City</td>
							<td><input class="form-control w-100" type="text" id="scity" name="scity" size="50"></td>
							</tr>
							<tr>
							<td class="btxt">State:</td>
							<td><select class="form-control w-100" style="text-align-last:center;" id="sstate" name="sstate">
                      <option value="Karnataka" selected>Karnataka</option>
                      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                      <option value="Assam">Assam</option>
                      <option value="Bihar">Bihar</option>
                      <option value="Chhattishgarh">Chhattishgarh</option>
                      <option value="Delhi">Delhi</option>
                      <option value="Goa">Goa</option>
                      <option value="Gujarat">Gujarat</option>
                      <option value="Harayana">Harayana</option>
                      <option value="Himachal Pradesh">Himachal Pradesh</option>
                      <option value="Eleven">Jharkhand</option>
                      <option value="Jharkhand">Andhra Pradesh</option>
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
							<td><input class="form-control w-100" type="text" id="scountry" name="scountry" value="INDIA" readonly></td>
						</tr>
				<!-- Location -->
					<tr>
                  <td>Location</td>
                  <td><input class="form-control w-100" type="text" id="slocation" name="slocation" size="50"></td></tr>				
						</tbody>
					</table>	

				<table class="table table-sm table-borderless">
					 <thead><th width="45%">Account</th>
					 </thead>
					<tbody>
						<tr>
							<td class="btxt">Banker's Name :</td>
							<td><input class="form-control w-100" type="text" id="sbankername" name="sbankername" required></td>
						</tr>  
						<tr>
							<td class="btxt">Account Number:</td>
							<td><input class="form-control w-100" type="text" id="saccountnumber" name="saccountnumber" required></td>
						</tr> 
						<tr>
							<td class="btxt">Branch:</td>
							<td><input class="form-control w-100" type="text" id="sbranch" name="sbranch" required></td>
						</tr> 
						<tr>
							<td class="btxt">IFSC Code:</td>
							<td><input class="form-control w-100" type="text" id="sifsccode" name="sifsccode" required></td>
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
								<input  type="file" id="suploadprofilepic" name="suploadprofilepic[]">
								</div></td>
							</tr> 
							

							

							<tr>
								<td class="btxt">Upload Documents</td>
								<td><div class="input_fields_wrap">
								<input  type="file" id="ssigneddocument" name="ssigneddocument[]" multiple="multiple">
								</div></td>
								

							</tr> 
							
							<tr><td class="btxt">Reference</td><td><input class="form-control w-100" type="text" id="sref" name="sref" required></td></tr>		
						</tbody>
					</table>					
				<a href="#"><button type="submit" name="sbt2" onclick="return validatearry()"class="btn btn-info offset-sm-4 mt-2">Submit</button></a>
												
				<a href="#"><button type="submit" name="sbt3" class="btn btn-info offset-sm-1 mt-2">Cancel</button></a>
												
				</form>
              </div>
            </div>

            <!-- Pie Chart -->

          </div>
        <!-- /.container-fluid -->

      </div>
	  
	  
      <!-- End of Main Content -->

      <!-- Footer -->
     <!--  <footer class="sticky-footer bg-white">
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
  
  <!--<script>
 $(document).ready(function() {
 var max_fields  = 20;
 var wrapper     = $(".input_fields_wrap");
 var add_button  = $(".add_field_button");

 
 var x=1;
 $(add_button).click(function(e) {
   e.preventDefault();
   if(x < max_fields){
			x++;
			$(wrapper).append('<div><input class="mt-2" type="file" id="ssigneddocument" name="ssigneddocument[]" ><a href="#" class="remove_field"><button type="button" class="btn btn-sm btn-primary ml-1">  <i class="fa fa-minus text-white"></i></button></a></div>');
   
   }	
			});
			
			
			$(wrapper).on("click",".remove_field", function(e){
			
			e.preventDefault();
			$(this).parent('div').remove();
			x--;
			
			})
			
			});
 
 </script> -->
 
  <script>
 $(document).ready(function() {
 var max_fields  = 10;
 var wrapper     = $(".input_fields_wrap1");
 var add_button  = $(".add_field_button1");

 
 var x=1;
 $(add_button).click(function(e) {
   e.preventDefault();
   if(x < max_fields){
			x++;
			$(wrapper).append('<div><tr><td><select class="form-control w-50  p-1 " name="saddress[]"><option value="select" selected>SELECT</option><option value="Corporate Office" >Corporate Office</option><option value="Headquarter">Headquarter</option></select></td><td><textarea class="form-control float-left mt-2 p-2 w-50" type="text" name="saddresscount[]" ></textarea><a href="#" class="remove_field">  <button type="button" class="btn btn-sm btn-primary ml-1 mb-5 mt-3">  <i class="fa fa-minus text-white"></i></button></a></td></tr></div>');
   }	
	
			});
			
			
			$(wrapper).on("click",".remove_field", function(e){
			
			e.preventDefault();
			$(this).parent('div').remove();
			x--;
			
			})
			
			});
 
 </script>
 
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
    var pw1 = document.getElementById("spassword").value;
    var pw2 = document.getElementById("sconfirmpassword").value;


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
