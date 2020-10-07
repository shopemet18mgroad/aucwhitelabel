<?php 
	include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
       <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">NP-EMD Request</h1>
            
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
						<th class="bg-info" colspan="12" style="Text-align:center;">EMD</th>
					</tr>
					<tr>
						<th>Auction Id</th>
						<th width="10%">Lot No</th>
						<th>Company Name</th>
						<th>Location</th>
						<th>Date/Time</th>
						<th>Status</th>
						<th width="15%">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>	
						<td><a href="#">BHEL/BBR/ISG LTD/2/Adarsh Vihar/25087/20-20</a></td>					
						<td>M252</td>
						<td>BHEL</td>
						<td>Bangalore</td>
						<td>23-03-2020 23:00:00</td>
						<td style="color:green">Accepted</td>
						<td><a href="#"><button type="button" class="btn btn-info btn-sm">Accept</button></a>
						<a href="#"><button type="button" class="btn btn-info btn-sm">Reject</button></a></tr>
					<tr>
						<td><a href="#">MSTC/BBR/ISG LTD/2/Adarsh Vihar/25087/20-20</a></td>					
						<td>M252</td>
						<td>ISG LTD</td>
						<td>Uttrakhand</td>
						<td>23-03-2020 23:00:00</td>
						<td style="color:red">Pending</td>
						<td><a href="#"><button type="button" class="btn btn-info btn-sm">Accept</button></a>
						<a href="#"><button type="button" class="btn btn-info btn-sm">Reject</button></a></td>
						</tr>
					<tr>		
						<td><a href="#">MSTC/BBR/BHRL LTD/2/Vihar/25087/20-20</a></td>
						<td>M252</td>
						<td>BHRL LTD</td>
						<td>Gujarat</td>
						<td>23-03-2020 23:00:00</td>
						<td style="color:green">Accepted</td>
						<td><a href="#"><button type="button" class="btn btn-info btn-sm">Accept</button></a>
						<a href="#"><button type="button" class="btn btn-info btn-sm">Reject</button></a></td>
						</tr>
					<tr>
						<td><a href="#">MSTC/BBR/ONGC LTD/2/Vidyut Nagar/25087/20-20</a></td>					
						<td>M252</td>
						<td>ONGC LTD</td>
						<td>Orrisa</td>
						<td>23-03-2020 23:00:00</td>
						<td style="color:green">Accepted</td>
						<td><a href="#"><button type="button" class="btn btn-info btn-sm">Accept</button></a>
						<a href="#"><button type="button" class="btn btn-info btn-sm">Reject</button></a></td>
						</tr>
					<tr>
						<td><a href="#">MSTC/BBR/BSP LTD/2/Nehru Vihar/25087/20-20</a></td>
						<td>M252</td>
						<td>BSP</td>
						<td>Chhattisgarh</td>
						<td>23-03-2020 23:00:00</td>
						<td style="color:red">Rejected</td>
						<td><a href="#"><button type="button" class="btn btn-info btn-sm">Accept</button></a>
						<a href="#"><button type="button" class="btn btn-info btn-sm">Reject</button></a></td>
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
