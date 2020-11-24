<?php 
	//include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">View Sales Data</h1>
            
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
					<th colspan="7">Company Details</th>
				</thead>
				<thead class="bg-primary text-white">
				<tr>
					<th>Seller Name</th>
					<th>Total Amount</th>
					<th>Seller Location</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td><?php echo $sqldata[0]->sname; ?></td>
					<td><?php echo $sqldata[0]->scompanyname; ?></td>
					<td><?php echo $sqldata[0]->svinspection; ?></td>
				</tr>
			 
				</tbody>
			</table>
			 
		<table class="table table-striped table-bordered table-sm text-center mt-5" id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-primary text-white">
				<tr><th colspan="7" class="bg-warning">Auctions</th></tr>
				<tr>
					<th>Auction Id</th>
					<th>Lot Name</th>
					<th>Auction Start Date</th>
					<th>Auction Close Date</th>
					
					<th>Amount</th>
				</tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo $sqldatalot[0]->auctionid; ?></td>	
						<td><?php echo $sqldatalot[0]->	lotno; ?></td>
						<td><?php echo $sqldatalot[0]->aucstartdate_time; ?></td>
						<td><?php echo $sqldatalot[0]->aucclosedate_time; ?></td>
						<td><?php echo $sqldatalot[0]->abidmaxvalue; ?></td>
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
