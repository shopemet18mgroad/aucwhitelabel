<?php 
	include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
    <!--       <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Vendor Profile</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div> -->

          <!-- Content Row -->


          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Personal Info</h6>
               
                </div>
                <!-- Card Body -->
                <div class="card-body">

					<table class="table table-sm table-borderless">
					 <thead><th width="45%">Documents</th>
					 
					 </thead>
						<tbody>
							<tr>
								<td class="btxt">Upload Image1:</td>
								<td><form action="/action_page.php"> <input type="file" id="buploadimage1" name="buploadimage1"></form></td>
							</tr> 
							<tr>
								<td class="btxt">Upload Image2:</td>
								<td><form action="/action_page.php"> <input type="file" id="buploadimage2" name="buploadimage2"></form></td>
							</tr> 
							<tr>
								<td class="btxt">Upload Image3:</td>
								<td><form action="/action_page.php"> <input type="file" id="buploadimage3" name="buploadimage3"></form></td>
							</tr>
							<tr>
								<td class="btxt">Signed Documents:</td>
								<td>
								<div class="input_fields_wrap">
								<input type="file" id="bsigneddocument" name="bsigneddocument">
								<a class="add_field_button"><button type="button" class="btn btn-sm btn-primary"><i class="fa fa-plus text-white"></i></button></a>
								</div>
								</td>
							</tr>							
											
						</tbody>
					</table>								
                
				<a href="#"><button type="button" class="btn btn-primary offset-sm-3 mt-2">Update</button></a>
												
				<a href="#"><button type="button" class="btn btn-primary offset-sm-1 mt-2">Reset</button></a>
												
				<a href='index.php'><button type="button" class="btn btn-primary offset-sm-1 mt-2">Cancel</button></a>

																
              </div>
            </div>

            <!-- Pie Chart -->

          </div>
        <!-- /.container-fluid -->

      </div>
	  
	  
      <!-- End of Main Content -->

      <!-- Footer -->
     <!-- <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy;rawmet 2020</span>
          </div>
        </div>
      </footer>-->
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  
 <script>
 $(document).ready(function() {
 var max_fields  = 10;
 var wrapper     = $(".input_fields_wrap");
 var add_button  = $(".add_field_button");

 
 var x=1;
 $(add_button).click(function(e) {
   e.preventDefault();
   if(x < max_fields){
			x++;
			$(wrapper).append('<div><input class="mt-2" type="file" id="myFile" name="filename4"><a href="#" class="remove_field"><button type="button" class="btn btn-sm btn-primary ml-1">  <i class="fa fa-minus text-white"></i></button></a></div>');
   }	
	
			});
			
			
			$(wrapper).on("click",".remove_field", function(e){
			
			e.preventDefault();
			$(this).parent('div').remove();
			x--;
			
			})
			
			});
 
 </script>
 
<?php 
	include('./footer.php');
?>
</body>

</html>
