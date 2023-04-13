<?php 
	//include('./header.php');
	//print_r($scomp); die;
?>
<link href="<?php echo base_url()."web_files/";?>css/mediaform.css" rel="stylesheet" type="text/css">
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Update/Edit About Us</h1>
           
          </div>

          <!-- Content Row -->
          <div class="row w-100">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-md-10 offset-sm-1 p-2">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
               <table class="table table-striped text-left table-sm p-4" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-info text-white">
    </thead>
    <tbody>
    <form action="<?php echo base_url();?>Seller_startauction" method="POST" id="upload-form" enctype="multipart/form-data">
    <tr>
		<th colspan="10"><center>Introduction</center></th>  
      </tr>
	  
	  <tr>											
		  <td>Introduction Paragraph 1</td>
		  <td><textarea class="form-control w-100" type="text" id="svinspection" name="svinspection"></textarea></td>
	  </tr>
      <tr>											
		  <td>Introduction Paragraph 2</td>
		  <td><textarea class="form-control w-100" type="text" id="svinspection" name="svinspection"></textarea></td>
	  </tr>
      <tr>											
		  <td>Introduction Paragraph 3</td>
		  <td><textarea class="form-control w-100" type="text" id="svinspection" name="svinspection"></textarea></td>
	  </tr>
	  
	  <tr>
		<th colspan="10"><center>About Us Auction</center></th>  
      </tr>
	  
	  <tr>											
		  <td>About US Paragraph 1</td>
		  <td><textarea class="form-control w-100" type="text" id="svinspection" name="svinspection"></textarea></td>
	  </tr>
    <tr>
		<th colspan="10"><center>Our Mission</center></th>  
      </tr>
	  
	  <tr>											
		  <td>Our Mission Paragraph 1</td>
		  <td><textarea class="form-control w-100" type="text" id="svinspection" name="svinspection"></textarea></td>
	  </tr>
    <tr>
		<th colspan="10"><center>Our Vision</center></th>  
      </tr>
	  
	  <tr>											
		  <td>Our Vision Paragraph 1</td>
		  <td><textarea class="form-control w-100" type="text" id="svinspection" name="svinspection"></textarea></td>
	  </tr>
    <tr>											
		  <td>Our Vision Paragraph 2</td>
		  <td><textarea class="form-control w-100" type="text" id="svinspection" name="svinspection"></textarea></td>
	  </tr>
    <tr>											
		  <td>Our Vision Paragraph 3</td>
		  <td><textarea class="form-control w-100" type="text" id="svinspection" name="svinspection"></textarea></td>
	  </tr>
    <tr>
		<th colspan="10"><center>Our Objective</center></th>  
      </tr>
	  
	  <tr>											
		  <td>Our Objective Paragraph 1</td>
		  <td><textarea class="form-control w-100" type="text" id="svinspection" name="svinspection"></textarea></td>
	  </tr>
  
    </tbody>
  </table>
  
  <center><input type="submit" name="submit" onclick="return validatestart()" class="btn btn-info" value="Start Auction" data-dismiss="modal"></center>
 	 </form>

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
  
  
  
  
  <!-----myscript-->



<?php 
	//include('./footer.php');
?>
</body>

</html>
