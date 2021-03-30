<!DOCTYPE html>
<html lang="en">
<head>
  <title>ENQUIRY FORM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container bg-info">
  <h2>ENQUIRY FORM</h2>
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
        <input type="text" class="form-control" id="companyname" name="companyname"  placeholder="Enter Company Name" requried >
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Address *
:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="vaddress" placeholder="Address Line 1" name="vaddress" requried>
		<br>
		<input type="text" class="form-control" id="vcity" placeholder="City" name="vcity" requried>
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
        <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Email:</label>
      <div class="col-sm-10">          
        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
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
        <select class="form-control col-sm-10" id="leadgeneration" name="leadgeneration" requried>
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

    <option>SARAVANA</option>
    <option>NIRANJAN</option>
    <option>BABU</option>
	<option>KIRAN</option>
    <option>NAVEEN</option>
	<option>SITARAM</option>
	<option>JOLLY</option>
	<option>VINOD</option>
  </select>
 
 </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Executive location:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="location" name="location"  placeholder="Enter location" requried >
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-danger">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>


















































