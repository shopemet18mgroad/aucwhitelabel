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
			  
			  
	<input type="hidden" id="ref" value="<?php echo str_ireplace('/','-',$sqldata[0]->auctionid)."|".$sqldata2[0]->slotno; ?>">
	<div id="ajaxauc" class="ajaxauc">
		<table class="table table-striped table-bordered table-sm text-center w-auto small ml-5" width="100%" cellspacing="0" >
				<thead class="bg-info text-white text-center">
					<th colspan="7">Auction Details</th>
				</thead>
				<thead class="bg-primary text-white">
				<tr>
				
					<th width="22%">Auction Id</th>
					<th>User Name</th>
					<th>Time Elasped</th>
					<th>Auction Start Date</th>
					<th>Auction Close Date</th>
					<th>Seller Terms & Condition</th>
				</tr>
				</thead>

				<tbody>
				<form action="<?php echo base_url();?>" method="POST"  enctype="multipart/form-data">
				<tr>
				
					<td><a href="#"><?php echo $sqldata[0]->auctionid; ?></a> </td>
					
					<td><?php echo $sqldata[0]->bidderusername; ?></td>
					<td><h6 id="timer" style="color:red">Synchronizing Time</h6></td>
					<td><?php echo $st; ?></td>
					<td><?php echo $ct; ?></td>
					<td><a href="#"><u>Click here</u></a></td>
				</tr>
				</tbody>
			</table>
			</form>
				<table class="table table-striped table-sm w-auto small table-bordered mt-4 text-center" id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-warning  text-white text-center">
					<tr>
						<th colspan="14">Open LOT Number</th>
					</tr>
				</thead>
				<thead class="bg-primary text-white">
				<tr>
					<th width="8%">Lot No</th>
					<th>Lot Name</th>
					<th>Location</th>
					<th>Close Time</th>
					<!--<th>Time Left</th> -->
					<th>Quantity</th>
					<th>Unit</th>
					<th>Start Price</th>
					<th>My Bid</th>
					<th>Live Status</th>					
					<th width="18%">Bid</th>
					<th>Autobid</th>
					
				</tr>
				</thead>

				<tbody>
				<?php 
				date_default_timezone_set('Asia/Kolkata');
				$time =  Date('Y-m-d H:i:s');
				$diff = (strtotime($sqldata[0]->aucclosedate_time) - strtotime($time));
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
				<input type="hidden" id="telapsed" value="<?php echo $diff;?>">
				<?php if($condtion){?>
				<tr><td><?php echo $sqldata2[0]->slotno; ?></td>												
					<td><?php echo $sqldata2[0]->slotname; ?> </td>
					<td><?php echo $sqldata2[0]->slotlocation; ?></td>
					<td><?php echo $ct; ?></td>
					<!-- <td><?php echo $Remaining; ?></td> -->
					<td><?php echo $sqldata2[0]->sqty; ?></td>
					<td><?php echo $sqldata2[0]->sunitmeasurment; ?></td>
					<td><?php echo $sqldata2[0]->sstartbidprice; ?></td>
					<td><?php echo $sqldata[0]->mybid_val; ?></td>
					<td><?php echo $sqldata2[0]->cbidval; ?></td>
					
					<td><div class="form-group row ml-2">
					<?php
					if($sqldata2[0]->sstartbidprice >= $sqldata2[0]->cbidval){
						$datbid = $sqldata2[0]->sstartbidprice;

						$datbid = 

						$datbid = $sqldata2[0]->sstartbidprice + $sqldata2[0]->sminincre;

					}else{
						$datbid = $sqldata2[0]->cbidval;
					}  
					
//$sessa2 = urlencode($sess['sessi']);
$sessa2 = str_ireplace('@','%40',$sessi);
					?> 
					<input class="form-control col-sm-7 mr-2" type="number" value="<?php echo $datbid; ?>" min="0" step="<?php echo $sqldata2[0]->sminincre; ?>" id="bid" name="bid" <?php if($sqldata[0]->abidding){echo "readonly";}else{echo "";} ?>>
					<button type="submit" id="<?php echo $sessa2.'|'.str_ireplace('/','-',$sqldata[0]->auctionid)."|".$sqldata2[0]->slotno; ?>" class="btn btn-info" onclick="bid_manual(this.id)" <?php if($sqldata[0]->abidding){echo "disabled";}else{echo "";} ?>>Bid</button></div>
							
					
				  </td>
				  <?php if($sqldata[0]->abidding){?>
					<td>
				  <a href="<?php echo base_url().'Buyer_liveauc_2/buyer_autobid_disable/'.str_ireplace('/','-',$sqldata[0]->auctionid)."|".$sqldata2[0]->slotno;?>"><button type="button" class="btn btn-info" >Disable AutoBid</button></a></td><?php }else{?><td>
				  <a href="<?php echo base_url().'Buyer_liveauc_2/buyer_autobid/'.str_ireplace('/','-',$sqldata[0]->auctionid)."|".$sqldata2[0]->slotno;?>"><button type="button" class="btn btn-info" disabled>AutoBid</button></a></td><?php }?>
					
				</tr>
				<?php }else{
					echo '<tr><td>No Live Data</td>';
echo '<td>No Auctions</td>';
echo '<td>No Auctions</td>';
echo '<td>No Auctions</td>';
echo '<td>No Auctions</td>';
echo '<td>No Auctions</td>';
echo '<td>No Auctions</td>';
echo '<td>No Auctions</td>';
echo '<td>No Auctions</td>';
echo '<td>No Auctions</td>';
echo '<td>No Auctions</td>';
echo '</td>';
echo '</tr>';
echo '';
				}				
					?>
				
				
				</tbody>
		 </table>
</div>

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
<script>
function telapsed() {
	
  	
  setInterval(function(){
	  var d = $('#telapsed').val(); 
    var h = Math.floor(d / 3600);
    var m = Math.floor(d % 3600 / 60);
    var s = Math.floor(d % 3600 % 60);
    var disp = h + "Hours:" + m + " Minutes:" + s + " Seconds"; 
	if(d <= 0){
		$('#timer').html('Auction Closed');
		return false;
	}
	  $('#timer').html(disp); d--; $('#telapsed').val(d);
  }, 1000); // you could choose not to continue on failure...
}


 function executeQuery() {
  var contents = $('#ref').val(); 
			$.get('<?php echo base_url() .'Buyer_liveauc_2/get_table_ajax/'; ?>'+contents, function(data){
				$('#ajaxauc').html(data);
	});
  setTimeout(executeQuery, 30000); // you could choose not to continue on failure...
}

$(document).ready(function() {
	setTimeout(telapsed, 1000);
  // run the first time; all subsequent calls will take care of themselves
  setTimeout(executeQuery, 30000);
  
});
 </script>
  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
 


  <?php 
	//include('./footer.php');
?>
</body>

</html>
