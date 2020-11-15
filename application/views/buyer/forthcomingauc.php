 <?php 
	//include('./header.php');
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h3 mb-0 text-gray-800">Forthcoming Auction</h2>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
			 
			      <form class="form-inline">
					<div class="form-group mr-5 col-sm-10 offset-sm-3  ">
						<td colspan="5">
						<!-- <form action="/action_page.php"> -->
								
								<label for="gettable" ><strong>Category:</strong></label>
								
								<select class="form-control gettable col-sm-5 col-md-5 ml-2" id="gettable_forthcomingauc" name="scategory" >
							<option></option>
							<option value="">All</option>
								</select>
								
								<!--<button class="form-control" type="submit"><i class="fa fa-search"></i></button>-->
					
						<!-- </form> -->
					</td><br><br><br>
						<td colspan="5">
						<!-- <form action="/action_page.php"> -->
								<label for="gettable"></label>
								<input type="text" class="form-control gettable " id="gettable_forth" placeholder="Enter Company Name To Fetch Result"  size="60" name="search">
								
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

<script>
function Addtocart() {
  //document.getElementById("demo").style.color = "red";
$(document).ready(function(){
 
 $('.add_cart').click(function(){
  var sauctionid = $(this).data("sauctionid");
  var slotname = $(this).data("slotname");
  var sdescription = $(this).data("sdescription");
 
   $.ajax({
    url:"<?php echo base_url(); ?>Buyer_forthcomingauc/Addtocart",
    method:"POST",
    data:{sauctionid:sauctionid, slotname:slotname, sdescription:sdescription},
    success:function(data)
    {
     alert("Product Added into Cart");
    
    }
   });
  }

</script>
</html>
