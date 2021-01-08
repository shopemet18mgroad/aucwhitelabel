 <?php 
	//include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h3 mb-0 text-gray-800">Live Auction</h2>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
			  <table class="table table-striped table-sm text-center table-bordered " id="dataTable" width="100%" cellspacing="0">
				<thead class="bg-primary text-white">
				<tr>
					<th width="60%">Click for Auction</th>
					<th>Lot No.</th>
					<th>Description</th>
				</tr>
				</thead>
				<tbody id="liveauc">
			 <?php foreach($sqldata as $sqldat){?>
					<tr>												
					<td><a href="<?php echo base_url()."Buyer_liveauc_2/index/".str_ireplace('/','-',$sqldat->auctionid)."|".$sqldat->lotno;?>"><?php echo $sqldat->auctionid;?></a>
					</td>
					<td><?php echo $sqldat->lotno;?></td>
					<td><?php echo $sqldat->description;?></td>
					</tr>
			 <?php }?>	
				</tbody>
		 </table>
		
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
<script>
  function executeQuery2() {
  var contents = $('#ref').val(); 
			$.get('<?php echo base_url() .'Buyer_liveauc_2/get_table_ajax_liveauc_index/'; ?>', function(data){
				$('#ajaxauc').html(data);
	});
  setTimeout(executeQuery2, 30000); // you could choose not to continue on failure...
}

$(document).ready(function() {
  // run the first time; all subsequent calls will take care of themselves
  setTimeout(executeQuery2, 30000);
});
 </script>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
 <?php 
	//include('./footer.php');
?>
</body>

</html>
