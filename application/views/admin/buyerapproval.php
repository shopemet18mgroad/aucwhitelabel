<?php 
	//include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
         <!--  <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Profile</h1>
            
          </div> -->

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">

		
		<table class="table table-striped table-bordered table-sm text-center mt-5" id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-primary text-white">
				<tr>
					<th>Buyer Name</th>
					<th>Company Type</th>
					<th>Contact Person</th>
					<th>Location</th>
					<th>City</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
				</thead>
			<tbody>
				
				<?php foreach($activestat as $activesta){?>
				<tr>												
					<td><?php echo $activesta->bname; ?></td>
					<td><?php echo $activesta->bcomptype; ?></td>
					<td><?php echo $activesta->bcontactperson; ?></td>
					<td><?php echo $activesta->baddress; ?></td>
					<td><?php echo $activesta->bcompany; ?></td>
					<td><?php echo "DEACTIVE";?></td>
					<td><button type="submit" name="submit" id="<?php echo $activesta->bcompany;?>" onclick="buyer_set_deactive(this.id)" class="btn btn-info btn-sm">Approve</button></td>	
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
