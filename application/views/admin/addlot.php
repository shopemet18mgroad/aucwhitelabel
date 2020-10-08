<?php 
	include('./header.php');
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
               <table class="table table-striped table-sm text-left p-4" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-info text-white">
      <tr>
		<th colspan="10"><center>Add Lot</center></th>  
      </tr>
    </thead>
    <tbody>
	<tr>
		  <td width="11%">Auction No.</td>
		  <td width="4%" style="color:blue;">AJ256458/BHEL/IRON/102</td>
	  </tr>
	  
	  <tr>
		  <td>Serial No.</td>
		  <td><input class="tos" type="text" id="emd" name="emd"></td>
	  </tr>
      
	  <tr>
		  <td>Product Name</td>
		  <td><input class="tos" type="text" id="emd" name="emd"></td>
	  </tr>
	  <tr>
		  <td>Product Category</td>
		  <td><select class="tos" id="category" name="category">
				<option value="one" selected>Ferrous</option>
				<option value="two">Non Ferrous</option>
				<option value="three" >Minor Metals</option>
				<option value="four">Plain paper</option>
				<option value="five">Granules</option>
				<option value="six">All Construction Materials</option>
				</select></td>
	  </tr>
	   <tr>
		  <td>Product Description</td>
		  <td><textarea class="tos p-4" type="text" id="emd" name="emd"></textarea></td>
	  </tr>
	  <tr>  												
		<td>Location Of Product</td>
		<td><select class="tos" id="category" name="category">
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
		<td><input class="tos" type="date" id="inpectdate" name="inpectdate">
		<input class="tos" type="time" id="inpecttime" name="inpecttime"></td>
	</tr>
	
	<tr>
		<td>EMD Details</td>
		<td><input class="tos" type="text" id="emd" name="emd"></td>
	</tr>
	
	<tr>
		<td>Last Date Of Submiting EMD</td>
		<td><input class="tos" type="date" id="emdlastdate" name="emdlastdate"></td>
	</tr>
	
	<tr>

		<td>Expected Price</td>
		<td><input class="tos" type="text" id="emd" name="emd"></td>
	</tr>
	<tr>
		<td>Starting Bid Price</td>
		<td><input class="tos" type="text" id="emd" name="emd"></td>
	</tr>
	</tr>
		<td>Qty</td>
		<td><input class="tos" type="text" id="emd" name="emd"></td>
	</tr>
	
	<tr>
		<td>Unit Of Measurment</td>
		<td><select class="tos" id="category" name="category">
				<option value="one" selected>200</option>
				<option value="two">150</option>
				<option value="three">100</option>
				<option value="four">80</option>
				<option value="five">50</option>
				<option value="six">20</option>
				</select>KG
				<select class="tos" id="category" name="category">
				<option value="one" selected>4</option>
				<option value="two">2</option>
				<option value="three">0.05</option>
				<option value="four">0.04</option>
				<option value="five">0.02</option>
				<option value="six">0.01</option>
				</select>Tan</td>
	</tr>
	
	<tr>
		<td>Bid Base</td>
		<td><input class="tos" type="text" id="onlineaucdate" name="onlineaucdate"></td>
	</tr>
	<tr>
	<td>GST</td>
	<td><input class="tos" type="text" id="onlineaucdate" name="onlineaucdate"></td>
    </tr>
  
     <tr>
		<td>Other Tex</td>
		<td><input class="tos" type="text" id="onlineaucdate" name="onlineaucdate"></td>
    </tr>
	<tr>
		<td>EMD Amount</td>
		<td>18%</td>
    </tr>	
	<tr>
		<td>Lifting Period</td>
		<td><input class="tos" type="date" id="onlineaucdate" name="onlineaucdate">
		<input class="tos" type="time" id="onlineaucdate" name="onlineaucdate"></td>
    </tr>
	<tr>
		<td>PCB Certificate</td>
		<td><div class="form-check form-check-inline ">
			<input type="checkbox" class="form-check-input" id="exampleCheck1">
			<label class="form-check-label" for="exampleCheck1">Yes</label>
			</div>
			<div class="form-check form-check-inline ">
			<input type="checkbox" class="form-check-input" id="exampleCheck1">
			<label class="form-check-label" for="exampleCheck1">No</label>
			</div></td>
    </tr>
  
    </tbody>
  </table>
  
  <center>
  <a type="reset" class="btn btn-info text-white" data-dismiss="modal">Add Another Lot</a>
  <a type="button" class="btn btn-info text-white" href="auctiondetails.php" data-dismiss="modal">Submit</a>
  </center>
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
