<?php 
	//include('./header.php');
?>
    <!---  body  design  -->
     <div  id="<?php echo base_url();?>sellers_registeration" class="container-fluid">
   <div class="row w-100">
	 <div class="col-md-10 offset-sm-1 p-2" >
    <div class="card shadow mb-4 ml-4">
	
  <div  class="card-header py-3 d-flex bg-info flex-row align-items-center justify-content-center">
      <h6 class="m-0 font-weight-bold text-white text-center">SELLER'S REGISTRATION FORM<br>(All field's marked with * are mandatory)</h6><br>
  </div>
   
		<div class="card-body bg-info">
		
		<table class="table table-striped table-info text-center justify-content-center text-secondary table-borderless table-responsive" >
   
   <form action="./Sellers_registeration" onsubmit ="return validateForm()" method="POST">
    <tbody>
      <tr>
        <td width="20%"><b>Company Name *</b></td>
        <td width="20%"><input class="form-control w-100" type="text" onkeyup="validate_sname()" id="scomapnyname" name="scomapnyname" size="50" ></td>       
      </tr>
	    <tr>
        <td><b>Seller Name</b></td>
        <td><input class="form-control w-100"  type="text" id="sname" name="sname" size="50" readonly></td>
      </tr>
      <tr>
        <td><b>Type of seller</b></td>
        <td><select class="form-control w-100" style="text-align-last:center;" id="ssellertype" name="ssellertype">
			<option value="Govt Regd Company"  selected>Govt Regd Company</option>
			<option value="Ltd, Pvt Ltd, LLP, Corp">Ltd, Pvt Ltd, LLP, Corp</option>
			<option value="Partnership, Proprietorship, OPC" >Partnership, Proprietorship, OPC</option>
			<option value="Other">Other</option>
			</select></td>
      </tr>
	  <tr>
        <td><b>Contact Person *</b></td>
        <td><input class="form-control w-100" onkeyup="validate_scompanyname()" type="text" id="scontactperson" name="scontactperson" size="50" ></td>
      </tr>
		<tr>
        <td><b>Contact Person Designation *</b></td>
        <td><input class="form-control w-100" type="text" id="sdesignation" name="sdesignation" size="50" ></td>
      </tr>
	  <tr>
        <td><b>Pan</b></td>
        <td><input class="form-control w-100 pan" type="text" id="span" name="span" size="50"></td>
      </tr>
	  <tr>
								<td><b>Address</b></td>
								<td>
								<div class="input_fields_wrap1">
								<select class="form-control w-75  p-1" id="saddress" name="saddress[]">
									<option value="select" selected>SELECT</option>
									<option value="Corporate Office">Corporate Office</option>
									<option value="Manufacturing Unit">Manufacturing Unit</option>
									<option value="Headquarter">Headquarter</option>
								
									</select>
									
									<textarea class="form-control float-left mt-2 p-2 w-75" type="text" id="saddresscount" name="saddresscount[]" ></textarea>
								<a class="add_field_button1"><button type="button" class="btn btn-sm btn-primary ml-1 mb-5 mt-3"> <i class="fa fa-plus text-white"></i></button></a>
									</div>
									</td>
								
							</tr>
	    </tr>
	   <tr>
        <td><b>City</b></td>
        <td><input class="form-control w-100" type="text" id="scity" name="scity" size="50"></td>      
      </tr>
	    
	  <tr>
        <td><b>Pin</b></td>
        <td><input class="form-control w-100" type="text" id="spin" name="spin" size="50"></td>      
      </tr>
     <tr>
        <td class="font"><b>State/Union Ter.</b></td>
        <td><select class="form-control w-100" style="text-align-last:center;" id="sstate" name="sstate" >
			<option value="Karnataka"  selected>Karnataka</option>
			<option value="Arunachal Pradesh">Arunachal Pradesh</option>
			<option value="Assam">Assam</option>
			<option value="Bihar">Bihar</option>
			<option value="Chhattishgarh" >Chhattishgarh</option>
			<option value="Delhi">Delhi</option>
			<option value="Goa">Goa</option>
			<option value="Gujarat">Gujarat</option>
			<option value="Harayana">Harayana</option>
			<option value="Himachal Pradesh">Himachal Pradesh</option>
			<option value="Eleven" >Jharkhand</option>
			<option value="Jharkhand">Andhra Pradesh</option>
			<option value="Kerala">Kerala</option>
			<option value="Madhya Pradesh">Madhya Pradesh</option>
			<option value="Maharashtra" >Maharashtra</option>
			<option value="Manipur">Manipur</option>
			<option value="Meghalaya" >Meghalaya</option>
			<option value="Mizoram">Mizoram</option>
			<option value="Nagaland">Nagaland</option>
			<option value="Odisha">Odisha</option>
			<option value="Punjab">Punjab</option>
			<option value="Rajasthan">Rajasthan</option>
			<option value="Sikkim" >Sikkim</option>
			<option value="Tamil Nadu">Tamil Nadu</option>
			<option value="Telangana">Telangana</option>
			<option value="Tripura" >Tripura</option>
			<option value="Uttar Pradesh">Uttar Pradesh</option>
			<option value="Uttarascountrykhand">Uttarascountrykhand</option>
			<option value="West Bengal" >West Bengal</option>
			</select></td>      
      </tr>	
	  <tr>
        <td><b>Country</b></td>
        <td><input class="form-control w-100" type="text" id="scountry" name="scountry" size="50" value="India" style="text-align-last:center;" disabled></td>       
      </tr>
      <tr>
        <td><b>Location</b></td>
        <td><input class="form-control w-100" type="text" id="slocation" name="slocation" size="50"></td>
    
	 
      <tr>
        <td><b>Email Id *</b></td>
        <td><input class="form-control w-100" type="email" id="semail" name="semail" size="50" required ></td>       
      </tr>
	   <tr>
        <td><b>Phone *</b></td>
        <td><input class="form-control w-100" type="text" id="sphone" name="sphone" size="50"   title="Enter 10 digit mobile number" required></td>      
      </tr>
	 <tr>
	  <td><b>User Name *</b></td>
	  <td><input  class="form-control w-100" type="text" id="susername" name="susername" size="50" ></td>
	  </tr>
	  <tr>
        <td><b>Password *</b></td>
        <td><input class="form-control w-100" type="password" id="spassword" name="spassword" size="50" onkeyup="validate_username()"><span id = "message1" style="color:red"> </span></td>       
      </tr>
	  <tr>
        <td><b>Confirm Password *</b></td>
        <td><input class="form-control w-100" type="password" id="sconfirmpassword" name="sconfirmpassword" size="50"><span id = "message2" style="color:red"> </span></td>       
      </tr>
	  <tr>
        <td><b>GST No.</b></td>
        <td><input class="form-control w-100 gst" type="text" name="sgst" id="sgst" size="50"></td>
        </tr>
		 <tr>
        <td><b>CIN Number</b></td>
        <td><input class="form-control w-100" onkeyup="validate_sgst()" type="text" id="scin" name="scin" size="50"></td>
      </tr>
	   <tr>
        <td><b>PCB License Number</b></td>
        <td><input class="form-control w-100" type="text" id="spcb" name="spcb" size="50"></td>
      </tr>
		<tr>
        <td><b>CAPATCHA : </b><span id="captImg" class="captImg">&nbsp; <img src="<?php echo base_url()."web_files/captcha_images/".$ImgFileName;?>"></span><a href="javascript:void(0);" class="refreshCaptcha">&nbsp;&nbsp;&nbsp;<br>Refresh Captacha</a></td>
        <td><input  class="form-control w-100" type="text" name="captcha" id="captcha" onkeyup="validate_cap()" placeholder="Enter 4 Digit Captcha" size="50"></td>
        </tr>
	   </tbody>
	   </table>
		<div class="text-center">
    <input type="submit" name="submit2" id="btn1" onclick="return validate1()" value=" Proceed" class="btn btn-primary col-3 mt-2 w-25">
	<button type="reset" class="btn btn-primary col-3 mt-2">Reset</button>
		</div>
		</form>
		</div>
		</div>
