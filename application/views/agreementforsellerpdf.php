<!--body desgin-->

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
.bara2{
	text-align: center;
	padding-top:10px;
	height: 60px;
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
	display: inline-block;
	font-size: 15Px;
	padding-right: 30px;
	margin: 2px;
	margin-top: 10px;

	
}	

.sign{
		
	display: inline-block;
	font-size: 15Px;
   padding-left:160px;
	   

}
.long-content{
	padding: 1px 1px;
	margin: 10px 0;
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
.percent{
	 position:relative;
	
	
}
.sidebar-brand-img{

  display: flex;
  justify-content: center;

}
.sidebar{
padding-left:20px;
	
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

$image1 =  base_url()."web_files/img/Maku.png";
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
         
             
                 Partner Agreement - Seller</h2>     
                
                
                
      </div>
	  <div class="bar w-80">
<p><strong>AGREEMENT FOR SELLER</strong></p>
 </div>
       

<p class="termstxt2">1. WELCOME TO AUCJUNCTION !</p>
<P class= "para">Welcome to Aucjunction! Auctions related services will be provided on www.aucjunction.com
Aucjunction is most reputed private online auction portal operating in the specialized space of buying and selling surplus inventories. We will provide a comprehensive online marketplace for companies to buy and sell residual and superfluous inventory - from raw material, disposals, machinery and industrial by-products to non-performing and stressed assets. Our service offerings include tender management, Purchase and Sale of Industrial Scraps & Disposals.
</P>

<p class="para">

This Agreement made on day of&nbsp; <span><b><?php echo $dat[0]->sagreementdate; ?></b></span>&nbsp; Between 
M/S  &nbsp; <span><b><?php echo  $dat[0]->scomapnyname;?></b></span><br>having its Registered office at 

<span><b><?php $comp = unserialize ( $dat[0]->saddresscount);
 echo  $comp[0].", ".$dat[0]->scity.", ".$dat[0]->spin.".";?></b><span>



herein called ??? Partner Seller??? AND  Aucjunction  ( Brand/Subsidary of Shopemet Networks Private Limited) having its Registered office at No 179, 2nd Floor, Mysore Road Cross, Bangalore 560002.

The Contract will remain valid for 1 time sale/ 6 months/ 1 year of this Agreement which could be extended for such further period on such terms and conditions as mutually agreed upon by both the parties
</p>

<p class="termstxt2">GENERAL TERMS AND CONDITIONS ??? E AUCTIONS - AUCJUNCTION</p>
<p class="para">
<b>1.	Registration</b><br>
	1.1	You agree to provide accurate, true and complete information to complete registration process<br>
	1.2	 In case of Untrue, Forging and incomplete information, Aucjunction has all the rights to suspend 		your account.
</p>
<p class="para">
<b>2.	Account Activation</b><br>
	2.1	Account will be activated once all the required details and documents are received by Aucjunction.<br>
	2.2	User details with password is confidential. Please do not share with anyone. You are responsible for all transactions under your account.<br>
	2.3	Notify Aucjunction immediately in case of any unauthorised use. <br>
	2.4	Aucjunction is not responsible for any damages or loss in case of non compliance with the policy.<br>
</p>
<p class="para">
<b>3.	Code of conduct</b><br>
	3.1	User is not supposed to share, store, transmit or collect any information on the aucjunction portal.<br>
	3.2	Aucjunction owns the patent, trademark, copyrights and trade secrets. Duplicacy of any such information is  considered as illegal.<br>
	3.3	Aucjunction does not pre-screen the content, But has the rights to move the content, evaluate, refuse or delete if not adhering to the General Policy of Aucjunction.
</p>
 
<?php

$image2 =  base_url()."web_files/img/Maku.png";
$type2 = pathinfo($image2, PATHINFO_EXTENSION);
$data2 = file_get_contents($image2);
$dataUri2 = 'data:image/' . $type . ';base64,' . base64_encode($data2);


?>
	




	
	

		
<p class="para">
<b>4.	Auctioned Goods</b><br>
4.1	All good sold are in ??? as is where is??? ???No complaint basis??? condition.<br>
4.2	Goods are sold on specific assumption pertaining to Quality, Quantity, Measurement or numbers. 	Aucjunction does not provide any assurance on such parameters.<br>
4.3	Proportionate value of the goods may differ during delivery based on the actual quantity or 	measurement. Quantity is measured in Metric Tons, KGS or Lot.<br>
4.4	Buyer must settle all the balance amount before loading the materials from the auction site. Further 	delay than the date of removal of materials may attract penal charges or ground rent subjected to the terms and conditions of the seller at e auction.<br>
</p>
<div class="shopemetlogo">




<img src="<?php echo $dataUri2;?>" width="80%" height="150">



</div>
<p class="para">
<b>5.	Content Upload</b><br>
5.1	Aucjunction is not responsible of the content posted by the Seller for the auction.<br>
5.2	Seller authorises Aucjunction to reproduce, Modify, Change, Alter, Distribute or Delete with respect to the content, Photos, Graphics, Audio or Video posted on Auction Site.<br>
</p>

<p class="para">
<b>6.	Termination</b><br>
6.1	Aucjunction has all the rights to terminate the agreeement any time if the seller / buyer is not adhered to the General/Seller/Buyer policy.<br>
6.2	Both the parties can discontinue the agreement with a prior notice of 15 days .<br>
</p>
<p class="para">
<b>7.	Force Majeure</b><br>
7.1	Aucjunction will not be responsible for any failure or delay as per policy defined due to unforeseen events which is not in control of the management.<br>	
</p>
<p class="para">
<b>8.	Integrity</b><br>
8.1	No Employee or anyone connected  to Aucjunction will  not demand any kind of favour  and Sellers / Bidders 	are not allowed to entertain any of our employees to deviate the policy.<br>
8.2	Aucjunction will provide the same information of the auction to all the bidders. Aucjunction will not 	share any confidential details to any Buyer to obtain an advantage in the auction.<br>
8.3	If Aucjunction obtains any information on the conduct of its employees will be treated as Criminal 	Offence and will initiate strict disciplinary action.<br>
8.4	The Buyer will not enter into an illegal agreement or understanding to restrict competitiveness in the auction.<br>	
</p>
<p class="para">
<b>9.	Jurisdiction</b><br>
9.1	Disputes between seller & bidder if any shall be within the jurisdiction of BANGALORE courts only <br>
</p>
<p class ="para">
<b>10.	Service Charge</b> 
<form action="./AgreementSellercharg" method="POST">
<p class ="para">
10.1	The seller shall be entitled to a service charge of <?php echo $dat[0]->servperc; ?> % on the basis of the Delivery Order / sale invoice<br> issued through this auction over the Aucjunction portal.<br>
10.2	The service charge is exclusive of any other taxes and duties levied by the Statutory Authorities of different States and Central Government. Service Charge will be calculated on the amount realised excluding Excise Duty and Sales Tax<br>
</p>
<p class="termstxt2">SELLER TERMS AND CONDITIONS</p>
<p class="para">
11.	The seller to Provide the detailed List of materials with descriptions/ specifications/ locations/ quantity/ quality and the special remarks if any for selling / disposal of goods to Aucjunction, The seller should not alter or modify the quantity of the lot after the auction is declared.
</p>
<p class="para">
12.	The seller has to take the responsibility of raising invoices for Orders/Delivery Orders
</p>
<p class="para">
13.	The seller can view and monitor the auction with details of bid history during the continuation of auction.
</p>
<p class="para">
14.	The seller has to inform rate of tax for each lot in order for Aucjunction to collect the relevant documents and forward the same to Buyer/ Bidder for their action on the portal. If the seller misses any other taxes seller himself would be responsible to bear all other related statutory duties and taxes, Seller to update Aucjunction on item/Goods which has duties and also amount/rate of duties leviable.
</p>
<?php

$image3 =  base_url()."web_files/img/Maku.png";
$type3 = pathinfo($image3, PATHINFO_EXTENSION);
$data3 = file_get_contents($image3);
$dataUri3 = 'data:image/' . $type . ';base64,' . base64_encode($data3);


?>
<div class="shopemetlogo1">




<img src="<?php echo $dataUri3;?>" width="80%" height="150">



</div>
<p class="para">
15.	Aucjunction will provide standard terms and conditions for sale of materials to the seller. Seller is abide by the terms and conditions of Aucjunction.
</p>
<p class="para">
16.	Delivery/Despatch Statement customer-wise and item-wise along with the copies of Invoices should be submitted to Aucjunction after each auction in order for us to release EMD. ( If we collect)
</p>
<p class="para">
17.	Commission payable to Aucjunction can be deducted from the EMD in each auction and from material value recovered in each tender due and payable to the seller and the remaining balance amount will be forwarded to Seller with a signed invoice within 3 working days after the seller accept the auction online.
</p>
<p class="para">
18.	The order booked within the agreed contract time, Aucjucntion continue to operate as if this Agreement continues till the execution of those orders.
</p>

	
<p class="para">
19.	Since Aucjunction works/Acts as an agent, the seller has to reimburse the legal expenses incurred in connection with any litigation arising out of any Sale/Tender/Auction under this Agreement.
</p>
<p class="para">
20.	Aucjunction will seek permission of the seller for instituting case in any Court of Law in the matters arising out of any sale/auction under this Agreement.
</p>
<p class="para">
21.	Any amendment to this Agreement would be enforceable only if made in writing and duly signed by authorised representatives of both the parties.
</p>
<br>
<p class="para">
22.	Difference & Dispute arising between bidder/buyer & Aucjunction with respect to interpretation or implementation of policies shall be referred to a Sole Arbitrator to be appointed by CEO of Aucjunction India.
</p>
<br>
<br>
<br>
<br>
<br>
<br>


<div class="signature">

For and On Behalf of <br>                                                                                               
M/S&nbsp;<span><b> <?php echo $dat[0]->scomapnyname;?></b></span><br>	                                                                    
By its  &nbsp;<span><b><?php echo $dat[0]->sdesignation;?>&nbsp;</b></span>Mr./Mrs./Miss. &nbsp;<span><b><?php echo $dat[0]->scontactperson;?></b></span>  <br> <br>
<br>
<br>
<br>                   
Signature with Seal.

</div>

<div class="sign">

For and On Behalf  of<br>
Aucjunction ( Subsidary of Shopemet)<br>
By Its President Shri Charith Dev M<br><br><br>


<?php

$image4 =  base_url()."web_files/img/Invoice3.png";
$type4 = pathinfo($image4, PATHINFO_EXTENSION);
$data4 = file_get_contents($image4);
$dataUri4 = 'data:image/' . $type . ';base64,' . base64_encode($data4);


?>
<img src="<?php echo $dataUri4;?>" width="30%" height="60" style="padding-left:40px">

<br>
Signature and Seal.<br>








</div>



 <div class="bara2 ">            
           <strong>Reg Office: No.23,3rd Floor,
Behind Asha sweets, Binnamangala
1st stage, Indiranagar <br>
Bangalore-560 002.<br>

E:info@shopemet.com
W:shopmet.com </strong>     
                
                
                
      </div>




</table>


		
        
			 
			
			
	
	

	
	
	
	



</form>
	


   
             
             
         
             
             
             
             
             
                
   















</body>
</html>

        <!---  footer  -->
<script>
		//Get human input: 
document.querySelector('.percent').addEventListener('input', function(e){
  //Separate the percent sign from the number:
  let int = e.target.value.slice(0, e.target.value.length - 1);
  
  /* If there is no number (just the percent sign), rewrite
     it so it persists and move the cursor just before it.*/
  if (int.includes('%')) {
    e.target.value = '%';
  }
  /* If the whole has been written and we are starting the
     fraction rewrite to include the decimal point and percent 
     sign. The fraction is a sigle digit. Cursor is moved to 
     just ahead of this digit.*/
  else if(int.length >= 3 && int.length <= 4 && !int.includes('.')){
    e.target.value = int.slice(0,2) + '.' + int.slice(2,3) + '%';
    e.target.setSelectionRange(4, 4);
  }
  /* If the we have a double digit fraction we split up, format it
     and print that. Cursor is already in the right place.*/
  else if(int.length >= 5 & int.length <= 6){
    let whole = int.slice(0, 2);
    let fraction = int.slice(3, 5);
    e.target.value = whole + '.' + fraction + '%';
  }
  /* If we're still just writing the whole (first 2 digits), just 
     print that with the percent sign. Also if the element has just
     been clicked on we want the cursor before the percent sign.*/
  else {
    e.target.value = int + '%';
    e.target.setSelectionRange(e.target.value.length-1, e.target.value.length-1);
  }
  console.log(getInt(e.target.value));
});

/* For consuption by robots, the number is best written as an 
   interger, so we do that remembering it contains 2 or less
   decimal places*/
function getInt(val){
  //So as not to breakup a potential fraction
  let v = parseFloat(val);
  //If we only have the whole:
  if(v % 1 === 0){
    return v;  
  //If the numberis a fraction  
  }else{
    let n = v.toString().split('.').join('');
    return parseInt(n);
  }
}
</script>

   <?php 
	//include('./footer.php');
?>