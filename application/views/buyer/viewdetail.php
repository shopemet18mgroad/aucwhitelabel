 <?php 
	//include('./header.php');
?>
  <link href="<?php echo base_url()."web_files/";?>css/tablestyle.css" rel="stylesheet" type="text/css">      
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
		
		
		<table class="table table-striped table-bordered table-sm text-center mt-5 display" id="dataTable" width="100%" cellspacing="0">
		<thead class="bg-warning text-white">
		<tr>
		<th colspan="12">Bidding Data</th>
		</tr>
		
			<tr class="bg-primary text-white">
					<td>Auction Id</td>
					<td>Lot No</td>
					<td>Close Time</td>
					<td>Bidding Amount</td>
				</tr>
				</thead>

				<tbody>
				<?php foreach($sqldata as $sqldata[0]){?>
				<tr>
				
					<td data-label="Auction Id"><b><?php echo $sqldata[0]->sauctionid; ?></b></td>
					<td data-label="Lot No"><?php echo $sqldata[0]->slotno; ?></td>
					<td data-label="Close Time"><?php $aucclosetime = $sqldata[0]->Date_time;
							  $tmp = explode('.',$aucclosetime);
							  $aucclosetime = $tmp[0];
		
		                  echo $aucclosetime; ?></td>
					<td data-label="Bidding Amount"><?php echo $sqldata[0]->bidamount; ?></td>
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
<script>
$(document).ready(function() {
    $('table.display').DataTable();
} );
</script>
</body>

</html>
