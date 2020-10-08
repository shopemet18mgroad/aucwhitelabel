<?php 
	include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Bid Summary</h1>
            
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
						<th>Auctions</th>
					</tr>
				</thead>
				<tbody>
					<tr>												
						<td><a href="bidhistory.php">EEMT/BBR/OMFED LTD/1/Shashi Nagar/99087/19-20</a></td>
					</tr>
					<tr>
						<td><a href="bidhistory.php">BHEL/BBR/ISG LTD/2/Adarsh Vihar/25087/20-20</a></td>
					</tr>  
					<tr>
						<td><a href="bidhistory.php">REMT/BBR/ONGC LTD/3/Tamil Nadu/Vellore Dist/465895/18-20</a></td>
					</tr>  
					<tr>												
						<td><a href="bidhistory.php">HMT/BBR/Adnani logistic Ltd/4/Vidyut Nagar/99087/19-20</a></td>
					</tr>
					<tr>												
						<td><a href="bidhistory.php">BEL/BBR/ONGC LTD/5/Nehru Nagar/99087/19-20</a></td>
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
