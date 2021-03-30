<!DOCTYPE html>
<html lang="en">
<head>
  <title>ENQUIRY FORM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  
  
  
  
  
  
  
  
  
  
</head>
<body>

<div class="container bg-info">
  <h2 style="color:#FF1493m; text-align:center"><u><b>ENQUIRY FORM</b></u></h2>
  <form action="<?php echo base_url();?>Enquiry_Form_add" class="form-horizontal" method="POST" enctype="multipart/form-data">
  
  
  
  
  
  
  
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Date:</label>
      <div class="col-sm-10">
        <input type="date" class="form-control " id="date" name="date" placeholder="Enter Date" >
		

		
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Time:</label>
      <div class="col-sm-10">
        
		
		
		<input type="time" class="form-control" id="time" name="time" placeholder="Enter Time" >
      </div>
    </div>
	
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Company Name*:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="companyname" name="companyname"  placeholder="Enter Company Name"  >
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Address *
:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="vaddress" placeholder="Address Line 1" name="vaddress" >
		<br>
		<input type="text" class="form-control" id="vcity" placeholder="City" name="vcity" >
      </div>
    </div>
	
	  <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="first" placeholder="First" name="first">
		<br>
		<input type="text" class="form-control" id="last" placeholder="Last" name="last">
      </div>
    </div>
	  
    
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Phone:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control form-control-user bphn" id="phone" placeholder="Enter Phone Number" name="phone">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Email:</label>
      <div class="col-sm-10">          
        <input type="email" class="form-control form-control-user enemail"  id="email" placeholder="Enter Email" name="email">
      </div>
    </div>
	<div class="form-group">
	
	
	
	
	
      <label class="control-label col-sm-2" for="pwd">Remarks:</label>
      <div class="col-sm-10">          
        <textarea type="text" class="form-control" rows="4" cols="50" id="remarks" name="remarks" placeholder="Enter Remarks" ></textarea>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Lead Generation:*</label>
      <div class="col-sm-10">          
        <select class="form-control col-sm-10" id="leadgeneration" name="leadgeneration" >
    <option>Yes</option>
    <option>No</option>
    <option>May be</option>
  </select>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="example">SPOC:</label>
      <div class="col-sm-10"> 
	  
	 
	  <select class="form-control" id="example" name="spoc">
	  
	  
	   <?php foreach($sqldata as $row){?>
	     
       <option></option>
	   <option value="<?php echo $row->spoc;?>"><?php echo $row->spoc;?></option>


	
  <?php }?>	

        



  </select>

 </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Executive location:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="location" name="location"  placeholder="Enter location" >
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit"  onclick="return validatebuyer()"   class="btn btn-danger">Submit</button>
      </div>
    </div>
  </form>
</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 
  
    <!-- Page level plugins -->
      <script src="<?php echo base_url()."web_files/";?>js/jquery.min.js"></script> 
   <!--<script src="./js/jquery-3.2.2.js"></script>-->	
  <script src="<?php echo base_url()."web_files/";?>js/popper.min.js"></script>
  <script src="<?php echo base_url()."web_files/";?>js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url()."web_files/";?>js/jquery.easy-ticker.js"></script> 
   <script src="<?php echo base_url()."web_files/";?>weblib/auclib.js" type="text/javascript" charset="utf-8"></script>
   <script src="<?php echo base_url()."web_files/";?>/weblib/homevalidate.js" type="text/javascript" charset="utf-8"></script>
   <!--data table-->
  <script src="<?php echo base_url()."web_files/";?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url()."web_files/";?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
 <script src="<?php echo base_url()."web_files/";?>js/demo/datatables-demo.js"></script>

</body>
</html>


<script type="text/javascript">    
$(document).ready(function(){     
        
$(".enemail").change(function () {      
var inputvalues = $(this).val();      
  var regex =/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;    
  if(!regex.test(inputvalues)){      
  $(".enemail").val("");    
  swal("Alert!","Invalid E-Mail no", "error");    
  return regex.test(inputvalues);    
  }    
});      
    
});    
</script>
	
	
	<script type="text/javascript">    
$(document).ready(function(){     
        
$(".bphn").change(function () {      
var inputvalues = $(this).val();      
  var regex =/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;    
  if(!regex.test(inputvalues)){      
  $(".bphn").val("");    
  swal("Alert!","Invalid Phone-Number no", "error");    
  return regex.test(inputvalues);    
  }    
});      
    
});    
</script>



 <script>
  
function validatebuyer(){

	
	var companyname = document.getElementById("companyname").value;
	var vaddress = document.getElementById("vaddress").value;
	var vcity = document.getElementById("vcity").value;
	var first = document.getElementById("first").value;
	var last = document.getElementById("last").value;
	var phone = document.getElementById("phone").value;
	var email = document.getElementById("email").value;
	var remarks = document.getElementById("remarks").value;

	var location = document.getElementById("location").value;
	
	

if(companyname == '' || vaddress == '' || vcity == '' || first == '' || last == '' || phone == '' || email == '' || remarks == '' || location == ''){
		swal("Alert!",  " Company Name, Name, Address, Remarks, Executive Location, cannot leave any field blank!", "error");
		return false;
	}
	else{
        $.ajax({
            type:'submit',
            data: {companyname:companyname,vaddress:vaddress,vcity:vcity,first:first,last:last,phone:phone,email:email,remarks:remarks,location:location},
           success:function(data){
                swal("Success", "Data Saved Successfully", "success");
            },
            error:function(xhr, thrownError, ajaxOptions){

            },
        });
    }
	
	

	
}
  </script>
 














































