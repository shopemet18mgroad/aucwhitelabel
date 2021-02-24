 <?php 
	//include('./header.php');
	//print_r($sqldata); die;
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
			  <input type="hidden" id="total-lot" value="<?php echo count($sqldata2);?>">
		<?php $lottimesync = 0; if(isset($sqldata)){foreach($sqldata as $sqld){?>	  
	<input type="hidden" id="ref-<?php echo $lottimesync;?>" value="<?php echo str_ireplace('/','-',$sqld->auctionid)."|".$sqldata2[$lottimesync]->slotno; ?>">
	
	
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
				
					<td><a href="#"><?php echo $sqld->auctionid; ?></a> </td>
					
					<td><?php echo $sqld->bidderusername; ?></td>
					<td><h6 id="timer-<?php echo $lottimesync;?>" style="color:red">Synchronizing Time</h6></td>
					<td><?php echo $st[$lottimesync]; ?></td>
					<td><?php echo $ct[$lottimesync]; ?></td>
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
				$diff = (strtotime($sqld->aucclosedate_time) - strtotime($time));
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
				
				<input type="hidden" id="telapsed-<?php echo $lottimesync;?>" value="<?php echo $diff;?>">
				<?php if($condtion){?>
				<tr><td><?php $lot = $sqldata2[$lottimesync]->slotno - 1;
				echo $sqldata2[$lottimesync]->slotno; ?></td>												
					<td><?php echo $sqldata2[$lottimesync]->slotname; ?> </td>
					<td><?php echo $sqldata2[$lottimesync]->slotlocation; ?></td>
					<td><?php echo $ct[$lottimesync]; ?></td>
					<!-- <td><?php echo $Remaining; ?></td> -->
					<td><?php echo $sqldata2[$lottimesync]->sqty; ?></td>
					<td><?php echo $sqldata2[$lottimesync]->sunitmeasurment; ?></td>
					<td><?php echo $sqldata2[$lottimesync]->sstartbidprice; ?></td>
					<td><?php echo $sqld->mybid_val; ?></td>
					<td><?php echo $sqldata2[$lottimesync]->cbidval; ?></td>
					
					<td><div class="form-group row ml-2">
					<?php
					if($sqldata2[$lottimesync]->sstartbidprice >= $sqldata2[$lottimesync]->cbidval){
					
						$datbid = $sqldata2[$lottimesync]->sstartbidprice;

						//$datbid = 

						$datbid = $sqldata2[$lottimesync]->sstartbidprice + $sqldata2[$lottimesync]->sminincre;

					}else{
						$datbid = $sqldata2[$lottimesync]->cbidval;
					}  
					
//$sessa2 = urlencode($sess['sessi']);
$sessa2 = str_ireplace('@','%40',$sessi);
					?> 
					<input class="form-control col-sm-7 mr-2" type="number" value="<?php echo $datbid; ?>" min="0" step="<?php echo $sqldata2[$lottimesync]->sminincre; ?>" id="bid-<?php echo $lot;?>" name="bid" <?php if($sqld->abidding){echo "readonly";}else{echo "";} ?>>
					<button type="submit" id="<?php echo $sessa2.'|'.str_ireplace('/','-',$sqld->auctionid)."|".$sqldata2[$lottimesync]->slotno; ?>" class="btn btn-info" onclick="bid_manual(this.id)" <?php if($sqld->abidding){echo "disabled";}else{echo "";} ?>>Bid</button></div>
							
					
				  </td>
				  <?php if($sqld->abidding){?>
					<td>
				  <a href="<?php echo base_url().'Buyer_liveauc_2/buyer_autobid_disable/'.str_ireplace('/','-',$sqld->auctionid)."|".$sqldata2[$lottimesync]->slotno;?>"><button type="button" class="btn btn-info" >Disable AutoBid</button></a></td><?php }else{?><td>
				  <a href="<?php echo base_url().'Buyer_liveauc_2/buyer_autobid/'.str_ireplace('/','-',$sqld->auctionid)."|".$sqldata2[$lottimesync]->slotno;?>"><button type="button" class="btn btn-info" disabled>AutoBid</button></a></td><?php }?>
					
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
		$lottimesync++;	}
	}?>
				
				
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
	var totallot = $('#total-lot').val();
	//var i = 1;
	if(totallot){
				setInterval(function(){
					for(i=0;i<totallot;i++){
					var dvar = '#telapsed-'+i;
					
					var dtvar = '#timer-'+i;
					
			  var d = $(dvar).val();
			  
			var h = Math.floor(d / 3600);
			var m = Math.floor(d % 3600 / 60);
			var s = Math.floor(d % 3600 % 60);
			var disp = h + "Hours:" + m + " Minutes:" + s + " Seconds"; 
			if(d <= 0){
				$(dtvar).html('Auction Closed');
				//return false;
			}else{
				$(dtvar).html(disp); d--; $(dvar).val(d);
			}
			  
			   //$(dtvar).html('Auction Closed'+i);
		  } // you could choose not to continue on failure...
		 
				}, 1000);
		//Run Foreach loop here
	}
  	
  /* setInterval(function(){
	  var d = $('#telapsed').val(); 
    var h = Math.floor(d / 3600);
    var m = Math.floor(d % 3600 / 60);
    var s = Math.floor(d % 3600 % 60);
    var disp = h + "Hours:" + m + " Minutes:" + s + " Seconds"; 
	if(d <= 0){
		$(dtvar).html('Auction Closed');
		return false;
	}
	  $('#timer').html(disp); d--; $('#telapsed').val(d);
  }, 1000); // you could choose not to continue on failure... */
}


 function executeQuery() {
	 var totallot = $('#total-lot').val();
	 //alert(totallot);
  var contents = $('#ref-0').val(); 
  
			$.get('<?php echo base_url() .'Buyer_liveauc_2/get_table_ajax/'; ?>'+contents, function(data){
				$('#ajaxauc').html(data);
	});
  setTimeout(executeQuery, 30000); // you could choose not to continue on failure...
}

$(document).ready(function() {
	setTimeout(telapsed, 1000)
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
