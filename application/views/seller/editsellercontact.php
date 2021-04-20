<?php
   // include('./header');
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
                  <h6 class="m-0 font-weight-bold text-primary">Personal Info</h6>
						
                </div>
                <!-- Card Body -->
                <div class="card-body">
				<table class="table table-sm table-borderless">
					 <thead><th width="45%">Contact Info</th>
					 
					 
					 </thead>
						<tbody>
						
							<tr>
							<form action="<?php echo base_url();?>Seller_basiccontact_update" method="POST" enctype="multipart/form-data">
								<td>Email</td>
								<td><input class="form-control w-75" type="text" id="semail" name="semail" value="<?php echo $sqldata[0]->semail; ?>"></td>
							</tr> 
							<tr>
								<td>Phone Number</td>
								<td><input class="form-control w-75" type="text" id="sphone" name="sphone" value="<?php echo $sqldata[0]->sphone; ?>"></td>
							</tr> 
							<tr>
								<td>Pan Number</td>
								<td><?php echo $sqldata[0]->span; ?></td></td>
							</tr> 	
							<tr>
								<td>GST</td>
								<td><?php echo $sqldata[0]->sgst; ?></td></td>
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
	  
	  
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php
  //  include('./footer');
	?>