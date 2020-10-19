<?php 
	//include('./header.php');
?>        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Unsold Products</h1>
            
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
						<form action="/action_page.php">
							
								<input type="text" class="form-control" placeholder="Search.." name="search">
								<button class="form-control" type="submit"><i class="fa fa-search"></i></button>
					
						</form>
					</td>
				</div>
		
			</form>
		
		<table class="table table-striped table-bordered table-sm text-center mt-5"  width="100%" cellspacing="0">
				<thead class="bg-primary text-white">
				<tr>
					<th>Auction Id</th>
					<th>Lot No</th>
					<th>Lot Name</th>
					<th> Location</th>
					<th>Date</th>
					<th>Amount</th>
					<th>Reauction</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td><a href="#">BHEL/BBR/ISG LTD/2/Adarsh Vihar/25087/20-20</a></td>
					<td>M-101</td>
					<td>SS Iron</td>
					<td>Bangalore</td>
					<td>20-10-2019</td>
					<td>2,00,000</td>
					<td><a href="#"><button type="button" class="btn btn-info btn-sm">Reauction</button></a></td>
				</tr>
				<tr>
					<td><a href="#">BHEL/BBR/ISG LTD/2/Adarsh Vihar/25087/20-20</a></td>
					<td>M-102</td>
					<td>Iron</td>
					<td>Bangalore</td>
					<td>20-10-2019</td>
					<td>2,00,000</td>
					<td><a href="#"><button type="button" class="btn btn-info btn-sm">Reauction</button></a></td>
				</tr>
				<tr>
					<td><a href="#">BHEL/BBR/ISG LTD/2/Adarsh Vihar/25087/20-20</a></td>
					<td>M-103</td>
					<td>Cast Iron</td>
					<td>Bangalore</td>
					<td>20-10-2019</td>
					<td>2,00,000</td>
					<td><a href="#"><button type="button" class="btn btn-info btn-sm">Reauction</button></a></td>
				</tr>
				<tr>
					<td><a href="#">BHEL/BBR/ISG LTD/2/Adarsh Vihar/25087/20-20</a></td>
					<td>M-104</td>
					<td>Cast Iron</td>
					<td>Bangalore</td>
					<td>20-10-2019</td>
					<td>2,00,000</td>
					<td><a href="#"><button type="button" class="btn btn-info btn-sm">Reauction</button></a></td>
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
