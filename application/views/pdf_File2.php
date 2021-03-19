<!--<!DOCTYPE html>
<html>
<link href="st.css" rel="stylesheet" type="text/css">-->
<style>
.bara{

	text-align: center;
	padding-top:1px;
	height: 40px;
	background-color: green;
	color: #ffffff;
	font-size: 14px;
	
}
.wrapbox { width: 10em; margin: 0.5em; white-space: normal; vertical-align: top; display: inline-block; }

.auto { line-break: auto; }

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}
#lrow{
	color:blue;
}

.b{
	background-color:blue;
}
.bank{
	color:red;
}
.heading{
	
	text-align: center;
	padding-top:1px;
	height: 40px;
	background-color:grey;
	color: #ffffff;
}
.tablefont{
	font-size: 14px;
	text-align: center;
}
</style>
<body>

	<h2><u><?php echo $sqldata2[0]->scompanyname; ?></u></h2>
	<?php $companyltype = unserialize($sql[0]->saddress);
	$companyaddress = unserialize($sql[0]->saddresscount);?>

<pre class="wrapbox auto"><?php echo $companyltype[0] ;?><br>
<?php echo $companyaddress[0] ;?><br>
 </pre>

	<div class="bara w-100">
		<p><strong>ONLINE AUCTION PLATFORM AND SUPPORT SERVICES PROVIDED BY AUCJUNCTION</strong></p>
	</div>

<p><b>AUCJUNCTION</b>&nbsp; is an authorized e- commerce service provider for&nbsp; <?php echo $sqldata2[0]->scompanyname; ?>
(Seller) to obtain rates online through its portal www.aucjunction.com. The sale and purchase are directly made
by the Seller and Buyer/s (Bidder/s).
</p>

<p><b><?php echo $sqldata2[0]->scompanyname; ?>&nbsp;</b>will sell <b>&nbsp; <?php echo $sqldata[0]->slotname; ?>&nbsp; available at &nbsp; <?php echo $sqldata2[0]->scompanyname; ?>&nbsp;,&nbsp;<?php echo $sqldata[0]->slotlocation; ?>&nbsp;</b> through Online Auction subject to terms and conditions
annexed hereto and as per schedule of programme given below. </p>


	<div class="bara w-100">
		<p><strong>SCHEDULE OF PROGRAMME</strong></p>
	</div>
	<br>
	
	<table style="width:100%">
  <tr>
    
    <th colspan="2" style="color:red;text-align:center;margin-top:70px;">Online
</th> 

  </tr>
  <tr>
    <td>Auction ID </td>
    <td><?php echo $sqldata2[0]->sauctionid; ?>
</td>
 
  </tr>
  <tr>
    <td>Inspection Date/Time</td>
    <td><?php echo $sqldata2[0]->sfrominpectdate_time; ?>&nbsp; to &nbsp; <?php echo $sqldata2[0]->stoinpectdate_time; ?></td>
    
  </tr>
  <tr>
    <td>Venue of Inspection</td>
    <td>Contact To Aucjunction<br>
Helpline No:+91 9945454505,08042332722
</td>
   
  </tr>
  
  <tr>
    <td><a href ="#"></a>EMD Details</td>
    <td><?php echo $sqldata2[0]->semddetail; ?></td>
 
  </tr>
 
  <tr>
    <td>Last Date and time to receive EMD</td>
    <td><?php echo $sqldata2[0]->slastdateemdsub ?></td>
 
  </tr>
  
  <tr>
    <td>On-Line Auction Date and time</td>
    <td><?php echo $sqldata2[0]->saucstartdate_time; ?><br>
	<?php echo $sqldata2[0]->saucclosedate_time; ?>
</td>
 
  </tr>
   
  <tr>
    <td>Participation Fee - (compulsory for all new
participants and for those existing members
whose validity has expired)</td>
    <td id="lrow"><a href="#"> Rs 8,850/- (inclusive of GST ) payable online through
	www.aucjunction.com</a></td>
 
  </tr>
</table >

