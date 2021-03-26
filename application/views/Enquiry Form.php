<!DOCTYPE html>
<?php //print_r($search);die;?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="title" content=">Aucjunction | Junction For Every auction">
  <meta name="description" content="Junction For Every Auction">
  <meta name="keyword" content="Auction, metal scrapes, Ferrous, Non Ferrous and Minor Metals">
  <meta name="author" content="">
  <title>Aucjunction | Junction For Every auction</title>
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url()."web_files/";?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url()."web_files/";?>css/style.css" rel="stylesheet" type="text/css">
  <script src="<?php echo base_url()."web_files/";?>js/js.js"></script>

  <!-- Custom styles for this template-->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
  <link href="<?php echo base_url()."web_files/";?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="https://code.jquery.com/jquery-3.5.1.js" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" rel="stylesheet">
  <!--<link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet">-->
   <script src=" https://github.com/superRaytin/paginationjs"></script>
   <script src=" http://pagination.js.org"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
@media screen and (max-width: 600px) {
  .row {
    flex-direction: form-group;
  }
}
</script>
</head>
<body>

<div class="container">
<div class="col-sm-12 col-xs-11">
     
  <h2>ENQUIRY FORM</h2>
  <p>All the field visit details</p>
  <form  action="/action_page.php" class="col-sm-12 col-xs-11 p-4">
<div class="row">
  <div class="form-group">
      <label for="date" class="ml-3">Date</label>
      <input type="Date" class="form-control ml-3" id="date" placeholder="Enter date" name="date"></div><div class="col-sm-3">
	    <div class="form-group">
	  <label for="time" class="ml-3">Time</label>
      <input type="Time" class="form-control ml-3" id="time" placeholder="Enter time" name="time">
	  </div>
   </div>
  </div>
  
   <div class="form-group">
      <label for="Company Name">Company Name*</label>
      <input type="text" class="form-control" id="Company Name" placeholder="Enter Company Name" name="Company Name">
    </div>
	
	 <div class="form-group">
      <label for="Address">Address</label>
      <input type="text" class="form-control" id="Address" placeholder="Enter Address" name="Address">
	  <input type="text" class="form-control mt-2" id="city" placeholder="city" name="city">
    </div>
	
	<div class="row">
  <div class="form-group">
      <label for="Name" class="ml-3">Name</label>
      <input type="text" class="form-control ml-3" id="Name" placeholder="Enter Name" name="Name"></div>
	  <div class="col-sm-3 mr-3">
	    <div class="form-group">
		<label for="Name" class="ml-3"></label>
      <input type="text" class="form-control ml-3 mt-2" id="last" placeholder="Enter last" name="last">
	  </div>
   </div>
   </div>
 
	 <div class="form-group">
      <label for="Phone">Phone</label>
      <input type="text" class="form-control" id="Phone" placeholder="Enter Phone" name="Phone">
    </div>
	 <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
	 <div class="form-group">
      <label for="Remarks">Remarks</label>
      <input type="text" class="form-control" id="Remarks" placeholder="Enter Remarks" name="email">
    </div>
  
	
	<div class="form-group">
  <label for="Lead Generation">Lead Generation</label>
  <select class="form-control" id="Lead Generation">
    <option>Yes</option>
    <option>No</option>
    <option>May be</option>
  </select>
</div>

	<div class="form-group">
  <label for="Lead Generation">SPOC</label>
  <select class="form-control" id="Lead Generation">
	<option></option>
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
   
    <button type="submit" class="btn btn-danger">Submit</button>
	<p class="mt-2">Please do not submit passwords through Cognito Forms.</p>
  </form>
  

</div>
</div>
</body>
</html>
