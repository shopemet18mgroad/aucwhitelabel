 <?php
    include('./header.php');
	?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Bidding Data</h1>
            
          </div>

          <!-- Content Row -->
         <div class="col-sm-12 col-md-12">
          <div class="card shadow mb-4">
            <div class="card-body">
			<div class="table-responsive">
			
			<form class="form-inline mb-3">
			  
			  <div class="form-group ml-5">
			  <label>Date</label>
			
					<input class="form-control col-sm-5 m-2" type="Date" id="sdate" name="sdate">
					<input class="form-control col-sm-5 ml-2" type="Date" id="ldate" name="ldate">
				</div>
				
				 <div class="form-group col-sm-5 mr-4 ml-5">
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
			
         <table class="table table-striped text-center table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">		
    <thead class="bg-primary text-white">
      <tr>
		<th colspan="12" style="Text-align:center;">Bidding Data</th></thead>
		<tbody>
			<tr>
			<td class="bdata" style="Text-align:center;"><a href="biddingdatadetail.php"><u>Adani Logistic Ltd/2345/xcd/ongoing</a></u></td>
			</tr>
			<tr>
			<td class="bdata" style="Text-align:center;"><a href="biddingdatadetail.php"><u>Adani Logistic Ltd/2345/xcd/ongoing</a></u></td>
			</tr>
			<tr>
			<td class="bdata" style="Text-align:center;"><a href="biddingdatadetail.php"><u>Adani Logistic Ltd/2345/xcd/ongoing</u></a></td>
			</tr>
			<tr>
			<td class="bdata" style="Text-align:center;"><a href="biddingdatadetail.php"><u>Adani Logistic Ltd/2345/xcd/ongoing</u></a></td>
			</tr>
			<tr>
			<td class="bdata" style="Text-align:center;"><a href="biddingdatadetail.php"><u>Adani Logistic Ltd/2345/xcd/ongoing</u></a></td>
			</tr> 
      
    </tbody>
  </table>

		  </div>
            </div>
          </div>
		</div>
        </div>
	
          <!-- Content Row -->
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
 <?php
    include('./footer.php');
	?>
