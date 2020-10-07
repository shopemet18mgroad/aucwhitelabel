<?php
    include('./header.php');
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
					 <thead><th width="30%">Profile</th>
					 
					 
					 </thead>
						<tbody>
						<tr><td><img class="img-fluid" src="../../img/manimg.jpg" alt="Chania" width="40" height="35"></td></tr>
							<tr>
								
								<td>Seller Name:</td>
								<td>John</td>
							</tr> 
							<tr>
								<td>Contact Person</td>
								<td>M.R.Venkatesh</td>
							</tr>  
							<tr>
								<td>Company Type:</td>
								<td>Industry</td>
							</tr> 	
								<tr>
								<td>Address</td>
								<td>
								<div class="input_fields_wrap">
								<select class="tos float-left p-1" id="saddress" name="saddress">
									<option value="one" selected>Corporate Office</option>
									<option value="two">Headquarter</option>
									<option value="three" >.....</option>
									<option value="four">.....</option>
									<option value="five">......</option>
									<option value="six">.....</option>
									</select>
									
									<textarea class="name  ml-5 p-2 w-50" type="text" id="saddress" name="saddress"></textarea>
								<a class="add_field_button"><button type="button" class="btn btn-sm btn-primary ml-1 mb-5"> <i class="fa fa-plus text-white"></i></button></a>
									</div>
									</td>
								
							</tr> 
							<tr>
								<td>City</td>
								<td><input class="name" type="text" id="scity" name="scity"></td>
							</tr>
							<tr>
								<td>Pincode</td>
								<td><input class="name" type="text" id="spin" name="spin" ></td>
							</tr>
							<tr>
								<td>State /Union Ter.</td>
								<td>Chandigarh</td>
							</tr>
							<tr>
								<td>Country</td>
								<td>India</td>
							</tr>
													
						</tbody>
					</table>			

												
                
				<a href="#"><button type="button" class="btn btn-primary offset-sm-3 mt-2">Update</button></a>
												
				<a href="#"><button type="button" class="btn btn-primary offset-sm-1 mt-2">Reset</button></a>
												
				<a href='index.php'><button type="button" class="btn btn-primary offset-sm-1 mt-2">Cancel</button></a>
						
              </div>
            </div>

					

            <!-- Pie Chart -->

          </div>
        <!-- /.container-fluid -->

      </div>
	  
	  
      <!-- End of Main Content -->

      <!-- Footer -->
      
  
  
  <script>
 $(document).ready(function() {
 var max_fields  = 10;
 var wrapper     = $(".input_fields_wrap");
 var add_button  = $(".add_field_button");

 
 var x=1;
 $(add_button).click(function(e) {
   e.preventDefault();
   if(x < max_fields){
			x++;
			$(wrapper).append('<div><tr><td><select class="tos float-left p-1 " id="category" name="category"><option value="one" selected>Corporate Office</option><option value="two">Headquarter</option><option value="three" >.....</option><option value="four">.....</option><option value="five">......</option><option value="six">.....</option></select></td><td><textarea class="name ml-5 p-2 w-50" type="text" name="mytext[]"/></textarea><a href="#" class="remove_field">  <button type="button" class="btn btn-sm btn-primary ml-1 mb-5">  <i class="fa fa-minus text-white"></i></button></a></td></tr></div>');
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
    include('./footer.php');
	?>
