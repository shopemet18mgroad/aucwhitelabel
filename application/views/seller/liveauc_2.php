<?php 
	//include('./header.php');
?>
<link href="<?php echo base_url()."web_files/";?>css/tablestyle.css" rel="stylesheet" type="text/css">
<head> <meta http-equiv="refresh" content="30; url=<?php echo base_url()."seller_liveauc_2/index/".str_ireplace('/','-',$sqldata[0]->sauctionid); ?>"></head>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h3 class="h3 mb-0 text-gray-800">Auction Here</h3>
          </div>

          <!-- Content Row -->
          <div class="row w-100">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-md-10 offset-sm-1 p-2">
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
					
					<td data-label="Auction Id"><a href="#"></a><?php echo $sqldata[0]->sauctionid; ?></td>
					<td data-label="Seller / Company Name"><?php echo $sqldata[0]->scompanyname; ?></td>
					<td data-label="Auction Start Date"><?php $aucstarttime = $sqldata[0]->saucstartdate_time;
							  $tmp = explode('.',$aucstarttime);
							  $aucstarttime = $tmp[0];
							  echo $aucstarttime; ?></td>
					<td data-label="Auction Close Date"><?php $aucclosetime = $sqldata[0]->saucclosedate_time;
							  $tmp = explode('.',$aucclosetime);
							  $aucclosetime = $tmp[0];
							  echo $aucclosetime; ?></td>
					<td data-label="Auction Terms"><a href="#"><u>Click here</u></a></td>
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

				<tbody>
				
				<?php foreach($sqldatalot as $sqlot){?>
				<?php 
				date_default_timezone_set('Asia/Kolkata');
				$time =  Date('Y-m-d H:i:s');
				$diff = (strtotime($sqlot->aucclosedate_time) - strtotime($time));
				//$diff = abs($time - $sqldata[0]->aucclosedate_time);  
			//$diff = strtotime($query[0]->aucclosedate_time)-strtotime($time);
		$years = floor($diff / (365*60*60*24));  
			$months = floor(($diff - $years * 365*60*60*24)/ (30*60*60*24));   
			$days = floor(($diff - $years * 365*60*60*24 -  $months*30*60*60*24)/ (60*60*24)); 
			$hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24)/ (60*60));  
$minutes = floor(($diff - $years * 365*60*60*24  - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60);  
$seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minutes*60)); 
$Remaining = $hours." Hours ".$minutes." Minutes ".$seconds."Seconds";
if($diff <= 0){
			$condtion = false;
		}else{
			$condtion = true;
		}
				?>
				
				<tr>												
					<td data-label="LOT Name"><?php echo $sqlot->slotname; ?></td>
					<td data-label="Location"><?php echo $sqlot->slotlocation; ?></td>
					<td data-label="Close Time"><?php $aucclosetime = $sqlot->aucclosedate_time;
							  $tmp = explode('.',$aucclosetime);
							  $aucclosetime = $tmp[0];
							  echo $aucclosetime; ?></td>
					<td data-label="Time Left"><?php
							  if(($sqlot->aucclosedate_time)> $time ) {
							  echo $Remaining;
							  } else{
								  echo "Auction Closed";
							  }?></td>
					<td data-label="Quantity"><?php echo $sqlot->sqty; ?></td>
					<td data-label="Unit"><?php echo $sqlot->sunitmeasurment; ?></td>
					<td data-label="Start Price"><?php echo $sqlot->sstartbidprice; ?></td>
					<td data-label="Final Bid"><?php  echo $sqlot->cbidval; ?></td>
					
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
