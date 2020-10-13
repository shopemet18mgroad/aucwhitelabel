 <?php
   // include('./header');
	?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Bidding Data Details</h1>
            
          </div>

          <!-- Content Row -->
         <div class="col-sm-12 col-md-12">
          <div class="card shadow mb-4">
            <div class="card-body">
			<div class="table-responsive">
			
			<form class="form-inline">
			  
			  <div class="form-group mr-4 offset-sm-2">
			  <td colspan="5">
			  <form action="/action_page">
			  <div class="form-group">
			  <label>Date</label>
			
					<input class="form-control col-sm-5 m-2" type="Date" id="sdate" name="sdate">
					<input class="form-control col-sm-5 ml-2" type="Date" id="ldate" name="ldate">
				</div>
				
				 <div class="form-group col-sm-5 mr-4">
				<label>Category:</label>

					<select class="form-control col-sm-5 ml-2" id="scategory" name="scategory">
					<option value="one" selected>Ferrous</option>
					<option value="two">Non Ferrous</option>
					<option value="three" >Minor Metals</option>
					<option value="four">Plain paper</option>
					<option value="five">Granules</option>
					<option value="six">All Construction Materials</option>
					</select>
					
					<a href="#"><button type="button" class="btn btn-primary btn-sm ml-4 mt-2 mb-2">Search</button></a>
				</div>
			</form>
			</td>
			</div>
			</form>
			
         <table class="table table-striped text-center table-sm table-bordered w-auto small" id="dataTable" width="100%" cellspacing="0">		
    <thead class="bg-primary text-white">
      <tr>
		<th colspan="13" class="bg-info">Bidding Data Details</th>
		</tr>
		<tr>
		<th>Auction Id</th>
		<th>Company Name</th>
		<th>Location</th>
		<th>Lot No.</th>
		<th>Lot Name</th>
		<th>Qty</th>
		<th>Final Bid Price</th>
		<th>Unit</th>
		<th>End Time</th>
		<th>Starting Amount</th>
		<th>Download</th>
		</tr>

		</thead>
		<tbody>
			<tr>
			<td style="color:blue;">AJ256458/BHEL/IRON/102</td>
			<td><a href="">XYZ Company</a></td>
			<td>BHUBANESWAR</td>
			<td>M-9</td>
			<td>Paper</td>
			<td>50</td>
			<td>50,000</td>
			<td>H-8</td>
			<td>22:00</td>
			<td>5,000</td>
			<td><a href=""><i class="fa fa-download"></i></a></td>
			</tr>
			<tr>
			<td style="color:blue;">AJ256458/BHEL/IRON/102</td>
			<td><a href="">XYZ Company</a></td>
			<td>BHUBANESWAR</td>
			<td>M-9</td>
			<td>Paper</td>
			<td>50</td>
			<td>50,000</td>
			<td>H-8</td>
			<td>22:00</td>
			<td>5,000</td>
			<td><a href=""><i class="fa fa-download"></i></a></td>
			</tr>
			<tr>
			<td style="color:blue;">AJ256458/BHEL/IRON/102</td>
			<td><a href="">XYZ Company</a></td>
			<td>BHUBANESWAR</td>
			<td>M-9</td>
			<td>Paper</td>
			<td>50</td>
			<td>50,000</td>
			<td>H-8</td>
			<td>22:00</td>
			<td>5,000</td>
			<td><a href=""><i class="fa fa-download"></i></a></td>
			</tr>
			<tr>
			<td style="color:blue;">AJ256458/BHEL/IRON/102</td>
			<td><a href="">XYZ Company</a></td>
			<td>BHUBANESWAR</td>
			<td>M-9</td>
			<td>Paper</td>
			<td>50</td>
			<td>50,000</td>
			<td>H-8</td>
			<td>22:00</td>
			<td>5,000</td>
			<td><a href=""><i class="fa fa-download"></i></a></td>
			</tr>
			<tr>
			<td style="color:blue;">AJ256458/BHEL/IRON/102</td>
			<td><a href="">XYZ Company</a></td>
			<td>BHUBANESWAR</td>
			<td>M-9</td>
			<td>Paper</td>
			<td>50</td>
			<td>50,000</td>
			<td>H-8</td>
			<td>22:00</td>
			<td>5,000</td>
			<td><a href=""><i class="fa fa-download"></i></a></td>
			</tr>
			<tr>
			<td style="color:blue;">AJ256458/BHEL/IRON/102</td>
			<td><a href="">XYZ Company</a></td>
			<td>BHUBANESWAR</td>
			<td>M-9</td>
			<td>Paper</td>
			<td>50</td>
			<td>50,000</td>
			<td>H-8</td>
			<td>22:00</td>
			<td>5,000</td>
			<td><a href=""><i class="fa fa-download"></i></a></td>
			</tr>
			<tr>
			<td style="color:blue;">AJ256458/BHEL/IRON/102</td>
			<td><a href="">XYZ Company</a></td>
			<td>BHUBANESWAR</td>
			<td>M-9</td>
			<td>Paper</td>
			<td>50</td>
			<td>50,000</td>
			<td>H-8</td>
			<td>22:00</td>
			<td>5,000</td>
			<td><a href=""><i class="fa fa-download"></i></a></td>
			</tr>
			
      
    </tbody>
  </table>

		  </div>
            </div>
          </div>
		</div>
        </div>
	
          <!-- Content Row -->

    <!-- End of Content Wrapper -->


  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
   <?php
  //  include('./footer');
	?>