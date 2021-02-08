<?php 
	//include('./header.php');
	$relot = $scomps[0]->slotno;
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Re-Auction</h1>
           
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
               <table class="table table-striped text-left table-sm p-4" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-info text-white">
      <tr>
		<th colspan="10"><center>Re-Auction</center></th>  
      </tr>
    </thead>
    <tbody>
	 
	  <form action="<?php echo base_url();?>Seller_reauction_update" method="POST" id="upload-form" enctype="multipart/form-data">
		  

	  <tr>
		  <td>Seller Name</td>
		  <td><input class="form-control w-50"  type="hidden" id="slotno" name="slotno" value="<?php echo $scomps[0]->slotno;?>" readonly>
		  <input class="form-control w-50"  type="text" id="sname" name="sname" value="<?php echo $scomp[0]->sname;?>" readonly>
		  </td>
	  </tr>

	  
	  
      
	  <tr>
		  <td>Auction Id</td>
		  <td><input class="form-control w-50"  type="text" id="sauctionid" name="sauctionid" value="<?php echo  $scomp[0]->sauctionid;?>" readonly></td>

	  </tr>
	  <tr>
		  <td>Seller Company Name</td>
		  <td><input class="form-control w-50"  type="text" id="scompanyname" name="scompanyname" value="<?php echo  $scomp[0]->scompanyname;?>" readonly>
		</td>
	  </tr>
	  


	  <tr>
		<td>Auction Start And End Date</td>
		<td><input class="form-control w-50" id="saucstartdate_time" name="saucstartdate_time" type="datetime-local" value="<?php echo date('Y-m-d\TH:i', strtotime($scomp[0]->saucstartdate_time)); ?>">
		
		<input class="form-control w-50" id="saucclosedate_time" name="saucclosedate_time" type="datetime-local" value="<?php echo date('Y-m-d\TH:i', strtotime($scomp[0]->saucclosedate_time)); ?>">
		</td>
	</tr>
	


  <!-- The Modal -->
 
  
    </tbody>
  </table>
  
  <center><a  href="<?php echo base_url()."Seller_relot/relot2/".str_ireplace('/','-',$scomp[0]->sauctionid).'/'.$scomp[0]->sname.'/'.$relot;?>"><input type="submit" class="btn btn-info" value="ReAuction">
  <!--<button type="button" class="btn btn-info">ReAuction</button>--></a>
  </center>
 	 </form>

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
  
  
  
  
  <!-----myscript-->



<?php 
	//include('./footer.php');
?>
</body>

</html>
