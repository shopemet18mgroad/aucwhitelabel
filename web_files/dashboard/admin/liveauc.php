<?php 
	include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h3 mb-0 text-gray-800">Live Auction</h2>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
			   <form class="form-inline ">
			  <div class="form-group w-auto small">
				<form action="/action_page.php">
							<div class="form-group">
								<label>Date</label>
									<input class="form-control col-sm-5 m-2" type="Date" id="sdate" name="sdate">
									<input class="form-control col-sm-5 ml-2" type="Date" id="ldate" name="ldate">
							</div>
				
				 <div class="form-group col-sm-3 mr-5">
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

				<div class="form-group col-sm-3 mr-5">
				<label>Seller:</label>
				 
					<select class="form-control col-sm-5 ml-1" id="seller" name="seller" >
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
			</div>
			</form>
						 
		<table class="table table-striped table-sm text-center table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-primary text-white">
				<tr>
					<th width="60%">Click for Auction</th>
				</tr>
				</thead>
				<tbody>
				<tr>												
					<td><a href="liveauc_2.php">EEMT/BBR/OMFED LTD/1/Shashi Nagar/99087/19-20</a></td>
				</tr>
				<tr>
					<td><a href="liveauc_2.php">BHEL/BBR/ISG LTD/2/Adarsh Vihar/25087/20-20</a></td>
				</tr>  
				<tr>
					<td><a href="liveauc_2.php">REMT/BBR/ONGC LTD/3/Tamil Nadu/Vellore Dist/465895/18-20</a></td>
				</tr>  
				<tr>												
					<td><a href="liveauc_2.php">HMT/BBR/Adnani logistic Ltd/4/Vidyut Nagar/99087/19-20</a></td>
				<tr>												
					<td><a href="liveauc_2.php">BEL/BBR/ONGC LTD/5/Nehru Nagar/99087/19-20</a></td>
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
