<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
.megha table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
 font-size:14px;
 
  width: 100%;
}

.megha td,th {
  border: 1px solid black;
  text-align: left;
  padding: 8px;
}
.shopemetlogo {
padding-left:30px;

marign-right:90px;
opacity:0.2;
  position: absolute;
 
  z-index: -1;
	
}

</style>


    <title>Bid Approved </title>
  </head>
  <body>
  
  <?php

$image =  base_url()."web_files/img/aucjunction.jpg";
$type = pathinfo($image, PATHINFO_EXTENSION);
$data = file_get_contents($image);
$dataUri = 'data:image/' . $type . ';base64,' . base64_encode($data);


?>
  <div class="shoplogo">
  <center><img src="<?php echo $dataUri;?>" width="25%" height="40"></center>
  
  </div>
  
  
   <center> <u><h2>Sale Intimation Letter</h2></u></center>
   
  
   <table class="container w-100">

  <tbody style = "font-size:16px";>
  
  
    <tr>
      
      <td colspan="4">Company Name:</td>
     <td colspan="4"><?php echo   $sqldata1[0]->bcompany;?></td>
     
    </tr>
  
    
     <tr>
      <td colspan="4">Contact Person:</td>
      <td colspan="4"><?php echo  $sqldata1[0]->bcontactperson;?></td>
     
    </tr>
    <tr>
      
      <td colspan="4" >Address:</td>
      <td colspan="4"><?php echo  $sqldata1[0]->baddress;?></td>
      
    </tr>
  
   
    <tr>
      
      <td colspan="4">Pin:</td>
      <td colspan="4"><?php echo  $sqldata1[0]->bpin;?></td>
      
    </tr>
    <tr>

      <td colspan="4">PAN No.:</td>
      <td colspan="6"><?php echo  $sqldata1[0]->bpan;?></td>
      
    </tr>
    <tr>
      
      <td colspan="4">GST No.</td>
      <td colspan="6"><?php echo  $sqldata1[0]->bgst;?></td>
      
    </tr>
    <tr>
      
      <td colspan="4">Mobile No.</td>
      <td colspan="6"><?php echo  $sqldata1[0]->bphone;?></td>
      
    </tr>
   
    
    
    
    
  </tbody>
</table>

 <br>
    
    
    
    Dear Buyer,  <br>
    
     <p><b> Auction Id : </b>&nbsp; <?php echo  $sqldata[0]->sauctionid;?><br>
   <p><b> lot No. :</b>&nbsp; <?php echo  $sqldata2[0]->slotno;?>
   <p>  <b>lot Name</b>:&nbsp; <?php echo $sqldata2[0]->slotname;?>
    
    
<p><b>period of Auction:&nbsp; </b><?php $aucopentime = $sqldata[0]->saucstartdate_time;
$tmp1 = explode('.',$aucopentime);
 $aucopentime = $tmp1[0];
 echo $aucopentime;





?> &nbsp;<b> To </b>&nbsp;<?php $aucclosetime = $sqldata[0]->saucclosedate_time; 
$tmp = explode('.',$aucclosetime);
 $aucclosetime = $tmp[0];
 echo $aucclosetime;

  ?>







        
        
        
        
        
 <p style ="font-size:14px">We are pleased to inform you that your bid/s against the following item/s of above mentioned Auction has have been approved  by the seller .<br>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 <table  class="megha table">
 </thead>
  <tr>
    <th>lot no </th>
    <th> Qty(approx.)</th> 
    
	<th> UOM </th>
	<th>YOUR BID</th>
	<th>MATERIAL VAlUE</th>
    <th>SD/Mat Val </th>
    
    
    
  </tr>
   </thead>
    <tbody>
 
  <tr>
    <td><?php echo  $sqldata2[0]->slotno;?></td>
    <td><?php echo $a= $sqldata2[0]->sqty;?></td>
    
		<td><?php echo $sqldata2[0]->sbidbase;?></td>
	<td><?php echo $b = $sqldata2[0]->cbidval;?></td>
   
    <td><?php echo $a*$b;?></td>
     <td><?php echo $b = $sqldata2[0]->semdamount;?></td>
    
  </tr>
  </tbody>
  
</table>
 
 
 
 
<p style ="font-size:14px; margin-top:0px">**Note : Amount mentioned in the table is excluding GST and Other taxes.  <br>
             
    
    
<p  style ="font-size:14px">Total Security Deposit /Mat Val : <b><?php echo $b = $sqldata2[0]->semdamount;?> </b>
 
 
 
<p  style ="font-size:14px">You are Requested to deposit an amount of INR &nbsp;<b><?php echo $b = $sqldata2[0]->semdamount;?> </b>
    as per the payment terms of special terms of Conditions of E-auction in favour of NEFT/RTGS within 7 days from the date of close  of auction(approved lot/s) or the period mentioned in Special Terms & conditions of e-auction whichever is earlier.<br>
    
    
    <p  style ="font-size:14px">After the Making the payment(s) against Security Deposit and Balance Payment (after issuance of Sale Order), you are requested to submit the details of such payment(s) whether to Aucjunction or Seller through the link  a payment information. The link may be accessed by logging to the e-auction website with your user id and password.<br>
    
    <p  style ="font-size:14px"> Please note that in case , you fail to make payment towards Security Deposit /Mat Val for any or all lots , your deposit for Entry fee/Registration is liable to be forfeited and /or any action deemed fit may be initiated against you.<br>
    
    
    
   <p  style ="font-size:14px"> From <br>
   
    
    <hr>
    
    
    
    Aucjunction<br>
    












   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

