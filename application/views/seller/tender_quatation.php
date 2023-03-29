<?php
   // include('./header');
//    echo "<pre>";
//  print_r($sqldatarec); 
//  echo "<pre>";
//  die;
	?>
	<link href="<?php echo base_url()."web_files/";?>css/tablestyle.css" rel="stylesheet" type="text/css">
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tender Winner Quatation</h1>
            
          </div>

          <!-- Content Row -->
         <div class="col-sm-12 col-md-12">
          <div class="card shadow mb-4">
            <div class="card-body">
			<div class="table-responsive">
			
		<!--	<form class="form-inline">
			  
			 <div class="form-group mr-4 offset-sm-4">
						<td colspan="5">
						<form action="/action_page.php">
							
								<input type="text" class="form-control" placeholder="Search.." name="search">
								<button class="form-control" type="submit"><i class="fa fa-search"></i></button>
					
						</form>
					</td>
				</div>
			</form>-->
			
         <table class="table table-striped text-center table-sm table-bordered mt-5"  id="dataTable" width="100%" cellspacing="0">		
    <thead>
	  <tr>
		<th colspan="13" class="bg-info text-white">Auctions</th>
		</tr>
     <tr class="bg-primary text-white">
		<th>Auction Id</th>
		<th>Lot No</th>
		<th>Lot Name</th>	
		<th>Tenderee Name</th>
		<th>Bid Value</th>
        <th>Status</th>
		<th>Download</th>
		
	
	</tr>
    </thead>
    <tbody>
   	<?php if(isset($sqldatarec)){ foreach($sqldatarec as $sqldata){?>
		<?php /*  print_r($datareciver[4]); die;  */ ?>
					<tr>												
						<td data-label="Auction Id"><?php echo $sqldata[0]->tenderid; ?></td>
						<td data-label="Lot No"><?php echo $sqldata[0]->tslotno; ?></td>
						<td data-label="Lot Name"><?php echo $sqldata[0]->batchname;?></td>
						
						<td data-label="Buyer Name"><?php echo $sqldata[0]->bidderusername;?></td>
						
						<td data-label="My Bid Value"><?php echo $sqldata[0]->bidvalue; ?></td>
						
						<td data-label="Status" style="<?php if($sqldata[0]->quotation == NULL){echo "color:red;";}else{ echo "color:green;";}?>"><b><?php if($sqldata[0]->quotation == NULL){echo "Quotation Not Recived";}else{ echo "Quotation Recived";}?></b></td>
						
						
						<td data-label="Action"><a href="<?php if($sqldata[0]->quotation == NULL){echo "#";}else{ echo base_url()."/pdf_gen/auc_no/".str_ireplace('/','-',$sqldata[0]->tenderid).'/'.($sqldata[0]->tslotno);}?>" target="_blank"><u>Click here</u></a></td>	
                       
					</tr>
	<?php  }} ?>
	
    </tbody>
  </table>

		  </div>
            </div>
			
			<!--Pagination -->

      
          </div>
		</div>
        </div>
	
          <!-- Content Row -->

          
        <!-- /.container-fluid -->

      
      <!-- End of Main Content -->

      <!-- Footer -->
     
      <!-- End of Footer -->

   
    <!-- End of Content Wrapper -->


  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
<?php
  //  include('./footer');
	?>

