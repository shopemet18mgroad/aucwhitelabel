<?php
include('../db/config.php');
$table_name = "form_auth";
date_default_timezone_set('Asia/Kolkata');
if (isset($_POST["submit"])) {
	if($_POST["type"] == "Bidder"){
		$heading = $_POST["heading"];
		$company = $_POST["company"];
		$address = $_POST["address"];
		$companywebsite = $_POST["companywebsite"];
		$companytelephone = $_POST["companytelephone"];
		$companymobile = $_POST["companymobile"];
		$companyemail = $_POST["companyemail"];
		$concernperson = $_POST["concernperson"];
		$concernpersondesignation = $_POST["concernpersondesignation"];
		$concernpersonnumber = $_POST["concernpersonnumber"];
		$concernpersonemail = $_POST["concernpersonemail"];
		$companystatus = $_POST["companystatus"];
		$tboptions = $_POST["tboptions"];
		$pcba = $_POST["pcba"];
		$pcbb = $_POST["pcbb"];
		$pcbc = $_POST["pcbc"];
		$buyingandselling = $_POST["partaucasopt"];
		$buyingandsellingoth = $_POST["partaucascon"];
		$wenlastauccon = $_POST["wenlastauccon"];
		$wenlastaucopt = $_POST["wenlastaucopt"];
		$wenlastauc = $_POST["wenlastauc"];
		$quanofscrap = $_POST["quanofscrap"];
		$metcatoflot = $_POST["metcatoflot"];
		$bidlocpart = $_POST["bidlocpart"];
		$wayallauc = $_POST["wayallauc"];
		$influenced = $_POST["influenced"];
		$decisionmaker = $_POST["decisionmaker"];
		$decisionmakercon = $_POST["decisionmakercon"];
		$valfeed = $_POST["valfeed"];
		//===================echo html content with recived inputs=====================
				
					include "../survey/header.php";
					
									
					echo "<div class=\"container dealsbox\">\n";
					echo "			 <div class=\"row\">\n";
					echo "				<div class=\"col-md-12\">\n";
					echo "						<div class=\"deals-header\">\n";
					echo "							<h4><i class=\"icon-dashboard\"></i><i class=\"fa fa-tachometer\" aria-hidden=\"true\"></i>&nbsp; Dashboard</h4>\n";
					echo "						</div>\n";
					echo "				</div>\n";
					echo "			 </div>	\n";
					echo "			 <div class=\"row\">\n";
					echo "				\n";
					echo "				<div class=\"col-md-12\">\n";
					echo "					<div class=\"deals-tab-table\">\n";
					echo "							<ul class=\"nav nav-tabs border-0\" id=\"myTab\" role=\"tablist\">\n";
					echo "							\n";
					echo "								<li class=\"nav-item\">\n";
					echo "									<a class=\"nav-link active border border-primary border-bottom-0\" id=\"hvd-tab\" data-toggle=\"tab\" href=\"#hvd\" role=\"tab\" aria-controls=\"hvd\" aria-selected=\"true\"><b>E-Auctions/Bidder Survey Form</b></a>\n";
					echo "								</li>\n";
					echo "								\n";
					echo "								\n";
					echo "							</ul>\n";
					echo "\n";
					echo "							<div class=\"tab-content w-100\">\n";
					echo "								<div class=\"tab-pane h-100 p-3 fade show active border border-primary\" id=\"hvd\" role=\"tabpanel\" aria-labelledby=\"hvd-tab\">\n";
					echo "									<div class=\"table-holder\"> \n";
					echo "										<div class=\"tab-content\">\n";
					echo "											<table class=\"table table-bordered table-sm text-center\">\n";
					echo "												<thead class=\"thead-auc\">\n";
					echo "												\n";
					echo "												\n";
					echo "												</thead>\n";
					echo "												<tbody>\n";
					echo "									\n";
					echo "												<tr><td colspan=\"10\" style=\"background-color:#b2bdc3;\"><strong>Bidder Survey Form</strong></td></tr>\n";
					echo "												<form action=\"../weblib/postformsurvey.php\" method=\"POST\" id=\"bidder\">\n";
					echo "												<input class=\"inpt\" type=\"hidden\" id=\"type\" name=\"type\" value=\"Bidder\" size=\"10\">\n";
					echo "												<tr class=\"cinpt w-100\">\n";
					echo "												<td colspan=\"10\">\n";
					echo "												<div class=\"cinpt\">\n";
					echo "												<p><strong>Namaste,</strong></p>\n";
					echo "											\n";
					echo "												<p>I am ".$heading." from <a href=\"“www.aucjunction.com”\">www.aucjunction.com</a>, we are coming up with a new E- auction website to dispose\n";
					echo "												of Industrial Scrap/waste<br>(Bi-Product), through which you can get more bidders from Pan India.</p>\n";
					echo "												<p><small>So in this regard can you please spare few minutes of your’s valuable time 3-5mins to understand and cater to your needs in a better way.</small></p>\n";
					echo "												<p><b>Note:</b> All the information provided by you will be used only for office purposes R&D, We assure you\n";
					echo "												confidentially at all levels, and<br> will never be shared outside Shopemet Networks Pvt Ltd.</p>\n";
					echo "												</div>\n";
					echo "												</td>\n";
					echo "												</tr>\n";
					echo "												\n";
					echo "												<tr class=\"cinpt w-100\">\n";
					echo "												<td colspan=\"10\">\n";
					echo "												<div class=\"cinpt\">\n";
					echo "												<p>Name of the Company/Firm: \n";
					echo "												".$company."</p>\n";
					echo "												<p>Corporate Office Address:\n";
					echo "													".$address."</p>\n";
					echo "												<p>Website/Telephone/Mobile/Email ID:\n";
					echo "													".$companywebsite."</p>\n";
					echo "												<p>Company Telephone:\n";
					echo "													".$companytelephone."</p>\n";
					echo "												<p>Company Telephone:\n";
					echo "													".$companymobile."</p>\n";
					echo "												<p>Company Email:\n";
					echo "													".$companyemail."</p>\n";
					echo "												<p>Contact person’s Name/Designation/Number/Email:\n";
					echo "												<p>Contact Person:\n";
					echo "													".$concernperson."</p>\n";
					echo "												<p>Concern Person Designation:\n";
					echo "													".$concernpersondesignation."</p>\n";
					echo "												<p>Company Person No:\n";
					echo "													".$concernpersonnumber."</p>\n";
					echo "												<p>Company Person Email:\n";
					echo "													".$concernpersonemail."</p>\n";
					echo "													</div>\n";
					echo "												</td></tr>\n";
					echo "												\n";
					echo "												\n";
					echo "												<tr class=\"cinpt  w-100\">\n";
					echo "												\n";
					echo "												<td>\n";
					echo "												<div class=\"cinpt\">\n";
					echo "												<p><b>Current Status:</b><br></p>\n";
					foreach($companystatus as $companystat){
					echo "												<p>".$companystat."<br></p>\n";
					}
					echo "												\n";
					echo "												\n";
					echo "												</td></tr>\n";
					echo "												\n";
					echo "												<tr class=\"cinpt  w-100\">\n";
					echo "												\n";
					echo "												<td>\n";
					echo "												<div class=\"cinpt\">\n";
					echo "												<p><b>Type of Business:</b><br></p>\n";
					foreach($tboptions as $tboption){
					echo "												<p>".$tboption."<br></p>\n";
					}
					echo "												\n";
					echo "												\n";
					echo "												</td></tr>\n";
					echo "												\n";
					echo "												<tr class=\"cinpt  w-100\">\n";
					echo "												\n";
					echo "												<td>\n";
					echo "												<div class=\"cinpt\">\n";
					echo "												<p>Is your company PCB certified,\n";
					echo "												".$pcba."\n";
					echo "												do you participate in online auctions\n";
					echo "												".$pcbb."\n";
					echo "												, is it in\n";
					echo "												Tons, KGs, Lots,<br>Quantity/numbers, Meters or depends on the product which is been disposed?<br>\n";
					echo "												".$pcbc."\n";
					echo "												</p></div>\n";
					echo "												\n";
					echo "												</td>\n";
					echo "												</tr>\n";
					echo "												\n";
					echo "												<tr class=\"cinpt  w-100\">\n";
					echo "												\n";
					echo "												<td>\n";
					echo "												<div class=\"cinpt\">\n";
					echo "												<p>If you were to participate in an online auction what are the products would you likely to bid(Sell or Buy)\n";
					echo "												on?</p>\n";
					foreach($buyingandselling as $buyingandsell){
					echo "												<p>".$buyingandsell."<br></p>\n";
					}
					echo "												";
					echo "												<p>others please specify:<br>\n";
					echo $buyingandsellingoth. "</p>\n";
					echo "												\n";
					echo "											</div>\n";
					echo "												\n";
					echo "												\n";
					echo "												</td></tr>\n";
					echo "												<tr class=\"cinpt  w-100\">\n";
					echo "												\n";
					echo "												<td>\n";
					echo "											<div class=\"cinpt\">\n";
					echo "												<p>When was the last time you participated in Auctions to Sell or Buy be it any category product? How many\n";
					echo "												auctions in a year? <br>".$wenlastauccon."</p>\n";
					echo "\n";
					foreach($wenlastaucopt as $wenlastaucop){
					echo "												<p>".$wenlastaucop."<br></p>\n";
					}
					echo "												</div>\n";
					echo "												\n";
					echo "												\n";
					echo "												</td></tr>\n";
					echo "												<tr class=\"cinpt  w-100\">\n";
					echo "												\n";
					echo "												<td>\n";
					echo "												<div class=\"cinpt\">\n";
					echo "												<p>What is the approximate quantity of Industrial scrap(Bi-Product) waste generated\n";
					echo "												by your firm in a year?<br>\n";
					echo "												\n";
					echo "											".$quanofscrap."</p><br>\n";
					echo "												<p>Material category value of “ Lot” each time when you Dispose/Auction:<br>\n";
					echo "												".$metcatoflot."</p><br>\n";
					echo "												</div>\n";
					echo "												</td>\n";
					echo "												</tr>\n";
					echo "												\n";
					echo "												<tr class=\"cinpt  w-100\">\n";
					echo "												\n";
					echo "												<td>\n";
					echo "												<div class=\"cinpt\">\n";
					echo "												<p>Bidding locations you can participate, only Bangalore, with in Karnataka, only in South states\n";
					echo "												or Pan India.\n<br>";
					echo "												".$bidlocpart."</p>\n";
					echo "												</div>\n";
					echo "												</td></tr>\n";
					echo "												\n";
					echo "												<tr class=\"cinpt  w-100\">\n";
					echo "												\n";
					echo "												<td>\n";
					echo "												<div class=\"cinpt\">\n";
					echo "												<p>What all Auction websites you have visited/parcipated for bidding in the recent past years?<br>\n";
					echo "												".$wayallauc."</p>\n";
					echo "												</div>\n";
					echo "												</td>\n";
					echo "												</tr>\n";
					echo "												\n";
					echo "												<tr class=\"cinpt  w-100\">\n";
					echo "												\n";
					echo "												<td>\n";
					echo "												<div class=\"cinpt\">\n";
					echo "												<p>When you are buying or selling through the auction websites who influenced are you with following ?<br></p>\n";
					foreach($influenced as $influence){
					echo "												<p>".$influence."<br></p>\n";
					}
					echo "												\n";
					echo "												</div>\n";
					echo "												\n";
					echo "												</td></tr>\n";
					echo "												\n";
					echo "												<tr class=\"cinpt  w-100\">\n";
					echo "												\n";
					echo "												<td>\n";
					echo "												<div class=\"cinpt\">\n";
					echo "												<p>Are you primary user decision maker in your Company/Firm regarding disposal of above mentiioned\n";
					echo "												Product category:<br></p>\n";
					echo "												\n";
					foreach($decisionmaker as $decisionmake){
					echo "												<p>".$decisionmake."<br></p>\n";
					}
					echo "												\n";
					echo "												If No please specify the contact person:<br>\n";
					echo "												".$decisionmakercon."\n";
					echo "												</div>\n";
					echo "												</td></tr>\n";
					echo "												 \n";
					echo "												<tr class=\"cinpt  w-100\">\n";
					echo "												\n";
					echo "												<td>\n";
					echo "												<div class=\"cinpt\">\n";
					echo "												<p>Finally thanking you for your valuable feedback, Please free to share any suggestions, to improve our\n";
					echo "												services pertaining to<br> disposals of Industrial waste(Bi-Products) through our website\n";
					echo "												<a href=\"www.aucjunction.com\"><u>www.aucjunction.com</u></a>?<br>\n";
					echo "												".$valfeed ."</p>\n";
					echo "												</div>\n";
					echo "												\n";
					echo "												</td>\n";
					echo "												</tr>\n";
					echo "												\n";
					echo "												<tr class=\"cinpt  w-100\">\n";
					echo "												<td colspan=\"10\">\n";
					echo "												<div class=\"cinpt\">\n";
					echo "												<p>We are going to launch <a href=\"www.aucjunction.com \">www.aucjunction.com </a>as you can get competitors and target all bidders across\n";
					echo "												India, were in you can get the<br> best price each time you bid, very soon my Manager will get in touch with\n";
					echo "												you, once again thank you so much for your time.</p>\n";
					echo "												</div>\n";
					echo "												</td>\n";
					echo "												</tr>\n";
					echo "												\n";
					echo "												</tbody>\n";
					echo "												</table>\n";
					echo "												\n";
					echo "											<a href=\"#\"><button type=\"submit\" name=\"submit\" id=\"submit\" class=\"btn btn-primary\" onclick=\"\">Print</button></a>\n";
					echo "											</form>\n";
					echo "\n";
					echo "								\n";
					echo "							</div>\n";
					echo "						</div>\n";
					echo "				</div>\n";
					echo "			</div>	\n";
					echo "		</div>\n";
					echo "		</div>\n";
					echo "		</div>\n";
					echo "		</div>\n";
					
		include "../survey/footer.php";
		
	
		
		//===================insert Content into data base====================================
		
		//===============================================================================
		
	}else if($_POST["type"] == "Industrial"){
		$heading = $_POST["heading"];
		$company = $_POST["company"];
		$address = $_POST["address"];
		$companywebsite = $_POST["companywebsite"];
		$companytelephone = $_POST["companytelephone"];
		$companymobile = $_POST["companymobile"];
		$companyemail = $_POST["companyemail"];
		$concernperson = $_POST["concernperson"];
		$concernpersondesignation = $_POST["concernpersondesignation"];
		$concernpersonnumber = $_POST["concernpersonnumber"];
		$concernpersonemail = $_POST["concernpersonemail"];
		$companystatus = $_POST["companystatus"];
		$tboptions = $_POST["tboptions"];
		$orgest = $_POST["orgest"];
		$locinind = $_POST["locinind"];
		$procraw = $_POST["procraw"];
		$ruimport = $_POST["ruimport"];
		$prodmatopt = $_POST["prodmatopt"];
		$prodmatcon = $_POST["prodmatcon"];
		$howoffenopt = $_POST["howoffenopt"];
		$decfactoropt = $_POST["decfactoropt"];
		$decfactorcon = $_POST["decfactorcon"];
		$ratesup = $_POST["ratesup"];
		$liketoreplace = $_POST["liketoreplace"];
		$howoftenpart = $_POST["howoftenpart"];
		$scrapbyprod = $_POST["scrapbyprod"];
		$miscellaneous = $_POST["miscellaneous"];
		$scrapqnt = $_POST["scrapqnt"];
		$scrapqnt = $_POST["scrapqnt"];
		$decisionmaker = $_POST["decisionmaker"];
		$decisionmakercon = $_POST["decisionmakercon"];
		$valfeed = $_POST["valfeed"];
		//===================echo html content with recived inputs=====================
		
		
		
		
		//===================insert Content into data base====================================
		
		//===============================================================================
	}else{
		$heading = $_POST["heading"];
		$company = $_POST["company"];
		$address = $_POST["address"];
		$companywebsite = $_POST["companywebsite"];
		$companytelephone = $_POST["companytelephone"];
		$companymobile = $_POST["companymobile"];
		$companyemail = $_POST["companyemail"];
		$concernperson = $_POST["concernperson"];
		$concernpersondesignation = $_POST["concernpersondesignation"];
		$concernpersonnumber = $_POST["concernpersonnumber"];
		$concernpersonemail = $_POST["concernpersonemail"];
		$companystatus = $_POST["companystatus"];
		$tboptions = $_POST["tboptions"];
		$princprod = $_POST["princprod"];
		$princprodcon = $_POST["princprodcon"];
		$ruimport = $_POST["ruimport"];
		$stockcleare = $_POST["stockcleare"];
		$transportexp = $_POST["transportexp"];
		$deliverystat = $_POST["deliverystat"];
		$ifanymoq = $_POST["ifanymoq"];
		$docquantopt = $_POST["docquantopt"];
		$systemtoreview = $_POST["systemtoreview"];
		$paymentterms = $_POST["paymentterms"];
		$annualturnover = $_POST["annualturnover"];
		$valfeed = $_POST["valfeed"];
		//===================echo html content with recived inputs=====================
		
		
		
		
		//===================insert Content into data base====================================
		
		//===============================================================================
	}
}

?>