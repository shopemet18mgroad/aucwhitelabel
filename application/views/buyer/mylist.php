 <?php 
	//include('./header.php');
?>
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
              <div class="table-responsive">

			<table class="table table-striped table-bordered table-sm text-center mt-5 w-auto small ml-4" id="datatable" width="100%" cellspacing="0">
			<thead class="bg-info  text-white text-center">
					<th colspan="12"><b>EMD</b></th>
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
				"><?php echo $sqldata->auctionid; ?><?php echo $aucencode = str_ireplace('/','-',$sqldata->auctionid); ?></b></a></td>
					<td><?php echo $sqldata->lotno; ?></td>
					<td><?php echo $sqldata->aucstartdate_time;?><br><?php echo $sqldata->aucclosedate_time;?></td>
					<td><?php  if($sqldata->emdpaid == 0) {echo 'Emd Not Paid';}else{echo 'Emd Paid';} ?></td>
				
					<td><a href="" data-toggle="modal" data-target="#myModal<?php echo"$k";?>">
					<button type="submit" class="btn btn-info btn-sm w-50">
					<i class="fa fa-eye" aria-hidden="true"></i>
					</button>
					</a>
				
				<div class="modal" id="myModal<?php echo"$k";?>">
					<div class="modal-dialog modal-lg">
					  <div class="modal-content">
					  
						<!-- Modal Header -->
						
						
						<!-- Modal body -->
						<div class="modal-body">

						<img src="<?php $im = unserialize($sqldata->upload_dd); echo base_url().'web_files/uploads/'.$im[0];?>" class="img-fluid" alt="<?php echo $im[0];?>">

						</div>
						
						<!-- Modal footer -->
						<div class="modal-footer">
						  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
						
					  </div>
					</div>
				  </div>
					</td>
					<td><a href="#"><button type="button" class="btn btn-primary btn-sm"disabled>Pay</button></a></td>
					
					<td>
					
			
					<input class="form-group w-auto"  multiple="multiple"  type="file" name="upload_dd[]">
					<input type="hidden" name="auc[]" value="<?php echo $sessi.'|'.$aucencode.'|'.$sqldata->lotno;?>"> 
					<input type="submit" id="" class="btn btn-primary " name="submit" value="Upload">
		 
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
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
 <?php 
	//include('./footer.php');
?>
</body>

</html>
