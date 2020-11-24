<?php 
	//include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Sales Report</h1>
            
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
						<!--<form action="/action_page.php">
							
								<input type="text" class="form-control" placeholder="Search.." name="search">
								<button class="form-control" type="submit"><i class="fa fa-search"></i></button>
					
						</form>-->
					</td>
				</div>
			
		
			</form>
		
		<table class="table table-striped table-bordered table-sm text-center mt-5" id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-primary text-white">
				<tr>
					<th>Auction ID</th>
					<th>From-Date</th>
					<th>To-Date</th>
					<th>View Details</th>
				</tr>
				</thead>
				<tbody>
					<tr>
						<?php  foreach($sqldat as $sqldata){ ?>
					<tr><td><?php echo $sqldata->auctionid; ?></td>		
					<td class="up"><?php echo $sqldata->aucstartdate_time; ?></td>
					<td class="up"><?php echo $sqldata->aucclosedate_time; ?></td>
					<td class="up"><a href="<?php  echo base_url()."Admin_salesdata/index/".str_ireplace('/','-',$sqldata->auctionid);?>">View Details</a></td>
				</tr>
				<?php  } ?>
					</tr>
													
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
