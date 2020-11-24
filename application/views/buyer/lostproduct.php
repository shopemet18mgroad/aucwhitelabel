 <?php 
	//include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Lost Products</h1>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
			   <form class="form-inline">
			 <td colspan="5">
						<!-- <form action="/action_page.php"> -->
								<!-- <label for="gettable"></label>
								<input type="text" class="form-control gettable" id="" placeholder="Enter Company Name To Fetch Result"  size="70" name="search">
								
								<!--<button class="form-control" type="submit"><i class="fa fa-search"></i></button>-->
					
						<!-- </form> -->
					</td>
			
		
			</form>
		
		 <table class="table table-striped table-bordered text-center table-sm mt-5"id="dataTable"  width="100%" cellspacing="0">
		<thead class="bg-primary text-white">
				<tr><th colspan="8" class="bg-info">Lost Bidding Products</th></tr>
				<tr>
					<th>Auction Id</th>
					<th>Lot No</th>
					<th>Date/Time</th>
					<th>Bid Price</th>
				</tr>
		</thead>
		<tbody>
			<tr>
		<?php foreach($sqldata as $sqldat){?>			
				<td><a href="<?php echo base_url()."Buyer_detailedbiddinglost/index/".str_ireplace('/','-',$sqldat->auctionid)."|".$sqldat->lotno;?>"><?php echo $sqldat->auctionid;?></a>
					</td>
				<td><?php echo $sqldat->lotno;?></td>
				<td><?php echo $sqldat->aucclosedate_time;?> </td>
				<td><?php echo $sqldat->bidamount;?></td>
				</tr>
		<?php }?>
		
													
		</tbody>
		 </table>
		 	<div class="ajaxrslt" id="ajaxrslt_detailedauc">
			<!----Insert Ajax Table Here------>
			
			<!---- ------>
		</div>
		</div>
		</div>
		<!--Pagination -->

      
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
