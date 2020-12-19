<?php 
	//include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
    <!--       <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Vendor Profile</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div> -->

          <!-- Content Row -->


          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Personal Info</h6>
               
                </div>
                <!-- Card Body -->
                <div class="card-body">
					 <table class="table table-sm table-borderless">
					 <thead><th width="45%">Personal Info</th>
					  <form action="<?php echo base_url();?>Admin_buyer_basicinfo_add" method="POST" enctype="multipart/form-data">
					 </thead>
						<tbody>
						<tr><td><img class="img-fluid" src="<?php echo base_url()."web_files/";?>img/manimg.jpg" alt="Chania" width="40" height="35"></td></tr>
						<tr>
							<td class="btxt">Buyer Name:</td>
							<td><input class="form-control w-50" type="text" id="bname" name="bname" readonly></td>
	 							 </tr>
						<tr>												
							<td class="btxt">Company Name:</td>
							<td><input class="form-control w-50" type="text" onkeyup="validate_adminbname()" id="bcompany" name="bcompany" required></td>
							</tr>
						<tr>
							<td class="btxt">Company Type:</td>
							<td><input class="form-control w-50" onkeyup="validate_adminbcompany()" type="text" id="bcomptype" name="bcomptype" required></td>
						</tr>  
						<tr>
							<td class="btxt">Contact Person:</td>
							<td><input class="form-control w-50" type="text" id="bcontactperson" name="bcontactperson" required></td>
						</tr>
						<tr>
							<td class="btxt">UserName:</td>
							<td><input class="form-control w-50" type="text" id="busername" name="busername" required></td>
						</tr>
						<tr>
							<td class="btxt">CIN Number:</td>
							<td><input class="form-control w-50" type="text" id="bcin" name="bcin" onkeyup="validate_user2()" required></td>
						</tr>  
						<tr>
							<td class="btxt">GST:</td>
							<td><input class="form-control w-50" type="text" id="bgst" name="bgst" onkeyup="validate_company2()"  required></td>
						</tr> 
						<tr>
							<td class="btxt">Pan Number</td>
							<td><input class="form-control w-50" type="text" id="bpan" name="bpan" required></td>
						</tr> 
						<tr>
							<td class="btxt">PCB Licence NO:</td>
							<td><input class="form-control w-50" type="text" id="bpcb" name="bpcb" required></td>
						</tr> 
					</tbody>
					</table>

				<table class="table table-sm table-borderless">
					 <thead><th width="45%">Contact Info</th>
					 </thead>
						<tbody>
						<tr>
							<td class="btxt">Email:</td>
							<td><input class="form-control w-50" type="email" id="bemail" name="bemail" required></td>
						</tr>
						<tr>
							<td class="btxt">Phone:</td>
							<td><input class="form-control w-50" type="text" id="bphone" name="bphone" required></td>
						</tr>
						<tr>
							<td class="btxt">Postal Address:</td>
							<td><textarea class="form-control w-50" type="text" id="baddress" 	name="baddress" required></textarea></td>
						</tr> 
						 
						<tr>
							<td class="btxt">Pincode:</td>
							<td><input class="form-control w-50" type="text" id="bpin" name="bpin" required></td>
						</tr> 
						<tr>
							<td class="btxt">State /Union Ter.:</td>
							<td><input class="form-control w-50" type="text" id="bstate" name="bstate" required></td>
						</tr> 
						<tr>
							<td class="btxt">Country:</td>
							<td><input class="form-control w-50" type="text" id="bcountry" name="bcountry" value="INDIA" readonly></td>
						</tr>	 
						</tbody>
					</table>	

				<table class="table table-sm table-borderless">
					 <thead><th width="45%">Account</th>
					 </thead>
					<tbody>
							<tr>
								<td class="btxt">Banker's Name:</td>
								<td><input class="form-control w-50" type="text" id="bbankname" name="bbankname" required></td>
							</tr> 
							<tr>
								<td class="btxt">Account Number:</td>
								<td><input class="form-control w-50" type="text" id="baccountnumber" name="baccountnumber" required></td>
							</tr> 
							<tr>
								<td class="btxt">Branch:</td>
								<td><input class="form-control w-50" type="text" id="bbranch" name="bbranch" required></td>
							</tr> 
							<tr>
								<td class="btxt">IFSC Code:</td>
								<td><input class="form-control w-50" type="text" id="bifsccode" name="bifsccode" required></td>
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
								
									
						</tbody>
					</table>				
				<a href="#"><button type="submit" name="sb3" onclick="return validatearry2()" class="btn btn-info offset-sm-3 mt-2">Submit</button></a>
												
				<a href="#"><button type="submit" name="sb4" class="btn btn-info offset-sm-1 mt-2">Cancel</button></a>
				</form>								
				
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
			$(wrapper).append('<div><input class="mt-2" type="file" id="bsigneddocument" name="bsigneddocument"><a href="#" class="remove_field"><button type="button" class="btn btn-sm btn-primary ml-1">  <i class="fa fa-minus text-white"></i></button></a></div>');
   
   }	
			});
			
			
			$(wrapper).on("click",".remove_field", function(e){
			
			e.preventDefault();
			$(this).parent('div').remove();
			x--;
			
			})
			
			});
 
 </script>-->
 <?php 
	//include('./footerdata.php');
?>
</body>

</html>
