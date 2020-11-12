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

			<table class="table table-striped table-bordered table-sm text-center mt-5 w-auto small"  width="100%" cellspacing="0">
			<thead class="bg-info  text-white text-center">
					<th colspan="12"><b>EMD</b></th>
				</thead>
				<thead class="bg-primary text-white">
				<tr>
					<td>Auction Id</td>
					<td>Company Name</td>
					<td>Lot No</td>
					<td>Location</td>
					<td>Status</td>
					 <td>View Auction</td>
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
				
				<tr>
				
					<td><b><?php echo $sqldata[0]->sauctionid; ?></b></td>
					<td><?php echo $sqldata[0]->scomapnyname; ?></td>
					<td><?php echo $sqldata[0]->slotno; ?></td></td>
					<td><?php echo $sqldata[0]->slotlocation; ?></td>
				
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					

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