</div>
</div>
</div>
</div>	


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
			$(wrapper).append('<div><tr><td><select class="form-control w-75  p-1 " name="saddress[]"><option value="select" selected>SELECT</option><option value="Corporate Office" >Corporate Office</option><option value="Headquarter">Headquarter</option></select></td><td><textarea class="form-control float-left mt-2 p-2 w-75" type="text" name="saddresscount[]" ></textarea><a href="#" class="remove_field">  <button type="button" class="btn btn-sm btn-primary ml-1 mb-5 mt-3">  <i class="fa fa-minus text-white"></i></button></a></td></tr></div>');
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
$(document).ready(function(){     
        
$(".pan").change(function () {      
var inputvalues = $(this).val();      
  var regex = /[A-Z]{5}[0-9]{4}[A-Z]{1}$/;    
  if(!regex.test(inputvalues)){      
  $(".pan").val("");    
  swal("Alert!","Invalid PAN no", "error");    
  return regex.test(inputvalues);    
  }    
});      
    
});    
</script> 

<script type="text/javascript">    
$(document).ready(function(){     
        
$(".gst").change(function () {      
var inputvalues = $(this).val();      
  var regex = /^([0-9]){2}([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}([0-9]){1}([a-zA-Z]){1}([0-9A-Z]){1}?$/;    
  if(!regex.test(inputvalues)){      
  $(".gst").val("");    
  swal("Alert!","Invalid gst no", "error");    
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
    if(pw1.length < 8) {
      document.getElementById("message1").innerHTML = "**Password length must be atleast 8 characters";
      return false;
    }

    //maximum length of password validation
    if(pw1.length > 15) {
      document.getElementById("message1").innerHTML = "**Password length must not exceed 15 characters";
      return false;
    }
  
    if(pw1 != pw2) {
      document.getElementById("message2").innerHTML = "**Passwords are not same";
      return false;
    } 
 }
</script> 
	 <!---  body  design  -->

        <!---  footer  -->

    <?php 
	//include('./footer.php');
?>