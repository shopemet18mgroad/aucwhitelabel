

<!DOCTYPE html>

<head>
<style>



.middleboxtnc{
    height:auto;
	width: 700px;
	padding-right: 1px;
    background-color: #2e3192;
    margin-left: auto;
    margin-right: auto;
    top: 50%;
    bottom: 50%;
    margin-top: 5px;
	padding-bottom: 100px;
	margin-bottom: -10px;
	margin-top: 1px;

	}
	
.middleboxt{
    height:auto;
	width: 900px;
	padding-right: 10px;
    background-color: #F9F9F9;
    margin-left: auto;
    margin-right: auto;
    top: 50%;
    bottom: 50%;
    margin-top: 5px;
	padding-bottom: 100px;
	margin-bottom: -10px;
	margin-top: 1px;
	padding-top: 5px;
	}

.middle p{
	
	text-align: center;
	padding-bottom: 0px;
	}

.middle addr{
	text-align: center
	}

.blnkspc {
    background-color: #FFFFFF;
    width: 100%;
	margin-bottom: -50px;
	}

.bar{
	text-align: center;
	padding-top:10px;
	height: 50px;
	width:700px;
	background-color: #f38222;
	color: #ffffff;
	}
.bara1{
	text-align: center;
	padding-top:10px;
	height: 50px;
	width:700px;
	background-color: #2e3192;
	color: #ffffff;
	}
.shead{
	text-align: center;
	padding-top:8px;
	height: 75px;
	width:900px;
	background-color: #bdb6b6;
	color: #FFFFFF;
	
}

.termstxt2 {
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-size: 12px;
    background-color: #A49E9C;
    font-weight: bold;
    margin: 5px;
    line-height: normal;
    padding: 5px;
	}
	
.space{
	background-color: #ffffff;
	width: 700px;
	margin:  1px;
	overflow: hidden;
	}

.para{
text-align:left;
	padding-right: 30px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	overflow:none;
	}

.signature{
	display: inline-flex;
	font-size: 15Px;
	padding-right: 30px;
	margin: 2px;

	
}	

.sign{
		
	display: inline-block;
	font-size: 15Px;
	

	   padding-left:400px;
	   

}
.long-content{
	padding: 1px 1px;
	margin: 8px 0;
	background-color: #D3D3D3;
	border: none;
	border-bottom: 2px solid black;
	}



.content{
	content:right;
	}

.middle addr{
	text-align: center
	}
.shoplogo{
padding-left:400px;

}
.writing{
	
	marign-top:20;
	
	
}
.shopemetlogo {
padding-left:30px;
marign:90px;
opacity:0.2;
  position: absolute;
 
  z-index: -1;
	
}
.shopemetlogo1 {
padding-left:30px;
marign:90px;
opacity:0.2;
  position: absolute;
 
  z-index: -1;
	
}
.shopemetlogo2 {



 

	
}

.bara2{
	text-align: center;
	padding-top:10px;
	height: 60px;
	width:700px;
	background-color: #2e3192;
	color: #ffffff;
	}





</style>
	
</head>
<body>




<?php

$image =  base_url()."web_files/img/logo.png";
$type = pathinfo($image, PATHINFO_EXTENSION);
$data = file_get_contents($image);
$dataUri = 'data:image/' . $type . ';base64,' . base64_encode($data);


?>
	
<?php

$image1 =  base_url()."web_files/img/maku.png";
$type1 = pathinfo($image1, PATHINFO_EXTENSION);
$data1 = file_get_contents($image1);
$dataUri1 = 'data:image/' . $type . ';base64,' . base64_encode($data1);


?>
<div class="writing">

<b>	SHOPEMET NETWORKS PVT LTD</b><br>

<b>	CIN:</b>U74999KA2018PTC116853<br>
</div>
<div class="shoplogo">



<img src="<?php echo $dataUri;?>" width="50%" height="70">
<img src="<?php echo $dataUri1;?>" width="60%" height="60">



</div>

    <div class="bara1 ">            
           <h2 style="text-align:center"><b>AUCJUNCTION</b>
         
             
                 Partner Agreement - Buyer</h2>     
                
                
                
      </div>
	  <div class="bar w-80">
