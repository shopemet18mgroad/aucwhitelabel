<?php 
	//include('./header.php');
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
					 <thead><th width="45%">Personal Info</th>
					 
					 </thead>
						<tbody>
						<tr><td><img class="img-fluid" src="<?php echo base_url()."web_files/";?>img/manimg.jpg" alt="Chania" width="40" height="35"></td></tr>
						 <form action="<?php echo base_url();?>admin_buyer_basicinfo_update" method="POST" enctype="multipart/form-data">
						<tr>
							<td class="btxt">Buyer Name:</td>
							<td><input class="form-control w-50" type="text" id="bname" name="bname"value="<?php echo $sqldata[0]->bname; ?>" readonly></td>
	 							 </tr>
						<tr>												
							<td class="btxt">Company Name:</td>
							<td><input class="form-control w-50" type="text" id="bcompany" name="bcompany" value="<?php echo $sqldata[0]->bcompany; ?>" readonly></td>
							</tr>
						<tr>
							<td class="btxt">Company Type:</td>
							<td><input class="form-control w-50" type="text" id="bcomptype" name="bcomptype" value="<?php echo $sqldata[0]->bcomptype; ?>"></td>
						</tr>  
						<tr>
							<td class="btxt">Contact Person:</td>
							<td><input class="form-control w-50" type="text" id="bcontactperson" name="bcontactperson" value="<?php echo $sqldata[0]->bcontactperson; ?>"></td>
						</tr>
						<tr>
							<td class="btxt">CIN Number:</td>
							<td><input class="form-control w-50" type="text" id="bcin" name="bcin" value="<?php echo $sqldata[0]->bcin; ?>"></td>
						</tr>  
						<tr>
							<td class="btxt">GST:</td>
							<td><input class="form-control w-50" type="text" id="bgst" name="bgst" value="<?php echo $sqldata[0]->bgst; ?>"></td>
						</tr> 
						<tr>
							<td class="btxt">Pan Number:</td>
							<td><input class="form-control w-50 pan" type="text" id="bpan" name="bpan" value="<?php echo $sqldata[0]->bpan; ?>"></td>
						</tr> 
						<tr>
							<td class="btxt">PCB Licence NO:</td>
							<td><input class="form-control w-50" type="text" id="bpcb" name="bpcb" value="<?php echo $sqldata[0]->bpcb; ?>"></td>
						</tr> 
					</tbody>
					</table>

				<table class="table table-sm table-borderless">
					 <thead><th width="45%">Contact Info</th>
					 </thead>
						<tbody>
						<tr>
							<td class="btxt">Email:</td>
							<td><input class="form-control w-50" type="email" id="bemail" name="bemail"value="<?php echo $sqldata[0]->bemail; ?>"></td>
						</tr>
						<tr>
							<td class="btxt">Phone:</td>
							<td><input class="form-control w-50" type="text" id="bphone" name="bphone"value="<?php echo $sqldata[0]->bphone; ?>" required></td>
						</tr>
						<tr>
					
							<td class="btxt">Postal Address:</td>
							<td><textarea class="form-control w-50" type="text" id="baddress" 	name="baddress" value="<?php echo $sqldata[0]->baddress; ?>"><?php echo $sqldata[0]->baddress; ?></textarea></td>
						</tr> 
						
						<tr>
							<td class="btxt">Pincode:</td>
							<td><input class="form-control w-50" type="text" id="bpin" name="bpin" value="<?php echo $sqldata[0]->bpin; ?>"></td>
						</tr> 
						<tr>
							<td class="btxt">State /Union Ter.:</td>
							<td><input class="form-control w-50" type="text" id="bstate" name="bstate" value="<?php echo $sqldata[0]->bstate; ?>"></td>
						</tr> 
						<tr>
							<td class="btxt">Country:</td>
							<td><input class="form-control w-50" type="text" id="bcountry" name="bcountry" value="INDIA" disabled></td>
						</tr>	 
						</tbody>
					</table>	

				<table class="table table-sm table-borderless">
					 <thead><th width="45%">Account</th>
					 </thead>
					<tbody>
							<tr>
								<td class="btxt">Banker's Name:</td>
								<td><input class="form-control w-50" type="text" id="bbankname" name="bbankname" value="<?php echo $sqldata[0]->bbankname; ?>"></td>
							</tr> 
							<tr>
								<td class="btxt">Account Number:</td>
								<td><input class="form-control w-50" type="text" id="baccountnumber" name="baccountnumber" value="<?php echo $sqldata[0]->baccountnumber; ?>"></td>
							</tr> 
							<tr>
								<td class="btxt">Branch:</td>
								<td><input class="form-control w-50" type="text" id="bbranch" name="bbranch" value="<?php echo $sqldata[0]->bbranch; ?>"></td>
							</tr> 
							<tr>
								<td class="btxt">IFSC Code:</td>
								<td><input class="form-control w-50" type="text" id="bifsccode" name="bifsccode" value="<?php echo $sqldata[0]->bifsccode; ?>"></td>
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
								<img src="<?php if(unserialize($sqldata[0]->buploadimagepic) != NULL){
									$img = unserialize($sqldata[0]->buploadimagepic);
									echo base_url()."/web_files/uploads/".$img[0];}else{echo base_url()."#";} ?>" width="300px" height="100px">
									<?php 
									if(unserialize($sqldata[0]->buploadimagepic) != NULL){?>
								<input type="hidden" name="profileimage2" id="profileimage2" value="<?php echo $img[0];?>">
									<?php
									}
								?>
							</td>
							</tr>
						<tr>
								<td class="btxt">Upload Profile Picture</td>
								<td><input type="file" multiple="multiple" id="buploadimagepic" name="buploadimagepic[]"></td>
							</tr> 
							<tr>
								<td class="btxt">Upload Documents</td>
								<td><div class="input_fields_wrap">
								<input type="file" multiple="multiple" id="bsigneddocument" name="bsigneddocument[]">
								</div></td>
							</tr> 
							
									<?php 
									$aucf = unserialize($sqldata[0]->bsigneddocument);
							if(unserialize($sqldata[0]->bsigneddocument) != NULL){
								$file = unserialize($sqldata[0]->bsigneddocument);
								  foreach($file as $fl){
								echo '<tr id="filess">';
								echo '<td class="btxt">Existing Documents</td>';
								echo '<td><div class="input_fields_wrap">';
								echo '<textarea class="form-control float-left mt-2 p-2 w-50" type="text" id="bsigneddocumentex" name="bsigneddocumentex[]" readonly>'.$fl.'</textarea>';
								echo '<input type="hidden" id="bsigneddocumentexcom" name="bsigneddocumentexcom[]" value="'.$fl.'">';
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
										
						</tbody>
					</table>					
			
			<input type="submit" class="btn btn-info offset-sm-4 mt-2" value="Update" onclick="return ValidateNo1();">
												
				<a href="<?php echo base_url();?>Admin_editbuyer"><button  class="btn btn-info offset-sm-1 mt-2">Cancel</button></a>
					</form>							
				
              </div>
            </div>

            <!-- Pie Chart -->

          </div>
        <!-- /.container-fluid -->

      </div>
	  
	  
      <!-- End of Main Content -->

      <!-- Footer -->
      <!--<footer class="sticky-footer bg-white">
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

 function ValidateNo1() {
  var phoneNo = document.getElementById('bphone');

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
