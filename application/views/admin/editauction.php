<?php 
	//include('./header.php');
	
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Update Auction</h1>
           
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
               <table class="table table-striped text-left table-sm p-4" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-info text-white">
      <tr>
		<th colspan="10"><center>Edit Auction</center></th>  
      </tr>
    </thead>
    <tbody>
	  
	  <tr>
		    <form action="<?php echo base_url();?>Admin_startauction_update" method="POST"  enctype="multipart/form-data">
		  
		  <td width="11%">Category</td>

		  <td width="4%"><select class="form-control w-50" id="scategory" name="scategory" >

				<option value="<?php echo $sqldata[0]->scategory; ?>" selected><?php echo $sqldata[0]->scategory; ?></option>
				<option value="Ferrous">Ferrous</option>
				<option value="Non Ferrous">Non Ferrous</option>
				<option value="Minor Metals" >Minor Metals</option>
				<option value="Plain paper">Plain paper</option>
				<option value="Granules">Granules</option>
				<option value="All Construction Materials">All Construction Materials</option>
				</select>
			</td>
	  </tr>
	  
	  	  <tr>
		  <td>Seller</td>
		  <td><input class="form-control w-50"  type="text" id="sname" name="sname" placeholder="Search" value="<?php echo $sqldata[0]->sname; ?>" onkeyup="auction_id()" aria-label="Search">
		</td>
	  </tr>
      
	  <tr>
		  <td>Auction Id</td>
		  <td><input class="form-control w-50"  type="text" id="sauctionid" name="sauctionid" placeholder="Auction ID" value="<?php echo $sqldata[0]->sauctionid; ?>" aria-label="Search" readonly></td>

	  </tr>
	  
	  <tr>
		  <td>Seller Company Name</td>
		  <td><input class="form-control w-50"  type="text" id="scompanyname" name="scompanyname" value="<?php echo $sqldata[0]->scompanyname; ?>">
		</td>
	  </tr>
	  
	  <tr>											
		  <td>Venue Of Inspection</td>




		  <td><textarea class="form-control w-50" type="text" id="svinspection" name="svinspection" value="<?php echo $sqldata[0]->svinspection; ?>"><?php echo $sqldata[0]->svinspection; ?></textarea></td>

	  </tr>
	  
	  <tr>
		<td>Online Auction Start And End Date</td>
		<td><input class="form-control w-75" id="saucstartdate_time" name="saucstartdate_time" type="datetime-local" value="<?php echo date('Y-m-d\TH:i', strtotime($sqldata[0]->saucstartdate_time)); ?>">
		
		<input class="form-control w-75" id="saucclosedate_time" name="saucclosedate_time" type="datetime-local" value="<?php echo date('Y-m-d\TH:i', strtotime($sqldata[0]->saucclosedate_time)); ?>">
		</td>
	</tr>
	
	<tr>
	<td>Aucjunction Terms & Conditions</td>
	<td>
	<button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#myModal" >
    Terms & Conditions
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><center><b>TERMS AND CONDITIONS</b><br>
Welcome to AucJunction.com website(hereinafter referred to as "the website").</center></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <p><strong>The auctions and related services are provided by AucJunction Pvt. Ltd.(hereinafter referred to as "AucJunction") on the website.</strong><br>

AucJunction is an e-commerce service provider mandated by the seller/buyer to facilitate virtual auctions by the seller/buyer. The website is an online auction platform, a virtual marketplace/venue for sellers/buyers to conduct sale/purchase of assets, and for bidders to make/place bids/offers on such assets. AucJunction is considered as third party not particularly interested in the item/s being sold/bought on behalf of the seller/buyer.<br><br>


<strong>DEFINITIONS</strong><br>

<strong>1. SELLER/BUYER - SELLER/BUYER - </strong>Seller/Buyer referred to in this agreement is any real individual or legal entity who wishes to sell/buy his/her/its assets through internet driven online auctions on the website and who has mandated AucJunction to provide the website and other related support services.<br>

