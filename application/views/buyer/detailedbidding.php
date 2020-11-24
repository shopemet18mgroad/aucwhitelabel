<?php 
	//include('./header.php');
?>
      <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
		
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h3 class="h3 mb-0 text-gray-800">Bidding History</h3>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">

				<table class="table table-striped table-bordered table-sm mt-5" id="dataTable" width="100%" cellspacing="0">
			<thead class="bg-primary text-white text-center">
				<th colspan="10" class="bg-info">Bid History</th>
			</thead>
			<tbody>
			<tr>
				<td>Auction ID</td>
				<td width="50%"><?php echo $sqldata2[0]->sauctionid; ?></td>
	 		</tr>
			<tr>												
				<td>Lot No</td>
				<td width="50%"><?php echo $sqldata2[0]->slotno; ?></td>
			</tr>
			
			</tbody>
		 </table>
		 
		<table class="table table-striped table-bordered table-sm text-center mt-5" id="dataTable" width="100%" cellspacing="0">
			<thead class="bg-primary text-white">
				<tr>
					<th>Bid Amount</th>
					<th>Date/Time</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($sqldata2 as $sqldat){?>

			<tr>												
				<td><?php echo $aucencode = str_ireplace('/','-',$sqldat->bidamount); ?></td>
				<td><?php echo $sqldat->Date_time; ?></td>
				<td><?php echo $sqldat->Date_time; ?></td>
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