<p><strong>AGREEMENT FOR BUYER</strong></p>
 </div>
       



<!--<h3 style="text-align:center;">AUCJUNCTION<br>
Buyer Agreement</h3>-->
 



	

               
  

<P class="para">This Agreement made this&nbsp; <span><b><?php echo $dat[0]->bagreementdate; ?></b></span>&nbsp; day of
                        &nbsp;<span><b><?php echo $dat[0]->bagreementdate; ?></b></span> Between
                        M/S &nbsp; <span><b><?php echo $dat[0]-> bcompany;?></b></span><br>having its Registered office at
                        <span><b><?php echo $dat[0]-> baddress.", ". $dat[0]->bcity.", ". $dat[0]->bpin.".";?></b><span> herein called “ Partner
                                Buyer/Bidder” AND Aucjunction ( Brand/Subsidary of Shopemet Networks Private Limited)
                                having its Registered office at No 179, 2nd Floor, Mysore Road Cross, Bangalore 560002.

                                The Contract will remain valid from (Date) of Registration to 1 (One) Year of this
                                Agreement which could be extended for such further period on such terms and conditions
                                as mutually agreed upon by the parties
                    </p>
					  <p class="termstxt2">GENERAL TERMS AND CONDITIONS – E AUCTIONS - AUCJUNCTION</p>
                    <p class="para">
                        <b>1. Registration</b><br>
                        1.1 You agree to provide accurate, true and complete information to complete registration
                        process<br>
                        1.2 In case of Untrue, Forging and incomplete information, Aucjunction has all the rights to
                        suspend your account.<br>
                    </p>
                    <p class="para">
                        <b>2. Account Activation</b><br>
                        2.1 Account will be activated once all the required details and documents are received by
                        Aucjunction.<br>
                        2.2 User details with password is confidential. Please do not share with anyone. You are
                        responsible for all transactions under your account.<br>
                        2.3 Notify Aucjunction immediately in case of any unauthorised use. <br>
                        2.4 Aucjunction is not responsible for any damages or loss in case of non compliance with the
                        policy.<br>

                    </p>
                    <p class="para">
                        <b>3. Code of conduct</b><br>
                        3.1 User is not supposed to share, store, transmit or collect any information on the aucjunction
                        portal.<br>
                        3.2 Aucjunction owns the patent, trademark, copyrights and trade secrets. Duplicacy of any such
                        information is considered as illegal.<br>
                        3.3 Aucjunction does not pre-screen the content, But has the rights to move the content,
                        evaluate, refuse or delete if not adhering to the General T&C Policy of Aucjunction.<br>

                    </p>
                    <p class="para">
                        <b>4. Auctioned Goods</b><br>
                        4.1 All good sold are in “ as is where is” Basis, No complaint Basis condition.<br>
                        4.2 Goods are sold on specific assumption pertaining to Quality, Quantity, Measurement or
                        numbers. Aucjunction does not provide any assurance on such parameters.<br>
                        4.3 Proportionate value of the goods may differ during delivery based on the actual quantity, or
                        measurement. Quantity is measured in Metric Tons, KGS or Lot.<br>
                        4.4 Buyer must settle all the balance amount before loading the materials from the auctioning
                        seller site. Further delay than the date of removal of materials may attract penal charges or
                        ground rent subjected to the terms and conditions of the seller at e auction.<br>

                    </p>
					
					
					
					<?php

$image2 =  base_url()."web_files/img/maku.png";
$type2 = pathinfo($image2, PATHINFO_EXTENSION);
$data2 = file_get_contents($image2);
$dataUri2 = 'data:image/' . $type . ';base64,' . base64_encode($data2);


?>
	<div class="shopemetlogo">




<img src="<?php echo $dataUri2;?>" width="80%" height="150">



