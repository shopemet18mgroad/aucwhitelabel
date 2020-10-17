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
   
   <form action="./action" method="post">
    <tbody>
      <tr>
        <td width="20%"><b>Company Name *</b></td>
        <td width="20%"><input class="form-control w-75" type="text" id="scomapnyname" name="scomapnyname" size="50" ></td>       
      </tr>
      <tr>
        <td><b>Type of seller</b></td>
        <td><select class="form-control w-75" style="text-align-last:center;" id="ssellertype" name="ssellertype">
			<option value="one" selected>Central/State Govt./UT/Local Authority</option>
			<option value="two">Centra PSU</option>
			<option value="three" >State PSU</option>
			<option value="four">Educational/Research Institutes</option>
			<option value="four">Other</option>
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
			<option value="two"  selected>Andra Pradesh</option>
			<option value="one">Arunachal Pradesh</option>
			<option value="three">Assam</option>
			<option value="three">Bihar</option>
			<option value="five" >Chhattishgarh</option>
			<option value="six">Delhi</option>
			<option value="seven">Goa</option>
			<option value="Eight">Gujarat</option>
			<option value="Nine">Harayana</option>
			<option value="ten">Himachal Pradesh</option>
			<option value="Eleven" >Jharkhand</option>
			<option value="twelve">Karnataka</option>
			<option value="thirteen">Kerala</option>
			<option value="fourteen">Madhya Pradesh</option>
			<option value="fifteen" >Maharashtra</option>
			<option value="sixteen">Manipur</option>
			<option value="seventeen" >Meghalaya</option>
			<option value="eighteen">Mizoram</option>
			<option value="Nineteen">Nagaland</option>
			<option value="twenty">Odisha</option>
			<option value="twentyone">Punjab</option>
			<option value="twentytwo">Rajasthan</option>
			<option value="twentythree" >Sikkim</option>
			<option value="twentyfour">Tamil Nadu</option>
			<option value="twentyfive">Telangana</option>
			<option value="twentysix" >Tripura</option>
			<option value="twentyseven">Uttar Pradesh</option>
			<option value="twentyeight">Uttarascountrykhand</option>
			<option value="twentynine" >West Bengal</option>
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
    <button type="submit" name="submit1" onclick="return validate1()" class="btn btn-primary col-2 mt-2">Proceed</button>
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