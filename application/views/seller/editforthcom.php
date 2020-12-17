<?php 
	//include('./header.php');

?>
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
				<thead class="bg-warning  text-white text-center">
					<th colspan="21"><b>Auction Details</b></th>
				</thead>
				<thead class="bg-primary text-white">
				
				<tr>
					<td>Auction Id</td>
					<td>Seller</td>
					<td>Category</td>
					 <td>Seller Company Name</td>
					 <td>Venue Of Inspection</td>
					 <td>Inspection Date & Time</td>
					 <td>EMD Details</td>
					<td>Last Date Of Submiting EMD</td>
					<td>Online Auction Start And Close Date</td>
					<td>Aucjunction Terms & Conditions</td>
					<td>Upload Terms & Conditions	</td>
					<td>Download</td>
					<td>Action</td>
				</tr>
				</thead>

				<tbody>
				<?php  foreach($sqld as $sqldat){?>
				<tr>
				<?php $passaucid = str_ireplace('/','-',$sqldat->sauctionid);
				$aucfl = unserialize ($sqldat->sterms_condiupload);?>
					<td><a href="<?php echo base_url()."Seller_editforthcom_2/editforthcom_2/".$passaucid;?>"><b><?php echo str_ireplace("/","-",$sqldat->sauctionid);?></b></a></td>
					<td><?php echo $sqldat->sname; ?></td>
					<td><?php echo $sqldat->scategory; ?></td>
					<td><?php echo $sqldat->scompanyname; ?></td>
					<td><?php echo $sqldat->svinspection; ?></td>
					<td><?php echo $sqldat->sfrominpectdate_time; ?><br><?php echo $sqldat->stoinpectdate_time; ?></td>
					<td><?php echo $sqldat->semddetail; ?></td>
					<td><?php echo $sqldat->slastdateemdsub; ?></td>
					<td><?php echo $sqldat->saucstartdate_time; ?><br><?php echo $sqldat->saucclosedate_time; ?></td>
					<td><?php if ($sqldat->sterms_condiaccept == 1){
									echo 'Accepted';}?>
									</td>
					
				
				<td>
					<?php if(isset($aucfl[0])){?>	
				<a href="<?php echo base_url().'/web_files/uploads/'.$aucfl[0];?>" target="_blank"  ><?php echo '<i class="fa fa-download"></i>' ; ?>
					</a></td>
					<?php }?>
			
					<td><a href="<?php echo base_url()."/pdf_gen/auc_no/".$passaucid.'/'.urlencode($sqldat->sname);?>" target="_blank"><i class="fa fa-download"></i></a></td>			
					


					<td><a href="<?php echo base_url()."Seller_editauction/editauction/".$passaucid;?>" class="btn btn-primary btn-sm text-white"><i class="fa fa-edit fa-sm"></i></a>

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
