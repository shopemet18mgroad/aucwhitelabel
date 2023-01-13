<?php 
	//include('./header.php');
?>
	
<link href="<?php echo base_url()."web_files/";?>css/tablestyle.css" rel="stylesheet" type="text/css">	
	
	
	
	
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
         <!--  <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Profile</h1>
            
          </div> -->

          <!-- Content Row -->
          <div class="row w-100">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-md-10 offset-sm-1 p-2">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">

		
		<table class="table table-striped table-bordered table-sm text-center mt-5" id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-primary text-white">
				<tr>
					<th>Buyer Name</th>
					<th>Company Type</th>
					<th>Location</th>
					<th>Company Name</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
				</thead>
			<tbody>
				
				<?php foreach($activestat as $activesta){?>
				<tr>												
					<td data-label="Buyer Name"><?php echo $activesta->bname; ?></td>
					<td data-label="Company Type"><?php echo $activesta->bcomptype; ?></td>
					<td data-label="Location"><?php echo $activesta->baddress; ?></td>
					<td data-label="Company Name"><?php echo $activesta->bcompany; ?></td>
					<td data-label="Status"><?php echo "DEACTIVE";?></td>
					<td data-label="Action"><button type="submit" name="submit" id="<?php echo $activesta->bcompany;?>" onclick="buyer_set_deactive(this.id)" class="btn btn-info btn-sm">Approve</button></td>	
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
