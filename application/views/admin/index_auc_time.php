<?php 
	//include('./headerdata.php');
?>   
     <!-- End of Topbar -->
<link href="<?php echo base_url()."web_files/";?>css/mediaform.css" rel="stylesheet" type="text/css">
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
    <!--       <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Vendor Profile</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div> -->

          <!-- Content Row -->


          <!-- Content Row -->

           <div class="row w-100">
    <div class=" col-md-10 offset-sm-1">
              <div class="card shadow mb-3">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Change Timings</h6>
               
                </div>
                <!-- Card Body -->
                <div class="card-body">
					 <table class="table table-sm table-borderless">
					 <thead><th width="45%">Select Auction</th>
					 <form action = "<?php echo base_url();?>admin_seller_basicinfo_add" method="POST" onsubmit="return validateForm()" enctype="multipart/form-data">
					 </thead>
						<tbody>
						<tr><td ><img class="img-fluid" src="<?php echo base_url()."web_files/";?>img/manimg.jpg" alt="Chania" width="40" height="35"></td></tr>

						<tr>
							<td class="btxt">Select Auction Id:</td>
							<td><select class="form-control w-100" style="text-align-last:center;"  id="auc_id" name="auc_id">
							<option value="SELECT" selected>SELECT AUC</option>
							</select></td>
						</tr>  
					<tr>
					<td>Auction Time</td>
					<td><input class="form-control w-75" type="datetime-local" id="sliftingperiod2" name="sliftingperiod2">
    				</tr>
						
                <!-- Confirm Password -->
					</tbody>
					</table>			


				<a href="#"><button type="submit" name="sbt2" onclick="return validatearry()"class="btn btn-info offset-sm-4 mt-2">Update</button></a>
												
												
				</form>
              </div>
            </div>

            <!-- Pie Chart -->

          </div>
        <!-- /.container-fluid -->

      </div>
	  
	  
      <!-- End of Main Content -->

      <!-- Footer -->
     <!--  <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy;rawmet 2020</span>
          </div>
        </div>
      </footer>-->
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  
  <!--<script>
 $(document).ready(function() {
 var max_fields  = 20;
 var wrapper     = $(".input_fields_wrap");
 var add_button  = $(".add_field_button");

 
 var x=1;
 $(add_button).click(function(e) {
   e.preventDefault();
   if(x < max_fields){
			x++;
			$(wrapper).append('<div><input class="mt-2" type="file" id="ssigneddocument" name="ssigneddocument[]" ><a href="#" class="remove_field"><button type="button" class="btn btn-sm btn-primary ml-1">  <i class="fa fa-minus text-white"></i></button></a></div>');
   
   }	
			});
			
			
			$(wrapper).on("click",".remove_field", function(e){
			
			e.preventDefault();
			$(this).parent('div').remove();
			x--;
			
			})
			
			});
 
 </script> -->
 
  <script>
 $(document).ready(function() {
 var max_fields  = 10;
 var wrapper     = $(".input_fields_wrap1");
 var add_button  = $(".add_field_button1");

 
 var x=1;
 $(add_button).click(function(e) {
   e.preventDefault();
   if(x < max_fields){
			x++;
			$(wrapper).append('<div><tr><td><select class="form-control w-50  p-1 " name="saddress[]"><option value="select" selected>SELECT</option><option value="Corporate Office" >Corporate Office</option><option value="Headquarter">Headquarter</option></select></td><td><textarea class="form-control float-left mt-2 p-2 w-50" type="text" name="saddresscount[]" ></textarea><a href="#" class="remove_field">  <button type="button" class="btn btn-sm btn-primary ml-1 mb-5 mt-3">  <i class="fa fa-minus text-white"></i></button></a></td></tr></div>');
   }	
	
			});
			
			
			$(wrapper).on("click",".remove_field", function(e){
			
			e.preventDefault();
			$(this).parent('div').remove();
			x--;
			
			})
			
			});
 
 </script>
 
 <script type="text/javascript">
  $(document).ready(function() {

    $(".pan").change(function() {
      var inputvalues = $(this).val();
      var regex = /[A-Z]{5}[0-9]{4}[A-Z]{1}$/;
      if (!regex.test(inputvalues)) {
        $(".pan").val("");
        swal("Alert!", "Invalid PAN no", "error");
        return regex.test(inputvalues);
      }
    });

  });
</script>

<script type="text/javascript">
  $(document).ready(function() {

    $(".gst").change(function() {
      var inputvalues = $(this).val();
      var regex = /^([0-9]){2}([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}([0-9]){1}([a-zA-Z]){1}([0-9A-Z]){1}?$/;
      if (!regex.test(inputvalues)) {
        $(".gst").val("");
        swal("Alert!", "Invalid gst no", "error");
        return regex.test(inputvalues);
      }
    });

  });
</script>

<script>
  function validateForm() {
    //collect form data in JavaScript variables
    var pw1 = document.getElementById("spassword").value;
    var pw2 = document.getElementById("sconfirmpassword").value;


    //check empty password field

    //minimum password length validation
    if (pw1.length < 8) {
      document.getElementById("message1").innerHTML = "**Password length must be atleast 8 characters";
      return false;
    }

    //maximum length of password validation
    if (pw1.length > 15) {
      document.getElementById("message1").innerHTML = "**Password length must not exceed 15 characters";
      return false;
    }

    if (pw1 != pw2) {
      document.getElementById("message2").innerHTML = "**Passwords are not same";
      return false;
    }
  }
</script>
 
  <?php 
	//include('./footerdata.php');
?>
</body>

</html>
