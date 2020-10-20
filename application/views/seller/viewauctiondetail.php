<?php
   // include('./header');
	?>
        <!-- End of Topbar -->

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
			
         <table class="table table-striped text-center table-sm table-bordered w-auto small mt-5  width="100%" cellspacing="0">		
    <thead class="bg-primary text-white">
      <tr>
		<th colspan="14" class="bg-info">Auction Details</th>
		</tr>
		<tr>
			<th>Auction Id</th>
			<th>Lot No.</th>
			<th>Lot Name</th>
			<th>Location</th>
			<th>Qty</th>
			<th>Unit</th>
			<th>Purity</th>
			<th>Final Bid</th>
			<th>Date/Time</th>
			<th>Amount</th>
			<th>Description</th>
			<th>Auction Status</th>
			<th>Download</th>
			</tr>

		</thead>
		<tbody>
			
			<tr>
			<td style="color:blue;"><a href="<?php echo base_url();?>seller_closedauction">AJ256458/BHEL/IRON/102</a></td> 
			<td>M-5</td>
			<td>Iron</td>
			<td>BHUBANESWAR</td>
			<td>50</td>
			<td>H-5</td>
			<td>75%</td>
			<td>1,00,000</td>
			<td>15-8-2020 5:00</td>
			<td>2,00,000</td>
			<td><a href=""><u>Type: Pipes, Sheets, Rods, Blocks & Etc </u></a></td>
			<td>Closed</td>
			<td><a href=""><i class="fa fa-download"></i></a></td>
			</tr>
			<tr>
			<td style="color:blue;"><a href="<?php echo base_url();?>seller_closedauction">AJ256458/BHEL/IRON/102</a></td> 
			<td>M-8</td>
			<td>Plastic</td>
			<td>BHUBANESWAR</td>
			<td>60</td>
			<td>K-7</td>
			<td>80%</td>
			<td>1000</td>
			<td>15-8-2020 5:00</td>
			<td>6,00,000</td>
			<td><a href=""><u>Type: Pipes, Sheets, Rods, Blocks & Etc</u></a></td>
			<td>Closed</td>
			<td><a href=""><i class="fa fa-download"></i></a></td>
			</tr> 
			
			<tr>
			<td style="color:blue;">AJ256458/BHEL/IRON/102</td> 
			<td>M-5</td>
			<td>Iron</td>
			<td>BHUBANESWAR</td>
			<td>50</td>
			<td>H-5</td>
			<td>75%</td>
			<td>1,00,000</td>
			<td>15-8-2020 5:00</td>
			<td>2,00,000</td>
			<td><a href=""><u>Type: Pipes, Sheets, Rods, Blocks & Etc </u></a></td>
			<td>Upcoming</td>
			<td><a href=""><i class="fa fa-download"></i></a></td>
			</tr>
			<tr>
			<td style="color:blue;">AJ256458/BHEL/IRON/102</td> 
			<td>M-8</td>
			<td>Plastic</td>
			<td>BHUBANESWAR</td>
			<td>60</td>
			<td>K-7</td>
			<td>80%</td>
			<td>1000</td>
			<td>15-8-2020 5:00</td>
			<td>6,00,000</td>
			<td><a href=""><u>Type: Pipes, Sheets, Rods, Blocks & Etc</u></a></td>
			<td>Ongoing</td>
			<td><a href=""><i class="fa fa-download"></i></a></td>
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

          
        

 
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <?php
   // include('./footer');
	?>