<strong>2. BIDDER -</strong> Any legal entity who is registered with AucJunction and who makes or places a bid on the website to buy/sell the assets either in part or in full is considered as a Bidder. An individual can represent as a bidder on his own behalf and on behalf of other legal entities, provided he registers with AucJunction separately in those capacities. A successful Bidder is that Bidder in whose name the sale certificate or purchase order is issued by the Seller/Buyer.<br>

<strong>3. PAID MEMBER -</strong> Any Bidder who pays the annual membership fee as prescribed by AucJunction is a paid member.<br>

<strong>4. USER -</strong> Any legal entity who uses the website and/or the related services provided by AucJunction is considered as a User.<br>

<strong>5. AGREEMENT -</strong> The terms and conditions, together with any additional terms and conditions specific to an online auction event on the website (which can be found through one or more links on the website for the auction in question) constitute the Agreement.<br>

<strong>6. ONLINE BIDDING EVENT -</strong> An Online Bidding Event is a process for price determination through competitive interaction between Bidders on the website. Online Bidding Events initiated by the Seller are known as Forward Auctions and those initiated by the Buyers are known as Reverse Auctions.<br>

<strong>7.</strong> On accessing the website or using the services provided by AucJunction or by registering either as a Buyer/ Seller / User you agree that you have read the General Terms and Conditions, including the terms and conditions specific to an online auction event.<br>

<strong>8.</strong> You are bound by these terms and conditions, including those specific to a particular online auction event<br><br>

<strong>MODIFICATIONS TO WEBSITE, SERVICES AND TERMS AND CONDITIONS</strong><br>

AucJunction reserves the right to modify, amend, suspend or discontinue any aspect of the services or the website at any time without notice.<br><br>

AucJunction reserves the right to amend any, or all the terms and conditions without notice at any time at its sole discretion and announce the same on the website. Accessing the website and/or using the services shall constitute acceptance of the terms and conditions including the amendments.<br><br>

<strong>PASSWORD AND SECURITY</strong><br>

