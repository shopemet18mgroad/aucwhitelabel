<?php 
//	include('./headerdata.php');
?>        <!-- End of Topbar -->

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
					 <thead><th width="45%">Basic Info</th>
					 
					 </thead>
						<tbody>
						<tr><td><img class="img-fluid" src="<?php echo base_url()."web_files/";?>img/manimg.jpg" alt="Chania" width="40" height="35"></td></tr>
						<tr>
							<td class="btxt">Seller Name:</td>
							<td><input class="form-control w-50" type="text" id="sname" name="sname"></td>
	 							 </tr>
						<tr>												
							<td class="btxt">Company Name:</td>
							<td><input class="form-control w-50" type="text" id="scomapnyname" name="scomapnyname" ></td>
							</tr>
						<tr>
							<td class="btxt">Company Type:</td>
							<td><input class="form-control w-50" type="text" id="scompanytype" name="scompanytype" ></td>
						</tr>  
						<tr>
							<td class="btxt">Contact Person:</td>
							<td><input class="form-control w-50" type="text" id="scontactperson" name="scontactperson" ></td>
						</tr>
						<tr>
							<td class="btxt">CIN Number:</td>
							<td><input class="form-control w-50" type="text" id="scin" name="scin" ></td>
						</tr>  
						<tr>
							<td class="btxt">GST:</td>
							<td><input class="form-control w-50" type="text" id="sgst" name="sgst" ></td>
						</tr> 
						<tr>
							<td class="btxt">PCB Licence NO:</td>
							<td><input class="form-control w-50" type="text" id="spcb" name="spcb" ></td>
						</tr> 
					</tbody>
					</table>			

				<table class="table table-sm table-borderless">
					 <thead><th width="45%">Contact Info</th>
					 </thead>
						<tbody>
						<tr>
							<td class="btxt">Email:</td>
							<td><input class="form-control w-50" type="text" id="semail" name="semail"></td>
						</tr>
						<tr>
							<td class="btxt">Phone:</td>
							<td><input class="form-control w-50" type="text" id="sphone" name="sphone"></td>
						</tr>
						<tr>
								<td>Address</td>
								<td>
								<div class="input_fields_wrap1">
								<select class="form-control w-50  p-1" id="saddress" name="saddress">
									<option value="one" selected>Corporate Office</option>
									<option value="two">Headquarter</option>
									<option value="three" >.....</option>
									<option value="four">.....</option>
									<option value="five">......</option>
									<option value="six">.....</option>
									</select>
									
									<textarea class="form-control float-left mt-2 p-2 w-50" type="text" id="saddresscount" name="saddresscount"></textarea>
								<a class="add_field_button1"><button type="button" class="btn btn-sm btn-primary ml-1 mb-5 mt-3"> <i class="fa fa-plus text-white"></i></button></a>
									</div>
									</td>
								
							</tr>
							<tr>
							<td class="btxt">Pin:</td>
							<td><input class="form-control w-50" type="text" id="spin" name="spin" ></td>
							</tr>
							<tr>
							<td class="btxt">State:</td>
							<td><input class="form-control w-50" type="text" id="sstate" name="sstate" ></td>
							</tr>
						<tr>
							<td class="btxt">Country:</td>
							<td><input class="form-control w-50" type="text" id="scountry" name="scountry" value="INDIA" disabled></td>
						</tr>		
						</tbody>
					</table>	

				<table class="table table-sm table-borderless">
					 <thead><th width="45%">Account</th>
					 </thead>
					<tbody>
						<tr>
							<td class="btxt">Banker's Name:</td>
							<td><input class="form-control w-50" type="text" id="sbankername" name="sbankername" ></td>
						</tr> 
						<tr>
							<td class="btxt">Account Number:</td>
							<td><input class="form-control w-50" type="text" id="saccountnumber" name="saccountnumber" ></td>
						</tr> 
						<tr>
							<td class="btxt">Branch:</td>
							<td><input class="form-control w-50" type="text" id="sbranch" name="sbranch" ></td>
						</tr> 
						<tr>
							<td class="btxt">IFSC Code:</td>
							<td><input class="form-control w-50" type="text" id="sifsccode" name="sifsccode" ></td>
						</tr> 
						</tbody>
					</table>


				<table class="table table-sm table-borderless">
					 <thead><th width="45%">Documents</th>
					 </thead>
						<tbody>
							<tr>
								<td class="btxt">Upload Documents</td>
								<td><input type="file" multiple="multiple" id="suploadprofilepic" name="suploadprofilepic"></td>
							</tr> 
						
									
						</tbody>
					</table>					
				<a href="#"><button type="button" class="btn btn-info offset-sm-4 mt-2">Update</button></a>
												
				<a href="#"><button type="button" class="btn btn-info offset-sm-1 mt-2">Cancel</button></a>
												
				
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
  
  <script>
 $(document).ready(function() {
 var max_fields  = 20;
 var wrapper     = $(".input_fields_wrap");
 var add_button  = $(".add_field_button");

 
 var x=1;
 $(add_button).click(function(e) {
   e.preventDefault();
   if(x < max_fields){
			x++;
			$(wrapper).append('<div><input class="mt-2" type="file" id="ssigneddocument" name="ssigneddocument"><a href="#" class="remove_field"><button type="button" class="btn btn-sm btn-primary ml-1">  <i class="fa fa-minus text-white"></i></button></a></div>');
   
   }	
			});
			
			
			$(wrapper).on("click",".remove_field", function(e){
			
			e.preventDefault();
			$(this).parent('div').remove();
			x--;
			
			})
			
			});
 
 </script>
 
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
			$(wrapper).append('<div><tr><td><select class="form-control w-50  p-1 " id="saddress" name="saddress"><option value="one" selected>Corporate Office</option><option value="two">Headquarter</option><option value="three" >.....</option><option value="four">.....</option><option value="five">......</option><option value="six">.....</option></select></td><td><textarea class="form-control float-left mt-2 p-2 w-50" type="text" name="mytext[]"/></textarea><a href="#" class="remove_field">  <button type="button" class="btn btn-sm btn-primary ml-1 mb-5 mt-3">  <i class="fa fa-minus text-white"></i></button></a></td></tr></div>');
   }	
	
			});
			
			
			$(wrapper).on("click",".remove_field", function(e){
			
			e.preventDefault();
			$(this).parent('div').remove();
			x--;
			
			})
			
			});
 
 </script>
 
  <?php 
	//include('./footerdata.php');
?>
</body>

</html>
