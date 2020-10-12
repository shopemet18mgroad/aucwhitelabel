<?php 
	//include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Closed auction</h1>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
			  <form class="form-inline">
			  
			  <div class="form-group">
			  <label>Date</label>
			
					<input class="form-control col-sm-5 m-2" type="Date" id="sdate" name="sdate">
					<input class="form-control col-sm-5 ml-2" type="Date" id="ldate" name="ldate">
				</div>
				
				 <div class="form-group col-sm-3 mr-4">
				<label>Category:</label>

					<select class="form-control col-sm-5 ml-2" id="scategory" name="scategory">
					<option value="one" selected>Ferrous</option>
					<option value="two">Non Ferrous</option>
					<option value="three" >Minor Metals</option>
					<option value="four">Plain paper</option>
					<option value="five">Granules</option>
					<option value="six">All Construction Materials</option>
					</select>
				</div>

				<div class="form-group col-sm-3">
				<label>Seller:</label>
				 
					<select class="form-control col-sm-5 ml-1" id="seller" name="seller">
					<option value="one" selected>BHEL</option>
					<option value="two">Exide</option>
					<option value="three" >Hindustan Ltd</option>
					<option value="four">Aditya Birla Group</option>
					<option value="five" >JSW Steel</option>
					<option value="six">Nalco</option>
					</select>
					<a href="#"><button type="button" class="btn btn-primary btn-sm ml-4 mt-2 mb-2">Search</button></a>
				</div>
			
			</form>
		
		<table class="table table-striped table-bordered table-sm text-center mt-5" id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-primary text-white">
				<tr>
					<tr><th>Auction Id</th>
						<th>Company Name </th>
						<th>Lot No</th>
						<th>Lot Name</th>
						<th>Location</th>
						<th>Starting Date</th>
						<th>Closing Date</th>
						<th>Status</th>
					</tr>
				</tr>
				</thead>
				<tbody>
				<tr><td><a href="">EEMT/BBR/OMFED LTD/1/Shashi Nagar/99087/19-20</a></td>		
					<td class="up">BHEL Ltd.</td>
					<td class="up">M293</td>
					<td class="up">Horizontal Boring Machine</td>
					<td class="up">Uttrakhand</td>
					<td class="up">20-07-2019</td>
					<td class="up">21-07-2019</td>
					<td class="up" style="color:orange">Shortlisted</td>
				</tr>
				<tr><td><a href="">EEMT/BBR/OMFED LTD/1/Shashi Nagar/99087/19-20</a></td>												
					<td class="up">BSP</td>
					<td class="up">E687</td>
					<td class="up">SS Iron rod</td>
					<td class="up">Bhilai</td>
					<td class="up">16-03-2020</td>
					<td class="up">17-03-2020</td>
					<td class="up" style="color:green"><b>Winner</b></td>
				</tr>
				<tr><td><a href="">EEMT/BBR/OMFED LTD/1/Shashi Nagar/99087/19-20</a></td>												
					<td class="up">Paradip port  trust</td>
					<td class="up">E689</td>
					<td class="up">Jig Boring Machine</td>
					<td class="up">Gandhi</td>
					<td class="up">14-01-2020</td>
					<td class="up">15-01-2020</td>
					<td class="up" style="color:orange">Shortlisted</td>
				</tr>
				<tr><td><a href="">EEMT/BBR/OMFED LTD/1/Shashi Nagar/99087/19-20</a></td>												
					<td class="up">Paradip </td>
					<td class="up">E689</td>
					<td class="up">Boring Machine</td>
					<td class="up">Gandhi</td>
					<td class="up">14-01-2020</td>
					<td class="up">15-01-2020</td>
					<td class="up">Lost</td>
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
