
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ACETLABS Ecommerce - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url()."admin_files/";?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()."admin_files/";?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include_once('side_bar.php');?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include_once('menu_bar.php');?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create Category</h1>
          </div>

          <!-- Content Row -->
         

          <!-- Content Row -->
		<div class="row">
        <div class="col-lg-12">
		  <!-- Message to echo out error -->
				<?php 
				if (isset($mess)) {
						if(!empty($mess && $err==1)){
						echo '<p style="color:red; font-weight:bold;">'.$mess.'</p>';		
					}else if(!empty($mess && $err==0)){
						echo '<p style="color:green; font-weight:bold;">'.$mess.'</p>';		
					}
				}
					
				?>
			 <!-- Message to echo out error -->	
		  </div>
          <div class="col-lg-12">
            <div class="p-5">
              
              <form class="user" action="../admin/store_categoery" method="POST">
                <div class="form-group row">
                  <div class="col-sm-2 mb-3 mb-sm-0">
                   Category Name:
                  </div>
                  <div class="col-sm-6">
				   <input type="text" class="form-control " id="cat_name" name="cat_name" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-2 mb-3 mb-sm-0">
                   SEO Title:
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control " id="seo_title" name="seo_title" required>
                  </div>
                </div>
				<div class="form-group row">
                  <div class="col-sm-2 mb-3 mb-sm-0">
                   SEO Description:
                  </div>
                  <div class="col-sm-6">
                   <textarea  class="md-textarea form-control" rows="3" name="seo_description" required></textarea>
                  </div>
                </div>
				<div class="form-group row">
                  <div class="col-sm-2 mb-3 mb-sm-0">
                   SEO Keywords:
                  </div>
                  <div class="col-sm-6">
                     <textarea  class="md-textarea form-control" rows="3" name="seo_keywords" required></textarea>
                  </div>
                </div>
				<div class="form-group row">
                  <div class="col-sm-2 mb-3 mb-sm-0">
                   Specification Box Name:
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
					  <select class="form-control" id="specboxname" name="specboxname">
						<option>Product Specification</option>
						<option>Product Details</option>
					  </select>
					</div>
                  </div>
                </div>
				<hr>
				<div class="form-group">
					   <button class="btn btn-primary" type="submit"><i class="fas fa-plus-circle"></i> Create Category</button>
					  
					  </form>
					  
					</div>
          </div>
        </div>
          

          <!-- Content Row -->
          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
        <?php include_once('footer_bar.php');?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="<?php echo base_url()."admin_files/";?>#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url()."admin_files/";?>login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url()."admin_files/";?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url()."admin_files/";?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url()."admin_files/";?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url()."admin_files/";?>js/sb-admin-2.min.js"></script>
   <script src="<?php echo base_url()."admin_files/";?>js/functions.js"></script>

  <!-- Page level plugins -->
  

</body>

</html>
