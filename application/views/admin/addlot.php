<?php 
	//include('./header.php');
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
		  <td width="11%">Auction Id</td>
		  <td width="4%" style="color:blue;">AJ256458/BHEL/IRON/102</td>
	  </tr>
	  
	  <tr>
		  <td>Lot No.</td>
		  <td style="color:blue;">M-129</td>
	  </tr>
      
	  <tr>
		  <td>Lot Name</td>
		  <td><input class="form-control w-50" type="text" id="emd" name="emd"></td>
	  </tr>
	  <tr>
		  <td>Category</td>
		  <td><select class="form-control w-50" id="category" name="category">
				<option value="one" selected>Ferrous</option>
				<option value="two">Non Ferrous</option>
				<option value="three" >Minor Metals</option>
				<option value="four">Plain paper</option>
				<option value="five">Granules</option>
				<option value="six">All Construction Materials</option>
				</select></td>
	  </tr>
	   <tr>
		  <td>Description</td>
		  <td><textarea class="form-control w-75" type="text" id="emd" name="emd"></textarea></td>
	  </tr>
	  <tr>  												
		<td>Location Of Lot</td>
		<td><select class="form-control w-50" id="category" name="category">
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
		<td>
From: 	
    <input class="form-control w-50" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
 To:
    <input class="form-control w-50" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
</td>
	</tr>
	
	<tr>
		<td>EMD Details</td>
		<td><textarea class="form-control w-75" type="text" id="emd" name="emd"></textarea></td>
	</tr>
	
	<tr>
		<td>Last Date Of Submiting EMD</td>
		<td><input class="form-control w-50" type="date" id="emdlastdate" name="emdlastdate"></td>
	</tr>
	
	<tr>

		<td>Expected Price</td>
		<td><input class="form-control w-50" type="text" id="emd" name="emd"></td>
	</tr>
	<tr>
		<td>Starting Bid Price</td>
		<td><input class="form-control w-50" type="text" id="emd" name="emd"></td>
	</tr>
	</tr>
		<td>Qty</td>
		<td><input class="form-control w-50" type="text" id="emd" name="emd"></td>
	</tr>
	
	<tr>
		<td>Unit Of Measurment</td>
		<td><select class="form-control w-50" id="category" name="category">
				<option value="one" selected>Gram</option>
				<option value="two">Kilogram</option>
				<option value="three">Tonne</option>
				<option value="four">Megatonne</option>
				<option value="five">Gigatonne</option>
				</select></td>
	</tr>
	
	<tr>
		<td>Bid Base</td>
		<td><select class="form-control w-50" id="category" name="category">
				<option value="one" selected>Gram</option>
				<option value="two">Kilogram</option>
				<option value="three">Tonne</option>
				<option value="four">Megatonne</option>
				<option value="five">Gigatonne</option>
				</select></td>
	</tr>
	<tr>
	<td>GST</td>
	<td><input class="form-control w-50" type="text" id="onlineaucdate" name="onlineaucdate"></td>
    </tr>
  
     <tr>
		<td>Other Tax</td>
		<td><input class="form-control w-50" type="text" id="onlineaucdate" name="onlineaucdate"></td>
    </tr>
	<tr>
		<td>EMD Amount</td>
		<td><input class="form-control w-50" type="text" id="onlineaucdate" name="onlineaucdate"></td>
    </tr>	
	<tr>
		<td>Lifting Period</td>
		<td><input class="form-control w-50" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
		<input class="form-control w-50 mt-2" type="text" id="onlineaucdate" name="onlineaucdate" placeholder="15 days"></td>
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
  <a type="button" class="btn btn-info text-white" href="auctiondetails" data-dismiss="modal">Submit</a>
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
	//include('./footer.php');
?>

</body>

</html>
