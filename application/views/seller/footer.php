      <!-- Footer -->
      <!-- <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy;rawmet 2020</span>
          </div>
        </div>
      </footer>-->
      <!-- End of Footer -->

  
 
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url()."logout/index/".str_ireplace('@','%40',$sessi);?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url()."web_files/";?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url()."web_files/";?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url()."web_files/";?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url()."web_files/";?>js/sb-admin-2.min.js"></script>
 <script src="<?php echo base_url()."web_files/";?>weblib/aucstart.js" type="text/javascript" charset="utf-8"></script>
  <!-- Page level plugins -->
  <script src="<?php echo base_url()."web_files/";?>vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url()."web_files/";?>js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url()."web_files/";?>js/demo/chart-pie-demo.js"></script>
  
    <!--data table-->
  <script src="<?php echo base_url()."web_files/";?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url()."web_files/";?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
 <script src="<?php echo base_url()."web_files/";?>js/demo/datatables-demo.js"></script>


 <script>
 function validate_user_password_seller(){
	 
	var user = document.getElementById('soldpassword').value;
	var user2 = document.getElementById('snewpassword').value;
	var user3 = document.getElementById('sconfirmpassword').value;
	
	if(user == "" || user2 == "" || user3 == ""){
			 swal("Alert!", "Old Password, New Password and Confirm Password Cannot Be Left Blank","error");
		 return false; 
	 }
	 
	if (user2 != user3) {
		swal("Both the Password Should Match");
		return false;
  } 
 }

function validate_password_seller(){
	var user = document.getElementById('soldpassword').value;
	$.get('<?php echo base_url() .'registration/passwordverify_seller/'; ?>'+user, function(data2){						
				 if($.trim(data2) == "HI"){
					return true;
				}else{
					swal("Alert!", "Old Password Doesnt Match","error");
					//alert("Hi");
					return false;
				}
			 }); 
 }
 </script>
 
 <script>
 function auction_id(){
	 var cat = document.getElementById('scategory').value;
	  var cat2 = document.getElementById('srefid').value;
	   var d = new Date();
	   var m = d.getHours();
	   var n = d.getMinutes();
	   var s = d.getSeconds();
	 if(cat == 'Select'){
		 swal("Alert!", "Please Select Categoery First", "error");
		 return false;
	 }
	 if(cat2.length<20){
		  document.getElementById('sauctionid').value = "AUC/"+cat2+"/"+cat+"/"+m+"/"+n+"/"+s;
	 }
 }
 </script>
 
  <script>
		$('#gettable_auction_seller').on('keyup', function(){
			var contents = $('#gettable_auction_seller').val(); 
			$.get('<?php echo base_url() .'seller_auctiondetails/get_table/'; ?>'+contents, function(data){
				$('#ajaxrslt_auction_seller').html(data);
			});
		});
	
 </script>
 
 <script>
		$('#gettable_editforth_seller').on('keyup', function(){
			var contents = $('#gettable_editforth_seller').val(); 
			$.get('<?php echo base_url() .'Seller_editforthcom/get_table/'; ?>'+contents, function(data){
				$('#ajaxrslt_editforth_seller').html(data);
			});
		});
	
 </script>
 <script>
		function seller_set(varab2){
		
			$.get('<?php echo base_url() .'Seller_auctionapproval/setdeactive/'; ?>'+varab2, function(data2){
			
				 if($.trim(data2) == "HI"){
					 window.location.href = '<?php echo base_url().'Seller_auctionapproval';?>'
					return true;
				}
			 });
			
		}
	
 </script>
<script>
		$('#gettable_biddata').on('keyup', function(){
			var contents = $('#gettable_biddata').val(); 
			$.get('<?php echo base_url() .'Seller_biddingdata/get_table/'; ?>'+contents, function(data){
				$('#ajaxrslt_biddata').html(data);
			});
		});
	
 </script>
 
 <script>
$('.delete-confirm').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'This record and it`s details will be permanantly deleted!',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});
</script>
</body>

</html>