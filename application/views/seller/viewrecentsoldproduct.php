 <?php
  //  include('./header');
	?>
	<link href="<?php echo base_url()."web_files/";?>css/tablestyle.css" rel="stylesheet" type="text/css">
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">View Recent Sold Product</h1>
            
          </div>

          <!-- Content Row -->
         <div class="col-sm-12 col-md-12">
          <div class="card shadow mb-4">
            <div class="card-body">
			<div class="table-responsive">
			
			<!-- <form class="form-inline">
			  
			  <div class="form-group mr-4 offset-sm-4">
						<td colspan="5">
						<form action="/action_page.php">
							
								<input type="text" class="form-control" placeholder="Search.." name="search">
								<button class="form-control" type="submit"><i class="fa fa-search"></i></button>
					
						</form>
					</td>
				</div>
			</form>-->
			
         <table class="table table-striped text-center table-sm table-bordered  mt-5"  width="100%" cellspacing="0">		
    <thead class="bg-primary text-white">
      <tr>
	<th colspan="15" style="background-color:#257c42"  class="text-center">Sold Products</th>
	</tr>
	<tr>
	 <tr>
		<th>Auction Id</th>
		<th>Lot No</th>		
		<th>Buyer Name</th>
		<th>date/Time</th>
		<th>Bid Amount</th>
		<th>Status</th>
		
	</tr>

	</thead>
	    <tbody>
   	<?php if(isset($sqldatarec)){ foreach($sqldatarec as $sqldata){ $datareciver = explode('|',$sqldata);?>
		<?php /* print_r($datareciver[4]); die;  */?>
					<tr>												
						<td data-label="Auction Id"><?php echo $datareciver[0]; ?></td>
						<td data-label="Lot No"><?php echo $datareciver[1]; ?></td>
						<td data-label="Buyer Name"><?php echo $datareciver[2];?></td>
						<td data-label="date/Time"><?php echo $datareciver[4]; ?></td>
						<td data-label="Bid Amount"><?php echo $datareciver[3]; ?></td>
						<td data-label="Status" style="color:blue;"><?php echo "Sold"?></td>
						
						

					</tr>
	<?php  }} ?>
	
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
