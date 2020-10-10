<?php 
	include('./header.php');
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
					<div class="form-group mr-4 offset-sm-2">
						<td colspan="5">
						<form action="/action_page.php">
							<div class="form-group">
							<label>Date</label>
								<input class="form-control col-sm-5" type="Date" id="sdate" name="sdate">
								<input class="form-control col-sm-5 ml-2" type="Date" id="ldate" name="ldate">
							</div>
							<div class="form-check">
								<label class="form-check-label" for="check1">
									<input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>Search by Company
								</label>
						<a href="#"><button type="button" class="btn btn-primary btn-sm offset-sm-4 mt-2 mb-2">Search</button></a>
						</div>
						</form>
					</td>
				</div>
			</form>
		
         <table class="table table-striped text-center table-sm table-bordered w-auto small" id="dataTable" width="100%" cellspacing="0">		
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
		<td style="color:blue;">AJ256458/BHEL/IRON/102</td> 
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
        <td><a class="btn btn-primary btn-sm text-white"><i class="fa fa-edit fa-sm"></i></a><br><br>
			<a class="btn btn-danger btn-sm text-white"><i class="fa fa-trash fa-sm"></i></a></td>
      </tr> 

		<tr>
		<td style="color:blue;">AJ256458/BHEL/IRON/102</td> 
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
        <td><a class="btn btn-primary btn-sm text-white"><i class="fa fa-edit fa-sm"></i></a><br><br>
			<a class="btn btn-danger btn-sm text-white"><i class="fa fa-trash fa-sm"></i></a></td>
      </tr> 
	  
	  <tr>
		<td style="color:blue;">AJ256458/BHEL/IRON/102</td> 
		<td>1</td>
        <td>Iron</td>
		<td>Pig Iron</td>
		<td>5</td>
		<td>1,000</td>
		<td>02-07-2020</td>
		<td><a href=""><u>Type: Pipes, Sheets, Rods, Blocks & Etc
	 </u></a></td>
		<td style="color:green;">Approve</td>
		<td style="color:Blue;"><a href=""><i class="fa fa-download"></i></a></td>
        <td><a class="btn btn-primary btn-sm text-white"><i class="fa fa-edit fa-sm"></i></a><br><br>
			<a class="btn btn-danger btn-sm text-white"><i class="fa fa-trash fa-sm"></i></a></td>
      </tr> 
	  
	  <tr>
		<td style="color:blue;">AJ256458/BHEL/IRON/102</td>
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
        <td><a class="btn btn-primary btn-sm text-white"><i class="fa fa-edit fa-sm"></i></a><br><br>
			<a class="btn btn-danger btn-sm text-white"><i class="fa fa-trash fa-sm"></i></a></td>
      </tr> 
	  
	  <tr>
		<td style="color:blue;">AJ256458/BHEL/IRON/102</td> 
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
        <td><a class="btn btn-primary btn-sm text-white "><i class="fa fa-edit fa-sm"></i></a><br><br>
			<a class="btn btn-danger btn-sm text-white "><i class="fa fa-trash fa-sm"></i></a></td>
      </tr> 
      
    </tbody>
  </table>

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
	include('./footer.php');
?>
</body>

</html>
