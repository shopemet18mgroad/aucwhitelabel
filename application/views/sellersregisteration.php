<?php 
	//include('./header.php');
?>
    <!---  body  design  -->
     <div class="container-fluid">
   <div class="row w-100">
	 <div class="col-sm-10 col-md-11 ml-5 p-2">
    <div class="card shadow mb-4 ml-5">
	
  <div class="card-header py-3 d-flex bg-info flex-row align-items-center justify-content-center">
      <h6 class="m-0 font-weight-bold text-white text-center">SELLER'S REGISTRATION FORM<br>(All field's marked with * are mandatory)</h6><br>
  </div>
   
		<div class="card-body bg-info">
		
		<table class="table table-sm table-striped table-info justify-content-right w-auto small text-secondary table-borderless table-responsive text-center float-right">
   
   <form action="./Sellers_registeration" method="POST">
    <tbody>
      <tr>
        <td width="20%"><b>Company Name *</b></td>
        <td width="20%"><input class="form-control w-75" type="text" id="scomapnyname" name="scomapnyname" size="50" ></td>       
      </tr>
      <tr>
        <td><b>Type of seller</b></td>
        <td><select class="form-control w-75" style="text-align-last:center;" id="ssellertype" name="ssellertype">
			<option value="Central/State Govt/UT/Local Authority" selected>Central/State Govt/UT/Local Authority</option>
			<option value="Central PSU">Central PSU</option>
			<option value="State PSU" >State PSU</option>
			<option value="Educational/Research Institutes">Educational/Research Institutes</option>
			<option value="Other">Other</option>
			</select></td>
      </tr>
	  <tr>
        <td><b>Contact Person *</b></td>
        <td><input class="form-control w-75" type="text" id="scontactperson" name="scontactperson" size="50" ></td>
      </tr>

	  <tr>
        <td><b>Pan</b></td>
        <td><input class="form-control w-75" type="text" id="span" name="span" size="50"></td>
      </tr>
	  <tr>
        <td><b>Street</b></td>
        <td><input class="form-control w-75" type="text" id="sstreet" name="sstreet" size="50"></td>       
      </tr>
	    </tr>
	   <tr>
        <td><b>City</b></td>
        <td><input class="form-control w-75" type="text" id="scity" name="scity" size="50"></td>      
      </tr>
	    
	  <tr>
        <td><b>Pin</b></td>
        <td><input class="form-control w-75" type="text" id="spin" name="spin" size="50"></td>      
      </tr>
     <tr>
        <td class="font"><b>State/Union Ter.</b></td>
        <td><select class="form-control w-75" style="text-align-last:center;" id="sstate" name="sstate" >
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
        <td><input class="form-control w-75" type="text" id="scountry" name="scountry" size="50" value="India" style="text-align-last:center;" disabled></td>       
      </tr>
      <tr>
        <td><b>Location</b></td>
        <td><input class="form-control w-75" type="text" id="slocation" name="slocation" size="50"></td>
    
	 
      <tr>
        <td><b>Email Id *</b></td>
        <td><input class="form-control w-75" type="email" id="semail" name="semail" size="50" required ></td>       
      </tr>
	   <tr>
        <td><b>Phone *</b></td>
        <td><input class="form-control w-75" type="text" id="sphone" name="sphone" size="50" ></td>      
      </tr>
	 <tr>
	  <td><b>User Name *</b></td>
	  <td><input  class="form-control w-75" type="text" id="susername" name="susername" size="50" ></td>
	  </tr>
	  <tr>
        <td><b>Password *</b></td>
        <td><input class="form-control w-75" type="password" id="spassword" name="spassword" size="50" ></td>       
      </tr>
	  <tr>
        <td><b>Confirm Password *</b></td>
        <td><input class="form-control w-75" type="password" id="sconfirmpassword" name="sconfirmpassword" size="50"></td>       
      </tr>
	  <tr>
        <td><b>GST No.</b></td>
        <td><input  class="form-control w-75" type="text" name="sgst" id="sgst" size="50"></td>
        </tr>
		<tr>
        <td><b>CAPATCHA : </b><span id="captImg" class="captImg">&nbsp; <img src="<?php echo base_url()."web_files/captcha_images/".$ImgFileName?>"></span><a href="javascript:void(0);" class="refreshCaptcha">&nbsp;&nbsp;Refresh Captacha</a></td>
        <td><input  class="form-control w-75" type="text" name="captcha" id="captcha" onkeyup="validate_cap()" placeholder="Enter 4 Digit Captcha" size="50"></td>
        </tr>
	   </tbody>
	   </table>
		<div class="text-center">
    <input type="submit" name="submit2" onclick="return validate1()" value=" Proceed" class="btn btn-primary col-2 mt-2">
	<button type="reset" class="btn btn-primary col-2 mt-2">Reset</button>
		</div>
		</form>
		</div>
		</div>
</div>
</div>
</div>
	
	 <!---  body  design  -->

        <!---  footer  -->

    <?php 
	//include('./footer.php');
?>