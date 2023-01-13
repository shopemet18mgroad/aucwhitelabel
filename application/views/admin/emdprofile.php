<?php 
	//include('./header.php');
?>
	<link href="<?php echo base_url()."web_files/";?>css/tablestyle.css" rel="stylesheet" type="text/css">
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">EMD Paid</h1>
            
          </div>

          <!-- Content Row -->
          <div class="row w-1100">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-md-10 offset-sm-1 p-2">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
			 
		
				<table class="table table-striped table-bordered table-sm text-center mt-5" id="dataTable" width="100%" cellspacing="0">
				
				<thead class="bg-primary text-white">
				 <tr>
		<th class="bg-info" colspan="12" style="Text-align:center;">EMD</th>
	</tr>
				<tr>
					<th>Auction ID</th>
					<th>Buyer Name</th>
					<!--<th>Location</th>-->
					<th>Date/Time</th>
					<th>Lot No</th>
					<!--<th>Lot Name</th>-->
					<th>Bid Amount</th>
					<th>EMD Type</th>
				</tr>
				</thead>
				<tbody>
				<tr>
				 <?php foreach($sqldat as $sqldata){?>  									<td><b><?php echo $sqldata->auctionid; ?></b></td>
				 <td><?php echo $sqldata->bidderusername; ?></td>
				 <td><?php echo $sqldata->aucstartdate_time;?><br><?php echo $sqldata->aucclosedate_time;?></td>
				 <td><?php echo $sqldata->lotno; ?></td>
				  <td><?php echo $sqldata->bidamount; ?></td>
				
				<td><?php  if($sqldata->emdpaid == 1) {echo 'Paid';} ?></td>
				
				</tr>
				
					<?php }  
         ?> 						
				</tbody>
		 </table>
		</div>
		</div>
		 <!--Pagination -->

		
		
		
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
