<?php
//include('./header.php');
?>
<!---  body  design  -->
<div id="<?php echo base_url(); ?>buyers_registeration" class="container-fluid">
	<div class="row w-100">
		<div class="col-md-10 offset-sm-1 p-2">
			<div class="card shadow mb-4 ml-4">

				<div class="card-header py-3 d-flex bg-info flex-row align-items-center justify-content-center">
					<h6 class="m-0 font-weight-bold text-white text-center">BUYER'S REGISTRATION FORM<br>(All field's marked with * are mandatory)</h6><br>
				</div>

				<div class="card-body bg-info">
					<table class="table table-striped table-info text-center justify-content-center text-secondary table-borderless table-responsive">

						<!-- form -->
						<form action="./Buyers_registeration" onsubmit="return validateForm()" method="POST">
							<tbody>
								<!-- Company -->
								<tr>
									<td width="20%"><b>Company *</b></td>
									<td width="20%"><input class="form-control w-100" type="text" id="bcompany" name="bcompany" onkeyup="validate_bname()" size="50"></td>
								</tr>
								<!-- Buyer Name -->
								<tr>
									<td width="20%"><b>Buyer Name</b></td>
									<td width="20%"><input class="form-control w-100" type="text" id="bname" name="bname" size="50" readonly></td>
								</tr>
								<!-- Company Type -->
								<tr>
									<td><b>Company Type</b></td>
									<td><select class="form-control w-100" style="text-align-last:center;" id="bcomptype" name="bcomptype">

											<option value="Govt Regd Company" selected>Govt Regd Company</option>
											<option value="Ltd, Pvt Ltd, LLP, Corp">Ltd, Pvt Ltd, LLP, Corp</option>
											<option value="Partnership, Proprietorship">Partnership, Proprietorship</option>
											<option value="Other">Other</option>
										</select></td>
								</tr>
								<!-- Buyer's Location -->
								<tr>
									<td><b>Buyer's Location</b></td>
									<td><input class="form-control w-100" type="text" onkeyup="validate_bcompany()" id="bbuyerlocation" name="bbuyerlocation" size="50"></td>
								</tr>
								<!-- Contact Person  -->
								<tr>
									<td><b>Contact Person *</b></td>
									<td><input class="form-control w-100" type="text" id="bcontactperson" name="bcontactperson" size="50"></td>
								</tr>
								<!-- Contact Person Designation -->
								<tr>
									<td><b>Contact Person Designation *</b></td>
									<td><input class="form-control w-100" type="text" id="bdesignation" name="bdesignation" size="50"></td>
								</tr>
								<!-- Postal Address -->
								<tr>
									<td><b>Postal Address</b></td>
									<td><input class="form-control w-100" type="text" id="baddress" name="baddress" size="50"></td>
								</tr>
								<!-- City -->
								<tr>
									<td><b>City</b></td>
									<td><input class="form-control w-100" type="text" id="bcity" name="bcity" size="50"></td>
								</tr>
								<!-- Pin -->
								<tr>
									<td><b>Pin</b></td>
									<td><input class="form-control w-100" type="text" id="bpin" name="bpin" size="50"></td>
								</tr>
								<!-- State -->
								<tr>
									<td><b>State/Union Ter.</b></td>
									<td><select class="form-control w-100" style="text-align-last:center;" id="bstate" name="bstate">
											<option value="Andra Pradesh" selected>Andra Pradesh</option>
											<option value="Arunachal Pradesh">Arunachal Pradesh</option>
											<option value="Assam">Assam</option>
											<option value="Bihar">Bihar</option>
											<option value="Chhattishgarh">Chhattishgarh</option>
											<option value="Delhi">Delhi</option>
											<option value="Goa">Goa</option>
											<option value="Gujarat">Gujarat</option>
											<option value="Harayana">Harayana</option>
											<option value="Himachal Pradesh">Himachal Pradesh</option>
											<option value="Jharkhand">Jharkhand</option>
											<option value="Karnataka">Karnataka</option>
											<option value="Kerala">Kerala</option>
											<option value="Madhya Pradesh">Madhya Pradesh</option>
											<option value="Maharashtra">Maharashtra</option>
											<option value="Manipur">Manipur</option>
											<option value="Meghalaya">Meghalaya</option>
											<option value="Mizoram">Mizoram</option>
											<option value="Nagaland">Nagaland</option>
											<option value="Odisha">Odisha</option>
											<option value="Punjab">Punjab</option>
											<option value="Rajasthan">Rajasthan</option>
											<option value="Sikkim">Sikkim</option>
											<option value="Tamil Nadu">Tamil Nadu</option>
											<option value="Telangana">Telangana</option>
											<option value="Tripura">Tripura</option>
											<option value="Uttar Pradesh">Uttar Pradesh</option>
											<option value="Uttarakhand">Uttarakhand</option>
											<option value="West Bengal">West Bengal</option>
										</select></td>
								</tr>
								<!-- Country -->
								<tr>
									<td><b>Country</b></td>
									<td><input class="form-control w-100" type="text" id="bcountry" name="bcountry" size="50" style="text-align-last:center;" value="India" disabled></td>
								</tr>
								<!-- E-Mail -->
								<tr>
									<td><b>E-Mail *</b></td>
									<td><input class="form-control w-100" type="email" id="bemail" name="bemail" size="50"></td>
								</tr>
								<!-- Phone No -->
								<tr>
									<td><b>Phone No. *</b></td>
									<td><input class="form-control w-100" type="text" id="bphone" name="bphone" size="50" required></td>
								</tr>
								<!-- Pan No -->
								<tr>
									<td><b>Pan No.</b></td>
									<td><input class="form-control w-100 pan" type="text" id="bpan" name="bpan" size="50"></td>
								</tr>
								<!-- User Name -->
								<tr>
									<td><b>User Name *</b></td>
									<td><input class="form-control w-100" type="text" id="busername" name="busername" size="50"></td>
								</tr>
								<!-- Password -->
								<tr>
									<td><b>Password *</b></td>
									<td><input class="form-control w-100" type="password" id="bpassword" name="bpassword" size="50" onkeyup="validate_username1()"><span id="message1" style="color:white"> </span></td>
								</tr>
								<!-- Confirm Password  -->
								<tr>
									<td><b>Confirm Password *</b></td>
									<td><input class="form-control w-100" type="password" id="bconfirmpassword" name="bconfirmpassword" size="50"><span id="message2" style="color:white"> </span></td>
								</tr>
								<!-- GST No -->
								<tr>
									<td><b>GST No.</b></td>
									<td><input class="form-control w-100 gst" type="text" name="bgst" id="bgst" size="50"></td>
								</tr>
								<!-- PCB Licence NO -->
								<tr>
									<td><b>PCB Licence NO</b></td>
									<td><input class="form-control w-50" onkeyup="validate_bgst()" type="text" id="bpcb" name="bpcb" required></td>
								</tr>
								<!-- CIN Number -->
								<tr>
									<td><b>CIN Number</b></td>
									<td><input class="form-control w-50" type="text" id="bcin" name="bcin" required></td>
								</tr>
								<!-- CAPATCHA -->
								<tr>
									<td><b>CAPATCHA : </b><span id="captImg" class="captImg">&nbsp; <img src="<?php echo base_url() . "web_files/captcha_images/" . $ImgFileName; ?>"></span><a href="javascript:void(0);" class="refreshCaptcha">&nbsp;&nbsp;Refresh Captacha</a></td>
									<td><input class="form-control w-100" type="text" name="captcha" id="captcha" onkeyup="validate_cap1()" placeholder="Enter 4 Digit Captcha" size="50"></td>
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
<!-- End of form -->
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
		var pw1 = document.getElementById("bpassword").value;
		var pw2 = document.getElementById("bconfirmpassword").value;


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

<!---  body  design  -->

<!---  footer  -->

<?php
//include('./footer.php');
?>