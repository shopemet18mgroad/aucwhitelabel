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
                  <h6 class="m-0 font-weight-bold text-primary">Edit Personal Info</h6>
               
                </div>
                <!-- Card Body -->
                <div class="card-body">
					 <table class="table table-sm table-borderless">
					 <thead><th width="45%">Profile</th>
					 
					 
					 </thead>
						<tbody>
						<tr><td><img class="img-fluid" src="<?php echo base_url()."web_files/";?>img/manimg.jpg" alt="Chania" width="40" height="35"></td></tr>
							
							<tr>
								<td>Buyer Name</td>
								<td>John</td><?php echo base_url()."web_files/";?>
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
								<td>Postal Address</td>
								<td><textarea class="form-control w-50" type="text" id="baddress" name="baddress" ></textarea></td>
							</tr> 
							<tr>
								<td>Pincode</td>
								<td><input class="form-control w-50" type="text" id="bpin" name="bpin" ></td>
							</tr>
							<tr>
								<td>State /Union Ter.</td>
								<td>Chandigarh</td>
							</tr>

							<tr>
								<td>Country</td>
								<td>India</td>
							</tr>
							<tr>
								<td>PCB</td>
								<td>EFTGG54564655612</td>
							</tr>
							<tr>
								<td class="btxt">Upload Profile Pic</td>
								<td><form action="/action_page.php"> <input type="file" id="myFile" name="filename1"></form></td>
							</tr> 								
						</tbody>
					</table>			

				<a href="#"><button type="button" class="btn btn-primary offset-sm-3 mt-2">Update</button></a>
												
				<a href="#"><button type="button" class="btn btn-primary offset-sm-1 mt-2">Reset</button></a>
												
				<a href="buyer_dashboard"><button type="button" class="btn btn-primary offset-sm-1 mt-2">Cancel</button></a>
				
				
													
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
 
 <?php 
	//include('./footer.php');
?>
</body>

</html>
