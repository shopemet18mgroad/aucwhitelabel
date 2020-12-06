 <?php
   // include('./header');
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
							<form action = "<?php echo base_url();?>Seller_basicdocument_update" method="POST" enctype="multipart/form-data">
							<tr>
								<td class="btxt">Upload Documents</td>
								<td><div class="input_fields_wrap">
								<input  type="file" id="ssigneddocument" name="ssigneddocument[]" multiple="multiple">
								</div></td>
							</tr> 
							<?php 
							if(unserialize($sqldata[0]->ssigneddocument) != NULL){
								$file = unserialize($sqldata[0]->ssigneddocument);
								  foreach($file as $fl){
								echo '<tr id="filess">';
								echo '<td class="btxt">Existing Documents</td>';
								echo '<td><div class="input_fields_wrap">';
								echo '<textarea class="form-control float-left mt-2 p-2 w-50" type="text" id="ssigneddocumentex" name="ssigneddocumentex[]" readonly>'.$fl.'</textarea>';
								echo '<input type="hidden" id="ssigneddocumentexcom" name="ssigneddocumentexcom[]" value="'.$fl.'">';
								echo '<a class="add_field_button1"><button type="button" onclick="$(this).parents(\'#filess\').remove()" class="btn btn-sm btn-primary ml-1 mb-5 mt-3">  <i class="fa fa-minus text-white"></i></button></a>';
								
								echo '</div></td>';
								echo '';
								echo '</tr>';
								  }
							}else{
								
							}
							
							
							?>
													
											
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

