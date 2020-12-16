 <?php 
	//include('./headerdata.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h3 mb-0 text-gray-800">Edit Lot</h2>
            
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
					<th colspan="21"><b>Lot Details</b></th>
				</thead>
				<thead class="bg-primary text-white">
				
				<tr>
					<td>Auction Id</td>
					<td>Seller</td>
					<td>Lot No</td>
					<td>Lot Name</td>
					<td>Category</td>
					<td>Description</td>
					<td>Location Of Lot</td>
					<td>Quantity</td>
					<td>Unit Of Measurement</td>
					<td>Bid Base</td>
					<td>GST</td>
					<td>HSN Code.</td>
					<td>Other Tax</td>
					<td>EMD Amount</td>
					<td>Expected Price</td>
					 <td>Starting Bid Price</td>
					<td>Lifting Period</td>
					<td>PCB Certificate</td>
					<td>Action</td>
				</tr>
				</thead>

				<tbody>
				<?php foreach($sqldata as $sqldat[0]){?>
				<tr>
				
					<td><b><?php echo str_ireplace("/","-",$sqldat[0]->sauctionid);?></b></td>
					<td><?php echo $sqldat[0]->sname; ?></td>
					<td><?php echo $sqldat[0]->slotno; ?></td>
					<td><?php echo $sqldat[0]->slotname; ?></td>
					<td><?php echo $sqldat[0]->scategory; ?></td>
					<td><?php echo $sqldat[0]->sdescription; ?></td>
					<td><?php echo $sqldat[0]->slotlocation; ?></td>
					<td><?php echo $sqldat[0]->sqty; ?></td>
					<td><?php echo $sqldat[0]->sunitmeasurment; ?></td>
					<td><?php echo $sqldat[0]->sbidbase; ?></td>
					<td><?php echo $sqldat[0]->sgst; ?></td>
					<td><?php echo $sqldat[0]->sothertax; ?></td>
					<td><?php echo $sqldat[0]->shsncode; ?></td>
					<td><?php echo $sqldat[0]->semdamount; ?></td>
					<td><?php echo $sqldat[0]->sprice; ?></td>
					<td><?php echo $sqldat[0]->sstartbidprice; ?></td>
					<td><?php echo $sqldat[0]->sliftingperiod; ?><br><?php echo $sqldat[0]->sliftingperiod2; ?></td>
					<td><?php if($sqldat[0]->spcbcertificate == 1)
								{ 
							echo 'Yes';
							}
							else{
							echo 'No'	;
							}; ?></td>


					<td><a href="<?php echo base_url()."Seller_editlot/editlot/".str_ireplace("/","-",$sqldat[0]->sauctionid)."/".urlencode($sqldat[0]->slotno);?>" class="btn btn-primary btn-sm text-white"><i class="fa fa-edit fa-sm"></i></a>

						<a href="<?php echo base_url()."Seller_editlot/deletelot/".urlencode($sqldat[0]->slotno);?>" class="btn btn-danger btn-sm text-white delete-confirm"><i class="fa fa-trash fa-sm"></i></a></td>	
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
	//include('./footerdata.php');
?>
</body>

</html>
