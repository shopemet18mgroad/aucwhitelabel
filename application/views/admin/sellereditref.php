<?php 
	//include('./header.php');
?>        <!-- End of Topbar -->

        <!-- Begin Page Content -->
		
	<link href="<?php echo base_url()."web_files/";?>css/tablestyle.css" rel="stylesheet" type="text/css">	
		
		
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Profile</h1>
            
          </div>


          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
			
              <div class="table-responsive">
			   <form class="form-inline">
					<div class="form-group  offset-sm-2">
						<td colspan="5">
						<!-- <form action="/action_page.php"> -->
								<label for="gettable"></label>
								<input type="text" class="form-control gettable" id="gettable_sellerref" placeholder="Enter Company Name To Fetch Result"  size="70" name="search">
								
								<!--<button class="form-control" type="submit"><i class="fa fa-search"></i></button>-->
					
						<!-- </form> -->
					</td><a href='<?php echo base_url();?>Admin_sellereditbyref/export_csv' type="button" class="btn btn-info btn-sm ml-3"><b>Export</b></a><br><br>
				</div>
			
		
			</form>
		<div class="ajaxrslt" id="ajaxrslt_sellerref">
			<!----Insert Ajax Table Here------>
			
			<!---- ------>
		</div>

		</div>
		</div>
		
		
          <!--Pagination -->

        
        <!-- /.container-fluid -->

</div>
</div>
</div>
      
</div>
</div>
 
<?php 
	//include('./footer.php');
?>
</body>

</html>
