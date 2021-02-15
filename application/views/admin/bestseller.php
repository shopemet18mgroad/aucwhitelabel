<?php 
	//include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Best Seller</h1>
            
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
						
					</td>
				</div>
			</form>
		
		<table class="table table-striped table-bordered table-sm text-center mt-5" id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-primary text-white">
		<tr>
			<th>Company Name</th>
			<th>Event Date</th>
			<th>Total Revenue</th>
			<th>Total Number Of Auctions</th>
			<th>Total Amount</th>
		</tr>
		</thead>
		<tbody>
			<?php if(isset($sqldatarec)){ $s = array_unique($sqldatarec); foreach($s as $sqldata){ $datareciver = explode('|',$sqldata);?>
		
					<tr>												
						
						<td><?php echo $datareciver[0]; ?></td>
						<td><?php $eventdate = $datareciver[1];
								  $tmp = explode('.',$eventdate);
								  $eventdate = $tmp[0];
									echo $eventdate;?></td>
						<td></td>
						<td><?php echo $datareciver[2]; ?></td>
						<td><?php echo $datareciver[3]; ?></td>
						 </tr>
						 <?php  }} ?>
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
