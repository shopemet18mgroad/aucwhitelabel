<?php
  //print_r($sqldata[0]->date); die;
	?>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Enquiry Form Data</h1>
            
          </div>

          <!-- Content Row -->
         <div class="col-sm-12 col-md-12">
          <div class="card shadow mb-4">
            <div class="card-body">
			<div class="table-responsive">
			
			<form class="form-inline">
			  
			 <div class="form-group mr-4 offset-sm-4">
						<td colspan="5">
						<form action="/action_page.php">
							
								<!--<input type="text" class="form-control" placeholder="Search.." name="search">
								<button class="form-control" type="submit"><i class="fa fa-search"></i></button>-->
						
						</form>
					</td>
				</div>
			</form>
			
         <table class="table table-striped text-center table-sm table-bordered mt-5" id="dataTable"  width="100%" cellspacing="0">	
    <thead class="bg-primary text-white">
	
	<center> <div class="form-group">
      <label class="control-label col-sm-2" >SPOC:</label>
	  
      <div class="col-sm-4"> 
	  
	 
	  <select class="form-control"  id="myInput" name="myInput">
	  
	  
	   <?php foreach( $sqldata1 as $row){?>
	     
  
	   <option value="<?php echo $row->spoc;?>">
	   <?php echo $row->spoc;?>
	   
	   
	    </option>


	
  <?php }?>	

        



     </select>

    </div>
    </div></center>

	
	
	
	  <tr>
		<th colspan="13" class="bg-info">Enquiry</th></tr>
     <tr>
		<th>Date & Time</th>
		
		<th>Company Name</th>
		<th>Address</th>
		<th>City</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Remark</th>
		<th>Lead Generation</th>
		<th>Spoc</th>
		<th>Location</th>
		
	
	</tr>
    </thead>
    <tbody id="myTable">
	
  <?php if (isset($sqldata)) {
			foreach ($sqldata as $sqldat) { ?>
	
					<tr>												
						
						<td><?php echo $sqldat->date; ?></td>
						
						<td><?php echo $sqldat->companyname; ?></td>
						<td><?php echo $sqldat->vaddress; ?></td>
						<td><?php echo $sqldat->vcity; ?></td>
						<td><?php echo $sqldat->first; ?></td>
						<td><?php echo $sqldat->last; ?></td>
						<td><?php echo $sqldat->phone; ?></td>
						<td><?php echo $sqldat->email; ?></td>	
						<td><?php echo $sqldat->remarks; ?></td>
						<td><?php echo $sqldat->leadgeneration; ?></td>
						<td><?php if(($sqldat->spoc) == 2456){
							echo "Niranjan";
						}
						else if(($sqldat->spoc) == 1345){
							echo "sarvana";
						}
						else if(($sqldat->spoc) == 3566 ){
							echo "babu";
						}
						else if(($sqldat->spoc) == 4677){
							echo "kiran";
						}
						else if(($sqldat->spoc) == 5788){
							echo "naveen";
						}
						else if(($sqldat->spoc) == 6888){
							echo "sitaram";
						}
						else if(($sqldat->spoc) == 5896){
							echo "jolly";
						}
						else if(($sqldat->spoc) == 3278){
							echo "vinod";
						}
						else if(($sqldat->spoc) == 1796){
							echo "charith_dev";
						}
						?></td>
						<td><?php echo $sqldat->location; ?></td>
						
					</tr>
					
					
 		<?php }
										} ?>
				

    </tbody>
  </table>
<script>
$(document).ready(function(){
  $("#myInput").on("change", function() {
    var value = $(this).val().toLowerCase();
	
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
	
	<a  href="<?php echo base_url()."Enquiry_Form_data/export_csvenquiry/"?>" type="button" class="btn btn-info btn-sm ml-3"><b>Export</b></a><br><br>
		
	
	
		  </div>
            </div>
			
			<!--Pagination -->

      
          </div>
		</div>
        </div>
	
          <!-- Content Row -->

          
        <!-- /.container-fluid -->

      
      <!-- End of Main Content -->

      <!-- Footer -->
     
      <!-- End of Footer -->

   
    <!-- End of Content Wrapper -->


  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->


