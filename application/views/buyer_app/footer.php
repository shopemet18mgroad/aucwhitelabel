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
          <a class="btn btn-primary" href="<?php echo base_url()."Buyer_app_login/index/".$sessi;?>">Logout</a>
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
			$.get('<?php echo base_url() .'buyer_app_liveauc/get_table/'; ?>'+contents, function(data){
				$('#ajaxrslt').html(data);
			});
		});

 </script>
 
 <script>
		$('.gettable').on('keyup', function(){
			var contents = $('#gettable').val(); 
			$.get('<?php echo base_url() .'Buyer_app_liveauc_2/get_table/'; ?>'+contents, function(data){
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
			$.get('<?php echo base_url() .'Buyer_app_forthcoming/get_table/'; ?>'+contents, function(data){
				$('#ajaxrslt_forthcomingauc1').html(data);
			});
		});
  }
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
			 $.get('<?php echo base_url() .'Buyer_app_forthcoming/get_table/'; ?>'+contents, function(data){
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
			$.get('<?php echo base_url() .'Buyer_app_forthcoming/get_table/'; ?>'+contents, function(data){
				$('#ajaxrslt_forthcomingauc').html(data);
			});
		});
</script>

<script>

function addtocart(v){
  $.get('<?php echo base_url() .'Buyer_app_forthcoming/Addtocart/'; ?>'+v, function(data){
	  if($.trim(data)=="EX"){
		  document.getElementById(v).style.color="blue";
		  return false;
	  }else{
		  document.getElementById(v).style.color="red";
		  return false;
	  }
				
	});
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
<script>



</script>
 
 
 <script>
 function  bid_manual(v){
	
	 var spd = v.split("|");
	 var spdvar = "bid-"+(spd[2]-1);
	 var k = document.getElementById(spdvar).value;
	 if(k % 1 < 0.09 && k % 1 > 0.0){
		 swal("Alert!","Amount has to be greater than "+k,"error" );
		 
		 return false
	 }
	 // alert(k);return false;
	 $.get('<?php echo base_url() .'Buyer_app_liveauc_2/get_currency/'; ?>'+k, function(data){
		 if(data){
			 swal({
  title: "Are you sure?", 
  text: "You Are about to bid a sum of "+ data,
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
	  $.get('<?php echo base_url() .'Buyer_app_liveauc_2/storebidval/'; ?>'+v+'|'+k, function(data2){
		  if($.trim(data2) == "Done"){
			  swal("You Bid Has Been Placed!", {
				  icon: "success",
				});
				var res = v.split("|");
		  var tvar = res[1]+'|'+res[2];
		 
				$.get('<?php echo base_url() .'Buyer_app_liveauc_2/get_table_ajax/'; ?>'+tvar, function(data3){
				$('#ajaxauc').html(data3);
				});
				
		  }else if($.trim(data2) == "Higher Bid Value"){
			  swal("Higher Bid Value Exists!", {
				  icon: "error",
				});
		  }else{
			  swal("Auction Closed!", {
				  icon: "error",
				});
		  }
		});
	  
    
  } else {
    swal("You Have Cancelled your request to bid!");
  }
});
		 }
	});

 }
 </script>
 <script>
 function autobidenable(v){
	 var a = $('#bidperunit').val();
	 var b = $('#bidmax').val();
	 
	 $.get('<?php echo base_url() .'Buyer_app_liveauc_2/buyer_autobid_set/'; ?>'+a+'|'+b+'|'+v, function(dataab){
		 if($.trim(dataab) == "Done"){
			 var res = v.split("|");
			window.location = '<?php echo base_url() .'Buyer_app_liveauc_2/index/'; ?>'+res[1]+'|'+res[2];
		 }else{
			  swal("Something Went Wrong Please Try again!", {
				  icon: "error",
				});
		 }
		});
	 return false;
 }
 </script>




<!--buyer app registeration-->

 
  <script>
 function validate_bname(){
	  var cat2 = document.getElementById('bcompany').value;
	 if(cat2){
		  document.getElementById('bname').value = cat2 ;
	 }
 }
 </script>


  <script>
  function validate_bgst(){
	  var val = document.getElementById("bgst").value;
		if(val != ''){
			 $.get('<?php echo base_url() .'Buyer_app_registeration/validate_bgst/'; ?>'+val, function(data2){				 
				 if($.trim(data2) == "BYE"){
					swal("Alert!",  "GST No. Already Exists", "error");
					document.getElementById("bgst").value = "";
					return false;
				}else{
					return true;
				}
			 });
			
		}else{
			swal("Alert!",  "Please Enter GST No.!", "error");
			return false;
		}
  }
  </script>
  
  
 

  
 
 <!-----------------------buyer capcha----------------------------------->
   <script>
  
function validate(){

	var bcompany = document.getElementById("bcompany").value;
	var bcomptype = document.getElementById("bcomptype").value;
	var bbuyertype = document.getElementById("bbuyertype").value;
	var bbuyerlocation = document.getElementById("bbuyerlocation").value;
	var bcontactperson = document.getElementById("bcontactperson").value;
	var bdesignation = document.getElementById("bdesignation").value;
	var baddress = document.getElementById("baddress").value;
	var bcity = document.getElementById("bcity").value;
	var bpin = document.getElementById("bpin").value;
	var bstate = document.getElementById("bstate").value;
	var bcountry = document.getElementById("bcountry").value;
	var bemail = document.getElementById("bemail").value;
	var phoneNo = document.getElementById("bphone").value;
	var bpan = document.getElementById("bpan").value;
	var busername = document.getElementById("busername").value;
	var bpassword = document.getElementById("bpassword").value;
	var bconfirmpassword = document.getElementById("bconfirmpassword").value;
	var bgst = document.getElementById("bgst").value;
	var bcapcha = document.getElementById("captcha").value; 
	//var saddress = document.getElementsByName("saddress");
	//var ssigneddocument = document.getElementsByName("ssigneddocument");
	//var AnswerInput = document.getElementsByName("saddresscount");
	
if( bcompany == '' || bcomptype == '' || bbuyertype == '' || bbuyerlocation == '' || bcontactperson == '' || bdesignation == ''|| baddress == '' || bcity == '' || bpin == '' || bstate == '' || bcountry == '' || bemail == '' || phoneNo == '' || bpan == '' || busername == '' || bpassword == '' || bconfirmpassword == '' || bgst == ''|| bcapcha == '' ){
		swal("Alert!",  "Company, Company Type, Buyer Type, Buyer's Location, Contact Person, Postal Address, City, Pin, State/Union Ter, E-Mail, Phone No, Pan No, User Name, Password , Confirm Password , GST No, Security Code  cannot leave any feild blank!", "error");
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
	
	if(bpassword != bconfirmpassword){
		swal("Alert!",  "Password and Confirm Password Should Match!", "error");
		return false;
	}
	
}
  </script>
 
 <script>
  
    $('.refreshCaptcha').on('click', function(){
        $.get('<?php echo base_url() .'Buyer_app_registeration/refresh'; ?>', function(data){
            $('#captImg').html(data);
        });
    });
  </script>
   <script>
  function validate_cap1(){
	  var captcha = document.getElementById("captcha").value;
		if(captcha.length >= 4){
			$.get('<?php echo base_url() .'Buyer_app_registeration/validate_capatcha/'; ?>'+captcha, function(data){
            $('#captImg').html(data);
				if($.trim(data) == "Bye"){
					swal("Alert!",  "Invalid Captcha", "error");
					document.getElementById("captcha").value = "";
					return false;
				}else{
					return true;
				}
			});
		}
	 
	 // var b = document.getElementById("bpassword").value;

	}
   
  </script>
  
  <script>
  function validate_bcompany(){
	  var val = document.getElementById("bcompany").value;
		if(val != ''){
			 $.get('<?php echo base_url() .'Buyer_app_registeration/validate_bcompany/'; ?>'+val, function(data2){				 
				 if($.trim(data2) == "BYE"){
					swal("Alert!",  "Buyer Company Already Exists", "error");
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
  function validate_username1(){
	  var val = document.getElementById("busername").value;
		if(val != ''){
			 $.get('<?php echo base_url() .'Buyer_app_registeration/validate_username1/'; ?>'+val, function(data2){				 
				 if($.trim(data2) == "BYE"){
					swal("Alert!",  "Username Already Exists", "error");
					document.getElementById("busername").value = "";
					return false;
				}else{
					return true;
				}
			 });
			
		}else{
			swal("Alert!",  "Please Enter User Name!", "error");
			return false;
		}
  }

   </script>
   
   
      <script>
  function validate_tanc2(){
	   var agree = document.getElementById('agreement');
	   var user = document.getElementById('user').value;
	   if(agree.checked){
				$.get('<?php echo base_url() .'registration/complete2/'; ?>'+user, function(data2){						
				 if($.trim(data2) == "HI"){
					swal("Thank You!", "Data Stored Successfully", "success");
				}else{
					alert(data2);
					swal("Alert!", "Terms and condition Failed Store", "error");
					return false;
				}
			 });
	   }else{
		    swal("Alert!", "Please Tick On Accept Agreement To Complete Registration", "error");
			return false;
	   }
	  

  }
  </script>
     
   
   <script>
  function validate_tanc(){
	   var agree = document.getElementById('agreement');
	   var user = document.getElementById('user').value;
	   if(agree.checked){
				$.get('<?php echo base_url() .'registration/complete/'; ?>'+user,
				
				function(data2){						
				 if($.trim(data2) == "HI"){
					swal("Thank You!", "Data Stored Successfully", "success");
					window.location = "<?php echo base_url() .'home/index/'; ?>" 
				}else{
					alert(data2);
					swal("Alert!", "Terms and condition Failed Store", "error");
					return false;
				}
			 });
	   }else{
		    swal("Alert!", "Please Tick On Accept Agreement To Complete Registration", "error");
			return false;
	   }
	   
	   

  }
  </script>
  
  <!------buyer--->
  <script>
  function validate_regb(){
	   var agree = document.getElementById('agreement');
	   var user = document.getElementById('user').value;
	   if(agree.checked){
				$.get('<?php echo base_url() .'registrationb/completebuyer/'; ?>'+user,
				
				function(data2){						
				 if($.trim(data2) == "HI"){
				 swal("Thank You!", "Data Stored Successfully", "success");
				 
				window.location = "<?php echo base_url() .'buyer_app_login/index/'; ?>" 
				
				 }else{
					alert(data2);
					swal("Alert!", "Terms and condition Failed Store", "error");
					return false;
				}
				});
	   }else{
		    swal("Alert!", "Please Tick On Accept Agreement To Complete Registration", "error");
			return false;
	   }
	   
	   

  }
  </script>

