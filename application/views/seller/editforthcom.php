<?php 
	//include('./header.php');

?>
<link href="<?php echo base_url()."web_files/";?>css/tablestyle.css" rel="stylesheet" type="text/css">
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Auction</h1>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
			     <table class="table table-striped w-auto small table-bordered mt-4 text-center" id="dataTable" width="100%" cellspacing="0">
				<thead >
					<tr class="bg-warning  text-white text-center"><th colspan="21"><b>Auction Details</b></th></tr>
				<tr class="bg-primary text-white">
					<th>Auction Id</th>
					<th>Seller</th>
					<th>Category</th>
					 <th>Seller Company Name</th>
					 <th>Venue Of Inspection</th>
					 <th>Inspection Date & Time</th>
					 <th>EMD Details</th>
					<th>Last Date Of Submiting EMD</th>
					<th>Online Auction Start And Close Date</th>
					<th>Aucjunction Terms & Conditions</th>
					<th>Upload Terms & Conditions</th>
					<th>Download</th>
					<th>Action</th>
				</tr>
				</thead>

				<tbody>
				<?php  foreach($sqld as $sqldat){?>
				<tr>
				<?php $passaucid = str_ireplace('/','-',$sqldat->sauctionid);
				$aucfl = unserialize ($sqldat->sterms_condiupload);?>
					<td data-label="Auction Id"><a href="<?php echo base_url()."Seller_editforthcom_2/editforthcom_2/".$passaucid;?>"><b><?php echo str_ireplace("/","-",$sqldat->sauctionid);?></b></a></td>
					<td data-label="Seller"><?php echo $sqldat->sname; ?></td>
					<td data-label="Category"><?php echo $sqldat->scategory; ?></td>
					<td data-label="Seller Company Name"><?php echo $sqldat->scompanyname; ?></td>
					<td data-label="Venue Of Inspection"><?php echo $sqldat->svinspection; ?></td>
					<td data-label="Inspection Date & Time"><?php echo $sqldat->sfrominpectdate_time; ?><br><br><?php echo $sqldat->stoinpectdate_time; ?></td>
					<td data-label="EMD Details"><?php echo $sqldat->semddetail; ?></td>
					<td data-label="Last Date Of Submiting EMD"><?php echo $sqldat->slastdateemdsub; ?></td>
					<td data-label="Online Auction Start And Close Date"><?php $aucstarttime = $sqldat->saucstartdate_time;
							  $tmp = explode('.',$aucstarttime);
							  $aucstarttime = $tmp[0];
							  echo $aucstarttime; ?><br><br>
							  <?php 
							  $aucclosetime = $sqldat->saucclosedate_time;
							  $tmp = explode('.',$aucclosetime);
							  $aucclosetime = $tmp[0];
							  echo $aucclosetime; ?></td>
					<td data-label="Aucjunction Terms & Conditions"><?php if ($sqldat->sterms_condiaccept == 1){
									echo 'Accepted';}?>
									</td>
					
				
				<td data-label="Upload Terms & Conditions">
					<?php if(isset($aucfl[0])){?>	
				<a href="<?php echo base_url().'/web_files/uploads/'.$aucfl[0];?>" target="_blank"  ><?php echo '<i class="fa fa-download"></i>' ; ?>
					</a></td>
					<?php }?>
			
					<td data-label="Download"><a href="<?php echo base_url()."/pdf_gen/auc_no/".$passaucid.'/'.($sqldat->sname);?>" target="_blank"><i class="fa fa-download"></i></a></td>			
					


					<td data-label="Action"><a href="<?php echo base_url()."Seller_editauction/editauction/".$passaucid;?>" class="btn btn-primary btn-sm text-white"><i class="fa fa-edit fa-sm"></i></a>

						<a href="<?php echo base_url()."Seller_editauction/delete_auction/".$passaucid;?>"  class="btn btn-danger btn-sm text-white delete-confirm"><i class="fa fa-trash fa-sm"></i></a></td>	
				</tr>
				<?php }?>
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
