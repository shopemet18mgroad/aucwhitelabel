<?php 
	include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Non Performing Seller</h1>
            
          </div> 

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
			   <form class="form-inline">
					<div class="form-group mr-4 offset-sm-2">
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
				<th>From Date</th>
				<th>To Date</th>
				<th>Event Number</th>
			</tr>
			</thead>
			<tbody>
			<tr>												
				<td>BHEL</td>
				<td>23-03-2020</td>
				<td>23-03-2020</td>
				<td>0</td>
			</tr>
			<tr>												
				<td>ISG LTD</td>
				<td>2-05-2019</td>
				<td>2-05-2019</td>
				<td>0</td>
			</tr>
			<tr>												
				<td>BHRL LTD</td>
				<td>17-02-2020</td>
				<td>2-05-2019</td>
				<td>300</td>
			</tr>
			<tr>												
				<td>ONGC LTD</td>
				<td>03-03-2020</td>
				<td>2-05-2019</td>
				<td>500</td>
			</tr>
			<tr>												
				<td>BSP</td>
				<td>29-08-2020</td>
				<td>2-05-2019</td>
				<td>1000</td>
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
