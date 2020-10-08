<?php 
	include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h3 class="h3 mb-0 text-gray-800">Auction Here</h3>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">

		<table class="table table-striped table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-info text-white text-center">
					<th colspan="7">Auction Details</th>
				</thead>
				<thead class="bg-primary text-white">
				<tr>
					<th>Auction Id</th>
					<th>Seller / Company Name</th>
					<th>Auction Start Date</th>
					<th>Auction Close Date</th>
					<th>Auction Terms</th>
				</tr>
				</thead>

				<tbody>
				<tr>
					
					<td><a href="#">EEMT/BBR/OMFED LTD/1/Shashi Nagar/99087/19-20</a> 1</td>
					<td>EEMT OMFED LTD</td>
					<td>20-03-2020 11:00:00</td>
					<td>21-03-20202</td>
					<td><a href="#"><u>Click here</u></a></td>
				</tr>
				</tbody>
			</table>
				<table class="table table-striped table-sm table-bordered mt-4" id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-warning  text-white text-center">
					<tr>
						<th colspan="12">Open LOT Number</th>
					</tr>
				</thead>
				<thead class="bg-primary text-white">
				<tr>
					<th>LOT Name</th>
					<th>Location</th>
					<th>Close Time</th>
					<th>Time Left</th>
					<th>Quantity</th>
					<th>Unit</th>
					<th>Start Price</th>
					<th>Final Bid</th>					
					<th>Bid</th>
					<th>Autobid</th>
				</tr>
				</thead>

				<tbody>
				<tr>												
					<td> Horizontal Boring Machine</td>
					<td>Bangalore-KA</td>
					<td>20:14:03</td>
					<td>1 Hour</td>
					<td>1.9</td>
					<td>MT</td>
					<td>40,000</td>
					<td>2,00,000</td>
					<td><a href="Biddinglivestatus.php"><button type="button" class="btn btn-info">Bid</button></a></td>
					<td><a href="autobid.php"><button type="button" class="btn btn-info">AutoBid</button></a></td>
				</tr>
				<tr>												
					<td>Horizontal Boring Machine</td>
					<td>Delhi</td>
					<td>16:14:03</td>
					<td>55 min</td>
					<td>1.9</td>
					<td>info</td>
					<td>80,000</td>
					<td>1,45,000</td>
					<td><a href="Biddinglivestatus.php"><button type="button" class="btn btn-info">Bid</button></a></td>
					<td><a href="autobid.php"><button type="button" class="btn btn-info">AutoBid</button></a></td>
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
