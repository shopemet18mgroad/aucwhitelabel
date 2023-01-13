 <?php 
	//include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage Buying Requirements</h1>
            
          </div> -->

          <!-- Content Row -->
		
		  
		  
		 
		  <a href='<?php echo base_url();?>Admin_bidhistory/export_csv10' type="button" class="btn btn-info btn-sm ml-3"><b>Export</b></a>
		  
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
		 
            <div class="card-body">
              <div class="table-responsive">
			
			
			
			<div class="mr-2">
			<p style="float:right" >Without Buyer Name</p>
			</div></br>
			<a href="<?php echo base_url()."admin_bidhistory/export_csvbiddata/".str_ireplace('/','-',$sqldata[0]->sauctionid)."/".$sqldata[0]->slotno;?>"style="float:left"><i class="fas fa-file-export"></i></a>
			
			<a href="<?php echo base_url()."biddingdatapdf_gen/bidding_data/".str_ireplace('/','-',$sqldata[0]->sauctionid)."/".$sqldata[0]->slotno;?>"  class="ml-4"><i class="fa fa-download" aria-hidden="true"></i></a>
			
			<div class="float:right">
		     <a href="<?php echo base_url()."admin_bidhistory/export_csvbiddata1/".str_ireplace('/','-',$sqldata[0]->sauctionid)."/".$sqldata[0]->slotno;?>" style="float:right" ><i class="fas fa-file-export"></i></a>
		
		    <a href="<?php echo base_url()."biddingdatapdf_gen/bidding_data1/".str_ireplace('/','-',$sqldata[0]->sauctionid)."/".$sqldata[0]->slotno;?>"  class="mr-4" style="float:right"><i class="fa fa-download" aria-hidden="true"></i></a>
			</div>
			
			
			
			  
			  
			  
		
			  
			  
			 
			  
			  
		
		
		<table id="myTable1" class="table table-striped table-bordered table-sm text-center mt-5" id="dataTable" width="100%" cellspacing="0">
		<thead class="bg-warning text-white">
		<tr>
		<th colspan="12">Bidding History</th>
		</tr>
			<tr class="bg-primary text-white">
					<td>Auction Id</td>
					<td>Lot No</td>
					<td>Lot Name</td>
					<td>Bidder User Name</td>
					<td>Close Time</td>
					<td>Bid Base</td>
					<td>Bidding Amount</td>
				</tr>
				</thead>

				<tbody>
				<?php foreach($sqldata as $sqldata[0]){?>
				<tr>
				
					<td><b><?php echo $sqldata[0]->sauctionid; ?></b></td>
					<td><?php echo $sqldata[0]->slotno; ?></td>
					<td><?php echo $sqldata[0]->slotname; ?></td>
					<td><?php echo $sqldata[0]->bidderusername; ?></td>
					<td><?php $aucclosetime = $sqldata[0]->Date_time;
							  $tmp = explode('.',$aucclosetime);
							  $aucclosetime = $tmp[0];
							  echo $aucclosetime; ?></td>
					<td><?php echo $sqldata[0]->sbidbase; ?></td>		  
					<td><?php echo $sqldata[0]->bidamount; ?></td>
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

