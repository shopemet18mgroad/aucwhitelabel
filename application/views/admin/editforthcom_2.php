 <?php 
	include('./headerdata.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h3 mb-0 text-gray-800">Edit Lot</h2>
            
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
					<th colspan="7">Auction Details</th>
				</thead>
				<thead class="bg-primary text-white">
				<tr>
					<th>Auction Id</th>
					<th>Company Name</th>
					<th>Location</th>
					<th>Seller Name</th>
				</tr>
				</thead>

				<tbody>
				<tr>
					<td>EEMT/BBR/OMFED LTD/1/Shashi Nagar/99087/19-20</td>
					<td>OMFED LTD.</td>
					<td>Vellore</td>
					<td>Shashi Kumar</td>
				</tr>
				
				</tbody>
		 </table>
				<table class="table table-striped table-sm table-bordered mt-4 text-center" id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-warning  text-white text-center">
					<th colspan="8">Lot Details</th>
				</thead>
				<thead class="bg-primary text-white">
				<tr>
					<th>Lot No</th>
					<th>Lot Name</th>
					<th>Quantity</th>
					<th>GST</th>
					<th>Action</th>
				</tr>
				</thead>

				<tbody>
				<tr>
					<td>M-167</td>
					<td>Horizontal Boring Machine</td>
					<td>1.0 Lot</td>
					<td>18.0</td>
					<td><a href="editlot.php" class="btn btn-primary btn-sm text-white"><i class="fa fa-edit fa-sm"></i></a>
						<a class="btn btn-danger btn-sm text-white"><i class="fa fa-trash fa-sm"></i></a></td>
				</tr>
				<tr>
					<td>M-163</td>
					<td>Cast Iron</td>
					<td>1.0 Lot</td>
					<td>20.0</td>
					<td><a href="editlot.php" class="btn btn-primary btn-sm text-white"><i class="fa fa-edit fa-sm"></i></a>
						<a class="btn btn-danger btn-sm text-white"><i class="fa fa-trash fa-sm"></i></a></td>
				</tr>
				<tr>
					<td>M-167</td>
					<td>Pig Iron</td>
					<td>1 MT</td>
					<td>20.0</td>
					<td><a href="editlot.php" class="btn btn-primary btn-sm text-white"><i class="fa fa-edit fa-sm"></i></a>
						<a class="btn btn-danger btn-sm text-white"><i class="fa fa-trash fa-sm"></i></a></td>
				</tr>
				<tr>
					<td>M-168</td>
					<td>SS Aluminum</td>
					<td>1.0 Lot</td>
					<td>20.0</td>
					<td><a href="editlot.php" class="btn btn-primary btn-sm text-white"><i class="fa fa-edit fa-sm"></i></a>
						<a class="btn btn-danger btn-sm text-white"><i class="fa fa-trash fa-sm"></i></a></td>
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
	include('./footerdata.php');
?>
</body>

</html>
