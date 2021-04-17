<?php 
	//include('./header.php');
?>
<link href="<?php echo base_url()."web_files/";?>css/mediaform.css" rel="stylesheet" type="text/css">
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

          <div class="row w-100">

            <!-- Area Chart -->
            <div class="col-md-10 offset-sm-1 p-2">
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
							
							<form action = "<?php echo base_url();?>Buyer_basicinfo_update" method="POST" enctype="multipart/form-data">
						
							<tr>
								<td>Buyer Name</td>
								<td><?php echo $sqldata[0]->bname; ?></td>
							</tr> 
							<tr>
								<td>Contact Person</td>
								<td><?php echo $sqldata[0]->bcontactperson; ?></td>
							</tr>  
							<tr>
								<td>Company Type:</td>
								<td><?php echo $sqldata[0]->bcomptype; ?></td>
							</tr> 	
							<tr>
								<td>Postal Address</td>
								<td><textarea class="form-control w-100" type="text" id="baddress" name="baddress" value="<?php echo $sqldata[0]->baddress; ?>"><?php echo $sqldata[0]->baddress; ?></textarea></td>
							</tr> 
							<tr>
								<td>Pincode</td>
								<td><input class="form-control w-100" type="text" id="bpin" name="bpin" value="<?php echo $sqldata[0]->bpin; ?>" ></td>
							</tr>
							<tr>
								<td>State /Union Ter.</td>
								<td><?php echo $sqldata[0]->bstate; ?></td>
							</tr>

							<tr>
								<td>Country</td>
								<td><?php echo $sqldata[0]->bcountry; ?></td>
							</tr>
							<tr>
								<td>PCB</td>
								<td><?php echo $sqldata[0]->bpcb; ?></td>
							</tr>
													
						</tbody>
					</table>			

				<input type="submit" class="btn btn-primary offset-sm-3 mt-2" name="submit" value="Update">
												
				<input type="reset" class="btn btn-primary offset-sm-1 mt-2" value="Reset">
				</form>							
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
