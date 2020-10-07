<?php 
	include('./header.php');
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
					<div class="form-group mr-4 offset-sm-1">
						<td colspan="5">
						<form action="/action_page.php">
												<div class="form-group">
							<label>Date</label>
								<input class="form-control col-sm-5" type="Date" id="sdate" name="sdate">
								<input class="form-control col-sm-5 ml-2" type="Date" id="ldate" name="ldate">
							</div>
							<div class="form-check">
								<label class="form-check-label" for="check1">
									<input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>Search by Company
								</label>
						
								<label class="form-check-label ml-3" for="check1">
									<input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>Search by Auction Name
								</label>
							<a href="#"><button type="button" class="btn btn-primary btn-sm offset-sm-4 mt-2 mb-2">Search</button></a>
						</div>
						</form>
					</td>
				</div>
			
		
			</form>
		
		<table class="table table-striped table-bordered table-sm text-center mt-5" id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-primary text-white">
				<tr>
					<th>Company Name</th>
					<th>From-Date</th>
					<th>To-Date</th>
					<th>Total Amount</th>
					<th>View Data</th>
				</tr>
				</thead>
				<tbody>
					<tr>
					<td>BHEL</td>
						<td>18-05-2020</td>
						<td>20-05-2020</td>
						<td>5,00,000</td>
						<td><a href="salesdata.php">View Details</a></td>
					</tr>
					<tr>
						<td>SAIL</td>
						<td>18-05-2020</td>
						<td>20-05-2020</td>
						<td>5,00,000</td>
						<td><a href="salesdata.php">View Details</a></td>
					</tr>
					<tr>
						<td>GAIL</td>
						<td>18-05-2020</td>
						<td>20-05-2020</td>
						<td>5,00,000</td>
						<td><a href="salesdata.php">View Details</a></td>
					</tr>
					<tr>
						<td>NSPCL</td>
						<td>18-05-2020</td>
						<td>20-05-2020</td>
						<td>5,00,000</td>
						<td><a href="salesdata.php">View Details</a></td>
					</tr>
													
				</tbody>
		 </table>
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
	include('./footer.php');
?>
</body>

</html>
