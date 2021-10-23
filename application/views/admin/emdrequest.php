<?php 
	//include('./header.php');
?>
	
	<link href="<?php echo base_url()."web_files/";?>css/tablestyle.css" rel="stylesheet" type="text/css">
	
	
	
	
	
	
	
	
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
       <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">NP-EMD Request</h1>
            
          </div>

          <!-- Content Row -->
          <div class="row w-100">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-md-10 offset-sm-1">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
			   <form class="form-inline">
					<div class="form-group mr-4 offset-sm-4">
						<td colspan="5">
						<!--<form action="/action_page.php">
							
								<input type="text" class="form-control" placeholder="Search.." name="search">
								<button class="form-control" type="submit"><i class="fa fa-search"></i></button>
					
						</form>-->
					</td>
				</div>
			
		
			</form>
		
		<table class="table table-striped table-bordered table-sm text-center mt-5"  id="dataTable" width="100%" cellspacing="0">
				
					<thead class="bg-primary text-white">
					 <tr>
						<th class="bg-info" colspan="12" style="Text-align:center;">EMD</th>
					</tr>
					<tr>
						<th>Auction Id</th>
						<th>Lot No</th>
						<th>Buyer Name</th>
						<!--<th>Location</th>-->
						<th>Date/Time</th>
						
						<th>EMD Sent Time</th>
						<th>EMD Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					
				
					
					
				<?php foreach($sqldat as $sqldata){?>	
					
					<?php $proid = urldecode( str_ireplace('/','-',$sqldata->auctionid));
				?>

<td><b><?php echo $sqldata->auctionid;?></b></td>
				 <td><?php echo $sqldata->lotno; ?></td>
				 <td><?php echo $sqldata->bidderusername; ?></td>
				 <td><?php echo $sqldata->aucstartdate_time;?><br><?php echo $sqldata->aucclosedate_time;?></td>
				 <td><?php echo $sqldata->datatime;?></td>
			
				
				<td><?php  if($sqldata->emdrequest == 3 ) {echo 'Pending';}?></td>
			
				
				<td><button  type="submit" name="submit" id="<?php echo $sqldata->lotno.'|'.str_ireplace('/','-',$sqldata->auctionid).'|'.$sqldata->bidderusername;?>" onclick="buyer_set_deactive_emd(this.id)" class="btn btn-info btn-sm">Approve</button>
				
				
				<a style="margin:2px" class="btn btn-danger btn-sm text-white" href="<?php echo base_url()."Admin_emdrequest/setdeactive_buyer_emd1/".$sqldata->lotno."/".$proid."/". $sqldata->bidderusername;?>"><i class="fa fa-trash"></i></a>
				
		
				
				</tr>
				
					<?php }  
         ?> 							
						
					</tr>
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

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
<?php 
	//include('./footer.php');
?>
</body>

</html>
