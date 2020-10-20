 <?php 
	//include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h3 mb-0 text-gray-800">EMD Status</h2>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">

		<table class="table table-striped table-bordered table-sm text-center" id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-info text-white text-center">
					<th colspan="7">EMD</th>
				</thead>
				<thead class="bg-primary text-white">
				<tr>
					<th>Auction Id</th>
					<th width="60%">Auction Description</th>
					<th width="10%">EMD Amount</th>
				</tr>
				</thead>

				<tbody>
				<tr>
					<td>EEMT/BBR/OMFED LTD/1/Shashi Nagar/99087/19-20</td>
					<td>An iron rod is a length of iron that is mainly used in heavy construction projects. Reinforced concrete is intertwined with iron rods, also called rebar, to strengthen the tension of the build</td>
					<td>25,000</td>
				</tr>
				
				</tbody>
		 </table>
				<table class="table table-striped table-sm table-bordered mt-4 text-center" id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-warning  text-white text-center">
					<th colspan="8">Buyer Details</th>
				</thead>
				<thead class="bg-primary text-white">
				<tr>
					<th>Lot No</th>
					<th>Lot Name</th>
					<th>Buyer Name</th>
					<th>Company Name</th>
					<th>EMD Type</th>
					<th>View DD</th>
					<th>Action</th>
				</tr>
				</thead>

				<tbody>
				<tr>
					<td>M-167</td>
					<td>Horizontal Boring Machine</td>
					<td>Shashi Kumar</td>
					<td>OMFED LTD.</td>
					<td>DD</td>
					<td><a href="" data-toggle="modal" data-target="#myModal">
					<button type="submit" class="btn btn-info btn-sm w-50">
					<i class="fa fa-eye" aria-hidden="true"></i>
					</button>
					</a>
				
				<div class="modal" id="myModal">
					<div class="modal-dialog modal-sm">
					  <div class="modal-content">
					  
						<!-- Modal Header -->
						
						
						<!-- Modal body -->
						<div class="modal-body">
						<img src="<?php echo base_url()."web_files/";?>img/dd.png" class="img-fluid" alt="Responsive image">
						</div>
						
						<!-- Modal footer -->
						<div class="modal-footer">
						  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
						
					  </div>
					</div>
				  </div>
					</td>
					<td><a href=""><button type="button" class="btn btn-info btn-sm">Approve</button></a>
					<a href=""><button type="button" class="btn btn-info btn-sm">Reject</button></a></td>
				</tr>
				<tr>
					<td>M-167</td>
					<td>Horizontal Boring Machine</td>
					<td>Shashi Kumar</td>
					<td>OMFED LTD.</td>
					<td>DD</td>
						<td><a href="" data-toggle="modal" data-target="#myModal">
					<button type="submit" class="btn btn-info btn-sm w-50">
					<i class="fa fa-eye" aria-hidden="true"></i>
					</button>
					</a>
				
				<div class="modal" id="myModal">
					<div class="modal-dialog modal-sm">
					  <div class="modal-content">
					  
						<!-- Modal Header -->
						
						
						<!-- Modal body -->
						<div class="modal-body">
						<img src="<?php echo base_url()."web_files/";?>images/dd.png" class="img-fluid" alt="Responsive image">
						</div>
						
						<!-- Modal footer -->
						<div class="modal-footer">
						  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
						
					  </div>
					</div>
				  </div>
					</td>
					<td><a href=""><button type="button" class="btn btn-info btn-sm">Approve</button></a>
					<a href=""><button type="button" class="btn btn-info btn-sm">Reject</button></a></td>
				</tr>
				<tr>
					<td>M-167</td>
					<td>Horizontal Boring Machine</td>
					<td>Shashi Kumar</td>
					<td>OMFED LTD.</td>
					<td>DD</td>
					<td><a href="" data-toggle="modal" data-target="#myModal">
					<button type="submit" class="btn btn-info btn-sm w-50">
					<i class="fa fa-eye" aria-hidden="true"></i>
					</button>
					</a>
				
				<div class="modal" id="myModal">
					<div class="modal-dialog modal-lg">
					  <div class="modal-content">
					  
						<!-- Modal Header -->
						
						
						<!-- Modal body -->
						<div class="modal-body">
						<img src="<?php echo base_url()."web_files/";?>img/dd.png" class="img-fluid" alt="Responsive image">
						</div>
						
						<!-- Modal footer -->
						<div class="modal-footer">
						  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
						
					  </div>
					</div>
				  </div>
					</td>
					<td><a href=""><button type="button" class="btn btn-info btn-sm">Approve</button></a>
					<a href=""><button type="button" class="btn btn-info btn-sm">Reject</button></a></td>
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
	//include('./footer.php');
?>
</body>

</html>
