 <?php 
	//include('./header.php');
?>

 <style>
        #blink {
            font-size: 12px;
            font-weight: bold;
            color: red;
			  margin-left:300px;
            transition: 0.5s;
			 animation: blinker 1s linear infinite;
			  animation-name:animate;
			animation-duration: 1s;
			animation-iteration-count: infinite;
			opacity: 1;
				}
	
  
  @keyframes animate {
  0% {
    opacity: 0;
  }

  50% {
    opacity: 0.5
  }

  100% {
    opacity: 0;
  }
}
    </style>
        <!-- End of Topbar -->
	
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h3 mb-0 text-gray-800">My List</h2>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
			<div class="row marqueebox">
			
			 <div><p id="blink"><i class="fa fa-bell mr-2" aria-hidden="true"></i><b>Note: To Use our services please Pay the Subscription Amount.</b></p></div>
			</div>
              <div class="table-responsive">

			<table class="table table-striped table-bordered table-sm text-center mt-5 w-auto small ml-4" id="datatable" width="100%" cellspacing="0">
			<thead class="bg-info  text-white text-center">
					<th colspan="13"><b>EMD</b></th>
				</thead>
				<thead class="bg-primary text-white">
				<tr>
					<td>Auction Id</td>
					<td>Lot No</td>
					<td>Auction Start/Close date/time</td>
					<td>Status</td>
					 <td>View DD Image</td>
					 <td>EMD Payment</td>
					 <td>EMD Pay By DD</td>
					 <td>EMD Request</td>
					
				</tr>
					<!--<tr>
						<th width="40%">Auction Id</th>
						<th>Company Name</th>
						<th>Location</th>
						<th>Date/Time</th>
						<th>Status</th>
						<th width="10%">View Auction</th>
						<th width="15%">EMD Payment</th>
						<th>EMD Pay By DD</th>
					</tr>-->
				</thead>
		<tbody>
			  <form action="<?php echo base_url();?>Buyer_Mylist_dd_upload" method="POST" id="upload-form" enctype="multipart/form-data">
			  <?php $k=0;?>
        <?php foreach($sqldat as $sqldata){?>  
     
				<tr>
					<td><b><a href="<?php echo base_url();?>'buyer_mylist/index/'.urlencode($sqldata['auctionid'])
				"><?php echo $aucencode = str_ireplace('/','-',$sqldata->auctionid); ?></b></a></td>
					<td><?php echo $sqldata->lotno; ?></td>
					<td><?php echo $st;?><br><?php echo $ct;?></td>
					<td><?php  if($sqldata->emdpaid == 0) {echo 'Emd Not Paid';}else{echo 'Emd Paid';} ?></td>
				
					<td><a href="" data-toggle="modal" data-target="#myModal<?php echo"$k";?>">
					<button type="submit" class="btn btn-info btn-sm w-75" >
					<i class="fa fa-eye" aria-hidden="true"></i>
					</button>
					</a>
				
				<div class="modal" id="myModal<?php echo"$k";?>">
					<div class="modal-dialog modal-lg">
					  <div class="modal-content">
					  
						<!-- Modal Header -->
						
						
						<!-- Modal body -->
						<div class="modal-body">
						<img src="<?php $im = unserialize($sqldata->upload_dd); 
						if($im){
						echo base_url().'web_files/uploads/'.$im[0];?>" class="img-fluid" alt="<?php echo $im[0];}?>">
						</div>
						
						<!-- Modal footer -->
						<div class="modal-footer">
						  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
						
					  </div>
					</div>
				  </div>
					</td>
					<td>
					
					 <?php if (isset($sql)){ foreach($sql as $s){
						 
						 if($s->subscription == 0){
					echo '<a href="#" data-toggle="modal" data-target="#myModalmy">';
					echo'<button type="button" class="btn btn-primary btn-sm">Pay</button></a>';
						}
						else{
						echo '<a href="#" data-toggle="modal" data-target="#myModalmy">';
					echo'<button type="button" class="btn btn-primary btn-sm" disabled>Pay</button></a>';	
							
						} 
						 
						 ?>
					<div class="modal" id="myModalmy">
					<div class="modal-dialog modal-lg">
					  <div class="modal-content">
					  
						<!-- Modal Header -->
						
						
						<!-- Modal body -->
						<div class="modal-body">
						<h3>Subscription Amount <br>
					<?php if(($sql[0]->subscription)== false){ echo $sql[0]->subscription_amount; 
					echo '<br><button type="submit3" class="btn btn-danger w-auto small" >Subscribe</button>';} 
					 else {
						echo "Paid";
					}?>
					</h3>
						</div>
						
						<!-- Modal footer -->
						<div class="modal-footer">
						  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
						
					  </div>
					</div>
				  </div>
							<?php }
								}?>
				</td>
					<td>
					<input type="hidden" name="auc[]" value="<?php echo $sessi.'|'.$aucencode.'|'.$sqldata->lotno;?>"> 
					<input class="form-group w-auto"  multiple="multiple"  type="file" name="upload_dd[]">
					
					<?php
					
					$aucencode = str_ireplace('/','-',$sqldata->auctionid);
						if (isset($sql)){ foreach($sql as $s){
					if($s->subscription == 0){
					
					
					echo '<input type="submit" id="" class="btn btn-primary" name="submit" value="Upload">';
					

						}else{
					echo '<input type="submit" id="" class="btn btn-primary" name="submit" value="Upload" disabled>';
						}}}?>
		 
					</td>
					
					<td>
					<?php
					if (isset($sql)){ foreach($sql as $s){
					if($s->subscription == 1){
					echo '<a href="'.base_url()."Buyer_Mylist_dd_upload/emdreq/".$sessi."/".$aucencode."/".urlencode($sqldata->lotno).'" >';
					echo '<button type="submit2"  onclick="this.disabled=true" class="btn btn-primary w-auto small" >Emd Request</button></a>';
					}
					
					else{
					echo '<a href="'.base_url()."Buyer_Mylist_dd_upload/emdreq/".$sessi."/".$aucencode."/".urlencode($sqldata->lotno).'" >';
					echo '<button type="submit2"  onclick="this.disabled=true" class="btn btn-primary w-auto small" disabled>Emd Request</button></a>';
					}
					}}
?>
					
					</td>
				
		<?php $k++;}?> 

				</tr>
		
							
				</tbody>
		 </table>
		  </form>
	

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
  
<script>
$('form').submit2(function() {
  $(this).find("button[type='submit2']").prop('disabled',true);
});
</script>
		
  <!-- End of Page Wrapper -->
  <!-- Scroll to Top Button-->
 <?php 
	//include('./footer.php');
?>
</body>

</html>
