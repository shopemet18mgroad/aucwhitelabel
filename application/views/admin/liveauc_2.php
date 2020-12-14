<?php 
	//include('./header.php');
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

		<table class="table table-striped table-bordered table-sm text-center" id="dataTable" width="100%" cellspacing="0">
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
					
					<td><a href="#"></a><?php echo $sqldata[0]->sauctionid; ?><input type="hidden" id="refsel" name="refsel" value="<?php echo str_ireplace('/','-',$sqldata[0]->sauctionid); ?>"></td>
					<td><?php echo $sqldata[0]->scompanyname; ?></td>
					<td><?php echo $sqldata[0]->saucstartdate_time; ?></td>
					<td><?php echo $sqldata[0]->saucclosedate_time; ?></td>
					<td><a href="#"><u>Click here</u></a></td>
					<?php 
					date_default_timezone_set('Asia/Kolkata');
					$time =  Date('Y-m-d H:i:s');
					$datediff = (strtotime($time) - strtotime($sqldata[0]->saucclosedate_time));
					$bal = gmdate("H:i:s", floor($datediff / (60)));
					?>
				</tr>
				</tbody>
			</table>
				<table class="table table-striped table-sm table-bordered mt-4 text-center" id="dataTable" width="100%" cellspacing="0">
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
				</tr>
				</thead>

				<tbody id="ajaxreloadadminlive">
				
				<?php foreach($sqldatalot as $sqlot){?>
				<tr>												
					<td><?php echo $sqlot->slotname; ?></td>
					<td><?php echo $sqlot->slotlocation; ?></td>
					<td><?php echo $sqldata[0]->saucclosedate_time; ?></td>
					<td><?php echo $bal; ?></td>
					<td><?php echo $sqlot->sqty; ?></td>
					<td><?php echo $sqlot->sunitmeasurment; ?></td>
					<td><?php echo $sqlot->sstartbidprice; ?></td>
					<td><?php if($sqlot->cbidval){echo $sqlot->cbidval;} ?></td>
					
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
