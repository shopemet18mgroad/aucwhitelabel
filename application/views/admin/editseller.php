<?php 
//	include('./headerdata.php');
?>        <!-- End of Topbar -->

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
					 <thead><th width="45%">Basic Info</th>
					 </thead>
						<tbody>
						<tr><td><img class="img-fluid" src="<?php echo base_url()."web_files/";?>img/manimg.jpg" alt="Chania" width="40" height="35"></td></tr>
						<tr>
						 <form action = "<?php echo base_url();?>admin_seller_basicinfo_update" method="POST" enctype="multipart/form-data">
							<td class="btxt">Seller Name:</td>
							<td><input class="form-control w-50" type="text" id="sname" name="sname" value="<?php echo $sqldata[0]->sname; ?>" readonly></td>
	 							 </tr>
						<tr>												
							<td class="btxt">Company Name:</td>
							<td><input class="form-control w-50" type="text" id="scomapnyname" name="scomapnyname" value="<?php echo $sqldata[0]->scomapnyname; ?>" readonly></td>
							</tr>
						<tr>
							<td class="btxt">Seller Type:</td>
								<td><select class="form-control w-50" style="text-align-last:center;" id="ssellertype" name="ssellertype">
								<option value="<?php echo $sqldata[0]->ssellertype; ?>" selected><?php echo $sqldata[0]->ssellertype; ?></option>
								<option value="Govt Regd Company">Govt Regd Company</option>
								<option value="Ltd, Pvt Ltd, LLP, Corp">Ltd, Pvt Ltd, LLP, Corp</option>
								<option value="Partnership, Proprietorship, OPC" >Partnership, Proprietorship, OPC</option>
								<option value="Other">Other</option>
								</select>
							</td>
						</tr>  
						<tr>
							<td class="btxt">Contact Person:</td>
							<td><input class="form-control w-50" type="text" id="scontactperson" name="scontactperson" value="<?php echo $sqldata[0]->scontactperson; ?>"></td>
						</tr>
						<tr>
							<td class="btxt">CIN Number:</td>
							<td><input class="form-control w-50" type="text" id="scin" name="scin" value="<?php echo $sqldata[0]->scin; ?>"></td>
						</tr>  
						<tr>
							<td class="btxt">Pan Number:</td>
							<td><input class="form-control w-50 pan" type="text" id="span" name="span" value="<?php echo $sqldata[0]->span; ?>"></td>
						</tr>
						<tr>
							<td class="btxt">GST:</td>
							<td><input class="form-control w-50" type="text" id="sgst" name="sgst" value="<?php echo $sqldata[0]->sgst; ?>"></td>
						</tr> 
						<tr>
							<td class="btxt">PCB Licence NO:</td>
							<td><input class="form-control w-50" type="text" id="spcb" name="spcb" value="<?php echo $sqldata[0]->spcb; ?>"></td>
						</tr> 
					</tbody>
					</table>			

				<table class="table table-sm table-borderless">
					 <thead><th width="45%">Contact Info</th>
					 </thead>
						<tbody>
						<tr>
							<td class="btxt">Email:</td>
							<td><input class="form-control w-50" type="email" id="semail" name="semail" value="<?php echo $sqldata[0]->semail; ?>" required></td>
						</tr>
						<tr>
							<td class="btxt">Phone:</td>
							<td><input class="form-control w-50" type="text" id="sphone" name="sphone" value="<?php echo $sqldata[0]->sphone; ?>"></td>
						</tr>
						<tr>
								<td>Address</td>
								<td>
								<?php
								
								$companyltype = unserialize($sqldata[0]->saddress);
								$companyaddress = unserialize($sqldata[0]->saddresscount);
								 $xj = 0;
								 if($companyltype != NULL || $companyaddress != NULL){
									  $companyltypecnt = count($companyltype);
										$companyaddresscnt = count($companyaddress);
								 }
								
									 if($companyltype != NULL){
										 for($i=0;$i<$companyltypecnt;$i++){
										 echo '<div class="input_fields_wrap1">';
											echo '<select class="form-control w-50  p-1" name="saddress[]">';
											echo '<option value="'.$companyltype[$i].'">'.$companyltype[$i].'</option>';
											echo '<option value="Corporate-Office">Corporate Office</option>';
											echo '<option value="Manufacturing Unit">Manufacturing Unit</option>';
											echo '<option value="Headquarter">Headquarter</option>';
											echo '</select>';
											echo '';
											echo '<textarea class="form-control float-left mt-2 p-2 w-50" type="text" name="saddresscount[]">'.$companyaddress[$i].'</textarea>';
											echo '<a class="add_field_button1"><button type="button" class="btn btn-sm btn-primary ml-1 mb-5 mt-3">  <i class="fa fa-plus text-white"></i></button></a>';
											echo '</div>';
									 }
								 }else{
											echo '<div class="input_fields_wrap1">';
											echo '<select class="form-control w-50  p-1" name="saddress[]">';
											echo '<option value="Corporate-Office">Corporate Office</option>';
											echo '<option value="Headquarter">Headquarter</option>';
											echo '</select>';
											echo '';
											echo '<textarea class="form-control float-left mt-2 p-2 w-50" type="text" name="saddresscount[]"></textarea>';
											echo '<a class="add_field_button1"><button type="button" class="btn btn-sm btn-primary ml-1 mb-5 mt-3">  <i class="fa fa-plus text-white"></i></button></a>';
											echo '</div>';
								 }
								 
								?>
								
									</td>
								
							</tr>
							<tr>
							<td class="btxt">Pin:</td>
							<td><input class="form-control w-50" type="text" id="spin" name="spin" value="<?php echo $sqldata[0]->spin; ?>"></td>
							</tr>
							<tr>
							<td class="btxt">State:</td>
							<td><input class="form-control w-50" type="text" id="sstate" name="sstate" value="<?php echo $sqldata[0]->sstate; ?>"></td>
							</tr>
						<tr>
							<td class="btxt">Country:</td>
							<td><input class="form-control w-50" type="text" id="scountry" name="scountry" value="INDIA" disabled></td>
						</tr>		
						</tbody>
					</table>	

				<table class="table table-sm table-borderless">
					 <thead><th width="45%">Account</th>
					 </thead>
					<tbody>
						<tr>
							<td class="btxt">Banker's Name:</td>
							<td><input class="form-control w-50" type="text" id="sbankername" name="sbankername" value="<?php echo $sqldata[0]->sbankername; ?>"></td>
						</tr> 
						<tr>
							<td class="btxt">Account Number:</td>
							<td><input class="form-control w-50" type="text" id="saccountnumber" name="saccountnumber" value="<?php echo $sqldata[0]->saccountnumber; ?>"></td>
						</tr> 
						<tr>
							<td class="btxt">Branch:</td>
							<td><input class="form-control w-50" type="text" id="sbranch" name="sbranch" value="<?php echo $sqldata[0]->sbranch; ?>"></td>
						</tr> 
						<tr>
							<td class="btxt">IFSC Code:</td>
							<td><input class="form-control w-50" type="text" id="sifsccode" name="sifsccode" value="<?php echo $sqldata[0]->sifsccode; ?>"></td>
						</tr> 
						</tbody>
					</table>


				<table class="table table-sm table-borderless">
					 <thead><th width="45%">Documents</th>
					 </thead>
						<tbody>
							<tr>
							<td>
								Profile Pic
							</td>
							<td>
								<img src="<?php if(unserialize($sqldata[0]->suploadprofilepic) != NULL){
									$img = unserialize($sqldata[0]->suploadprofilepic);
									echo base_url()."/web_files/uploads/".$img[0];}else{echo base_url()."#";} ?>" width="300px" height="100px">
									<?php 
									if(unserialize($sqldata[0]->suploadprofilepic) != NULL){?>
								<input type="hidden" name="profileimage" id="profileimage" value="<?php echo $img[0];?>">
								<?php
									}
								?>
							</td>
							</tr>
							<tr>
								
								<td class="btxt">Upload New Profile Pic</td>
								<td><div class="input_fields_wrap">
								
								<input  type="file" id="suploadprofilepic" name="suploadprofilepic[]">
								</div></td>
							</tr> 

							<tr>
								<td class="btxt">Upload Documents</td>
								<td><div class="input_fields_wrap">
								<input  type="file" id="ssigneddocument" name="ssigneddocument[]" multiple="multiple">
								</div></td>
								
							</tr> 
							<?php 
							$aucf = unserialize($sqldata[0]->ssigneddocument);
							if(unserialize($sqldata[0]->ssigneddocument) != NULL){
								$file = unserialize($sqldata[0]->ssigneddocument);
								  foreach($file as $fl){
								echo '<tr id="filess">';
								echo '<td class="btxt">Existing Documents</td>';
								echo '<td><div class="input_fields_wrap">';
								echo '<textarea class="form-control float-left mt-2 p-2 w-50" type="text" id="ssigneddocumentex" name="ssigneddocumentex[]" readonly>'.$fl.'</textarea>';
								echo '<input type="hidden" id="ssigneddocumentexcom" name="ssigneddocumentexcom[]" value="'.$fl.'">';
								echo '<a class="add_field_button1"><button type="button" onclick="$(this).parents(\'#filess\').remove()" class="btn btn-sm btn-primary ml-1 mb-5 mt-3">  <i class="fa fa-minus text-white"></i></button></a>';
								if(isset($aucf[0])){
								echo '<a href="'.base_url().'web_files/uploads/'. $aucf[0].'" target="_blank">';
								echo '<i class="fa fa-download ml-5 mb-5 mt-3"></i>';
								}
								echo '</a>';
								echo '</div></td>';
								echo '';
								echo '</tr>';
								  }
							}else{
								
							}
							
							
							?>
							
							<tr><td class="btxt">Reference</td><td><input class="form-control w-50" type="text" id="sref" name="sref" required></td></tr>
						</tbody>
					</table>								
				<input type="submit" class="btn btn-info offset-sm-4 mt-2" value="Update" onclick="return ValidateNo();">
												
				<a href="<?php echo base_url();?>Admin_editseller"><button  class="btn btn-info offset-sm-1 mt-2">Back</button></a>
												
				</form>
              </div>
            </div>

            <!-- Pie Chart -->

          </div>
        <!-- /.container-fluid -->

      </div>
	  
	  
      <!-- End of Main Content -->

      <!-- Footer -->
     <!--  <footer class="sticky-footer bg-white">
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
 
 </script>
 
  <script>
 $(document).ready(function() {
 var max_fields  = 10;
 var wrapper     = $(".input_fields_wrap1");
 var add_button  = $(".add_field_button1");

 
 var x=1;
 $(add_button).click(function(e) {
   e.preventDefault();
   if(x < max_fields){
			x++;
			$(wrapper).append('<select class="form-control w-50  p-1 " name="saddress[]"><option value="Corporate Office">Corporate Office</option><option value="Headquarter">Headquarter</option></select></td><td><textarea class="form-control float-left mt-2 p-2 w-50" type="text" name="saddresscount[]"/></textarea><a href="#" class="remove_field">  <button type="button" class="btn btn-sm btn-primary ml-1 mb-5 mt-3">  <i class="fa fa-minus text-white"></i></button></a>');
   }	
	
			});
			
			
			$(wrapper).on("click",".remove_field", function(e){
			
			e.preventDefault();
			$(this).parent('div').remove();
			x--;
			
			})
			
			});
 
 </script>
 <script>
 
 </script>
 
 <script>
 function ValidateNo() {
  var phoneNo = document.getElementById('sphone');

   if (phoneNo.value.length < 10 || phoneNo.value.length > 10) {
    swal("Alert!", "Mobile No. is not valid, Please Enter 10 Digit Mobile No.", "error");
    return false;
  }
  else if (phoneNo.value == "") {
    swal("Alert!","Please enter your Mobile No.","error");
    return false;
  }
 }
 </script>
 
 <script type="text/javascript">    
$(document).ready(function(){     
        
$(".pan").change(function () {      
var inputvalues = $(this).val();      
  var regex = /[A-Z]{5}[0-9]{4}[A-Z]{1}$/;    
  if(!regex.test(inputvalues)){      
  $(".pan").val("");    
  swal("Alert!","Invalid PAN no", "error");    
  return regex.test(inputvalues);    
  }    
});      
    
});    
</script> 

  <?php 
	//include('./footerdata.php');
?>
</body>

</html>