<br>
	
	
	<table class="tablefont" style="width:100%;">
	<tr><th colspan="10" class="bara w-100"><p><strong>DETAILS OF AUCTION PROPERTY</strong></p></th></tr>
  <tr>
  
    <th style="background:#ffff"><b>Lot
No.</b>
</th>
</th>
    <th style="color:red"><b>Lot Name</b>
</th> 
<th style="width:70%;"><b>Material Description</b>
</th> 
<th><b>Quantity<br>(Approx.)</th>
<th><b>UOM</b></th>
<th><b>Bid Basis(Per UOM </b></th>
<th><b>GST(%)</b></th>
<th><b>ITTCS(%)</b></th>
<th><b>PCB Certificate Required (Y/N)</b></th>
<th><b>EMD Value (Rs.)</b></th>
  
 <tbody> 
</tr>
<?php foreach($sqldata as $sqldat){?>	
  <tr>
    <td><?php echo $sqldat->slotno; ?></td>
    <td><?php echo $sqldat->slotname; ?></td>
	<td><?php echo $sqldat->sdescription; ?></td>
	<td><?php echo $sqldat->sqty?></td>
	<td><?php echo $sqldat->sunitmeasurment; ?></td>
	<td><?php echo $sqldat->sbidbase; ?></td>
	<td><?php echo $sqldat->sgst; ?></td>
	<td><?php echo $sqldat->sothertax; ?></td>
	<td><?php if($sqldat->spcbcertificate == 1) {echo '<p style="color:green;"><b>Y</b></p>';} ?>
	<?php if($sqldat->spcbcertificate == 0) {echo '<p style="color:orange;" ><b>N</b></p>';} ?></td>
	<td><?php echo $sqldat->semdamount; ?></td>
</tr>
 
  		<?php }  
         ?> 
</tbody>		 
  </table>

<br>
 <h2 class="bara">TERMS AND CONDITIONS</h2>
 <p class="aboutus-text">Welcome to AucJunction.com website (here in after referred to as &quot;the website&quot;).
<br><br>
The auctions and related services are provided by Shopemet Networks Pvt. Ltd. (hereinafter referred
to as &quot;AucJunction&quot;) on the website.
<br><br>
AucJunction is an e-commerce service provider mandated by the seller/buyer to facilitate
virtual auctions by the seller/buyer. The website is an online auction platform, a virtual
marketplace/venue for sellers/buyers to conduct sale/purchase of assets, and for bidders to
make/place bids/offers on such assets. AucJunction is considered as third party not
particularly interested in the item/s being sold/bought on behalf of the seller/buyer.<br><br>
<span class="heading">DEFINITIONS</span><br><br>

<span>1. SELLER/BUYER - SELLER/BUYER</span> - Seller/Buyer referred to in this agreement is any real
individual or legal entity who wishes to sell/buy his/her/its assets through internet driven online
auctions on the website and who has mandated AucJunction to provide the website and other
related support services.<br><br>

<span>2. BIDDER - </span> Any legal entity who is registered with AucJunction and who makes or places a
bid on the website to buy/sell the assets either in part or in full is considered as a Bidder. An
individual can represent as a bidder on his own behalf and on behalf of other legal entities,
provided he registers with AucJunction separately in those capacities. A successful Bidder is
that Bidder in whose name the sale certificate or purchase order is issued by the Seller/Buyer.<br><br>

<span>3. PAID MEMBER - </span>Any Bidder who pays the annual membership fee as prescribed by
AucJunction is a paid member.<br><br>

<span>4.USER - </span>Any legal entity who uses the website and/or the related services provided by
AucJunction is considered as a User.<br><br>

<span>5. AGREEMENT - </span>The terms and conditions, together with any additional terms and conditions
specific to an online auction event on the website (which can be found through one or more
links on the website for the auction in question) constitute the Agreement.<br><br>

<span>6. ONLINE BIDDING EVENT - </span>An Online Bidding Event is a process for price determination
through competitive interaction between Bidders on the website. Online Bidding Events initiated
by the Seller are known as Forward Auctions and those initiated by the Buyers are known as
Reverse Auctions.<br><br>

<span>7. </span>On accessing the website or using the services provided by AucJunction or by registering
either as a Buyer/ Seller / User you agree that you have read the General Terms and
Conditions, including the terms and conditions specific to an online auction event.<br><br>

<span>8. </span>You are bound by these terms and conditions, including those specific to a particular online
auction event<br><br>

<span class="heading">MODIFICATIONS TO WEBSITE, SERVICES AND TERMS AND CONDITIONS</span><br><br>
AucJunction reserves the right to modify, amend, suspend or discontinue any aspect of the
services or the website at any time without notice.<br><br>

AucJunction reserves the right to amend any, or all the terms and conditions without notice at
any time at its sole discretion and announce the same on the website. Accessing the website
and/or using the services shall constitute acceptance of the terms and conditions including the
amendments.<br><br>
<span class="heading">PASSWORD AND SECURITY</span><br><br>
After you register with AucJunction on the website, you will be allotted a unique user
identification (User ID) by AucJunction and you will be prompted to enter a password. This is
the log in password. The password is a string of characters (combination of alpha, numeric &amp;
special characters) used to authenticate your identity and provide access to various resources
on the website. The length of your log in password must be a minimum of eight characters and
has to be a combination of alpha and numeric characters. You can also include special
characters to strengthen your log in password. However the following special characters ( ~ . / ,
? &lt; &gt; : ; &#39; \&quot; + = _ - ^ ) are not allowed and will be ignored. The User is solely responsible for all
use and for maintaining and protecting the confidentiality of their User ID and password<br><br>

<span class="heading">FORGOT PASSWORD</span><br><br>
In case you forget the log in password, the only way you can change your log in password is by
clicking on the &quot;Lost Password&quot; link on the home page of the website. You will receive a
verification code on your registered e-mail address and your registered mobile phone. Using the
verification code, you can change your log in password.<br><br>

<span class="heading">TIME</span><br><br>
Time wherever mentioned in any page of the website refers to Indian Standard Time (IST) i.e.
UTC + 05.30 hrs. All the timings of the Online Bid shall be based on the time indicated by the
Server hosting the Auction Engine. It shall be the endeavour of AucJunction to ensure that the
Server Time reflects as closely as possible the Indian Standard Time (IST) i.e. UTC + 05.30 hrs.
However, in the event of any deviations between the Server Time and the Indian Standard
Time, the functioning of the Auction Engine (including Start, Operation &amp; closure of auctions)
would be guided by the Server Time. Bidders participating in the auctions are advised to refresh

the right-side window of the Auction room to check the exact Server Time that is displayed
there.<br><br>

<span class="heading">TERM OF AGREEMENT</span>
This Agreement shall continue to be in full force and effect for so long as you are using the
website and its services. AucJunction provides the online auction platform wherein the users
can sell, purchase, bid and buy, or bid and sell the assets listed on the website pursuant to the
terms and conditions set forth below.<br><br>

<span class="heading">1.0 GENERAL TERMS AND CONDITIONS</span><br><br>
<span>1.1 </span>Participation and bidding in the auctions on the website shall be treated as
conclusive evidence of the fact that the Bidder has inspected the assets and the related
documents pertaining to the auction, and is satisfied in all respects regarding the quality,
quantity, condition of the assets, taxes and duties, and other extraneous factors and the
Principle of Caveat Emptor (let the Bidder beware) will apply. It shall also imply that the
Bidder has carefully gone through the terms and conditions, including amendments, if
any, prevailing at the time of the auction.<br>
No objections or complaints will be entertained once the bid is placed.<br><br>
<span>1.2 </span>All assets sold/bought on the website are on &quot;AS IS WHERE IS BASIS&quot; and &quot;NO
COMPLAINT BASIS&quot;.<br><br>
<span>1.3 </span>AucJunction does not give warranty or guarantee of the quality, quantity,
measurement, condition, and chemical composition of the assets and about its &quot;End
Use&quot; or fitness for a particular purpose.<br><br>
<span>1.4 </span>The highest/lowest Bidder does not get any right to demand acceptance of his
bid/offer. Seller/Buyer reserves the right to accept/reject/cancel any bid/offer, withdraw
any portion of the assets at any stage from auction, even after acceptance of bid/offer,
issue of delivery order/purchase order without assigning any reason thereof. In the event
of such rejection, cancellation or withdrawal, the Seller/Buyer shall not be responsible for
any damages/loss to the successful bidder on account of such rejection, cancellation or
withdrawal.<br><br>
<span class="heading">2.0 COMMUNICATION</span><br><br>
<span>2.1 </span>User consents to receive communication from AucJunction by electronic mail, short
messaging services on their mobile phones, by phone calls or through posting notices posted
on the website. User fully understands that this consent to receive communication shall override
their registration on the NDNC, if any.<br><br>

<span>2.2 </span>Only Paid Members will be able to download the Auction Catalog from the website after
logging into the website.<br><br>

<span class="heading">3.0 ONLINE BIDDING</span><br><br>
<span>3.1 Multiple Log in from same IP Address - </span>Bidders participating in the auctions may please
note that multiple login from the same IP Address will not be permitted.<br><br>
<span>3.2 Time Extension - </span>If any market-leading bid (bid higher/lower than the highest/lowest at the
point in time) is received in the last three minutes of closing time, the closing time will be
extended automatically by three minutes. Please note, Time Extension as mentioned in the
bidding room will apply and three minutes is only an example.<br><br>
<span>3.3 Bids - </span>All bids placed are legally valid bids and are to be considered as bids from the Bidder
himself. Once the bid is placed, the Bidders cannot modify or withdraw the bid for whatever any
reason. The highest/lowest and the latest bid on the auction shall supersede all the previous
bids of the Bidder. Bidders may please note that in the event of a manual bid amount matching
that of an auto bid, the manual bid will prevail and be considered.<br><br>
<span class="heading">3.4 Auto Bid:</span><br><br>
<span>a. </span>Auto Bid facility is provided for bidders intending to place a maximum/minimum value for a
lot/lots.<br><br>
<span>b. </span>Auto Bid is not a confirmed bid. It is only the maximum ceiling amount/minimum floor amount
set by the bidder to enable the auction engine to place bids on his behalf, whenever he is
outbid, up to the ceiling/floor amount set by him.<br><br>
<span>c. </span>Once an Auto Bid is set, the auction engine will consider the ceiling/floor amount for the next
possible bid only, depending on the highest/lowest bid prevailing at that point of time and the
increment/decrement amount prescribed for that lot. However, Auto Bid cannot be set for
amounts less than two increments/decrements to the highest/lowest bid prevailing at that point
of time.<br><br>
<span>d.</span> Bidders may please note that in the event of a manual bid amount matching that of an Auto
Bid, the manual bid will prevail and be considered.<br><br>

<span class="heading">4.0 TERMINATION</span> <br><br>
4.1 - AucJunction expressly reserves the right to terminate the use of, or to refuse to permit the
use of, the Services and the Website by any person or entity, at the sole discretion of
AucJunction, for any reason and without notice.<br><br>

<span class="heading">5.0 FORCE MAJEURE</span> <br><br>
<span>5.1 </span> AucJunction shall not be liable for any failure or delay in performance due to any cause
beyond its control including fire, strike, go-slow, lock-out, closure, theft, dislocation of normal
working conditions, internet or network non-availability, accident, war, riots, civil commotion,
political upheaval, epidemics, break-down of machinery, any terrorist activity, any natural
calamity, adverse weather or climatic conditions, or any other causes or conditions beyond the
control of AucJunction, whether directly due to or in consequence of the aforesaid causes and
the existence of such causes or consequences shall operate to extend the time of performance
till the cause of delay shall have ceased to exist. AucJunction shall not be liable for any failure
or delay in performance due to any cause beyond its control including fire, strike, go-slow, lock-
out, closure, theft, dislocation of normal working conditions, internet or network non-availability,
accident, war, riots, civil commotion, political upheaval, epidemics, break-down of machinery,
any terrorist activity, any natural calamity, adverse weather or climatic conditions, or any other
causes or conditions beyond the control of AucJunction, whether directly due to or in
consequence of the aforesaid causes and the existence of such causes or consequences shall
operate to extend the time of performance till the cause of delay shall have ceased to exist.<br><br>

<span class="heading">6.0 DISCLAIMER </span> <br><br>
<span>6.1 </span>  AucJunction runs its business on the basis of a robust website. AucJunction is outsourcing
server space from a third-party hosting company and hence shall ensure the smooth running in
all good faith and intention. However, AucJunction will not be held responsible for any failure of
power, network, server, hosting server, Internet connectivity, ISP or otherwise at Bidder&#39;s end or
at AucJunction directly or indirectly affecting online method of bidding.
6.2 AucJunction takes no responsibility of the quality, quantity, documentation details of
Buyers/Sellers. Both the Buyers &amp; Sellers agree to defend indemnity and hold harmless
AucJunction from any loss, damage, cost and expenses caused by any reason during the
transactions on the website. In no event shall AucJunction be liable for any loss for the
transactors by business, revenues, profit, costs direct and incidental, consequential or punitive
damages of any claim. Both the parties agree to have discussed all the related matter regarding
the transactions and have understood in full that AucJunction has provided a source of supply
and has nothing to do any further especially with regards to quality, warranty, guarantees,
delivery schedules, payments, rejections, transportation, legal laws and regulations to be
followed from time to time etc. Since AucJunction does not possess knowledge base of the
assets under transaction both the parties agree that the matter contained in the assets as a part
or, as a whole does not violate any applicable law. AucJunction is only an e-commerce service
provider and is not and cannot be a party to or control in any manner any transactions between
the Seller/Buyer and the Bidder.<br><br>
<span>6.3 </span>The Seller/Bidder agrees to limit the liability of Shopemet Networks Pvt. Ltd. to them for any,
and all claims, losses, costs, damages of any nature whatsoever or claims expenses from any
cause or causes, including attorneys&#39; fees and costs, so that the total aggregate liability of

Shopemet Networks Pvt. Ltd to the Seller/Bidder shall not exceed its total fee receivable from
the Seller/Bidder. It is intended that this limitation apply to any, and all liability or cause of action
however alleged or arising, unless otherwise prohibited by law.<br><br>
<span>6.4 </span> Terms &amp; conditions as laid down by the auctioneer shall apply in addition.<br><br>
<span>6.5 </span> The logos displayed above are the registered trademarks of companies who have used the
services provided by AucJunction. The logos are displayed in good faith to imply that
AucJunction has at some point of time provide services to these companies and no
representation or warranty, express or implied, is made by AucJunction.<br><br>

<span class="heading">7.0 GOVERNING LAW AND JURISDICTION </span><br><br>
<span>7.1 </span> This agreement is governed and construed in accordance with the laws of the Union of
India. Users hereby irrevocably consent to the exclusive jurisdiction and venue of courts in
Bangalore, Karnataka, India in all disputes arising out of or relating to the use of the services
and the website.<br><br>
<span>7.2 </span> Users agree to indemnify and hold AucJunction and its officials and employees harmless
from any claim, demand or damage asserted by any third party due to and arising out of use of
services and the website.<br><br>

<span class="heading">GST</span> <br><br>
Bidders participating in AucJunction Auctions should verify with the selling companies about the
tax structure and ascertain themselves of the tax rates and other statutes in place. Any disputes
shall be clarified by the Bidders directly with the selling clients and AucJunction is not
responsible for any form of misunderstanding or dispute on the applicable taxes. AucJunction is
only an E-Commerce Service Provider and has minimal knowledge arising out of any changes
in applicable tax rates that are promulgated by the Government from time to time.
						
</p>												
<br><br>


 <table style="width:100%">
  <tr>
    <th style="background-color:green;color:white;"><center>Special Terms & Conditions</center></th>
 

  </tr>

   <tr>
    <td style="color:Blue"><?php echo $sqldata2[0]->sterms_text; ?>
</td>
   
  </tr>
  </table >
			
<!--
</body>
</html>-->
