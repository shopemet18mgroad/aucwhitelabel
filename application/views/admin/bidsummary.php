<?php 
	//include('./header.php');
?>
	<link href="<?php echo base_url()."web_files/";?>css/tablestyle.css" rel="stylesheet" type="text/css">
	
	
	
	
	
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Bid Summary</h1>
            
          </div>

          <!-- Content Row -->
          <div class="row w-100">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-md-10  offset-sm-1 p-2">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
			<table class="table table-striped table-bordered table-sm text-center mt-5" id="dataTable" width="100%" cellspacing="0">
		<thead class="bg-warning text-white">
		<tr>
		<th colspan="12">Bidding History</th>
		</tr>
	
			<tr class="bg-primary text-white">
					<td data-label="Auction Id">Auction Id</td>
					<td data-label="Lot No">Lot No</td>
					<td data-label="Close Time">Close Time</td>
				</tr>
				</thead>

				<tbody>
				<?php foreach($sqldata as $sqldata[0]){?>
				<tr>
				
					<td data-label="Auction Id"> <b><a href="<?php echo base_url()."admin_bidhistory/bidhistory2/".str_ireplace('/','-',$sqldata[0]->sauctionid)."/".$sqldata[0]->slotno;?>"><?php echo $sqldata[0]->sauctionid; ?></a></b></td>
					<td data-label="Lot No"><?php echo $sqldata[0]->slotno; ?></td>
					<td data-label="Close Time"><?php $aucclosetime = $sqldata[0]->saucclosedate_time;
							  $tmp = explode('.',$aucclosetime);
							  $aucclosetime = $tmp[0];
							  echo $aucclosetime; ?></td>
				</tr>
			<?php }?>
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
