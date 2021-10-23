 <?php 
	//include('./header.php');
?>
<link href="<?php echo base_url()."web_files/";?>css/tablestyle.css" rel="stylesheet" type="text/css">
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
					<th>Seller Name</th>
				
				</tr>
				</thead>
				<tbody id="liveauc">
				<?php $count = 1;?>
			 <?php foreach ($sqldata as $sqldat){?>
					<tr>												
					<td data-label="Auction Id"><a href="<?php echo base_url()."Buyer_liveauc_2/index/".str_ireplace('/','-',$sqldat->auctionid);?>" data-toggle="modal" data-target="#myModal-<?php echo $count; ?>"><?php echo $sqldat->auctionid;?></a>
					</td>
					<td data-label="Seller Name"><?php echo $sqldat->sname; ?></td>
					</tr>
							 <!-- The Modal -->
<div class="modal" id="myModal-<?php echo $count;?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h6 class="modal-title"><b>WWW.AUCJUNCTION.COM Says</b></h6>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
	  <div class="form-check form-check-inline">
			<input type="checkbox" class="form-check-input" id="liveaucterms_condi" name="liveaucterms_condi" value="0">
			<label class="form-check-label" for="exampleCheck1"></label>
			</div>
	  <b>I fully agree with the BUYER, SELLER and AUCJUNCTION Terms & Conditions of this e-Auction.</b>
       
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
       <!-- <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>-->
		<a href="<?php echo base_url()."Buyer_liveauc_2/index/".str_ireplace('/','-',$sqldat->auctionid);?>" type="button" class="btn btn-primary" onclick="return validat()">OK</a>
      </div>

    </div>
  </div>
</div><?php $count++;?>	
			 <?php }?>	
				</tbody>
		 </table>

		<!--------Model --------->
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
			$('#liveauc').html(data);
});
setTimeout(executeQuery2, 30000); // you could choose not to continue on failure...
}
$(document).ready(function() {
  // run the first time; all subsequent calls will take care of themselves
  setTimeout(executeQuery2, 30000);
});
 </script>
 <script>
 function validat(){
	 var liveaucterms_condi = document.getElementById("liveaucterms_condi").value;
	 
	 if( $('input[name="liveaucterms_condi"]:checked').length == 0 )
		   
			{
				swal("Alert!",  "Please Accept terms and codition", "error");
				return false;
			}
	 
 }
 </script>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
 <?php 
	//include('./footer.php');
?>
</body>

</html>
