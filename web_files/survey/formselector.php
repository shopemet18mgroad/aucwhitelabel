<?php
	session_start();
	if (!isset($_SESSION["useraucj"])) {
		header('location: ./index.php');
	}
	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <style>
	.centered {
	 margin-top:20%;
`	}
	</style>
	
    <title>Aucjunction Survey Login</title>
</head>
<body class>
<div class="centered">
	<div class="container">
	 <div class="row">
		<div class="card text-center col-md-4 col-sm-12" >
		  <div class="card-body">
			<h4 class="card-title">Suppliers Survey</h4>
			<a href="./formcogsup.php" class="btn btn-primary">View Form</a>
		  </div>
		</div>
		<div class="card text-center col-md-4 col-sm-12" >
		  <div class="card-body">
			<h4 class="card-title">Industrial Survey</h4>
			<a href="./formcogind.php" class="btn btn-primary">View Form</a>
		  </div>
		</div>
		<div class="card text-center col-md-4 col-sm-12">
		  <div class="card-body">
			<h4 class="card-title">Bidder Survey</h4>
			<a href="./formcogbid.php" class="btn btn-primary">View Form</a>
		  </div>
		</div>
	</div>
   </div>
   </div>
    <script src="https://www.cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://www.maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>



