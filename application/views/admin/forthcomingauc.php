<?php 
	//include('./header.php');
?>        <!-- End of Topbar -->
	<link href="<?php echo base_url()."web_files/";?>css/tablestyle.css" rel="stylesheet" type="text/css">
	
	
	

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h3 mb-0 text-gray-800">Forthcoming Auction Approval</h2>
            
          </div>

          <!-- Content Row -->
          <div class="row w-100">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-md-10 offset-sm-1 p-2">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
	 <form class="form-inline">
					<div class="form-group mr-4 offset-sm-4">
						<td colspan="5">
						<!-- <form action="/action_page.php"> -->
								<label for="gettable"></label>
								<input type="text" class="form-control gettable" id="gettable_forthcomingauc" placeholder="Enter Company Name To Fetch Result"  size="70" name="search">
								
								<!--<button class="form-control" type="submit"><i class="fa fa-search"></i></button>-->
					
						<!-- </form> -->
					</td>
				</div>
			</form>
		<div class="ajaxrslt" id="ajaxrslt_forthcomingauc">
			<!----Insert Ajax Table Here------>
			
			<!---- ------>
		</div>
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
