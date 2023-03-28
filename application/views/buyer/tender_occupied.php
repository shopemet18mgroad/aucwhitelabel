    <?php 
	//include('./header.php');
	//print_r($sqldatarec);die;
	
?>
<link href="<?php echo base_url()."web_files/";?>css/tablestyle.css" rel="stylesheet" type="text/css">
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading a -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h3 mb-0 text-gray-800">Occupied Products</h2>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
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
			
		
			</form> -->
		
		<table class="table table-striped table-bordered table-sm text-center mt-5"  id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-primary text-white" role="rowgroup">
				<tr><th colspan="8" class="bg-info">Occupied Tender </th></tr>
				<tr>
					<th>Tender Id</th>
					<th>Lot No</th>
					<th>Upload quote</th>
					<th>My Bid Value</th>
					<th>Status</th>
					
					
				</tr>
				</thead>
				<tbody>
				<?php if(isset($sqldatarec)){ foreach($sqldatarec as $sqldata){ ?>
					<tr>												
						<td data-label="Auction Id"><?php echo $sqldata->tenderid; ?></td>
						<td data-label="Lot No"><?php echo $sqldata->tslotno; ?></td>
						<td data-label="date/Time">
                        <label class="form-label" style="<?php if($sqldata->quotation != NULL){echo 'color:green';}else{echo 'color:red';}?>" for="customFile">Status: <?php if($sqldata->quotation != NULL){echo "Uploaded";}else{ echo "Not Uploaded";} ?></label>
                        <input type="file" class="form-control" id="customFile" />
						</td>
						<td data-label="My Bid Value"><?php echo $sqldata->mybid;?>
						</td>
						<td data-label="Status" style="color:green" ><?php echo "<b>Winner</b>"?></td>
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
