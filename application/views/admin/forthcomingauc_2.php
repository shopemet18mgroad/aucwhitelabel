<?php 
	//include('./header.php');
	
?>
        <!-- End of Topbar -->
                                        
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h3 mb-0 text-gray-800">Auction Details</h2>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">

		<table class="table table-striped table-bordered table-sm text-center" id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-info text-white text-center">
					<th colspan="7">Auction Details</th>
				</thead>
				<thead class="bg-primary text-white">
				<tr>
					<th>Auction Id</th>
					<th>Opening Date/Time</th>
					<th>Closing Date/Time</th>
					<th>EMD Amount</th>
				</tr>
				</thead>
<?php if($sqldata){?>
				<tbody>
				<tr>
					<td data-label = "Auction Details"><b><?php echo $sqldata[0]->sauctionid; ?></b></td>
					<td data-label = "Auction Id"><?php $aucstarttime = $sqldata[0]->saucstartdate_time;
							  $tmp = explode('.',$aucstarttime);
							  $aucstarttime = $tmp[0];
							  echo $aucstarttime; ?></td>
					<td data-label ="Opening Date/Time"><?php $aucclosetime = $sqldata[0]->saucclosedate_time;
							  $tmp = explode('.',$aucclosetime);
							  $aucclosetime = $tmp[0];
							  echo $aucclosetime; ?></td>
                 <td data-label="Closing Date/Time"><?php echo $sqldata[0]->semdamount;} ?></td>
				</tr>
				</tbody>
		 </table>
				<table class="table table-striped table-sm table-bordered mt-4 text-center" id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-warning  text-white text-center">
					<th colspan="8">Seller Details</th>
				</thead>
				<thead class="bg-primary text-white">
				<tr>
					<th>Seller Name</th>
					<th>Company Name</th>
					<th>Location</th>
					<th>Street</th>
					<th>City</th>
					<th>Phone Number</th>
					<th>Email</th>
					<th>Contact Person</th>
				</tr>
				</thead>

				<tbody>
				<tr>
					<td  data-label = "Seller Name"><?php echo $sellerinfo[0]->sname; ?></td>
					<td  data-label = "Company Name"><?php echo $sellerinfo[0]->scomapnyname; ?></td>
					<td  data-label = "Location"><?php if($sellerinfo[0]->saddress == NULL){
						ECHO "No Address found";
					}?>
					</td>
					<td  data-label = "Street"><?php echo $sellerinfo[0]->sstreet; ?></td>
					<td  data-label = "City"><?php echo $sellerinfo[0]->scity; ?></td>
					<td  data-label = "Phone Number"><?php echo $sellerinfo[0]->sphone; ?></td>
					<td  data-label = "Email"><?php echo $sellerinfo[0]->semail; ?></td>
					<td  data-label = "Contact Person"><?php echo $sellerinfo[0]->scontactperson; ?></td>
				</tr>
				</tbody>
		 </table>
		
		<table class="table table-striped  table-bordered mt-4  text-center " id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-primary text-white">
				<tr>
					<th>Lot No</th>
					<th>Lot Name</th>
					<th>Lot Description</th>
					<th>Quantity</th>
					<th>Unit Of Measurement</th>
					<th>Bid Base</th>
					<th>GST</th>
					<th>Location</th>
					<th>Action</th>
				</tr>
				</thead>

				<tbody>

<?php if($sqldata){?>

<?php $urlsendind =  str_ireplace('/','-',$sqldata[0]->sauctionid);?>



				


				<?php foreach($sqldata as $sqldat){if(!$sqldat->status){?>
				<tr><td><?php echo $sqldat->slotno; ?></td>								
					<td><?php echo $sqldat->slotname; ?></td>
					<td><?php echo $sqldat->sdescription; ?></td>
					<td><?php echo $sqldat->sqty; ?></td>
					<td><?php echo $sqldat->sunitmeasurment	; ?></td>
					<td><?php echo $sqldat->sbidbase; ?></td>
					<td><?php echo $sqldat->sgst; ?></td>
					<td><?php echo $sqldat->slotlocation;?>
					</td>
					<td><a href="<?php  echo base_url()."Admin_forthcomingauc_2/approve/".$urlsendind."/".urldecode($sqldat->slotno)."/".($sqldat->sname) ?>"><button type="button" class="btn btn-info" name="accept" >Accept</button></a>
						<a href="<?php  echo base_url()."Admin_forthcomingauc_2/reject/".$urlsendind."/".urldecode($sqldat->slotno).'/'.($sqldat->sname);?>"><button type="button" class="btn btn-info">Reject</button></a></td>


			</tr>
<?php }}}?>
		
				</tbody>
			 </table>
			
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
