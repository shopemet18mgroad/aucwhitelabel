<?php 
	//include('./header.php');
?>
	
<link href="<?php echo base_url()."web_files/";?>css/tablestyle.css" rel="stylesheet" type="text/css">	
	
	
	
<head> <meta http-equiv="refresh" content="30; url=<?php echo base_url()."admin_liveauc"; ?>">
</head>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h3 mb-0 text-gray-800">Live Auction</h2>
            
          </div>

          <!-- Content Row -->
          <div class="row w-100">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-md-12 offset-sm-1 p-2">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
				<table class="table table-striped table-sm text-center table-bordered " id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-primary text-white">
				<tr>
					<th width="60%">Click for Auction</th>
				</tr>
				</thead>
				<tbody id="admiliveauc">
				<?php foreach($sqldata as $sqldat){?>
				<tr>
<input type="hidden" id="ref-0" value="<?php echo str_ireplace('/','-',$sqldat->sauctionid); ?>">				
					<td  data-label="Click for Auction"><a href="<?php  echo base_url()."Admin_liveauc_2/index/".str_ireplace('/','-',$sqldat->sauctionid);?>"><?php echo $sqldat->sauctionid;?></a></td>
				</tr>
				<?php }?>
				</tbody>
		 </table>
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

    
    <!-- End of Content Wrapper -->

  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
<?php 
	//include('./footer.php');
?>
</body>

</html>
