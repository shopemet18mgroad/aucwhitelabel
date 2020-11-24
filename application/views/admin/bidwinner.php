<?php 
	//include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Bid Winner</h1>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
			   <form class="form-inline">
					<div class="form-group mr-4 offset-sm-4">
						<td colspan="5">
						<!-- <form action="/action_page.php"> -->
								<!--<label for="gettable"></label>
								<input type="text" class="form-control gettable" id="gettable_bidwinner" placeholder="Enter Company Name To Fetch Result"  size="70" name="search">-->
								
								<!--<button class="form-control" type="submit"><i class="fa fa-search"></i></button>-->
					
						<!-- </form> -->
					</td>
				</div>
			</form>
		<!--<div class="ajaxrslt" id="ajaxrslt_bidwinner">-->
			<!----Insert Ajax Table Here------>
			
			<!---- ------>
		<!--</div>-->
		
		<table class="table table-striped table-bordered table-sm text-center mt-5" id="dataTable" width="100%" cellspacing="0">
				<!-- <thead class="bg-info text-white">
				<tr>
					<th colspan="10">List of Auction Name</th>
				</tr>
				</thead> -->
				<thead class="bg-primary text-white">
				<tr>
					 <th>Auction Id</th>
					 <th>Lot No.</th>
					 <th>Starting Bid Price</th>
					 <th>Auction closing Date</th>
					 <th>Download</th>
				</tr>
													
				</thead>
				
				
				<tbody>
				<?php $aucw =  str_ireplace('/','-',$bidwinner[0]->auctionid);?>
				<?php  foreach($bidwinner as $bidwin){ ?>
				
				<tr>
					<td><a href="<?php  echo base_url()."Admin_aucwinner/aucwinner2/".str_ireplace('/','-',$bidwin->auctionid);?>">
						
						<?php  echo $bidwin->auctionid; ?></u></a></td>
					 <td><?php echo $bidwin->lotno; ?></td>
					 <td><?php echo $bidwin->bidstart; ?></td>
					 <td><?php echo $bidwin->aucclosedate_time; ?></td>
					 <td>
					<a href="" >
					<i class="fa fa-download"></i>
					</a></td>
				</tr>
				<?php  } ?>							
				</tbody>
		 </table>
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
