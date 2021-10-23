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

  <!-- Page level plugins -->
  <script src="<?php echo base_url()."web_files/";?>vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url()."web_files/";?>js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url()."web_files/";?>js/demo/chart-pie-demo.js"></script>
  <script src="<?php echo base_url()."web_files/";?>js/aucseller.js" type="text/javascript" charset="utf-8"></script>
  <script src="<?php echo base_url()."web_files/";?>weblib/aucstart.js" type="text/javascript" charset="utf-8"></script>
  
  <!--data table-->
  <script src="<?php echo base_url()."web_files/";?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url()."web_files/";?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
 <script src="<?php echo base_url()."web_files/";?>js/demo/datatables-demo.js"></script>

 
  <script>
 function validatearry(){
	   var company = document.getElementById('scomapnyname').value;
	   var user = document.getElementById('susername').value;
	   var phoneNo = document.getElementById("sphone").value;
	   if(company == '' || user == ''){
		   swal("Alert!", "Company Name or UserName Cannot Be Left Blank", "error");
					return false;
			}
			
			if (phoneNo.value.length < 10 || phoneNo.value.length > 10) {
    swal("Alert!", "Mobile No. is not valid, Please Enter 10 Digit Mobile No.", "error");
    return false;
  }
  else if (phoneNo.value == "") {
    swal("Alert!","Please enter your Mobile No.","error");
    return false;
  }
			
	 	var selectname = document.getElementsByName('saddress[]');
		var textareablselect = document.getElementsByName('saddresscount[]');
		var signeddoc = document.getElementsByName('ssigneddocument[]');
		for(var ab = 0; ab<selectname.length; ab++){
			if(selectname[ab].value == "select"){
				swal("Alert!", "Please Select Address Type!", "error")
				//alert("Please Select Address Type");
				return false;
			}
		}
		for(var ab = 0; ab<textareablselect.length; ab++){
			if(textareablselect[ab].value == ""){
				swal("Alert!", "Address Cannot Be left Blank!", "error")
				//alert("Address Cannot Be left Blank");
				return false;
			}
		}
		for(var ab = 0; ab<signeddoc.length; ab++){
			if(signeddoc[ab].value == ""){
				swal("Alert!", "Please Select File to Upload!", "error")
				//alert("Please Select Files To Upload");
				return false;
			}
		}
 }
 
 </script>
 
  <script>
 function validate_adminsname(){
	  var cat2 = document.getElementById('scomapnyname').value;
	 if(cat2){
		  document.getElementById('sname').value = cat2 ;
	 }
 }
 </script>
 <script>
 function validate_adminbname(){
	  var cat2 = document.getElementById('bcompany').value;
	 if(cat2){
		  document.getElementById('bname').value = cat2 ;
	 }
 }
 </script>
   
   <script>
  function validate_adminscompany(){
	  var val = document.getElementById("scomapnyname").value;
		if(val != ''){
			 $.get('<?php echo base_url() .'Admin_seller_basicinfo_add/validate_adminsname/'; ?>'+val, function(data2){				 
				 if($.trim(data2) == "BYE"){
					swal("Alert!",  "Seller Company Name Already Exists", "error");
					document.getElementById("scomapnyname").value = "";
					return false;
				}else{
					return true;
				}
			 });
			
		}else{
			swal("Alert!",  "Please Enter Seller Name!", "error");
			return false;
		}
  }

   </script>
   
   <script>
  function validate_adminbcompany(){
	  var val = document.getElementById("bcompany").value;
		if(val != ''){
			 $.get('<?php echo base_url() .'Admin_buyer_basicinfo_add/validate_adminbcompany/'; ?>'+val, function(data2){				 
				 if($.trim(data2) == "BYE"){
					swal("Alert!",  "Buyer Company Name Already Exists", "error");
					document.getElementById("bcompany").value = "";
					return false;
				}else{
					return true;
				}
			 });
			
		}else{
			swal("Alert!",  "Please Enter Buyer Company Name!", "error");
			return false;
		}
  }

   </script>
 
 
 <script>
 function validate_user(){
	 var user = document.getElementById('susername').value;
	  if(user == ""){
		 swal("Alert!", "User Name Cannot Be Left Blank","error");
		 return false; 
	 }
	  $.get('<?php echo base_url() .'registration/userverify/'; ?>'+user, function(data2){						
				 if($.trim(data2) == "HI"){
					return true;
				}else{
					swal("Alert!", "User Name Already Exists", "error");
					return false;
				}
			 });
 }
 </script>
 <script>
 function validate_company(){
	 var company = document.getElementById('scomapnyname').value;
	 if(company == ""){
		 swal("Alert!", "Company Name Cannot Be Left Blank","error");
		 return false;
		 
		 
	 }
	  $.get('<?php echo base_url() .'registration/companyverify/'; ?>'+company, function(data2){						
				 if($.trim(data2) == "HI"){
					return true;
				}else{
					swal("Alert!", "Company Name Already Exists", "error");
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
	 if(cat2.length<21){
		  document.getElementById('sauctionid').value = "AUC/"+cat2+"/"+cat+"/"+m+"/"+n+"/"+s;
	 }
 }
 </script>

 <script>
		$('#gettable_seller').on('keyup', function(){
			var contents = $('#gettable_seller').val(); 
			$.get('<?php echo base_url() .'admin_sellereditprofile/get_table/'; ?>'+contents, function(data){
				$('#ajaxrslt_seller').html(data);
			});
		});
	
 </script>
 <script>
		$('#gettable_sellerref').on('keyup', function(){
			var contents = $('#gettable_sellerref').val(); 
			$.get('<?php echo base_url() .'Admin_sellereditbyref/get_table/'; ?>'+contents, function(data){
				$('#ajaxrslt_sellerref').html(data);
			});
		});
	
 </script>
 
 <script>
		$('#gettable_buyer').on('keyup', function(){
			var contents = $('#gettable_buyer').val(); 
			$.get('<?php echo base_url() .'admin_buyereditprofile/get_table/'; ?>'+contents, function(data){
				$('#ajaxrslt_buyer').html(data);
			});
		});
	
 </script>
 
 <script>
		$('#gettable_buyerref').on('keyup', function(){
			var contents = $('#gettable_buyerref').val(); 
			$.get('<?php echo base_url() .'Admin_buyereditbyref/get_table/'; ?>'+contents, function(data){
				$('#ajaxrslt_buyerref').html(data);
			});
		});
	
 </script>
	  <script>

$(document).ready(function(){
  $("#myInput").on("change", function() {
    var value = $(this).val().toLowerCase();
	$("a.mylink").attr("href", "<?php echo base_url();?>Admin_manageseller/export_csvenquiry/" +value);
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> 


<script>
		$('#gettable2').on('keyup', function(){
			var contents = $('#gettable2').val(); 
			$.get_where('<?php echo base_url() .'sellerprofile/getdatafromtable/'; ?>'+contents, function(data){
				$('#ajaxrslt_auction').html(data);
			});
		});
	
 </script>

 
 <!--------------start auction--------------------------->
 <script>
		$('#gettable_auction').on('keyup', function(){
			var contents = $('#gettable_auction').val(); 
			$.get('<?php echo base_url() .'admin_auctiondetails/get_table/'; ?>'+contents, function(data){
				$('#ajaxrslt_auction').html(data);
			});
		});
	
 </script>
  <script>
		$('#gettable_editforth').on('keyup', function(){
			var contents = $('#gettable_editforth').val(); 
			$.get('<?php echo base_url() .'admin_editforthcom/get_table/'; ?>'+contents, function(data){
				$('#ajaxrslt_editforth').html(data);
			});
		});
	
 </script>
 
 <script>
		$('#gettable_editforth2').on('keyup', function(){
			var contents = $('#gettable_editforth2').val(); 
			$.get('<?php echo base_url() .'admin_editforthcom2/get_table/'; ?>'+contents, function(data){
				$('#ajaxrslt_editforth2').html(data);
			});
		});
	
 </script>

 <script>
		$('#gettable_editauction').on('keyup', function(){
			var contents = $('#gettable_editauction').val(); 
			$.get('<?php echo base_url() .'admin_auctiondetails/get_table/'; ?>'+contents, function(data){
				$('#ajaxrslt_editauction').html(data);
			});
		});
	
 </script>
 
  <script>
		$('#gettable_bidsummary').on('keyup', function(){
			var contents = $('#gettable_bidsummary').val(); 
			$.get('<?php echo base_url() .'Admin_bidsummary/get_table/'; ?>'+contents, function(data){
				$('#ajaxrslt_bidsummary').html(data);
			});
		});
	
 </script>
 
 <script>
		$('#gettable_aliveauction').on('keyup', function(){
			var contents = $('#gettable_aliveauction').val(); 
			$.get('<?php echo base_url() .'admin_liveauc/get_table/'; ?>'+contents, function(data){
				$('#ajaxrslt_aliveauction').html(data);
			});
		});
	
 </script>
 
 <script>
		$('#gettable_forthcomingauc').on('keyup', function(){
			var contents = $('#gettable_forthcomingauc').val(); 
			$.get('<?php echo base_url() .'admin_forthcomingauc/get_table/'; ?>'+contents, function(data){
				$('#ajaxrslt_forthcomingauc').html(data);
			});
		});
	
 </script>
 
 
 <script>
		$('.gettable').on('keyup', function(){
			var contents = $('#gettable').val(); 
			$.get('<?php echo base_url() .'admin_editforthcom_2/get_table/'; ?>'+contents, function(data){
				$('#ajaxrslt').html(data);
			});
		});

 </script>
 

 <script>
		function seller_set_deactive(varab){
			$.get('<?php echo base_url() .'Admin_sellerapproval/setdeactive_seller/'; ?>'+varab, function(data2){	
					
				 if($.trim(data2) == "HI"){
					 window.location.href = '<?php echo base_url().'Admin_sellerapproval';?>'
					return true;
				}else{
					swal("Alert!", "Company Name Already Exists", "error");
					return false;
				}
			 });
			
		}


 </script>

 
<script>
		function buyer_set_deactive(varab){
			$.get('<?php echo base_url() .'Admin_buyerapproval/setdeactive_buyer/'; ?>'+varab, function(data2){	
				 if($.trim(data2) == "HI"){
					 window.location.href = '<?php echo base_url().'Admin_buyerapproval';?>'
					return true;
				}else{
					swal("Alert!", "Company Name Already Exists", "error");
					return false;
				}
			 });
			
		}
	
 </script>
 
 
 
 <script>
		function winner_set_deactive(varab2){
			$.get('<?php echo base_url() .'Admin_bidwinner/setdeactive_winner/'; ?>'+varab2, function(data2){	
				 if($.trim(data2) == "HI"){
					 window.location.href = '<?php echo base_url().'Admin_bidwinner';?>'
					return true;
				}
			 });
			
		}
	
 </script>
 
 
   <script>
 function validatearry2(){
	   var company = document.getElementById('bcompany').value;
	   var user = document.getElementById('busername').value;
	   var phoneNo = document.getElementById("bphone").value;
	   if(company == '' || user == ''){
		   swal("Alert!", "Company Name or UserName Cannot Be Left Blank", "error");
					return false;
			}
	
	if (phoneNo.value.length < 10 || phoneNo.value.length > 10) {
    swal("Alert!", "Mobile No. is not valid, Please Enter 10 Digit Mobile No.", "error");
    return false;
  }
  else if (phoneNo.value == "") {
    swal("Alert!","Please enter your Mobile No.","error");
    return false;
  }
	 
		var signeddoc = document.getElementsByName('bsigneddocument[]');

		
		for(var ab = 0; ab<signeddoc.length; ab++){
			if(signeddoc[ab].value == ""){
				swal("Alert!", "Please Select File to Upload!", "error")
				//alert("Please Select Files To Upload");
				return false;
			}
		}
 }
 
 </script>
 
 <script>
 function validate_user2(){
	 var user = document.getElementById('busername').value;
	  if(user == ""){
		 swal("Alert!", "User Name Cannot Be Left Blank","error");
		 return false; 
	 }
	  $.get('<?php echo base_url() .'registrationb/userverify/'; ?>'+user, function(data2){						
				 if($.trim(data2) == "HI"){
					return true;
				}else{
					swal("Alert!", "User Name Already Exists", "error");
					return false;
				}
			 });
 }
 </script>
 <script>
 function validate_company2(){
	 var company = document.getElementById('bcompany').value;
	 if(company == ""){
		 swal("Alert!", "Company Name Cannot Be Left Blank","error");
		 return false;
		 
		 
	 }
	  $.get('<?php echo base_url() .'registrationb/companyverify/'; ?>'+company, function(data2){						
				 if($.trim(data2) == "HI"){
					return true;
				}else{
					swal("Alert!", "Company Name Already Exists", "error");
					return false;
				}
			 });
 }
 </script>
 
 <script>
		function auction_set_deactive(varab){
			$.get('<?php echo base_url() .'Admin_forthcomingauc_2/setdeactive_auction/'; ?>'+varab, function(data2){	
					
				 if($.trim(data2) == "HI"){
					 window.location.href = '<?php echo base_url().'Admin_forthcomingauc_2';?>'
					return true;
				}else{
					swal("Alert!", "Company Name Already Exists", "error");
					return false;
				}
			 });
			
		}


 </script>
 
 <script>
		$('#gettable_emdprofile').on('keyup', function(){
			var contents = $('#gettable_emdprofile').val(); 
			$.get('<?php echo base_url() .'admin_emdprofile/get_table/'; ?>'+contents, function(data){
				$('#ajaxrslt_emdprofile').html(data);
			});
		});
	
 </script>
 <script>
 function search_company(){
	 $("#dp").hide();
 if(document.getElementById("scompanyname").value.length > 1){
	 $("#dp").show();
			var contents = $('#scompanyname').val(); 
			$.get('<?php echo base_url() .'admin_startauction/get_seller_table/'; ?>'+contents, function(data){
				$('#dp').html(data);
			});

					
 }else{
	 return;
 }
}
</script>
 <script>
 function getPaging(v){
	 var s = v.split("|");
	document.getElementById("scompanyname").value = s[0];
	document.getElementById("sname").value = s[1];
	 $("#dp").hide();
 }
 </script>
 
 
 
 <script>
		function buyer_set_deactive_emd(varab2){
			$.get('<?php echo base_url() .'Admin_emdrequest/setdeactive_buyer_emd/'; ?>'+varab2, function(data2){			
				 if($.trim(data2) == "HI"){
					 window.location.href = '<?php echo base_url().'Admin_emdrequest';?>'
					return true;
				}
			 });
			
		}
	
 </script>
 <script>
		function buyer_set_deactive_emd1(varab3){
			$.get('<?php echo base_url() .'Admin_emdrequest/setdeactive_buyer_emd1/'; ?>'+varab3, function(data3){			
				 if($.trim(data3) == "HI"){
					 window.location.href = '<?php echo base_url().'Admin_emdrequest';?>'
					return true;
				}
			 });
			
		}
	
 </script>	 
	 
 
 <script>
		function buyer_set_deactive_emd_dd(varab2){
			$.get('<?php echo base_url() .'Admin_emdapproval/setdeactive_buyer_emd_dd/'; ?>'+varab2, function(data2){
				
				 if($.trim(data2) == "HI"){
					 window.location.href = '<?php echo base_url().'Admin_emdapproval';?>'
					return true;
				}
			 });
			
		}
	
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
 <script>
 
$(document).ready(function() {
  $.get('<?php echo base_url() .'Game_play/check_game_time/'; ?>', function(data){
	  alert(data);
				$('#ajaxreloadadminlive').html(data);
	});
});
 </script>
 