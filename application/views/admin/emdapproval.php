<?php 
	//include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">EMD Approval</h1>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
			   <form class="form-inline">
					<div class="form-group mr-4 offset-sm-4">
						<td colspan="5">
						<!--<form action="/action_page.php">
							
								<input type="text" class="form-control" placeholder="Search.." name="search">
								<button class="form-control" type="submit"><i class="fa fa-search"></i></button>
					
						</form>-->
					</td>
				</div>
		
			</form>
		
		<table class="table table-striped table-bordered table-sm text-center mt-5 w-auto" id="dataTable" width="100%" cellspacing="0">
				
				<thead class="bg-primary text-white">
				 <tr>
		<th class="bg-info" colspan="12" style="Text-align:center;">EMD</th>
	</tr>
				<tr>
						<th>Auction Id</th>
						<th>Lot No</th>
						<th>Company Name</th>
						<th>Buyer Name</th>
						<!--<th>Location</th>-->
						<th>Date/Time</th>
						<th>EMD Type</th>
						<th>View DD</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				<tr>
				<?php foreach($sqldat as $sqldata){?><td><b><?php echo $sqldata->auctionid; ?></b></td>
				 <td><?php echo $sqldata->lotno; ?></td>
				 <td></td> <td><?php echo $sqldata->bidderusername; ?></td>
				 <td><?php echo $sqldata->aucstartdate_time;?><br><?php echo $sqldata->aucclosedate_time;?></td>
			
				
				<td><?php  if($sqldata->emd_paid_dd == 0) {echo 'DD';}				?></td>
					<td><a href="" data-toggle="modal" data-target="#myModal">
					<button type="submit" class="btn btn-info btn-sm w-50">
					<i class="fa fa-eye" aria-hidden="true"></i>
					</button>
					</a>
				
				<div class="modal" id="myModal">
					<div class="modal-dialog modal-sm">
					  <div class="modal-content">
					  
			
						
						<!-- Modal body -->
						<div class="modal-body">
						<img src="<?php echo $sqldata->upload_dd;?>" class="img-fluid" alt="DD image">
						</div>
						
						<!-- Modal footer -->
						<div class="modal-footer">
						  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
						
					  </div>
					</div>
				  </div>
					</td>
				<td><button type="submit" name="submit" id="<?php echo $sqldata->lotno.'|'.str_ireplace('/','-',$sqldata->auctionid);?>" onclick="buyer_set_deactive_emd_dd(this.id)" class="btn btn-info btn-sm">Approve</button></td>	
														
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