After you register with AucJunction on the website, you will be allotted a unique user identification (User ID) by AucJunction and you will be prompted to enter a password. This is the log in password. The password is a string of characters (combination of alpha, numeric & special characters) used to authenticate your identity and provide access to various resources on the website. The length of your log in password must be a minimum of eight characters and has to be a combination of alpha and numeric characters. You can also include special characters to strengthen your log in password. However the following special characters ( ~ . / , ? < > : ; ' \" + = _ - ^ ) are not allowed and will be ignored. The User is solely responsible for all use and for maintaining and protecting the confidentiality of their User ID and password<br><br>

<strong>FORGOT PASSWORD</strong><br>

In case you forget the log in password, the only way you can change your log in password is by clicking on the "Lost Password" link on the home page of the website. You will receive a verification code on your registered e-mail address and your registered mobile phone. Using the verification code, you can change your log in password.<br><br>

<strong>TRANSACTION PASSWORD</strong><br>

To have an additional layer of security, Bidders participating in auctions must set up a transaction password. Participating bidders must enter this transaction password to authenticate their entry into the virtual auction room and place their bids. Bidders can set their transaction password and must confirm the same with the OTP that will be sent to their registered mobile number and their registered e-mail ID. Transaction password is session specific.<br><br>

<strong>TIME</strong><br>

Time wherever mentioned in any page of the website refers to Indian Standard Time (IST) i.e. UTC + 05.30 hrs. All the timings of the Online Bid shall be based on the time indicated by the Server hosting the Auction Engine. It shall be the endeavour of AucJunction to ensure that the Server Time reflects as closely as possible the Indian Standard Time (IST) i.e. UTC + 05.30 hrs. However, in the event of any deviations between the Server Time and the Indian Standard Time, the functioning of the Auction Engine (including Start, Operation & closure of auctions) would be guided by the Server Time. Bidders participating in the auctions are advised to refresh the right-side window of the Auction room to check the exact Server Time that is displayed there.<br>

<strong>TERMS OF AGREEMENT</strong>

This Agreement shall continue to be in full force and effect for so long as you are using the website and its services. AucJunction provides the online auction platform wherein the users can sell, purchase, bid and buy, or bid and sell the assets listed on the website pursuant to the terms and conditions set forth below.<br>

<strong>1.0 GENERAL TERMS AND CONDITIONS</strong>

<strong>1.1</strong> Participation and bidding in the auctions on the website shall be treated as conclusive evidence of the fact that the Bidder has inspected the assets and the related documents pertaining to the auction, and is satisfied in all respects regarding the quality, quantity, condition of the assets, taxes and duties, and other extraneous factors and the Principle of Caveat Emptor (let the Bidder beware) will apply. It shall also imply that the Bidder has carefully gone through the terms and conditions, including amendments, if any, prevailing at the time of the auction.
No objections or complaints will be entertained once the bid is placed.<br>

<strong>1.2</strong> All assets sold/bought on the website are on "AS IS WHERE IS BASIS" and "NO COMPLAINT BASIS".<br>

<strong>1.3</strong> AucJunction does not give warranty or guarantee of the quality, quantity, measurement, condition, and chemical composition of the assets and about its "End Use" or fitness for a particular purpose.<br>

<strong>1.4</strong> The highest/lowest Bidder does not get any right to demand acceptance of his bid/offer. Seller/Buyer reserves the right to accept/reject/cancel any bid/offer, withdraw any portion of the assets at any stage from auction, even after acceptance of bid/offer, issue of delivery order/purchase order without assigning any reason thereof. In the event of such rejection, cancellation or withdrawal, the Seller/Buyer shall not be responsible for any damages/loss to the successful bidder on account of such rejection, cancellation or withdrawal.<br><br>

<strong>2.0 COMMUNICATION</strong><br>

<strong>2.1</strong> User consents to receive communication from AucJunction by electronic mail, short messaging services on their mobile phones, by phone calls or through posting notices posted on the website. User fully understands that this consent to receive communication shall override their registration on the NDNC, if any.<br>

<strong>2.2</strong> Only Paid Members will be able to download the Auction Catalog from the website after logging into the website.<br><br>

<strong>3.0 ONLINE BIDDING</strong><br>

<strong>3.1</strong> Multiple Log in from same IP Address - Bidders participating in the auctions may please note that multiple login from the same IP Address will not be permitted.<br>

<strong>3.2</strong> Time Extension - If any market-leading bid (bid higher/lower than the highest/lowest at the point in time) is received in the last three minutes of closing time, the closing time will be extended automatically by three minutes. Please note, Time Extension as mentioned in the bidding room will apply and three minutes is only an example.<br>

<strong>3.3</strong> Bids - All bids placed are legally valid bids and are to be considered as bids from the Bidder himself. Once the bid is placed, the Bidders cannot modify or withdraw the bid for whatever any reason. The highest/lowest and the latest bid on the auction shall supersede all the previous bids of the Bidder. Bidders may please note that in the event of a manual bid amount matching that of an auto bid, the manual bid will prevail and be considered.<br><br>

<strong>3.4 Auto Bid:</strong><br>

<strong>a.</strong> Auto Bid facility is provided for bidders intending to place a maximum/minimum value for a lot/lots.<br>

<strong>b.</strong> Auto Bid is not a confirmed bid. It is only the maximum ceiling amount/minimum floor amount set by the bidder to enable the auction engine to place bids on his behalf, whenever he is outbid, up to the ceiling/floor amount set by him.<br>

<strong>c.</strong> Once an Auto Bid is set, the auction engine will consider the ceiling/floor amount for the next possible bid only, depending on the highest/lowest bid prevailing at that point of time and the increment/decrement amount prescribed for that lot. However, Auto Bid cannot be set for amounts less than two increments/decrements to the highest/lowest bid prevailing at that point of time.<br>

<strong>d.</strong> Bidders may please note that in the event of a manual bid amount matching that of an Auto Bid, the manual bid will prevail and be considered.<br><br>

<strong>4.0 TERMINATION</strong><br>

<strong>4.1 -</strong> AucJunction expressly reserves the right to terminate the use of, or to refuse to permit the use of, the Services and the Website by any person or entity, at the sole discretion of AucJunction, for any reason and without notice.<br><br>

<strong>5.0 FORCE MAJEURE</strong><br>

<strong>5.1</strong> AucJunction shall not be liable for any failure or delay in performance due to any cause beyond its control including fire, strike, go-slow, lock-out, closure, theft, dislocation of normal working conditions, internet or network non-availability, accident, war, riots, civil commotion, political upheaval, epidemics, break-down of machinery, any terrorist activity, any natural calamity, adverse weather or climatic conditions, or any other causes or conditions beyond the control of AucJunction, whether directly due to or in consequence of the aforesaid causes and the existence of such causes or consequences shall operate to extend the time of performance till the cause of delay shall have ceased to exist. AucJunction shall not be liable for any failure or delay in performance due to any cause beyond its control including fire, strike, go-slow, lock- out, closure, theft, dislocation of normal working conditions, internet or network non-availability, accident, war, riots, civil commotion, political upheaval, epidemics, break-down of machinery, any terrorist activity, any natural calamity, adverse weather or climatic conditions, or any other causes or conditions beyond the control of AucJunction, whether directly due to or in consequence of the aforesaid causes and the existence of such causes or consequences shall operate to extend the time of performance till the cause of delay shall have ceased to exist.<br><br>

<strong>6.0 DISCLAIMER</strong><br>

<strong>6.1</strong> AucJunction runs its business on the basis of a robust website. AucJunction is outsourcing server space from a third-party hosting company and hence shall ensure the smooth running in all good faith and intention. However, AucJunction will not be held responsible for any failure of power, network, server, hosting server, Internet connectivity, ISP or otherwise at Bidder's end or at AucJunction directly or indirectly affecting online method of bidding.<br>

<strong>6.2 </strong>AucJunction takes no responsibility of the quality, quantity, documentation details of Buyers/Sellers. Both the Buyers & Sellers agree to defend indemnity and hold harmless AucJunction from any loss, damage, cost and expenses caused by any reason during the transactions on the website. In no event shall AucJunction be liable for any loss for the transactors by business, revenues, profit, costs direct and incidental, consequential or punitive damages of any claim. Both the parties agree to have discussed all the related matter regarding the transactions and have understood in full that AucJunction has provided a source of supply and has nothing to do any further especially with regards to quality, warranty, guarantees, delivery schedules, payments, rejections, transportation, legal laws and regulations to be followed from time to time etc. Since AucJunction does not possess knowledge base of the assets under transaction both the parties agree that the matter contained in the assets as a part or, as a whole does not violate any applicable law. AucJunction is only an e-commerce service provider and is not and cannot be a party to or control in any manner any transactions between the Seller/Buyer and the Bidder.<br>

<strong>6.3</strong> The Seller/Bidder agrees to limit the liability of Shopemet Networks Pvt. Ltd. to them for any, and all claims, losses, costs, damages of any nature whatsoever or claims expenses from any cause or causes, including attorneys' fees and costs, so that the total aggregate liability of Shopemet Networks Pvt. Ltd to the Seller/Bidder shall not exceed its total fee receivable from the Seller/Bidder. It is intended that this limitation apply to any, and all liability or cause of action however alleged or arising, unless otherwise prohibited by law.<br>

<strong>6.4</strong> Terms & conditions as laid down by the auctioneer shall apply in addition.<br>

<strong>6.5</strong> The logos displayed above are the registered trademarks of companies who have used the services provided by AucJunction. The logos are displayed in good faith to imply that AucJunction has at some point of time provide services to these companies and no representation or warranty, express or implied, is made by AucJunction.<br><br>

<strong>7.0 GOVERNING LAW AND JURISDICTION</strong><br>

<strong>7.1</strong> This agreement is governed and construed in accordance with the laws of the Union of India. Users hereby irrevocably consent to the exclusive jurisdiction and venue of courts in Bangalore, Karnataka, India in all disputes arising out of or relating to the use of the services and the website.<br>

<strong>7.2</strong> Users agree to indemnify and hold AucJunction and its officials and employees harmless from any claim, demand or damage asserted by any third party due to and arising out of use of services and the website.<br><br>

<strong>GST</strong><br>

Bidders participating in AucJunction Auctions should verify with the selling companies about the tax structure and ascertain themselves of the tax rates and other statutes in place. Any disputes shall be clarified by the Bidders directly with the selling clients and AucJunction is not responsible for any form of misunderstanding or dispute on the applicable taxes. AucJunction is only an E-Commerce Service Provider and has minimal knowledge arising out of any changes in applicable tax rates that are promulgated by the Government from time to time.</p>
 </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  <br><br>
  <div class="form-check form-check-inline ">
			<input type="checkbox" class="form-check-input" id="sterms_condiaccept" name="sterms_condiaccept" value="<?php echo $sqldata[0]->sterms_condiaccept; ?>" checked>
			<label class="form-check-label" for="exampleCheck1">I agree to the Terms and Conditions</label>
			</div></td>
  </tr>
  
  <tr>
		<td>Upload Terms & Conditions</td>
		<td><div class="form-check form-check-inline">
			<input type="checkbox" class="form-check-input" id="myCheck" onclick="myFunction()" name="sterms_condiupload1[]">
			<label class="form-check-label" for="myCheck">Yes</label>
			</div>
			<div class="form-group" id="text"  style="display:none">
				<input type="file" class="form-control-file" id="sterms_condiupload" name="sterms_condiupload[]" multiple= "multiple" value="<?php echo $sqldata[0]->sterms_condiupload;?>" >
			</div>
			<div class="form-check form-check-inline">
			<input type="checkbox" class="form-check-input" id="idCheck" onclick="myFunction()" name="sterms_condiupload1[]" checked>
			<label class="form-check-label" for="idCheck" >No</label>
			</div>
			<div class="form-group" id="text2" style="display:none">
			<textarea class="form-control w-50" type="text" id="sterms_text" name="sterms_text" value="" ><?php echo $sqldata[0]->sterms_text;?></textarea>
			</div>
			</td>
  </tr>
			<?php 
 							  if(unserialize($sqldata[0]->sterms_condiupload) != NULL){
								$file = unserialize($sqldata[0]->sterms_condiupload);
								  foreach($file as $fl){
								echo '<tr id="filess">';
								echo '<td class="btxt">Existing Documents</td>';
								echo '<td><div class="input_fields_wrap">';
								echo '<textarea class="form-control float-left mt-2 p-2 w-50" type="text" id="ssigneddocumentex" name="ssigneddocumentex[]" readonly>'.$fl.'</textarea>';
								echo '<input type="hidden" id="ssigneddocumentexcom" name="ssigneddocumentexcom[]" value="'.$fl.'">';
								echo '<a class="add_field_button1"><button type="button" onclick="$(this).parents(\'#filess\').remove()" class="btn btn-sm btn-primary ml-1 mb-5 mt-3">  <i class="fa fa-minus text-white"></i></button></a>';
								
								echo '</div></td>';
								echo '';
								echo '</tr>';
								  }
							}else{
								
							}
							
							
							?>
			
			
  
 
  
    </tbody>
  </table>
  
  <center><input  type="submit" name="submit" onclick="return validatestart_edit()" class="btn btn-info" value="Update Auction" data-dismiss="modal"></center>
 	 </form>
			</div>
            </div>
			</div>
			</div>
			</div>
          <!-- Content Row -->

          
        <!-- /.container-fluid -->

      
      <!-- End of Main Content -->

      <!-- Footer -->
     
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
 <script>
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>
 <script>
function myFunction2() {
  var checkBox = document.getElementById("idCheck");
  var text = document.getElementById("text2");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>
<?php 
	//include('./footer.php');
?>
</body>

</html>
