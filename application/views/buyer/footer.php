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
          <a class="btn btn-primary" href="login.html">Logout</a>
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

  <!-- Page level plugins -->
  <script src="<?php echo base_url()."web_files/";?>vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url()."web_files/";?>js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url()."web_files/";?>js/demo/chart-pie-demo.js"></script>
  
  <!--data table-->
<script src="<?php echo base_url()."web_files/";?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()."web_files/";?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
  
 <script src="<?php echo base_url()."web_files/";?>js/demo/datatables-demo.js"></script>


<!---------------------------------------------------------->
<script>
		$('.gettable').on('keyup', function(){
			var contents = $('#gettable').val(); 
			$.get('<?php echo base_url() .'buyer_liveauc/get_table/'; ?>'+contents, function(data){
				$('#ajaxrslt').html(data);
			});
		});

 </script>
 
 <script>
		$('.gettable').on('keyup', function(){
			var contents = $('#gettable').val(); 
			$.get('<?php echo base_url() .'buyer_liveauc2/get_table/'; ?>'+contents, function(data){
				$('#ajaxrslt').html(data);
			});
		});

 </script>
 
  <script>
		$('#gettable_detailedauc').on('keyup', function(){
			var contents = $('#gettable_detailedauc').val(); 
			$.get('<?php echo base_url() .'buyer_detailedauc/get_table/'; ?>'+contents, function(data){
				$('#ajaxrslt_detailedauc').html(data);
			});
		});

 </script>
 <script>

  $(document).ready(function($) {

		$('#gettable_forthcomingauc').on('keyup', function(){
			var contents = $('#gettable_forthcomingauc').val(); 
			$.get('<?php echo base_url() .'buyer_forthcomingauc/get_table/'; ?>'+contents, function(data){
				$('#ajaxrslt_forthcomingauc1').html(data);
			});
		});

 </script>
 <script>
  /*  $(function(){
	 $("#scategory").change(function(){
		var displaycourse=$("#scategory option:selected").text();
		$("#gettable_forthcomingauc").val(displaycourse);
		
	 });
 }); */ 
    $(document).ready(function($) {

   $('table').hide();
   $('table').show();
    $('#gettable_forthcomingauc').change( function(){
		
		var contents = $('#gettable_forthcomingauc').val(); 
			 $.get('<?php echo base_url() .'buyer_forthcomingauc/get_table/'; ?>'+contents, function(data){
				$('#ajaxrslt_forthcomingauc').html(data);
			});

      var selection = $(this).val();
	  
      var dataset = $('#myTable').find('tr');
	 
         $.each(dataset, function(index, item) {
            help
          });
		  

  });

    });
	

	$('#gettable_forth').on('keyup', function(){
			var contents = $('#gettable_forth').val(); 
			$.get('<?php echo base_url() .'buyer_forthcomingauc/get_table/'; ?>'+contents, function(data){
				$('#ajaxrslt_forthcomingauc').html(data);
			});
		});
</script>

<script>

function HeartFunction() {
   var element = document.getElementById("heart");
   element.classList.toggle("heartstyle");


}
</script>
 
 <script>
 function validate_user_password(){
	 
	var user = document.getElementById('boldpassword').value;
	var user2 = document.getElementById('bnewpassword').value;
	var user3 = document.getElementById('bconfirmpassword').value;
	
	if(user == "" || user2 == "" || user3 == ""){
			 swal("Alert!", "Old Password, New Password and Confirm Password Cannot Be Left Blank","error");
		 return false; 
	 }
	 
	if (user2 != user3) {
		swal("Both the Password Should Match");
		return false;
  } 
 }

function validate_password(){
	var user = document.getElementById('boldpassword').value;
	$.get('<?php echo base_url() .'registration/passwordverify_buyer/'; ?>'+user, function(data2){						
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


