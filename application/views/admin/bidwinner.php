<?php 
	//include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Bid Winner</h1>
            
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
		
		<table class="table table-striped table-bordered table-sm text-center mt-5 w-auto small"  width="100%" cellspacing="0">
				<!-- <thead class="bg-info text-white">
				<tr>
					<th colspan="10">List of Auction Name</th>
				</tr>
				</thead> -->
				<thead class="bg-primary text-white">
				<tr>
					 <th>Auction Id</th>
					 <th>Lot Name</th>
					 <th>Quantity</th>
					 <th>Expected Price</th>
					 <th>Starting Bid Price</th>
					 <th>Inspection Date</th>
					 <th>Inspection closing Date</th>
					 <th>Description</th>
					 <th>Download</th>
				</tr>
													
				</thead>
				<tbody>
				<tr>
					<td><a href="<?php echo base_url();?>admin_aucwinner"><u>AJ256458/BHEL/IRON/102</u></a></td>
					 <td>Paper</td>
					 <td>5</td>
					 <td>80%</td>
					 <td>1,000</td>
					 <td>02-07-2020</td>
					 <td>03-07-2020</td>
					 <td>Scrap/ obsolete/ surplus stores/ spares and capital equipments or coal or diamonds</td>
					 <td>
					<a href="" >
					<i class="fa fa-download"></i>
					</a></td>
				</tr>
				<tr>
					 <td><a href="<?php echo base_url();?>admin_aucwinner"><u>AJ256458/BHEL/IRON/102</u></a></td>
					 <td>Paper</td>
					 <td>5</td>
					 <td>80%</td>
					 <td>1,000</td>
					 <td>02-07-2020</td>
					 <td>03-07-2020</td>
					 <td>Scrap/ obsolete/ surplus stores/ spares and capital equipments or coal or diamonds</td>
					 <td>
					<a href="" >
					<i class="fa fa-download"></i>
					</a></td>
				</tr>
				<tr>
					 <td><a href="<?php echo base_url();?>admin_aucwinner"><u>AJ256458/BHEL/IRON/102</u></a></td>
					 <td>Paper</td>
					 <td>5</td>
					 <td>80%</td>
					 <td>1,000</td>
					 <td>02-07-2020</td>
					 <td>03-07-2020</td>
					 <td>Scrap/ obsolete/ surplus stores/ spares and capital equipments or coal or diamonds</td>
					 <td>
					<a href="" >
					<i class="fa fa-download"></i>
					</a></td>
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
