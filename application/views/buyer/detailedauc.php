<?php 
	//include('./header.php');
?>
   <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h3 mb-0 text-gray-800">Bidding Details</h2>
            
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
				<th>Company Name </th>
				<th>Lot No</th>
				<th>Lot Name</th>
				<th>Location</th>
				<th>Starting Date</th>
				<th>Closing Date</th>
				<th>Download</th>
			</tr>
		<tbody>
			<tr>
				<td><a href="<?php echo base_url();?>buyer_viewdetail">EEMT/BBR/OMFED LTD/1/Shashi Nagar/99087/19-20</a> </td>
				<td><a href="">BHEL Ltd.</a></td>
				<td>M293</td>
				<td>Horizontal Boring Machine</td>
				<td>Uttrakhand</td>
				<td>20-07-2019</td>
				<td>21-07-2019</td>
				<td><i class="fa fa-download" style="color:blue"></i></td>
			</tr>
			<tr>
				<td><a href="<?php echo base_url();?>buyer_viewdetail">EEMT/BBR/OMFED LTD/1/Shashi Nagar/99087/19-20</a> </td>
				<td><a href="">BSP</a></td>
				<td>E687</td>
				<td>SS Iron rod</td>
				<td>Bhilai</td>
				<td>16-03-2020</td>
				<td>17-03-2020</td>
				<td><i class="fa fa-download" style="color:blue"></i></td>
			</tr>
			<tr>
				<td><a href="<?php echo base_url();?>buyer_viewdetail">EEMT/BBR/OMFED LTD/1/Shashi Nagar/99087/19-20</a> </td>
				<td><a href="">Paradip port  trust</a></td>
				<td>E689</td>
				<td>Jig Boring Machine</td>
				<td>Gandhi</td>
				<td>14-01-2020</td>
				<td>15-01-2020</td>
				<td><i class="fa fa-download" style="color:blue"></i></td>
			</tr>
			<tr>
				<td><a href="<?php echo base_url();?>buyer_viewdetail">EEMT/BBR/OMFED LTD/1/Shashi Nagar/99087/19-20</a> </td>
				<td><a href="">Paradip</a> </td>
				<td>E689</td>
				<td>Boring Machine</td>
				<td>Gandhi</td>
				<td>14-01-2020</td>
				<td>15-01-2020</td>
				<td><i class="fa fa-download" style="color:blue"></i></td>
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
