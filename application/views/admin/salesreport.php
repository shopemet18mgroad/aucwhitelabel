<?php 
	//include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Sales Report</h1>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
			   <form class="form-inline">
					<div class="form-group mr-4 offset-sm-4">
						<td colspan="5">
						<form action="/action_page.php">
							
								<input type="text" class="form-control" placeholder="Search.." name="search">
								<button class="form-control" type="submit"><i class="fa fa-search"></i></button>
					
						</form>
					</td>
				</div>
			
		
			</form>
		
		<table class="table table-striped table-bordered table-sm text-center mt-5" width="100%" cellspacing="0">
				<thead class="bg-primary text-white">
				<tr>
					<th>Company Name</th>
					<th>From-Date</th>
					<th>To-Date</th>
					<th>Total Amount</th>
					<th>View Details</th>
				</tr>
				</thead>
				<tbody>
					<tr>
					<td>BHEL</td>
						<td>18-05-2020</td>
						<td>20-05-2020</td>
						<td>5,00,000</td>
						<td><a href="<?php echo base_url();?>admin_salesdata">View Details</a></td>
					</tr>
					<tr>
						<td>SAIL</td>
						<td>18-05-2020</td>
						<td>20-05-2020</td>
						<td>5,00,000</td>
						<td><a href="<?php echo base_url();?>admin_salesdata">View Details</a></td>
					</tr>
					<tr>
						<td>GAIL</td>
						<td>18-05-2020</td>
						<td>20-05-2020</td>
						<td>5,00,000</td>
						<td><a href="<?php echo base_url();?>admin_salesdata">View Details</a></td>
					</tr>
					<tr>
						<td>NSPCL</td>
						<td>18-05-2020</td>
						<td>20-05-2020</td>
						<td>5,00,000</td>
						<td><a href="<?php echo base_url();?>admin_salesdata">View Details</a></td>
					</tr>
													
				</tbody>
		 </table>
		</div>
		</div>
		
		   <!--Pagination -->

        <div class="row">
		
			<div class="col-sm-12 col-md-10">
				<div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
				<ul class="pagination offset-lg-11">
				<li class="paginate_button page-item previous disabled" id="dataTable_previous">
				<a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
				</li>
				<li class="paginate_button page-item active">
				<a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a>
				</li>
				<li class="paginate_button page-item next disabled" id="dataTable_next">
				<a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">Next</a>
				</li>
				</ul>
				</div>
				</div>
			</div> 
		</div>
		</div>
		</div>
          <!-- Content Row -->

          
        <!-- /.container-fluid -->

      
      <!-- End of Main Content -->

      <!-- Footer -->
     
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
<?php 
	//include('./footer.php');
?>
</body>

</html>
