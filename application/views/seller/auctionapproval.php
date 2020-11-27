<?php
   // include('./header');
 //print_r($sqldatarec); die;
	?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Winner Approvals</h1>
            
          </div>

          <!-- Content Row -->
         <div class="col-sm-12 col-md-12">
          <div class="card shadow mb-4">
            <div class="card-body">
			<div class="table-responsive">
			
			<form class="form-inline">
			  
			 <div class="form-group mr-4 offset-sm-4">
						<td colspan="5">
						<form action="/action_page.php">
							
								<input type="text" class="form-control" placeholder="Search.." name="search">
								<button class="form-control" type="submit"><i class="fa fa-search"></i></button>
					
						</form>
					</td>
				</div>
			</form>
			
         <table class="table table-striped text-center table-sm table-bordered mt-5"  width="100%" cellspacing="0">		
    <thead class="bg-primary text-white">
	  <tr>
		<th colspan="13" class="bg-info">Auctions</th></tr>
     <tr>
		<th>Auction Id</th>
		<th>Lot No</th>
		<th>date/Time</th>
		<th>My Bid Value</th>
		<th>Status</th>
		<th>Action</th>
		
	
	</tr>
    </thead>
    <tbody>
   	<?php  foreach($sqldatarec as $sqldata){ $datareciver = explode('|',$sqldata);?>
		<?php /* print_r($datareciver[4]); die;  */?>
					<tr>												
						<td><?php echo $datareciver[0]; ?></td>
						<td><?php echo $datareciver[1]; ?></td>
						<td><?php echo $datareciver[3]; ?></td>
						<td><?php echo $datareciver[2];?></td>
						<td><?php echo "Winner"?></td>
						
						
						<td><button type="submit" name="submit" id="<?php echo $datareciver[1].'|'.str_ireplace('/','-', $datareciver[0]);?>" onclick="seller_set(this.id)" class="btn btn-info btn-sm">Approve</button></td>	

					</tr>
					<?php  } ?>
	
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

   
    <!-- End of Content Wrapper -->


  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
<?php
  //  include('./footer');
	?>

