<?php 
	//include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h3 mb-0 text-gray-800">Auction Details</h2>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">

		<table class="table table-striped table-bordered table-sm text-center" id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-info text-white text-center">
					<th colspan="7">Auction Details</th>
				</thead>
				<thead class="bg-primary text-white">
				<tr>
					<th>Auction Id</th>
					<th>Opening Date/Time</th>
					<th>Closing Date/Time</th>
					<th>EMD Amount</th>
				</tr>
				</thead>

				<tbody>
				<tr>
					<td><b><?php echo $sqldata[0]->sauctionid; ?></b></td>
					<td><?php echo $sqldata[0]->sonlineaucdate_time; ?></td>
					<td><?php echo $sqldata[0]->saucclosedate_time; ?></td>
					<td><?php echo $sqldata[0]->semdamount; ?></td>
				</tr>
				</tbody>
		 </table>
				<!--<table class="table table-striped table-sm table-bordered mt-4 text-center" id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-warning  text-white text-center">
					<th colspan="8">Seller Details</th>
				</thead>
				<thead class="bg-primary text-white">
				<tr>
					<th>Company Id</th>
					<th>Seller / Company Name</th>
					<th>Location</th>
					<th>Street</th>
					<th>City</th>
					<th>Phone Number</th>
					<th>Email</th>
					<th>Contact Person</th>
				</tr>
				</thead>

				<tbody>
				<tr>
					<td><?php echo $sqldata[0]->scompanyid; ?></td>
					<td><?php echo $sqldata[0]->sname; ?></td>
					<td><?php echo $sqldata[0]->saddress; ?></td>
					<td><?php echo $sqldata[0]->sstreet; ?></td>
					<td><?php echo $sqldata[0]->scity; ?></td>
					<td><?php echo $sqldata[0]->sphone; ?></td>
					<td><?php echo $sqldata[0]->semail; ?></td>
					<td><?php echo $sqldata[0]->scontactperson; ?></td>
				</tr>
				</tbody>
		 </table> -->
		
		<table class="table table-striped  table-bordered mt-4  text-center " id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-primary text-white">
				<tr>
					<th>Lot No</th>
					<th>Lot Name</th>
					<th width="30%">Lot Description</th>
					<th>Quantity</th>
					<th>GST</th>
					<th>Location</th>
					<th>Action</th>
				</tr>
				</thead>

				<tbody>
				<tr><td><?php echo $sqldata[0]->slotno; ?></td>												
					<td><?php echo $sqldata[0]->slotname; ?></td>
					<td><?php echo $sqldata[0]->sdescription; ?></td>
					<td><?php echo $sqldata[0]->sqty; ?></td>
					<td><?php echo $sqldata[0]->sgst; ?></td>
					<td><?php echo $sqldata[0]->slotlocation; ?></td>
					<td><button type="submit" class="btn btn-info" name="accept">Accept</button>
						<button type="submit" class="btn btn-info">Reject</button></td>
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
