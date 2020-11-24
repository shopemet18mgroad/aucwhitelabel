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
					 <table class="table table-sm table-borderless" id="section1">
					 <thead><th width="45%">Profile</th>
					 <th style="text-align:right"><a href="<?php echo base_url();?>seller_editsellerprofile"><u>Edit Personal Info</u></a></th>
					 
					 </thead>
						<tbody>
						<tr><td><img class="img-fluid" src="<?php echo base_url()."web_files/";?>img/manimg.jpg" alt="Chania" width="40" height="35"></td></tr>
						
						<form action = "<?phpdecho base_url();?>" method="POST" enctype="multipart/form-data">
							<tr>
								
								<td>Seller Name:</td>
								<td><?php echo $sqldata[0]->sname; ?></td>
							</tr> 
							<tr>
								<td>Contact Person</td>
								<td><?php echo $sqldata[0]->scomapnyname; ?></td>
							</tr>  
							<tr>
								<td>Company Type:</td>
								<td><?php echo $sqldata[0]->scompanytype; ?></td>
							</tr> 	
							<tr>
								<td>Address</td>
								<td><?php
								$companyltype = unserialize($sqldata[0]->saddress);
							
								echo $companyltype[0];
								
									
								?></td>
							</tr>
							<tr>
							<td>Another Address</td>
							<td><?php $companyaddress = unserialize($sqldata[0]->saddresscount); 
							echo $companyaddress[0];?></td>
							</tr>	
							<tr>
								<td>City</td>
								<td><?php echo $sqldata[0]->scity; ?></td>
							</tr>
							<tr>
								<td>Pincode</td>
								<td><?php echo $sqldata[0]->spin; ?></td>
							</tr>
							<tr>
								<td>State /Union Ter.</td>
								<td><?php echo $sqldata[0]->sstate; ?></td>
							</tr>
							<tr>
								<td>Country</td>
								<td><?php echo $sqldata[0]->scountry; ?></td>
							</tr>
													
						</tbody>
					</table>	


<table class="table table-sm table-borderless" id="section2">
					 <thead><th width="45%">Contact Info</th>
					 <th style="text-align:right"><a href="<?php echo base_url();?>seller_editsellercontact"><u>Edit Contact Info</u></a></th>
					 </thead>
						<tbody>
							<tr>
								<td>Email</td>
								<td><?php echo $sqldata[0]->semail; ?></td>
							</tr> 
							<tr>
								<td>Phone Number</td>
								<td><?php echo $sqldata[0]->sphone; ?></td>
							</tr> 
							<tr>
								<td>Pan Number</td>
								<td><?php echo $sqldata[0]->span; ?></td>
							</tr> 	
							<tr>
								<td>GST</td>
								<td><?php echo $sqldata[0]->sgst; ?></td>
							</tr> 
													
						</tbody>
					</table>					
					
					<table class="table table-sm table-borderless" id="section3">
					 <thead><th width="45%">Password</th>
					 <th style="text-align:right"><a href="<?php echo base_url();?>seller_editsellerpassword"><u>Edit Password</u></a></th>
					 </thead>
						<tbody>
							<tr>
								<td>Old Password</td>
								<td>*******</td>
							</tr> 
							<tr>
								<td>New Password</td>
								<td>*****</td>
							</tr> 
							<tr>
								<td>Confirm Password</td>
								<td>*****</td>
							</tr> 	
											
						</tbody>
					</table>
							
					<table class="table table-sm table-borderless" id="section4">
					 <thead><th width="45%">Account</th>
					<th style="text-align:right"><a href="<?php echo base_url();?>seller_editselleraccount"><u>Edit Account Info</u></a></th>
					 </thead>
						<tbody>
							<tr>
								<td>Banker's Name</td>
								<td><?php echo $sqldata[0]->sbankername; ?></td>
							</tr> 
							<tr>
								<td>Account Number</td>
								<td><?php echo $sqldata[0]->saccountnumber; ?></td>
							</tr> 
							<tr>
								<td>Branch</td>
								<td><?php echo $sqldata[0]->sbranch; ?></td>
							</tr> 
							<tr>
								<td>IFSC Code</td>
								<td><?php echo $sqldata[0]->sifsccode; ?></td>
							</tr> 							
											
						</tbody>
					</table>
					
						<table class="table table-sm table-borderless" id="section5">
					 <thead><th width="45%">Documents</th>
					 <th style="text-align:right"><a href="<?php echo base_url();?>seller_editsellerdocument"><u>Edit documents</u></a></th>
					 </thead>
						<tbody>
							<tr>
								<td class="btxt">Upload Image</td>
								<td></td>
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
							</form>				
						</tbody>
					</table>
              
              </div>
            </div>

            <!-- Pie Chart -->

          </div>
        <!-- /.container-fluid -->

      </div>
	  
	  
      <!-- End of Main Content -->

      <!-- Footer -->
<?php
  //  include('./footer');
	?>
