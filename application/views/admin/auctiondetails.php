<?php 
	//include('./header.php');
?>       <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Auction Details</h1>
            
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
		
         <table class="table table-striped text-center table-sm table-bordered w-auto small mt-5"  width="100%" cellspacing="0">		
    <thead class="bg-primary text-white">
	  <tr>
		<th class="bg-info" colspan="12" style="Text-align:center;">Auction Details</th>
	</tr>

      <tr>
        <th>Auction Id</th>
		<th>Lot No</th>
		<th>Lot Name</th>
        <th>Qty</th>
		<th>Expected Price</th>
		<th>Starting Bid Price</th>
		<th>Inspection Date</th>
		<th>Description</th>
		<th>Seller Approval</th>
		<th>Download</th>
		<th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
		<td style="color:blue;"><a href="<?php echo base_url();?>admin_editforthcom_2">AJ256458/BHEL/IRON/102</a></td> 
		<td>1</td>
        <td>Iron</td>
		<td>Pig Iron</td>
		<td>5</td>
		<td>1,000</td>
		<td>02-07-2020</td>
		<td><a href=""><u>Type: Pipes, Sheets, Rods, Blocks & Etc
	 </u></a></td>
		<td style="color:green;">Approve</td>
		<td><a href=""><i class="fa fa-download"></i></a></td>
        <td><a href="<?php echo base_url();?>admin_editauction" class="btn btn-primary btn-sm text-white"><i class="fa fa-edit fa-sm"></i></a><br><br>
			<a class="btn btn-danger btn-sm text-white"><i class="fa fa-trash fa-sm"></i></a></td>
      </tr> 

		<tr>
		<td style="color:blue;"><a href="<?php echo base_url();?>admin_editforthcom_2">AJ256458/BHEL/IRON/102</a></td> 
		<td>1</td>
        <td>Iron</td>
		<td>Pig Iron</td>
		<td>5</td>
		<td>1,000</td>
		<td>02-07-2020</td>
		<td><a href=""><u>Type: Pipes, Sheets, Rods, Blocks & Etc
	 </u></a></td>
		<td style="color:red;" width="10%">Pending</td>
		<td><a href=""><i class="fa fa-download"></i></a></td>
        <td><a href="<?php echo base_url();?>admin_editauction" class="btn btn-primary btn-sm text-white"><i class="fa fa-edit fa-sm"></i></a><br><br>
			<a class="btn btn-danger btn-sm text-white"><i class="fa fa-trash fa-sm"></i></a></td>
      </tr> 
	  
	  <tr>
		<td style="color:blue;"><a href="<?php echo base_url();?>admin_editforthcom_2">AJ256458/BHEL/IRON/102</a></td> 
		<td>1</td>
        <td>Iron</td>
		<td>Pig Iron</td>
		<td>5</td>
		<td>1,000</td>
		<td>02-07-2020</td>
		<td><a href=""><u>Type: Pipes, Sheets, Rods, Blocks & Etc
	 </u></a></td>
		<td style="color:green;">Approve</td>
		<td style="color:Blue;"><a href="<?php echo base_url();?>admin_editforthcom_2"><i class="fa fa-download"></i></a></td>
        <td><a href="<?php echo base_url();?>admin_editauction" class="btn btn-primary btn-sm text-white"><i class="fa fa-edit fa-sm"></i></a><br><br>
			<a class="btn btn-danger btn-sm text-white"><i class="fa fa-trash fa-sm"></i></a></td>
      </tr> 
	  
	  <tr>
		<td style="color:blue;"><a href="<?php echo base_url();?>admin_editforthcom_2">AJ256458/BHEL/IRON/102</a></td>
		<td>1</td>
        <td>Iron</td>
		<td>Pig Iron</td>
		<td>5</td>
		<td>1,000</td>
		<td>02-07-20</td>
		<td><a href=""><u>Type: Pipes, Sheets, Rods, Blocks & Etc
	 </u></a></td>
		<td style="color:red;">Pending</td>
		<td style="color:Blue;"><a href=""><i class="fa fa-download"></i></a></td>
        <td><a href="<?php echo base_url();?>admin_editauction" class="btn btn-primary btn-sm text-white"><i class="fa fa-edit fa-sm"></i></a><br><br>
			<a class="btn btn-danger btn-sm text-white"><i class="fa fa-trash fa-sm"></i></a></td>
      </tr> 
	  
	  <tr>
		<td style="color:blue;"><a href="<?php echo base_url();?>admin_editforthcom_2">AJ256458/BHEL/IRON/102</a></td> 
		<td>1</td>
        <td>Iron</td>
		<td>Pig Iron</td>
		<td>5</td>
		<td>1,000</td>
		<td>02-07-2020</td>
		<td><a href=""><a href=""><u>Type: Pipes, Sheets, Rods, Blocks & Etc
	 </u></a></td>
		<td style="color:orange;">Reject</td>
		<td><a href=""><i class="fa fa-download"></i></a></td>
        <td><a  href="<?php echo base_url();?>admin_editauction" class="btn btn-primary btn-sm text-white "><i class="fa fa-edit fa-sm"></i></a><br><br>
			<a class="btn btn-danger btn-sm text-white "><i class="fa fa-trash fa-sm"></i></a></td>
      </tr> 
      
    </tbody>
  </table>

		  </div>
            </div>
			
			<!--Pagination -->

        <div class="row">
		
			<div class="col-sm-12 col-md-10">
				<div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
				<ul class="pagination offset-lg-11">
				<li class="paginate_button page-item previous disabled" id="dataTable_previous">
				<a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
				</li>
				<li class="paginate_button page-item active">
				<a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a>
				</li>
				<li class="paginate_button page-item next disabled" id="dataTable_next">
				<a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">Next</a>
				</li>
				</ul>
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

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
<?php 
	//include('./footer.php');
?>
</body>

</html>
