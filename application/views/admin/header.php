<!DOCTYPE html>
<html lang="en">

<head>
 <!-- Custom styles for this template-->
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url()."web_files/";?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script src="https://www.jqueryscript.net/demo/DataTables-Jquery-Table-Plugin/media/css/jquery.dataTables.css"></script>
 
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()."web_files/";?>css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?php echo base_url()."web_files/";?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<script src="<?php echo base_url()."web_files/";?>js/js.js"></script>
	<style>
  @media screen and (max-width: 600px) {
 img {
  position: absolute;

}
}  
    
    
    
    
    
    
    

    </style>
   
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->



      <!-- Divider -->
			<li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url();?>admin_dashboard" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true" aria-controls="collapseProduct">
          <i class="fas fa-fw fa-user"></i>
          <span>Seller</span>
        </a>
        <div id="collapseProduct" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url();?>admin_dashboard">Seller Profile</i></a>
            <a class="collapse-item" href="<?php echo base_url();?>admin_sellereditprofile">Edit Profile</a>
			<a class="collapse-item" href="<?php echo base_url();?>Admin_sellereditbyref">Reference</a>
			 <a class="collapse-item" href="<?php echo base_url();?>admin_sellerapproval">Seller Approval</a>
          </div>
        </div>
      </li>
	  
	  	<li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url();?>admin_buyerreg" data-toggle="collapse" data-target="#buyer" aria-expanded="true" aria-controls="collapseProduct">
          <i class="fas fa-fw fa-user"></i>
          <span>Buyer</span>
        </a>
        <div id="buyer" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url();?>admin_buyerreg">Buyer Profile</a>
            <a class="collapse-item" href="<?php echo base_url();?>admin_buyereditprofile">Edit Profile</a>
			<a class="collapse-item" href="<?php echo base_url();?>Admin_buyereditbyref">Reference</a>
			<a class="collapse-item" href="<?php echo base_url();?>admin_buyerapproval">Buyer Approval</a>
          </div>
        </div>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>admin_startauction">
          <i class="fas fa-hand-point-up"></i>
          <span>Start Auction</span></a>
      </li>
	  
	    <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url();?>admin_liveauc" data-toggle="collapse" data-target="#auction" aria-expanded="true" aria-controls="collapseProduct">
          <i class="fas fa-fw fa-gavel"></i>
          <span>Auction</span>
        </a>
        <div id="auction" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url();?>admin_liveauc">Live Auction</a>
            <a class="collapse-item" href="<?php echo base_url();?>admin_forthcomingauc">Forthcoming Auction<br> Approval</a>
			 <a class="collapse-item" href="<?php echo base_url();?>admin_editforthcom">Edit Auction</a>
			 <a class="collapse-item" href="<?php echo base_url();?>Admin_editforthcom2">Edit Forthcoming Auction</a>
           </div>
        </div>
      </li>
	  
	   <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url();?>admin_emdprofile" data-toggle="collapse" data-target="#emd" aria-expanded="true" aria-controls="collapseProduct">
          <i class="fas fa-money-bill-alt"></i>
          <span>EMD</span>
        </a>
        <div id="emd" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url();?>admin_emdprofile">EMD Paid</a>
            <a class="collapse-item" href="<?php echo base_url();?>admin_emdrequest">NP-EMD Request</a>
			<a class="collapse-item" href="<?php echo base_url();?>admin_emdapproval">EMD Approval</a>
           </div>
        </div>
      </li>
	  
	   <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url();?>admin_closedauc.php" data-toggle="collapse" data-target="#report" aria-expanded="true" aria-controls="collapseProduct">
          <i class="fa fa-file"></i>
          <span>Report</span>
        </a>
        <div id="report" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url();?>admin_closedauc">Closed Auction</a>
            <a class="collapse-item" href="<?php echo base_url();?>admin_bidsummary">Bid Summary</a>
			<a class="collapse-item" href="<?php echo base_url();?>admin_salesreport">Sales Report</a>
            <a class="collapse-item" href="<?php echo base_url();?>admin_unsoldproduct">Unsold Products</a>
			<a class="collapse-item" href="<?php echo base_url();?>admin_bidwinner">Bid Winner</a>

			<a class="collapse-item" href="<?php echo base_url();?>Enquiry_Form_data">Enquiry Form</a>

            
           </div>
        </div>
      </li>
	  
	   <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url();?>admin_bestbuyer" data-toggle="collapse" data-target="#performance" aria-expanded="true" aria-controls="collapseProduct">
          <i class="fas fa-chart-bar"></i>
          <span>Performance</span>
        </a>
        <div id="performance" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="<?php echo base_url();?>admin_bestbuyer">Best Buyer</a>
            <!--<a class="collapse-item" href="nonperfbuyer.php">Non Performing Buyer</a>-->
			 <a class="collapse-item" href="<?php echo base_url();?>admin_bestseller">Best Seller</a>
            <!--<a class="collapse-item" href="nonperfseller.php">Non Performing Seller</a>-->
           </div>
        </div>
      </li>
   	
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-img rotate-n-20 ">
           <img src="<?php echo base_url()."web_files/";?>img/aucjunction.jpg" class="img-fluid" alt="" width="20%;">
        </div>
        
      </a>
          <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search 
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>-->

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500"></div>
                    <span class="font-weight-bold">No Alert</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500"></div>
                   No Alert
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500"></div>
               No Alert
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
         

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $sessi;?></span>
                <img class="img-profile rounded-circle" src="<?php echo base_url()."web_files/";?>img/manimg.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
             
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>