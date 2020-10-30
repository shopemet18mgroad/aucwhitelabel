<?php 
	//include('./header.php');
?>
    <!---  body  design  -->
	     <div class="container-fluid">
   <div class="row w-100">
	 <div class="col-md-11 offset-sm-1 p-2">
    <div class="card shadow mb-4 ml-5">
	
  <div class="card-header py-3 d-flex bg-info flex-row align-items-center justify-content-center">
      <h6 class="m-0 font-weight-bold text-white text-center">BUYER'S REGISTRATION FORM<br>(All field's marked with * are mandatory)</h6><br>
  </div>
   
		<div class="card-body bg-info">
			<table class="table table-striped table-info text-center justify-content-center text-secondary table-borderless table-responsive" >
   
		
		<form action="./Buyers_registeration" method="POST" >
    <tbody>
		
		<tr>
		  <td width="20%"><b>Company *</b></td>
		  <td width="20%"><input class="form-control w-100" type="text" id="bcompany" name="bcompany" size="50" ></td>
		</tr>
	  
      <tr>
        <td><b>Company Type</b></td>
        <td><select class="form-control w-100" style="text-align-last:center;" id="bcomptype" name="bcomptype">
		
			<option value="one" selected>--------category1-------</option>
			<option value="two">category2</option>
			<option value="three" >category3</option>
			<option value="four">category4</option>
			</select></td>
        </tr>
      <tr>
         <td><b>Buyer Type</b></td>
        <td><select class="form-control w-100" style="text-align-last:center;" id="bbuyertype" name="bbuyertype">
			<option value="one" selected>-------category1--------</option>
			<option value="two">category2</option>
			<option value="three" >category3</option>
			<option value="four">category4</option>
			</select></td>
      </tr>
		<tr>
		  <td><b>Buyer's Location</b></td>
		  <td><input class="form-control w-100" type="text" id="bbuyerlocation" name="bbuyerlocation" size="50"></td>
		</tr>
	   <tr>
	  <td><b>Contact Person *</b></td>
	  <td><input  class="form-control w-100" type="text" id="bcontactperson" name="bcontactperson" size="50"></td>
	  </tr>
	  <tr>
        <td><b>Contact Person Designation *</b></td>
        <td><input class="form-control w-100" type="text" id="bdesignation" name="bdesignation" size="50" ></td>
      </tr>
	  <tr>
	  <td><b>Postal Address</b></td>
	  <td><input  class="form-control w-100" type="text" id="baddress" name="baddress" size="50"></td>
	  </tr>
	 
	   <tr>
	  <td><b>City</b></td>
	  <td><input  class="form-control w-100" type="text" id="bcity" name="bcity" size="50"></td>
	  </tr>
	  <tr>
	  <td><b>Pin</b></td>
	  <td><input  class="form-control w-100" type="text" id="bpin" name="bpin" size="50"></td>
	  </tr>
	  
	  <tr>
        <td><b>State/Union Ter.</b></td>
        <td><select class="form-control w-100" style="text-align-last:center;" id="bstate" name="bstate" >
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
			<option value="twentyeight">Uttarakhand</option>
			<option value="twentynine" >West Bengal</option>
			</select></td>      
      </tr>	
	  <tr>
        <td><b>Country</b></td>
        <td><input class="form-control w-100" type="text" id="bcountry" name="bcountry" size="50" style="text-align-last:center;" value="India" disabled></td>       
      </tr>
	  <tr>
	  <td><b>E-Mail *</b></td>
	  <td><input  class="form-control w-100" type="email" id="bemail" name="bemail" size="50"></td>
	  </tr>
	  <tr>
	  <td><b>Phone No. *</b></td>
	  <td><input  class="form-control w-100" type="text" id="bphone" name="bphone" size="50"></td>
	  </tr>
	  <tr>
	  <td><b>Pan No.</b></td>
	  <td><input  class="form-control w-100" type="text" id="bpan" name="bpan" size="50"></td>
	  </tr>
	  <tr>
	  <td><b>User Name *</b></td>
	  <td><input  class="form-control w-100" type="text" id="busername" name="busername" size="50"></td>
	  </tr>
	  <tr>
        <td><b>Password *</b></td>
        <td><input class="form-control w-100" type="password" id="bpassword" name="bpassword" size="50" onkeyup="validate_username1()" ></td>       
      </tr>
	  <tr>
        <td><b>Confirm Password *</b></td>
        <td><input class="form-control w-100" type="password" id="bconfirmpassword" name="bconfirmpassword" size="50"></td>       
      </tr>
	  
	  <tr>
        <td><b>GST No.</b></td>
        <td><input  class="form-control w-100" type="text" name="bgst" id="bgst" size="50"></td>
        </tr>
		<tr>
        <td><b>CAPATCHA : </b><span id="captImg" class="captImg">&nbsp; <img src="<?php echo base_url()."web_files/captcha_images/".$ImgFileName;?>"></span><a href="javascript:void(0);" class="refreshCaptcha">&nbsp;&nbsp;Refresh Captacha</a></td>
        <td><input  class="form-control w-100" type="text" name="captcha" id="captcha"  onkeyup="validate_cap1()" placeholder="Enter 4 Digit Captcha" size="50"></td>
        </tr>
	   </tbody>
	   </table>
		<div class="text-center">
    <input type="submit" name="submit2" onclick="return validate()" value=" Proceed" class="btn btn-primary col-3 mt-2 w-100">
	<button type="reset" class="btn btn-primary col-3 mt-2">Reset</button>
		</form>
		</div>	
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