</div>
                    <p class="para">
                        <b>5. Content Upload</b><br>
                        5.1 Aucjunction is not responsible of the content posted by the Seller for the auction.<br>
                        5.2 Seller authorises Aucjunction to reproduce, Modify, Change, Alter, Distribute or Delete with
                        respect to the content, Photos, Graphics, Audio or Video posted on Auction Site.<br>

                    </p>
                    <p class="para">
                        <b>6. Termination</b><br>
                        6.1 Aucjunction has all the rights to terminate the agreement any time if the seller / buyer is
                        not adhered to the General/Seller/Buyer policy.<br>
                        6.2 Both the parties can discontinue the agreement with a prior notice of 15 days .<br>

                    </p>
                    <p class="para">
                        <b>7. Force Majeure</b><br>
                        7.1 Aucjunction will not be responsible for any failure or delay as per policy defined due to
                        unforeseen events which is not in control of the management.<br>


                    </p>
                    <p class="para">
					
					<p class="para bg-image">
                        <b>8. Integrity</b><br>
                            8.1 No Employee or anyone connected to Aucjunction will not demand any kind of favour and
                            Sellers/ Buyers are not allowed to entertain any of our employees to deviate the policy.<br>
                            8.2 Aucjunction will provide the same information of the auction to all the bidders.
                            Aucjunction will not share any confidential details to any Buyer to obtain an advantage in
                            the auction.<br>
                            8.3 If Aucjunction obtains any information on the conduct of its employees will be treated
                            as Criminal Offence and will initiate strict disciplinary action.<br>
                            8.4 The Buyer will not enter into an illegal agreement or understanding to restrict
                            competitiveness in the auction. <br>


                    </p>
					
				
                    <p class="para">
                        <b>9. Jurisdiction</b><br>
                        9.1 Disputes between seller & bidder if any shall be within the jurisdiction of BANGALORE courts
                        only <br>


                    </p>

                    <p class="para">
                        <b>10. Subscription Fee</b><br>
                        10.1 The buyer to access and Participate in the auction, should be a subscriber of
                        Aucjuction<br>
                        10.2 Subscription Fee is Rs 8850/-(Inclusive of taxes) Non- refundable with a validity of 1 year
                        from the date of Subscription. Buyer can participate in any no of auction and bid during the
                        validity period.<br>
                    </p>
                    <p class="termstxt2">BUYER/BIDDER TERMS AND CONDITIONS</p>
					
					
                    <p class="para">
				    <b>11. Bidding /Buying</b><br>
                        11.1 Bids on the Site are nothing but the conformation to Buy/purchase of Materials/Goods/Scrap
                        , At the end of an auction H1 (Heighest) bidder shall be accepted by the seller. Bids cannot be
                        cancelled/ withdrawn by the bidder if once places. The transactions will happen in Indian Rupees
                        only.<br><br>

                    
                        <b>12. E Auction Payment Procedure/Auction Floor</b><br>
                        12.1 Once the registration is completed with the registration fee, the partner will have an
                        access to auction floor, registered bidders will have user id and password. Only registered
                        bidder will have access to portal<br>
                        12.2 Live & Upcoming Auction with all related information will be listed and will be open for
                        all registered bidders.<br>
                        12.3 Auction details and unique ID will be allocated to each auction with all the details on a
                        hyperlink. Bidder can view the following details -<br>
                        12.3.1 Opening /Closing Date & Time of the auction<br>
                        12.3.2 Contact Name, Address Details with Inspection Date and Time<br>
                        12.3.3 Breif Description of Materials and Approximate quantity in KGS/ Lots/ MT/ Nos <br>

                    </p>
					<?php

$image3 =  base_url()."web_files/img/maku.png";
$type3 = pathinfo($image3, PATHINFO_EXTENSION);
$data3 = file_get_contents($image3);
$dataUri3 = 'data:image/' . $type . ';base64,' . base64_encode($data3);


?>
<div class="shopemetlogo1">




<img src="<?php echo $dataUri3;?>" width="80%" height="150">



