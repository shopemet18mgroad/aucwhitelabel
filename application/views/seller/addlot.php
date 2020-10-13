 <?php
   // include('./header.php');
	?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Start Auction</h1>
           
          </div>

          <!-- Content Row -->
          <div class="row p-2">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
               <table class="table table-striped  table-sm text-left p-4 " id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-primary text-white">
      <tr>
		<th colspan="10" class="bg-info"><center>Add Lot</center></th>  
      </tr>
    </thead>
    <tbody>
	<tr>
		  <td width="12%">Auction Id.</td>
		  <td width="8%" style="color:blue;">AJ256458/BHEL/IRON/102</td>
	  </tr>
	  
	  <tr>
		  <td>Serial No.</td>
		  <td><input class="form-control w-50" type="text" id="sserialno" name="sserialno"></td>
	  </tr>
      
	  <tr>
		  <td>Product Name</td>
		  <td><input class="form-control w-50" type="text" id="sproductname" name="sproductname"></td>
	  </tr>
	  <tr>
		  <td>Product Category</td>
		  <td><select class="form-control w-50" id="sselectcategory" name="sselectcategory">
				<option value="one" selected>Select</option>
				<option value="two">Ferrous</option>
				<option value="two">Non Ferrous</option>
				<option value="three" >Minor Metals</option>
				<option value="four">Plain paper</option>
				<option value="five">Granules</option>
				<option value="six">All Construction Materials</option>
				</select></td>
	  </tr>
	   <tr>
		  <td>Product Description</td>
		  <td><textarea class="form-control w-75" type="text" id="sproductdescription" name="sproductdescription"></textarea></td>
	  </tr>
	  <tr>  												
		<td>Location Of Product</td>
		<td><select class="form-control w-50" id="splocation" name="splocation">
				<option value="one" selected>Hydrabad</option>
				<option value="two">Mangalore</option>
				<option value="three" >Bangalore</option>
				<option value="four">Mysore</option>
				<option value="five">Mumbai</option>
				<option value="six">Delhi</option>
				</select></td>
	</tr>
	<tr>  												
		<td>Inspection Date & Time</td>
		<td><input class="form-control w-50" type="date" id="sinpectdate&time" name="sinpectdate&time">
		<input class="form-control w-25 mt-2" type="time" id="sinpectdate&time" name="sinpectdate&time"></td>
	</tr>
	
	<tr>
		<td>EMD Details</td>
		<td><textarea class="form-control w-75" type="text" id="semddetail" name="semddetail"></textarea></td>
	</tr>
	
	<tr>
		<td>Last Date Of Submiting EMD</td>
		<td><input class="form-control w-50" type="date" id="slastdateemdsub" name="slastdateemdsub"></td>
	</tr>
	<tr>
		<td>Expected Price</td>
		<td><input class="form-control w-50" type="text" id="sprice" name="sprice"></td>
	</tr>
	<tr>
		<td>Starting Bid Price</td>
		<td><input class="form-control w-50" type="text" id="sstartbidprice" name="sstartbidprice"></td>
	</tr>
	</tr>
		<td>Qty</td>
		<td><input class="form-control w-50" type="text" id="sqty" name="sqty"></td>
	</tr>
	
	<tr>
		<td>Unit Of Measurment</td>
		<td><select class="form-control w-50" id="sunitmeasurment" name="sunitmeasurment" placeholder="KG">
				<option value="one" selected>KG</option>
				<option value="two">150</option>
				<option value="three">100</option>
				<option value="four">80</option>
				<option value="five">50</option>
				<option value="six">20</option>
				</select>
				<select class="form-control w-50 mt-2" id="sunitmeasurment" name="sunitmeasurment">
				<option value="one" selected>Ton</option>
				<option value="two">2</option>
				<option value="three">0.05</option>
				<option value="four">0.04</option>
				<option value="five">0.02</option>
				<option value="six">0.01</option>
				</select></td>
	</tr>
	
	<tr>
		<td>Bid Base</td>
		<td><input class="form-control w-50" type="text" id="sbidbase" name="sbidbase"></td>
	</tr>
	<tr>
	<td>GST</td>
	<td><input class="form-control w-50" type="text" id="sgst" name="sgst"></td>
    </tr>
  
     <tr>
		<td>Other Tax</td>
		<td><input class="form-control w-50" type="text" id="sothertax" name="sothertax"></td>
    </tr>
	<tr>
		<td>EMD Amount</td>
		<td><select class="form-control w-50" id="semdamount" name="semdamount">
				<option value="one" selected>Percentage</option>
				<option value="two">15%</option>
				<option value="three">10%</option>
				<option value="four">8%</option>
				<option value="five">5%</option>
				<option value="six">2%</option>
				</select><input class="form-control w-50 mt-2" type="text" id="onlineaucdate" name="onlineaucdate"></td>
    </tr>	
	<tr>
		<td>Lifting Period</td>
		<td><input class="form-control w-50" type="date" id="sliftingperiod" name="sliftingperiod">
		<input class="form-control w-25 mt-2" type="time" id="sliftingperiod" name="sliftingperiod"></td>
    </tr>
	<tr>
		<td>PCB Certificate</td>
		<td><div class="form-check form-check-inline ">
			<input type="checkbox" class="form-check-input" id="spcbcertificate" name="spcbcertificate">
			<label class="form-check-label" for="spcbcertificate">Yes</label>
			</div>
			<div class="form-check form-check-inline ">
			<input type="checkbox" class="form-check-input" id="spcbcertificate" name="spcbcertificate">
			<label class="form-check-label" for="spcbcertificate">No</label>
			</div></td>
    </tr>
	<tr>
	<td colspan="11">
	<center><a type="button" class="btn btn-info text-white ml-3"  data-dismiss="modal">Add Another Lot</a>
	<a type="reset" class="btn btn-info text-white" href="auctiondetails.php" data-dismiss="modal">Submit</a>
	</center></td>
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
   // include('./footer.php');
	?>
