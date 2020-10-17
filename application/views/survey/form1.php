
   <?php include "header.php";

   ?>
		<div class="container dealsbox">
			 <div class="row">
				<div class="col-md-12">
						<div class="deals-header">
							<h4><i class="icon-dashboard"></i><i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp; Dashboard</h4>
						</div>
				</div>
			 </div>	
			 <div class="row">
				
				<div class="col-md-12">
					<div class="deals-tab-table">
							<ul class="nav nav-tabs border-0" id="myTab" role="tablist">
							
								<li class="nav-item">
									<a class="nav-link active border border-primary border-bottom-0" id="hvd-tab" data-toggle="tab" href="#hvd" role="tab" aria-controls="hvd" aria-selected="true"><b>E-Auctions/Bidder Survey Form</b></a>
								</li>
								
								
							</ul>

							<div class="tab-content w-100">
								<div class="tab-pane h-100 p-3 fade show active border border-primary" id="hvd" role="tabpanel" aria-labelledby="hvd-tab">
									<div class="table-holder"> 
										<div class="tab-content">
											<table class="table table-bordered table-sm text-center">
												<thead class="thead-auc">
												
												
												</thead>
												<tbody>
									
												<tr><td colspan="10" style="background-color:#b2bdc3;"><strong>Bidder Survey Form</strong></td></tr>
												<form action="../weblib/postformsurvey.php" method="POST" id="bidder">
												<input class="inpt" type="hidden" id="type" name="type" value="Bidder" size="10">
												<tr class="cinpt w-100">
												<td colspan="10">
												<div class="cinpt">
												<p><strong>Namaste,</strong></p>
											
												<p>I am <input class="inpt" type="text" id="heading" name="heading" size="10"> from <a href="“www.aucjunction.com”">www.aucjunction.com</a>, we are coming up with a new E- auction website to dispose
												of Industrial Scrap/waste<br>(Bi-Product), through which you can get more bidders from Pan India.</p>
												<p><small>So in this regard can you please spare few minutes of your’s valuable time 3-5mins to understand and cater to your needs in a better way.</small></p>
												<p><b>Note:</b> All the information provided by you will be used only for office purposes R&D, We assure you
												confidentially at all levels, and<br> will never be shared outside Shopemet Networks Pvt Ltd.</p>
												</div>
												</td>
												</tr>
												
												<tr class="cinpt w-100">
												<td colspan="10">
												<div class="cinpt">
												<p><b>Name of the Company/Firm: </b>
												<input class="inpt w-100" type="text" id="company" name="company" size="80"></p>
												<p><b>Corporate Office Address:</b>
													<input class="inpt w-100" type="text" id="address" name="address" size="83"></p>
												<p><b>Website/Telephone/Mobile/Email ID:</b>
													<input class="inpt w-100" type="text" id="companywebsite" name="companywebsite" size="75" placeholder="Website">
													<input class="inpt w-100" type="text" id="companytelephone" name="companytelephone" size="75" placeholder="Telephone">
													<input class="inpt w-100" type="text" id="companymobile" name="companymobile" size="75" placeholder="Mobile">
													<input class="inpt w-100" type="text" id="companyemail" name="companyemail" size="75" placeholder="Email ID">
													</p>
												<p><b>Contact person’s Name/Designation/Number/Email:</b>
													<input class="inpt w-100" type="text" id="concernperson" name="concernperson" size="62" placeholder="Contact Person's Name">
													<input class="inpt w-100" type="text" id="concernpersondesignation" name="concernpersondesignation" size="62" placeholder="Designation">
													<input class="inpt w-100" type="text" id="concernpersonnumber" name="concernpersonnumber" size="62" placeholder="concernpersonnumber">
													<input class="inpt w-100" type="text" id="concernpersonemail" name="concernpersonemail" size="62" placeholder="Email ID">
													</p>
													</div>
												</td></tr>
												
												
												<tr class="cinpt  w-100">
												
												<td>
												<div class="cinpt">
												<p><b>Current Status:</b><br></p>
												<div class="form-check form-check-inline ">
                                                <input type="checkbox" class="form-check-input" name="companystatus[]" value="Proprietorship">
                                                <label class="form-check-label" for="proprietor">Proprietorship</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="companystatus[]" value="Partnership">
                                                <label class="form-check-label" for="partnership">Partnership</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="companystatus[]" value="Corporation">
                                                <label class="form-check-label" for="corporation">Corporation</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" name="companystatus[]" value="Pvt Ltd">
                                                <label class="form-check-label" for="pvt ltd">Pvt Ltd</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="companystatus[]" value="Public sector">
                                                <label class="form-check-label" for="publicsector">Public sector</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="companystatus[]" value="Small business">
                                                <label class="form-check-label" for="smallbusi">Small business</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="companystatus[]" value="limited">
                                                <label class="form-check-label" for="limited">Limited</label>
												</div>
												</div>
												
												
												</td></tr>
												
												<tr class="cinpt  w-100">
												
												<td>
												<div class="cinpt">
												<p><b>Type of Business:</b><br></p>
												<div class="form-check form-check-inline ">
                                                <input type="checkbox" class="form-check-input"  name="tboptions[]" value="Manufacture">
                                                <label class="form-check-label" for="manuf">Manufacture</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="tboptions[]" value="Distributer">
                                                <label class="form-check-label" for="distributer">Distributer</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="tboptions[]" value="Trader">
                                                <label class="form-check-label" for="trader">Trader</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="tboptions[]" value="Importer">
                                                <label class="form-check-label" for="importer">Importer</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="tboptions[]" value="Secondary Manufacturer">
                                                <label class="form-check-label" for="secondmenuf">Secondary Manufacturer</label>
												</div>
												</div>
												
												
												</td></tr>
												
												<tr class="cinpt  w-100">
												
												<td>
												<div class="cinpt">
												<p><b>Is your company PCB certified,</b>
												<input class="inpt" type="text" id="pcba" name="pcba" size="10">
												<b>do you participate in online auctions</b>
												<input class="inpt" type="text" id="pcbb" name="pcbb" size="10">
												, is it in
												Tons, KGs, Lots,<br>Quantity/numbers, Meters or depends on the product which is been disposed?
												<textarea class="inpt w-100" type="text" id="pcbc" name="pcbc" size="40"></textarea>
												</p></div>
												
												</td>
												</tr>
												
												<tr class="cinpt  w-100">
												
												<td>
												<div class="cinpt">
												<p><b>If you were to participate in an online auction what are the products would you likely to bid(Sell or Buy)
												on?</b></p>
												<div class="form-check form-check-inline ">
                                                <input type="checkbox" class="form-check-input"  name="partaucasopt[]" value="Electronics Products(eg.E-Waste)">
                                                <label class="form-check-label" for="electronicproduct">Electronics Products(eg.E-Waste)</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="partaucasopt[]" value="Metals(e.g Iron/Steel)">
                                                <label class="form-check-label" for="metal">Metals(e.g Iron/Steel)</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="partaucasopt[]" value="Plastic">
                                                <label class="form-check-label" for="plastic">Plastic</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="partaucasopt[]" value="Wood">
                                                <label class="form-check-label" for="wood">Wood</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="partaucasopt[]" value="Hazardous Industrial waste(PCB certification)">
                                                <label class="form-check-label" for="hazinduswaste">Hazardous Industrial waste(PCB certification)</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="partaucasopt[]" value="Non-Hazardous">
                                                <label class="form-check-label" for="nonhazinduswaste">Non-Hazardous</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="partaucasopt[]" value="Miscelleneous">
                                                <label class="form-check-label" for="miscelleneous">Miscelleneous</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="partaucasopt[]" value="Others">
                                                <label class="form-check-label" for="miscelleneous">Others</label>
												</div>
												<p><b>others please specify:</b>
												<input class="inpt w-100" type="text" id="partaucascon" name="partaucascon" size="80"></p>
												
											</div>
												
												
												</td></tr>
												<tr class="cinpt  w-100">
												
												<td>
											<div class="cinpt">
												<p><b>When was the last time you participated in Auctions to Sell or Buy be it any category product? How many
												auctions in a year?</b><input class="inpt w-100" type="text" id="wenlastauccon" name="wenlastauccon" size="80"><br></p>

												<div class="form-check form-check-inline ">
                                                <input type="checkbox" class="form-check-input"  name="wenlastaucopt[]" value="In the last one week">
                                                <label class="form-check-label" for="lastweek">In the last one week</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="wenlastaucopt[]" value="In the last one month">
                                                <label class="form-check-label" for="lastm">In the last one month</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="wenlastaucopt[]" value="In the last three months">
                                                <label class="form-check-label" for="lastthreem">In the last three months</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="wenlastaucopt[]" value="In the last six months">
                                                <label class="form-check-label" for="lastsixm">In the last six months</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="wenlastaucopt[]" value="In the last 12 months">
                                                <label class="form-check-label" for="last12m">In the last 12 months</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="wenlastaucopt[]" value="More than 12 months ago">
                                                <label class="form-check-label" for="morethan12mago">More than 12 months ago</label>
												</div>
												</div>
												
												
												</td></tr>
												<tr class="cinpt  w-100">
												
												<td>
												<div class="cinpt">
												<p><b>What is the approximate quantity of Industrial scrap(Bi-Product) waste generated
												by your firm in a year?</b>
												
												<input class="inpt w-100" type="text" id="quanofscrap" name="quanofscrap" size="70"></p>
												<p><b>Material category value of “ Lot” each time when you Dispose/Auction:</b>
												<input class="inpt w-100" type="text" id="metcatoflot" name="metcatoflot" size="70"></p>
												</div>
												</td>
												</tr>
												
												<tr class="cinpt  w-100">
												
												<td>
												<div class="cinpt">
												<p><b>Bidding locations you can participate, only Bangalore, with in Karnataka, only in South states
												or Pan India.</b>
												<input class="inpt w-100" type="text" id="bidlocpart" name="bidlocpart" size="80"></p>
												</div>
												</td></tr>
												
												<tr class="cinpt  w-100">
												
												<td>
												<div class="cinpt">
												<p><b>What all Auction websites you have visited/parcipated for bidding in the recent past years?</b>
												<input class="inpt w-100" type="text" id="wayallauc" name="wayallauc" size="80"></p>
												</div>
												</td>
												</tr>
												
												<tr class="cinpt  w-100">
												
												<td>
												<div class="cinpt">
												<p><b>When you are buying or selling through the auction websites who influenced are you with following ?</b><br></p>
												
												<div class="form-check form-check-inline ">
                                                <input type="checkbox" class="form-check-input"  name="influenced[]" value="Description">
                                                <label class="form-check-label" for="description">Description</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="influenced[]" value="Extremely influenced">
                                                <label class="form-check-label" for="extremelyinfluenced">Extremely influenced</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="influenced[]" value="Somewhat influenced">
                                                <label class="form-check-label" for="somewhatinfluenced">Somewhat influenced</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="influenced[]" value="Very influenced" >
                                                <label class="form-check-label" for="veryinfluenced">Very influenced</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="influenced[]" value="Feedback">
                                                <label class="form-check-label" for="feedback">Feedback</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="influenced[]" value="Company/Shop Seller">
                                                <label class="form-check-label" for="cseller">Company/Shop Seller</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="influenced[]" value="Price">
                                                <label class="form-check-label" for="price">Price</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="influenced[]" value="Location of item">
                                                <label class="form-check-label" for="itemlocation">Location of item</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="influenced[]" value="Company/Shop Seller">
                                                <label class="form-check-label" for="cseller">Company/Shop Seller</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="influenced[]" value="Not so influenced">
                                                <label class="form-check-label" for="notsoinfluenced">Not so influenced</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="influenced[]" value="Description">
                                                <label class="form-check-label" for="notatallinfluenced">Not at all influenced</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="influenced[]" value="Picture">
                                                <label class="form-check-label" for="picture">Picture</label>
												</div>
												
												</div>
												
												</td></tr>
												
												<tr class="cinpt  w-100">
												
												<td>
												<div class="cinpt">
												<p><b>Are you primary user decision maker in your Company/Firm regarding disposal of above mentiioned
												Product category:</b><br></p>
												
												Yes <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input"  name="decisionmaker[]" value="Yes">
                                                <label class="form-check-label" for="yes"></label>
											   </div>
												No <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input" name="decisionmaker[]" value="No">
                                                <label class="form-check-label" for="no"></label>
												</div>
												
												<b>If No please specify the contact person:</b>
												<input class="inpt w-100" type="text" id="decisionmakercon" name="decisionmakercon" size="50">
												</div>
												</td></tr>
												 
												<tr class="cinpt  w-100">
												
												<td>
												<div class="cinpt">
												<p><b>Finally thanking you for your valuable feedback, Please free to share any suggestions, to improve our
												services pertaining to<br> disposals of Industrial waste(Bi-Products) through our website
												<a href="www.aucjunction.com"><u>www.aucjunction.com</u></a>?<br><b>
												<input class="inpt w-100" type="text" id="valfeed" name="valfeed" size="90"></p>
												</div>
												
												</td>
												</tr>
												
												<tr class="cinpt  w-100">
												<td colspan="10">
												<div class="cinpt">
												<p><b>We are going to launch <a href="www.aucjunction.com ">www.aucjunction.com </a>as you can get competitors and target all bidders across
												India, were in you can get the<br> best price each time you bid, very soon my Manager will get in touch with
												you, once again thank you so much for your time.</b></p>
												</div>
												</td>
												</tr>
												
												</tbody>
												</table>
												
											<a href="#"><button type="submit" name="submit" onclick="return validateformb()"id="submit" class="btn btn-primary" >Submit</button></a>
											</form>

								
							</div>
						</div>
				</div>
			</div>	
		</div>
		</div>
		</div>
		</div>
		
		<?php
		include "footer.php";
		
		?>
		
		
		


