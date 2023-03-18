 <?php 
	//include('./header.php');
?>
<link href="<?php echo base_url()."web_files/";?>css/tablestyle.css" rel="stylesheet" type="text/css">
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h3 mb-0 text-gray-800">Forthcoming Tender</h2>
            
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-12">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
			 
			      <form class="form-inline">
					<div class="form-group col-sm-12 offset-sm-12 ">
						<div class="text-center col-sm-12">
						<!-- <form action="/action_page.php"> -->
								
								<label for="gettable" ><strong>Category:</strong></label>
								
								<select class="form-control gettable" id="gettable_forthcomingauc" name="scategory" >
							<option>SELECT</option>
							<option value="">All</option>
								</select>
								
								<!--<button class="form-control" type="submit"><i class="fa fa-search"></i></button>-->
					
						<!-- </form> -->
					</div><br><br><br>
						<div class="text-center col-sm-12">
						<!-- <form action="/action_page.php"> -->
								<label for="gettable"></label>
								<input type="text" class="form-control gettable " id="gettable_forth" placeholder="Enter Lot Description To Fetch Result"  size="60" name="search">
								
								<!--<button class="form-control" type="submit"><i class="fa fa-search"></i></button>-->
					
						<!-- </form> -->
					</div>
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

  
 <!-- <script>
 $(function(){
	 $("#scategory").change(function(){
		var displaycourse=$("#scategory option:selected").text();
		$("#gettable_forthcomingauc").val(displaycourse);
	 })
 })
 </script>-->
  <script>
  function changeLanguage(language) {
   var element = document.getElementById("url");
   element.value = language;
   element.innerHTML = language;
  }
 </script>

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
