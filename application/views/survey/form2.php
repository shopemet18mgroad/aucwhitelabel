<?php 
include("./header.php");

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
									<a class="nav-link active border border-primary border-bottom-0" id="form2-tab" data-toggle="tab" href="#form2" role="tab" aria-controls="form2" aria-selected="false"><b>Industrial Survey</b></a>
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
												<tr>
												<td colspan="10" style="background-color:#b2bdc3;"><strong>Industrial Survey </strong>
												<form action="../weblib/postformsurvey.php" method="POST" id="bidder">
												<input class="inpt" type="hidden" id="type" name="type" value="Industrial" size="10">
												</td>
												</tr>
												
												<tr class="cinpt w-100">
												<td colspan="10">
												<div class="cinpt">
												<p><strong>Namaste,</strong></p>
											
												<p>I am <input class="inpt"  type="text" id="heading" name="heading" size="10"> from<a href="www.rawmet24.com"> www.rawmet24.com</a>, we are coming up with a new search engine inventory for
												raw material procurement,<br> which is free of cost, no service charges for all Industries. Ware you will get a
												list of suppliers with pricing and livestock availability in<br> real time, and with a click you can get the quote
												and further negotiable.</p>
												<p><small>So in this regard can you please spare few minutes of your’s valuable time 3-5mins to understand and cater to your needs in a better way.</small></p>
												<p><b>note:</b> All the information provided by you will be used only for office use purposes R&D, We assure you
												confidentially at all levels, and<br>will never be shared outside Shopemet Networks Pvt Ltd.</p>
												</div>
										
												</td>
												</tr>
												
												
												<tr class="cinpt w-100">
												<td colspan="10">
												<div class="cinpt">
												<p><b>Name of the Company/Firm:</b> 
												<input class="inpt w-100" type="text" id="company" name="company" size="80"></p>
												<p><b>Corporate Office Address:</b>
												<input class="inpt w-100" type="text" id="address" name="address" size="80"></p>
												<p><b>Website/Telephone/Mobile/Email ID:</b>
												<input class="inpt w-100" type="text" id="companywebsite" name="companywebsite" size="75" placeholder="Website">
													<input class="inpt w-100" type="text" id="companytelephone" name="companytelephone" size="75" placeholder="Telephone">
													<input class="inpt w-100" type="text" id="companymobile" name="companymobile" size="75" placeholder="Mobile">
													<input class="inpt w-100" type="text" id="companyemail" name="companyemail" size="75" placeholder="Email ID">
													</p>
												<p><b>Contact person’s Name/Designation/Number/Email:</b>
													<input class="inpt w-100" type="text" id="concernperson" name="concernperson" size="62" placeholder="Contact Person's Name">
													<input class="inpt w-100" type="text" id="concernpersondesignation" name="concernpersondesignation" size="62" placeholder="Designation">
													<input class="inpt w-100" type="text" id="concernpersonnumber" name="concernpersonnumber" size="62" placeholder="Number">
													<input class="inpt w-100" type="text" id="concernpersonemail" name="concernpersonemail" size="62" placeholder="Email ID"></p>
												</div>
												</td>
												</tr>
												
												
												<tr class="cinpt w-100">
												
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
                                                <input type="checkbox" class="form-check-input"  name="tboptions[]" value="Secondary Metal">
                                                <label class="form-check-label" for="secondme">Secondary Metal</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="tboptions[]" value="Secondary Manufacturer">
                                                <label class="form-check-label" for="secondmenuf">Secondary Manufacturer</label>
												</div>
												</div>
												</td>
												</tr>
												
												<tr class="cinpt w-100">
												
												<td>
												<div class="cinpt">
												<p><b>Ownership Status:</b><br></p>
												
												<div class="form-check form-check-inline ">
                                                <input type="checkbox" class="form-check-input"  name="companystatus[]" value="Proprietorship">
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
                                                <input type="checkbox" class="form-check-input"  name="companystatus[]" value="Pvt Ltd">
                                                <label class="form-check-label" for="pvt.ltd">Pvt Ltd</label>
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
                                                <input type="checkbox" class="form-check-input" name="companystatus[]" value="India licensed">
                                                <label class="form-check-label" for="indianlicens">India licensed</label>
												</div>
												</div>
												
												</td></tr>
												
												<tr class="cinpt w-100">
												
												<td>
												<div class="cinpt">
												<p><b>When was your organisation established:</b>
												<input class="inpt w-100" type="text" id="orgest" name="orgest" size="90" value="orgest"></p>
												<p><b>How many location do you have across India:</b>
												<input class="inpt w-100" type="text" id="locinind" name="locinind" size="90" value="locinind"></p>
												</div>
												</td>
												</tr>
												
												<tr class="cinpt w-100">
												
												<td>
												<div class="cinpt">
												<p><b>Please tell me how do you typically procure Raw-Materials and dispose industrial scrap (Bi-Product) waste
												Disposals (Hazardous PCB certified /Non-Hazardous)? Websites (Online) Procurement through which
												website</b>
												<input class="inpt w-100" type="text" id="procraw" name="procraw" size="80"></p>
												</div>
											
												</td>
												</tr>
												
												
												<tr class="cinpt w-100">
												
												<td>
												<div class="cinpt">
												<p><b>Are you importring any product category’s from outside India?</b>
												<textarea class="inpt w-100" type="text" id="ruimport" name="ruimport" size="80"></textarea>
												
												</div>
												</td></tr>
												
												<tr class="cinpt w-100">
												
												<td>
												<div class="cinpt">
												<p><b>Please tell me which of the following Products/Materials do you typically procure for your company/Firm
												depending on day to day operations?</b></p>
												
												<div class="form-check form-check-inline ">
                                                <input type="checkbox" class="form-check-input"  name="prodmatopt[]" value="Ferrous Metals">
                                                <label class="form-check-label" for="ferrousm">Ferrous Metals</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" name="prodmatopt[]" value="Non Ferrous Metals">
                                                <label class="form-check-label" for="nonferrousm">Non Ferrous Metals</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="prodmatopt[]" value="Minor Metals">
                                                <label class="form-check-label" for="minorm">Minor Metals</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" name="prodmatopt[]" value="Paper Materials">
                                                <label class="form-check-label" for="paperm">Paper Materials</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" name="prodmatopt[]" value="Plastic Materials">
                                                <label class="form-check-label" for="plasticm">Plastic Materials</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="prodmatopt[]" value="Construction Materials">
                                                <label class="form-check-label" for="constructionm">Construction Materials</label>
												</div>
												
												<p><b>Others,pls specify:</b>
												<input class="inpt w-100" type="text" id="prodmatcon" name="prodmatcon" size="50"></p>	
												</div>
											   </td>
											   </tr>
												
												<tr class="cinpt w-100">
												
												<td>
												<div class="cinpt">
												<p><b>How often do you sell or purchase these products category? is it in Tons, KGs, Lots, Quantity/numbers,
												Meters or depends on the product which is been disposed?</b></p>
												
												<div class="form-check form-check-inline ">
                                                <input type="checkbox" class="form-check-input" name="howoffenopt[]" value="Several times a week">
                                                <label class="form-check-label" for="severala">Several times a week</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" name="howoffenopt[]" value="About once in a week">
                                                <label class="form-check-label" for="abouta">About once in a week</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" name="howoffenopt[]" value="Several times a month">
                                                <label class="form-check-label" for="severalm">Several times a month</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" name="howoffenopt[]" value="About once a week">
                                                <label class="form-check-label" for="abouta">About once a week</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" name="howoffenopt[]" value="less than once a month">
                                                <label class="form-check-label" for="lessm">less than once a month</label>
												</div>	
												</div>
												</td>
												</tr>
											
												
												<tr class="cinpt w-100">
												
												<td>
												<div class="cinpt">
												<p><b>Which are these factors are important to you when you make the decision about about which Brands to
												Purchase?(please select<br> all that apply)</b></p>
												
												<div class="form-check form-check-inline ">
                                                <input type="checkbox" class="form-check-input"  name="decfactoropt[]" value="Familarity with the brand">
                                                <label class="form-check-label" for="familarity">Familarity with the brand</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="decfactoropt[]" value="Price">
                                                <label class="form-check-label" for="price">Price</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="decfactoropt[]" value="Materials">
                                                <label class="form-check-label" for="material">Materials</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" name="decfactoropt[]" value="Customer service">>
                                                <label class="form-check-label" for="customerserv">Customer service</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="decfactoropt[]" value="Convince">
                                                <label class="form-check-label" for="convince">Convince</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="decfactoropt[]" value="Durability">
                                                <label class="form-check-label" for="durability">Durability</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="decfactoropt[]" value="Comfort">
                                                <label class="form-check-label" for="comfort">Comfort</label>
												</div>
												
												<p><b>Others,pls specify:</b>
												<input class="inpt w-100" type="text" id="decfactorcon" name="decfactorcon" size="50"></p>
												</div>
												
												</td>
												</tr>
												
												<tr class="cinpt w-100">
												
												<td>
												<div class="cinpt">
												<p><b>Overall how would you rate your Current supplier taking every things into consideration? on the scale of
												1 to 10 were one is not<br> at all satisfied and towards 10 is extremely satisfied<br></b></p>

											Not satisfied    <div class="form-check form-check-inline ">
                                                <input type="checkbox" class="form-check-input"  name="ratesup[]" value="1">
                                                <label class="form-check-label" for="nst"> 1</label></div>
												<div class="form-check form-check-inline ">
                                                <input type="checkbox" class="form-check-input"  name="ratesup[]" value="2">
                                                <label class="form-check-label" for="nrst"> 2</label></div>
												<div class="form-check form-check-inline ">
                                                <input type="checkbox" class="form-check-input"  name="ratesup[]" value="3">
                                                <label class="form-check-label" for="swst"> 3</label></div>
												<div class="form-check form-check-inline ">
                                                <input type="checkbox" class="form-check-input"  name="ratesup[]" value="4">
                                                <label class="form-check-label" for="swst">4</label></div> 
												<div class="form-check form-check-inline ">
                                                <input type="checkbox" class="form-check-input"  name="ratesup[]" value="5">
                                                <label class="form-check-label" for="notsure">5</label></div>
												<div class="form-check form-check-inline ">
                                                <input type="checkbox" class="form-check-input"  name="ratesup[]" value="6">
                                                <label class="form-check-label" for="swst">6</label></div>
												<div class="form-check form-check-inline ">
                                                <input type="checkbox" class="form-check-input" name="ratesup[]" value="7">
                                                <label class="form-check-label" for="swst">7</label></div> 
												<div class="form-check form-check-inline ">
                                                <input type="checkbox" class="form-check-input"  name="ratesup[]" value="8">
                                                <label class="form-check-label" for="st">8</label> </div>
												<div class="form-check form-check-inline ">
                                                <input type="checkbox" class="form-check-input"  name="ratesup[]" value="9">
                                                <label class="form-check-label" for="vst">9</label></div>
												<div class="form-check form-check-inline ">
                                                <input type="checkbox" class="form-check-input"  name="ratesup[]" value="10">
                                                <label class="form-check-label" for="exst">10</label></div>
												Extremely Satisfied
												</div>
												</div>
												</td>
												</tr>
												
												<tr class="cinpt w-100">
												
												<td>
												<div class="cinpt">
												<p><b>How likely are you to replace your current supplier?</b></p>
												<div class="form-check form-check-inline ">
                                                <input type="checkbox" class="form-check-input"  name="liketoreplace[]" value="Extremely likely">
                                                <label class="form-check-label" for="extremelylike">Extremely likely</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="liketoreplace[]" value="Very likely">>
                                                <label class="form-check-label" for="verylike">Very likely</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="liketoreplace[]" value="Somewhat likely">>
                                                <label class="form-check-label" for="somewhatlike">Somewhat likely</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="liketoreplace[]" value="Not so likely">>
                                                <label class="form-check-label" for="notlike">Not so likely</label>
												</div>
												</div>
												</td>
												</tr>
											
												 
												 <tr class="cinpt w-100">
											
												<td>
												<div class="cinpt">
												<p><b>How often do you participate in auction process?</b></p>
												<div class="form-check form-check-inline ">
                                                <input type="checkbox" class="form-check-input" name="howoftenpart[]" value="Weekly">
                                                <label class="form-check-label" for="weekly">Weekly</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" name="howoftenpart[]" value="Monthly">
                                                <label class="form-check-label" for="monthly">Monthly</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" name="howoftenpart[]" value="Once in three months">
                                                <label class="form-check-label" for="onceinm">Once in three months</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" name="howoftenpart[]" value="Once in six months">
                                                <label class="form-check-label" for="onceinsixm">Once in six months</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" name="howoftenpart[]" value="Once a year">
                                                <label class="form-check-label" for="onceinyear">Once a year</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" name="howoftenpart[]" value="or When arises/not fixed time/month">
                                                <label class="form-check-label" for="notfixed">or When arises/not fixed time/month</label>
												</div>
												</div>
											
												</td>
												</tr>
												
												<tr class="cinpt w-100">
												
												<td>
												<div class="cinpt">
												<p><b>Please name the Industrial scrap Bi-Product waste disposal dealt by you? E-Auction/Traditional</b></p>
												<div class="form-check form-check-inline ">
                                                <input type="checkbox" class="form-check-input"  name="scrapbyprod[]" value="IRON">
                                                <label class="form-check-label" for="iron">IRON</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="scrapbyprod[]" value="COPPER">
                                                <label class="form-check-label" for="copper">COPPER</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="scrapbyprod[]" value="STEEL">
                                                <label class="form-check-label" for="steel">STEEL</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="scrapbyprod[]" value="ALUMINIUM">
                                                <label class="form-check-label" for="aluminium">ALUMINIUM</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="scrapbyprod[]" value="LEAD">
                                                <label class="form-check-label" for="lead">LEAD</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="scrapbyprod[]" value="ZINC">
                                                <label class="form-check-label" for="zinc">ZINC</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="scrapbyprod[]" value="PLASTIC">
                                                <label class="form-check-label" for="plastic">PLASTIC</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="scrapbyprod[]" value="WOOD">
                                                <label class="form-check-label" for="wood">WOOD</label>
												</div>
												<br>
												<p>Miscellaneous
												<input class="inpt w-100" type="text" id="miscellaneous" name="miscellaneous" size="50"><br>
												<b>Approx Quantity of industrial scrap (Bi-Product) waste generated in a year</b>
												<input class="inpt w-100" type="text" id="scrapqnt" name="scrapqnt" size="40"></p>
												</div>
												</td>
												</tr>
											
												<tr class="cinpt w-100">
												
												<td>
												<div class="cinpt">
												<p><b>Are you primary user decision maker in your Company/Firm regarding disposal of above mentiioned
												Product category:</b><br></p>
												
												Yes <div class="form-check form-check-inline ">
                                                <input type="checkbox" class="form-check-input" name="decmaker[]" value="yes">
                                                <label class="form-check-label" for="yes"></label></div>
												No <div class="form-check form-check-inline ">
                                                <input type="checkbox" class="form-check-input" name="decmaker[]" value="no">
                                                <label class="form-check-label" for="no"></label></div>
												If No please specify the contact person:
												<input class="inpt w-100" type="text" id="decmakercon" name="decmakercon" size="55">
												
												</div>
												</td>
												</tr>
											
												<tr class="cinpt w-100">
												
												<td>
												<div class="cinpt">
												<p><b>Finally thanking you for your valuable feedback, Please feel free to share any suggestions, challenges in
												selling and buying your<br>stock? Or bidding</b>
												<textarea class="inpt w-100" type="text" id="valfeed" name="valfeed" size="90"></textarea>
												
												</div>
												</td>
												</tr>
												
												<tr class="cinpt w-100">
												<td colspan="10">
												<div class="cinpt">
												<p><b>We are going to launch <a href="www.aucjunction.com">www.aucjunction.com</a> as you can get competitors and target all bidders across
												India, were in you can get the<br> best price each time you bid, very soon my Manager will get in touch with
												you, once again thank you so much for your time.</b></p>
												</div>
												</td>
												</tr>
												
												
												
												</tbody>
												</table>
												
												<a href="#"><button type="submit" name="submit" onclick="return validateformi()"id="submit" class="btn btn-primary" >Submit</button></a>

								
							</div>
						</div>
				</div>
			</div>	
		</div>
		</div>
		</div>
		</div>
		
		<?php 
include("footer.php");
?>