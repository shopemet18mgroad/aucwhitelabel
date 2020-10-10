<?php 
	include('./headerdata.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h3 mb-0 text-gray-800">Live Auction</h2>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">

		<table class="table table-striped table-sm text-center table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-primary text-white">
				<tr>
					<th colspan="10">Enter Autobid info</th>
				</tr>
				<tr>
					<th>Auction Id</th>
					<th>Final Bid</th>
					<th>Your Bid(Per Unit)</th>
					<th>Your Bid(Max)</th>
					<th>Submit</th>
				</tr>
				</thead>
				<tbody>
			<tr>												
				<td><a href="#">EEMT/BBR/OMFED LTD/1/Shashi Nagar/99087/19-20</a> </td>
				<td>2,50,000</td>
				<td><input class="form-control" type="text" id="bidperunit" name="bidperunit" ></td>
				<td><input class="form-control" type="text" id="bidmax" name="bidmax"></td>
				<td><a href=""><button type="button" class="btn btn-info">AutoBid</button></a></td>
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
	include('./footerdata.php');
?>
</body>

</html>
