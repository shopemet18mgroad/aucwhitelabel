 <?php
   // include('./header');
	?>
	<link href="<?php echo base_url()."web_files/";?>css/mediaform.css" rel="stylesheet" type="text/css">
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

          <div class="row w-100">

            <!-- Area Chart -->
            <div class="col-md-10 offset-sm-1 p-2">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-danger">Note : Logo Size should not exceed 1280 x 525 (W x H) in Px with .jpg extention</h6>
					
                </div>
                <!-- Card Body -->
                <div class="card-body">	
					<table class="table table-sm table-borderless">
					 <thead><th width="45%">Upload/Update</th>
					 
					 </thead>
						<tbody>
							<form action = "<?php echo base_url();?>Seller_logo_update" method="POST" enctype="multipart/form-data">
							<tr>
								<td class="btxt">Upload Logo  </td>
								<td><div class="input_fields_wrap">
								<input  type="file" id="ssigneddocument" name="ssigneddocument[]" multiple="multiple">
								</div></td>
							</tr> 
							
													
											
						</tbody>
					</table>								
                
				
					<input type="submit" class="btn btn-primary offset-sm-3 mt-2" name="submit" value="Update">
												
				<input type="reset" class="btn btn-primary offset-sm-1 mt-2" value="Reset">
				</form>								
				<a href='<?php echo base_url();?>seller_dashboard'><button type="button" class="btn btn-primary offset-sm-1 mt-2">Cancel</button></a>
						
              </div>
            </div>

					

            <!-- Pie Chart -->

          </div>
        <!-- /.container-fluid -->

      </div>
	<!--   <script>
 $(document).ready(function() {
 var max_fields  = 20;
 var wrapper     = $(".input_fields_wrap");
 var add_button  = $(".add_field_button");

 
 var x=1;
 $(add_button).click(function(e) {
   e.preventDefault();
   if(x < max_fields){
			x++;
			$(wrapper).append('<div><input class="mt-2" type="file" id="ssigneddocument" name="ssigneddocument"><a href="#" class="remove_field"><button type="button" class="btn btn-sm btn-primary ml-1">  <i class="fa fa-minus text-white"></i></button></a></div>');
   }	
			});
			
			
			$(wrapper).on("click",".remove_field", function(e){
			
			e.preventDefault();
			$(this).parent('div').remove();
			x--;
			
			})
			
			});
 
 </script>-->
	  
      <!-- End of Main Content -->

      <!-- Footer -->
  <?php
  //  include('./footer');
	?>

