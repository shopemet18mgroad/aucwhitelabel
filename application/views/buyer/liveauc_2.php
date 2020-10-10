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

		<table class="table table-striped table-bordered table-sm text-center w-auto small" id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-info text-white text-center">
					<th colspan="7">Auction Details</th>
				</thead>
				<thead class="bg-primary text-white">
				<tr>
				
					<th width="22%">Auction Id</th>
					<th>Seller / Company Name</th>
					<th>Auction Start Date</th>
					<th>Auction Close Date</th>
					<th>Seller Terms & Condition</th>
				</tr>
				</thead>

				<tbody>
				<tr>
				
					<td><a href="#">EEMT/BBR/OMFED LTD/1/Shashi Nagar/99087/19-20</a> </td>
					<td>EEMT OMFED LTD</td>
					<td>20-03-2020 11:00:00</td>
					<td>21-03-20202</td>
					<td><a href="#"><u>Click here</u></a></td>
				</tr>
				</tbody>
			</table>
				<table class="table table-striped table-sm w-auto small table-bordered mt-4 text-center" id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-warning  text-white text-center">
					<tr>
						<th colspan="14">Open LOT Number</th>
					</tr>
				</thead>
				<thead class="bg-primary text-white">
				<tr>
					<th width="8%">Lot No</th>
					<th>Lot Name</th>
					<th>Location</th>
					<th>Close Time</th>
					<th>Time Left</th>
					<th>Quantity</th>
					<th>Unit</th>
					<th>Start Price</th>
					<th>My Bid</th>
					<th>Live Status</th>					
					<th width="18%">Bid</th>
					<th>Autobid</th>
					<th width="10%">Status</th>
				</tr>
				</thead>

				<tbody>
				<tr><td>M-129</td>												
					<td><a href="#">EEMT/BBR/OMFED LTD/1/Shashi Nagar/99087/19-20</a> </td>
					<td>Bangalore-KA</td>
					<td>20:14:03</td>
					<td>1 Hour</td>
					<td>1.9</td>
					<td>MT</td>
					<td>40,000</td>
					<td>20,000</td>
					<td>2,00,000</td>
					<td><div class="form-group row ml-2">
					<input class="form-control col-sm-7 mr-2" type="number" value="100" min="0" step="100" id="bid" name="bid">
					<a href="" data-toggle="modal" data-target="#myModal"><button type="submit" class="btn btn-info">Bid</button></a></div>
							
					<div class="modal" id="myModal">
					<div class="modal-dialog modal-sm">
					  <div class="modal-content">
					  
						<!-- Modal Header -->
						
						
						<!-- Modal body -->
						<div class="modal-body">
						<center><p class="text-primary">You are going to bid for five hundered Rupees</p></center>
						</div>
						
						<!-- Modal footer -->
						<div class="modal-footer">
						  <button type="button" class="btn btn-danger" data-dismiss="modal">OK</button>
						  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
						</div>
						
					  </div>
					</div>
				  </div>
				  </td>
					<td><a href="autobid.php"><button type="button" class="btn btn-info">AutoBid</button></a></td>
					<td><a href="Biddinglivestatus.php"><button type="button" class="btn btn-info btn-sm p-2"><b>Live Status</b></button></a></td>
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
