<?php
  //print_r($sqldata[0]->date); die;
	?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Enquiry Form Data</h1>
            
          </div>

          <!-- Content Row -->
         <div class="col-sm-12 col-md-12">
          <div class="card shadow mb-4">
            <div class="card-body">
			<div class="table-responsive">
			
			<form class="form-inline">
			  
			 <div class="form-group mr-4 offset-sm-4">
						<td colspan="5">
						<form action="/action_page.php">
							
								<!--<input type="text" class="form-control" placeholder="Search.." name="search">
								<button class="form-control" type="submit"><i class="fa fa-search"></i></button>-->
						
						</form>
					</td>
				</div>
			</form>
			
         <table class="table table-striped text-center table-sm table-bordered mt-5" id="dataTable" width="100%" cellspacing="0">	
    <thead class="bg-primary text-white">
	  <tr>
		<th colspan="13" class="bg-info">Enquiry</th></tr>
     <tr>
		<th>Date & Time</th>
		
		<th>Company Name</th>
		<th>Address</th>
		<th>City</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Remark</th>
		<th>Lead Generation</th>
		<th>Spoc</th>
		<th>Location</th>
		
	
	</tr>
    </thead>
    <tbody>
	
  <?php if (isset($sqldata)) {
			foreach ($sqldata as $sqldat) { ?>
	
					<tr>												
						
						<td><?php echo $sqldat->date; ?></td>
						
						<td><?php echo $sqldat->companyname; ?></td>
						<td><?php echo $sqldat->vaddress; ?></td>
						<td><?php echo $sqldat->vcity; ?></td>
						<td><?php echo $sqldat->first; ?></td>
						<td><?php echo $sqldat->last; ?></td>
						<td><?php echo $sqldat->phone; ?></td>
						<td><?php echo $sqldat->email; ?></td>	
						<td><?php echo $sqldat->remarks; ?></td>
						<td><?php echo $sqldat->leadgeneration; ?></td>
						<td><?php echo $sqldat->spoc; ?></td>
						<td><?php echo $sqldat->location; ?></td>
						
					</tr>
					<?php }
										} ?>
 	
				

    </tbody>
  </table>
		<a href='<?php echo base_url();?>Enquiry_Form_data/export_csvenquiry' type="button" class="btn btn-info btn-sm ml-3"><b>Export</b></a><br><br>
		  </div>
            </div>
			
			<!--Pagination -->

      
          </div>
		</div>
        </div>
	
          <!-- Content Row -->

          
        <!-- /.container-fluid -->

      
      <!-- End of Main Content -->

      <!-- Footer -->
     
      <!-- End of Footer -->

   
    <!-- End of Content Wrapper -->


  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->


