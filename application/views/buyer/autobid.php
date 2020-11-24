<?php 
	//include('./headerdata.php');
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

		<table class="table table-striped table-sm text-center table-bordered"  width="100%" cellspacing="0">
				<thead class="bg-primary text-white">
				<tr>
					<th colspan="10">Enter Autobid info</th>
				</tr>
				<tr>
					<th>Auction Id</th>
					<th>Lot No</th>
					<th>Your Bid(Per Unit)</th>
					<th>Your Bid(Max)</th>
					<th>Submit</th>
				</tr>
				</thead>
				<tbody>
			<tr>												
				<td><?php echo $sqldata[0]->sauctionid;?></td>
				<td><?php echo $sqldata[0]->slotno;?></td>
				<td><input class="form-control" type="text" id="bidperunit" name="bidperunit" value="<?php echo $sqldata[0]->sstartbidprice;?>"></td>
				<td><input class="form-control" type="text" id="bidmax" value="<?php echo $sqldata[0]->sprice;?>" name="bidmax"></td>
				<td><a href=""><button type="button" class="btn btn-info" id="<?php echo urlencode($sqldata2).'|'.str_ireplace('/','-',$sqldata[0]->sauctionid).'|'.$sqldata[0]->slotno;?>" onclick="return autobidenable(this.id)">AutoBid</button></a></td>
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
	//include('./footerdata.php');
?>
</body>

</html>
