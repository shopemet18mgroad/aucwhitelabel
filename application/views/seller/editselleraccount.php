 <?php
   // include('./header');
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
					 <thead><th width="45%">Account</th>
					 
					 </thead>
						<tbody>
						<form action = "<?php echo base_url();?>Seller_basicaccount_update" method="POST" enctype="multipart/form-data">
							<tr>
								<td>Banker's Name</td>
								<td><input class="form-control w-50" type="text" id="sbankername" name="sbankername" value="<?php echo $sqldata[0]->sbankername; ?>"></td>
							</tr> 
							<tr>
								<td>Account Number</td>
								<td><input class="form-control w-50" type="text" id="saccountnumber" name="saccountnumber" value="<?php echo $sqldata[0]->saccountnumber; ?>"></td>
							</tr> 
							<tr>
								<td>Branch</td>
								<td><input class="form-control w-50" type="text" id="sbranch" name="sbranch" value="<?php echo $sqldata[0]->sbranch; ?>"></td>
							</tr> 
							<tr>
								<td>IFSC Code</td>
								<td><input class="form-control w-50" type="text" id="sifsccode" name="sifsccode" value="<?php echo $sqldata[0]->sifsccode; ?>"></td>
							</tr> 							
											
						</tbody>
					</table>	
													
                <input type="submit" class="btn btn-primary offset-sm-3 mt-2" name="submit" value="Update">
												
				<input type="reset" class="btn btn-primary offset-sm-1 mt-2" value="Reset">
					</form>							
				<a href='<?php echo base_url();?>seller_dashboard'><button type="button" class="btn btn-primary offset-sm-1 mt-2">Cancel</button></a>
						
              </div>
            </div>

					

            <!-- Pie Chart -->

          </div>
        <!-- /.container-fluid -->

      </div>
	  </div>
	  
      <!-- End of Main Content -->

      <!-- Footer -->
 <?php
  //  include('./footer');
	?>
