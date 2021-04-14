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
			
         <table class="table table-striped text-center table-sm table-bordered w-auto small"   width="100%" cellspacing="0">	
    <thead class="bg-primary text-white">
	
	<center> <div class="form-group">
      <label class="control-label col-sm-2" >SPOC:</label>
	  
      <div class="col-sm-4"> 
	  
	 
	  <select class="form-control"  id="myInput" name="myInput">

		<option  value="">SELECT</option>
	   <?php foreach( $sqldata1 as $row){?>
	     
		
	   <option value="<?php echo $row->slno;?>"><?php echo $row->spoc;}?></option>
	  
		
	   <option  value="">ALL</option>


     </select>
		<br><a id="mylink" href="" type="button" class="btn btn-info btn-sm ml-3 mylink"><b>Download Excel</b></a><br><br>
    </div>
    </div></center>
 <tr>
	<th>S.No.</th>
	<th>Date and Time</th>
	<th>Company Name</th>
	<th>Multiple Address </th>
	<th>Name</th>
	<th>Multiple Phn.no </th>
	<th>Email</th>
	<th>Unique Id</th>
	<th>Website</th>
	<th>Lead Generation</th>
	<th>Remarks</th>
	<th>Location</th>
	<th>Live Location</th>
	</tr>

    </thead>
	
	
	  
    <tbody id = "myTable">
 
	<?php  $count = 1;?>
	<?php foreach($sqldata as $row){?>
      
	  <tr>
	           <td><?php echo $count; ?></td>
		  <td ><?php echo $row->date; ?></td>
		  <td><?php echo $row->companyname; ?></td>
		  <td><?php echo $row->vaddress; ?>/<br><?php echo $row->vcity; ?></td>
		  <td><?php echo $row->first; ?></td>
		  
		  <td><?php echo $row->last; ?>/<br><?php echo $row->phone; ?></td>
		
		  <td><?php echo $row->email; ?></td>
		   <td><?php echo $row->spoc;
		   
		   
		   
		   ?>
		   
		   </td>
		   <td><?php echo $row->website; ?></td>
		  
		  <td><?php echo $row->leadgeneration; ?></td>

		 

		  <td style="font-size:10px;"><?php echo $row->remarks; ?></td>
		  <td style="font-size:10px;"><?php echo $row->location; ?></td>
		  <?php 
		  if($row->latlong != "" && $row->latlong != "NA" && $row->latlong != NULL){
			  $loca = explode('|',$row->latlong);
			  if($loca[0] == "na"||$loca[0] == NULL|| $loca[0] == "NA"){
				   $latlong="#";
			  }else{
				  $latlong = "https://www.google.com/maps/?q=".$loca[0].",".$loca[1];
			  }
			 
		  }else{
			   $latlong="#";
		  } 
			  
		  ?>
		  <td style="font-size:10px;"><a href="<?php echo $latlong; ?>"><?php echo $latlong; ?></a></td>

		  <?php $count++;?>
	  </tr>
	  
	
  <?php }?>
    </tbody>
	 
    
  </table>
  
  
  
  
<script>

$(document).ready(function(){
  $("#myInput").on("change", function() {
    var value = $(this).val().toLowerCase();
	$("a.mylink").attr("href", "<?php echo base_url();?>Enquiry_Form_data/export_csvenquiry/" +value);
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
	
	

		
	
	
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


