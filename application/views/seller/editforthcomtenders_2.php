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
					<td>Tender Id</td>
					<td>Seller</td>
					<td>Batch No</td>
					<td>Batch Name</td>
					<td>Category</td>
					<td>Description</td>
					
					<td>Quantity</td>
					<td>Unit Of Measurement</td>
				
					<td>HSN Code.</td>
					
					<td>Action</td>
				</tr>
				</thead>

				<tbody>
				<?php foreach($sqldata as $sqldat[0]){?>
				<tr>
				
					<td><b><?php echo str_ireplace("/","-",$sqldat[0]->tenderid);?></b></td>
					<td><?php echo $sqldat[0]->tenderer; ?></td>
					<td><?php echo $sqldat[0]->tslotno; ?></td>
					<td><?php echo $sqldat[0]->batchname; ?></td>
					<td><?php echo $sqldat[0]->category; ?></td>
					<td><?php echo $sqldat[0]->batchdes; ?></td>
					
					<td><?php echo $sqldat[0]->batchreqqty; ?></td>
					<td><?php echo $sqldat[0]->batchunits; ?></td>
					
					<td><?php echo $sqldat[0]->batchhsncode; ?></td>
				
		


					<td><a href="<?php echo base_url()."Seller_editbatch/editlot/".str_ireplace("/","-",$sqldat[0]->tenderid)."/".urlencode($sqldat[0]->tslotno);?>" class="btn btn-primary btn-sm text-white"><i class="fa fa-edit fa-sm"></i></a>

						<a href="<?php echo base_url()."Seller_editbatch/deletelot/".str_ireplace("/","-",$sqldat[0]->tenderid)."/".urlencode($sqldat[0]->tslotno);?>" class="btn btn-danger btn-sm text-white delete-confirm"><i class="fa fa-trash fa-sm"></i></a></td>	
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
