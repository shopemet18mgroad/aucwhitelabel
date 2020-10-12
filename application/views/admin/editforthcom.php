<?php 
	//include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Auction</h1>
            
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
		<th class="bg-info" colspan="12" style="Text-align:center;">Auction's List</th>
	</tr>
				<tr>
					<th>Auction ID</th>
					<th>Company Name</th>
					<th>Location</th>
					<th>Date/Time</th>
					<th>Action</th>
				</tr>
				</thead>
				<tbody>
				<tr>
														<td><a href="editforthcom_2">BHEL/BBR/ISG LTD/2/Adarsh Vihar/25087/20-20</a></td>
														<td>BHEL</td>
														<td>Bangalore</td>
														<td>23-03-2020</td>
														<td><a href="editauction" class="btn btn-primary btn-sm text-white"><i class="fa fa-edit fa-sm"></i></a>
															<a class="btn btn-danger btn-sm text-white"><i class="fa fa-trash fa-sm"></i></a></td>
														</tr>
													<tr>
														<td><a href="editforthcom_2">MSTC/BBR/ISG LTD/2/Adarsh Vihar/25087/20-20</a></td>
														<td>ISG LTD</td>
														<td>Uttrakhand</td>
														<td>23-03-2020</td>
														<td><a href="editauction" class="btn btn-primary btn-sm text-white"><i class="fa fa-edit fa-sm"></i></a>
															<a class="btn btn-danger btn-sm text-white"><i class="fa fa-trash fa-sm"></i></a></td>
														</tr>
													<tr>
														<td><a href="editforthcom_2">MSTC/BBR/BHRL LTD/2/Vihar/25087/20-20</a></td>
														<td>BHRL LTD</td>
														<td>Gujarat</td>
														<td>23-03-2020</td>
														<td><a href="editauction" class="btn btn-primary btn-sm text-white"><i class="fa fa-edit fa-sm"></i></a>
															<a class="btn btn-danger btn-sm text-white"><i class="fa fa-trash fa-sm"></i></a></td>
													</tr>
													<tr>
														<td><a href="editforthcom_2">MSTC/BBR/ONGC LTD/2/Vidyut Nagar/25087/20-20</a></td>
														<td>ONGC LTD</td>
														<td>Orrisa</td>
														<td>23-03-2020</td>
														<td><a href="editauction" class="btn btn-primary btn-sm text-white"><i class="fa fa-edit fa-sm"></i></a>
															<a class="btn btn-danger btn-sm text-white"><i class="fa fa-trash fa-sm"></i></a></td>
														</tr>
													<tr>
														<td><a href="editforthcom_2">MSTC/BBR/BSP LTD/2/Nehru Vihar/25087/20-20</a></td>
														<td>BSP</td>
														<td>Chhattisgarh</td>
														<td>23-03-2020 23:00:00</td>
														<td><a href="editauction.php" class="btn btn-primary btn-sm text-white"><i class="fa fa-edit fa-sm"></i></a>
															<a class="btn btn-danger btn-sm text-white"><i class="fa fa-trash fa-sm"></i></a></td>
													</tr>
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
	//include('./footer.php');
?>
</body>

</html>
