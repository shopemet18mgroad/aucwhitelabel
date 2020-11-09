 <?php 
	//include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage Buying Requirements</h1>
            
          </div> -->

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
		
		
		<table class="table table-striped table-bordered table-sm text-center mt-5"  width="100%" cellspacing="0">
		<thead class="bg-warning text-white">
		<tr>
		<th colspan="12">Lot Details</th>
		</tr>
		<thead class="bg-primary text-white">
			<tr>
					<td>Auction Id</td>
					<td>Lot No</td>
					<td>Lot Name</td>
					<td>Location Of Lot</td>
					<td>Start Time</td>
					<td>Close Time</td>
					<td>Quantity</td>
					<td>Unit Of Measurment</td>
					<td>Starting Bid Price	</td>
					<td>Final Bid</td>
				</tr>
				</thead>

				<tbody>
				<?php foreach($sqldata as $sqldata[0]){?>
				<tr>
				
					<td><b><?php echo $sqldata[0]->sauctionid; ?></b></td>
					<td><?php echo $sqldata[0]->slotno; ?></td>
					<td><?php echo $sqldata[0]->slotname; ?></td>
					<td><?php echo $sqldata[0]->slotlocation; ?></td>
					<td><?php echo $sqldata[0]->sonlineaucdate_time; ?></td>
					<td></td>
					<td><?php echo $sqldata[0]->sqty; ?></td>
					<td><?php echo $sqldata[0]->sunitmeasurment; ?></td>
					<td><?php echo $sqldata[0]->sstartbidprice; ?></td>
					<td></td>
				</tr>
			<?php }?>
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
