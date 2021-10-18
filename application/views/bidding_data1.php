<!DOCTYPE html>
<html lang="en">
<head>


		
		

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Manage Buying Requirements</h1>
            
          </div> -->

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
		
			  
			  
			  
		
		
		<table id="myTable1" class="table table-striped table-bordered table-sm text-center mt-5" id="dataTable" width="100%" cellspacing="0">
		<thead class="bg-warning text-white">
		<tr>
		<th colspan="7" style="background-color:orange;">Bidding History</th>
		</tr>
			<tr style="background-color:#9999ff;">
					<td>Auction Id</td>
					<td>Lot No</td>
					<td>Lot Name</td>
				
					<td>Close Time</td>
					<td>Bid Base</td>
					<td>Bidding  Amount</td>
				</tr>
				</thead>

				<tbody style="">
				<?php foreach($sqldata as $sqldata[0]){?>
				<tr>
				
					<td><b><?php echo $sqldata[0]->sauctionid; ?></b></td>
					<td><?php echo $sqldata[0]->slotno; ?></td>
					<td><?php echo $sqldata[0]->slotname; ?></td>
					
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

