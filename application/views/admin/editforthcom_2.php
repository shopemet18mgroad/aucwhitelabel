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
				<table class="table table-striped   w-auto small table-bordered mt-4 text-center" id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-warning  text-white text-center">
					<th colspan="21">Lot Details</th>
				</thead>
				<thead class="bg-primary text-white">
				
				<tr>
					<td>Auction Id</td>
					<td>Lot No</td>
					<td>Lot Name</td>
					<td>Category</td>
					 <td>Description</td>
					 <td>Location Of Lot</td>
					 <td>Inspection Date & Time</td>
					 <td>EMD Details</td>
					 <td>Last Date Of Submiting EMD</td>
					 <td>Expected Price</td>
					 <td>Starting Bid Price</td>
					<td>Quantity</td>
					<td>Unit Of Measurment</td>
					<td>Bid Base</td>
					<td>GST</td>
					<td>Other Tax</td>
					<td>EMD Amount</td>
					<td>Lifting Period</td>
					<td>PCB Certificate</td>
					<td>Action</td>
				</tr>
				</thead>

				<tbody>
				<?php foreach($sqldata as $sqldata[0]){?>
				<tr>
				
					<td><b><?php echo $sqldata[0]->sauctionid; ?></b></td>
					<td><?php echo $sqldata[0]->slotno; ?></td>
					<td><?php echo $sqldata[0]->slotname; ?></td>
					<td><?php echo $sqldata[0]->scategory; ?></td>
					<td><?php echo $sqldata[0]->sdescription; ?></td>
					<td><?php echo $sqldata[0]->slotlocation; ?></td>
					<td><?php echo $sqldata[0]->sfrominpectdate_time; ?><?php echo $sqldata[0]->stoinpectdate_time; ?></td>
					<td><?php echo $sqldata[0]->semddetail; ?></td>
					<td><?php echo $sqldata[0]->slastdateemdsub; ?></td>
					<td><?php echo $sqldata[0]->sprice; ?></td>
					<td><?php echo $sqldata[0]->sstartbidprice; ?></td>
					<td><?php echo $sqldata[0]->sqty; ?></td>
					<td><?php echo $sqldata[0]->sunitmeasurment; ?></td>
					<td><?php echo $sqldata[0]->sbidbase; ?></td>
					<td><?php echo $sqldata[0]->sgst; ?></td>
					<td><?php echo $sqldata[0]->sothertax; ?></td>
					<td><?php echo $sqldata[0]->semdamount; ?></td>
					<td><?php echo $sqldata[0]->sliftingperiod; ?><?php echo $sqldata[0]->sliftingperiod2; ?></td>
					<td><?php echo $sqldata[0]->spcbcertificate; ?></td>
					<td><a href="<?php echo base_url();?>Admin_editlot" class="btn btn-primary btn-sm text-white"><i class="fa fa-edit fa-sm"></i></a>
						<a class="btn btn-danger btn-sm text-white"><i class="fa fa-trash fa-sm"></i></a></td>	
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