</div>
                    <p class="para">
                        <b>13. AUTO/PROXY BIDDING</b><br>
                        13.1 Bidder will have an option of declaring his maximum value of bid and the competitors will
                        have no access to view the same and can also be enhanced by the bidder at any time before the
                        closing of the auction, in case of a tie in the highest bid offered by someone else with the
                        maximum value opted by a auto/ proxy bidder then the bid of the auto/proxy bidder will be
                        acknowledged as H1 bidder and a flash would appear to inform the bidder other than the
                        auto/proxy bidder that there is a tie and he may bid a higher amount.<br>
                        13.2 Auction time will automatically be extended by 5 Minutes for all auctions if bid continues
                        for example closing time is 4-30 PM. of any particular date and if any bidder bids at 4.27
                        PM.then the closing time will be automatically extended to 4-34 PM.<br>
                        13.3 Please note bid once given cannot be retracted.<br>
                        13.4 The Auction can be withdrawn anytime before the start date as well as during the auction
                        without quoting any reason by the seller or auctioneer<br><br>

                            <p class="para">
                        <b>14. Goods Conditions After Sales</b><br>
                        14.1 Note AucJunction will not take any complaint after the sale.<br>
                        14.2 Quantities shown/Made in the lot are approximate and AucJunction will not be held
                        responsible for any regards.<br>
                        14.3 Goods shall remain under the risk of the buyer/Bidder from the date of purchase/offer and
                        the seller shall have no liability whatsoever for the safe-custody. <br>
                        14.4 The Buyer has to remove the goods within the specified time/Date and the delivery to be
                        made during working hours on all working days upon no due from the buyer/Aucjunction,
                        Transportation/loading of goods should be arranged the buyer.<br>
                        14.5 If the original buyer wish to take delivery through his representative, he must authorise
                        the lifter by a letter of authority on<span class=""> his own risk,</span>The buyer will be held responsible for any
                        acts of irregularities & mis-conduct of the representative comes in to pick the stock.<br>
                        14.6 Buyer is not allowed to resale any item/part while the goods are still lying within the
                        premises<br>
                    </p>
                    <p class="para">
					<b>15. Goods Conditions After Sales</b><br>
                        15.1 All paper documentation for releasing materials will be made out in the name of the buyer
                        only, No interest will be paid on the amount deposited by the buyer condition mentioned herein
                        before<br>
                    </p>
                    <p class="para">
					<b>16. Goods Conditions After Sales</b><br>
                        16.1 Buyer shall be responsible for any damage that may be caused to the premises machineries/
                        equipments while taking away or removing of goods.<br>
                    </p>
					
					
		<div>	
		</div>
					
					
				<br>
				<br>
				<br>
	
	
	
	 <div class="signature">
                        <div>
                            For and On Behalf of <br>
                            M/S&nbsp;<span><b><?php echo $dat[0]->bcompany;?></b></span><br>
                            By its
                            &nbsp;<span><b><?php echo $dat[0]-> bdesignation;?>&nbsp;</b></span>Mr./Mrs./Miss.&nbsp;<span><b><?php echo $dat[0]->bcontactperson;?></b></span>
                            <br><br>
							<br>
							<br>
							<br>
							
                            Signature with Seal.
                        </div>


                        <div class="sign">
						
						 <div>
                            For and On Behalf of <br>
                            &nbsp;<span><b>Aucjunction ( Subsidary of Shopemet)</b></span><br>
                            By Its President
                            &nbsp;<span><b>Shri Charith Dev M&nbsp;</b></span>
                           </br><br>
							<?php

$image4 =  base_url()."web_files/img/Invoice3.png";
$type4 = pathinfo($image4, PATHINFO_EXTENSION);
$data4 = file_get_contents($image4);
$dataUri4 = 'data:image/' . $type . ';base64,' . base64_encode($data4);


?>





<img src="<?php echo $dataUri4;?>" width="50%" height="80" style="padding-left:10px">
<br>

                     
           Signature with Seal.                
</div>
                        </div>
                    </div>  
					
					
					
					
					
					 <div class="bara2 ">            
           <strong>Reg Office: No.23,3rd Floor,
Behind Asha sweets, Binnamangala
1st stage, Indiranagar <br>
Bangalore-560 002.<br>

E:info@shopemet.com
W:shopmet.com </strong>     
                
                
                
      </div>
	  
	  
	  


   

 

   


</body>
</html>









































