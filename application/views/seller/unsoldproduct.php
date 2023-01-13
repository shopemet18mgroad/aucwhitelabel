<?php
  //  include('./header');
	?>
	<link href="<?php echo base_url()."web_files/";?>css/tablestyle.css" rel="stylesheet" type="text/css">
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Unsold Data History</h1>
            
          </div>

          <!-- Content Row -->
         <div class="col-sm-12 col-md-12">
          <div class="card shadow mb-4">
            <div class="card-body">
			<div class="table-responsive">
			
			<!--<form class="form-inline">
			  
			  <div class="form-group mr-4 offset-sm-4">
						<td colspan="5">
						<form action="/action_page.php">
							
								<input type="text" class="form-control" placeholder="Search.." name="search">
								<button class="form-control" type="submit"><i class="fa fa-search"></i></button>
					
						</form>-->
					</td>
				</div>
			</form>
			
         <table class="table table-striped text-center table-sm table-bordered mt-5"  width="100%" cellspacing="0">		
    <thead class="bg-primary text-white">
      <tr>
	<th colspan="15" class="bg-info text-center">Unsold Products</th>
	</tr>
	<tr>

	<th>Auction Id</th>
	<th>Lot Name</th>
	<th>Lot Description</th>
	<th>Quantity</th>
	<th>GST</th>
	<th>Location</th>
	<th>Option</th>
	

	</tr>

	</thead>
	<tbody>
	<?php foreach($sqldat as $sqldata){?>	
		<tr>
        <td data-label="Auction Id"><?php echo $sqldata->sauctionid; ?></td>
		<td data-label="Lot Name"><?php echo $sqldata->slotno; ?></td>
		<td data-label="Lot Description"><?php echo $sqldata->sdescription; ?></td>
		<td data-label="Quantity"><?php echo $sqldata->sqty; ?></td>
		<td data-label="GST"><?php echo $sqldata->sgst; ?></td>
		<td data-label="Location"><?php echo $sqldata->slotlocation; ?></td>
		<td data-label="Option"><a href="<?php  echo base_url()."Seller_reauction/index/".str_ireplace('/','-',$sqldata->sauctionid).'/'.$sqldata->slotno;?>"><input type="button" class="btn btn-primary btn-sm" value="Reauction"></a></td>
		
			
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

  
    <!-- End of Content Wrapper -->


  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
<?php
   // include('./footer');
	?>
