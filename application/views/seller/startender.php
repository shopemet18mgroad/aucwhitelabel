<?php 
	//include('./header.php');
	//print_r($scomp); die;
?>
<link href="<?php echo base_url()."web_files/";?>css/mediaform.css" rel="stylesheet" type="text/css">
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Start Reverse Tender</h1>
           
          </div>

          <!-- Content Row -->
          <div class="row w-100">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-md-10 offset-sm-1 p-2">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
               <table class="table table-striped text-left table-sm p-4" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-success text-white">
      <tr>
		<th colspan="10"><center>Start Tender</center></th>  
      </tr>
    </thead>
    <tbody>
	  
	  <tr>
	  <form action="<?php echo base_url();?>Seller_startauction" method="POST" id="upload-form" enctype="multipart/form-data">
		  
		  <td>Category</td>
		  <td><select class="form-control w-100" id="scategory" name="scategory">
				<option value="Select" selected>Select</option>
				<option value="Ferrous">Ferrous</option>
				<option value="Non Ferrous">Non Ferrous</option>
				<option value="Minor Metals" >Minor Metals</option>
				<option value="Plain paper">Plain paper</option>
				<option value="Granules">Granules</option>
				<option value="General">General</option>
				<option value="PCB">PCB</option>
				<option value="Dismantling">Dismantling</option>
				<option value="E Waste">E Waste</option>
				<option value="Machineries">Machineries</option>
				<option value="Properties">Properties</option>
				<option value="Miscellaneous">Miscellaneous</option>
				<option value="Timbers">Timbers</option>
				<option value="Transformers">Transformers</option>
				<option value="Hazardous">Hazardous</option>
				<option value="Plastic">Plastic</option>
				<option value="Oil">Oil</option>
				<option value="Coolant">Coolant</option>
				<option value="All Construction Materials">All Construction Materials</option>
				</select>
			</td>
	  </tr>
	  
	  	  <tr>
		  <td>Tenderer</td>
		  <td><input class="form-control w-100"  type="text" id="sname" name="sname"
		   value="<?php echo  $scomp[0]->sname;?>" readonly>
		  
		  </td>
	  </tr>
	  
	  <tr>
		  <td>Reference Id</td>
		  <td><input class="form-control w-100"  type="text" id="srefid" name="srefid" placeholder="Search" onkeyup="auction_id()" aria-label="Search">
		  </td>
	  </tr>
      
	  <tr>
		  <td>Tender Id</td>
		  <td><input class="form-control w-100"  type="text" id="sauctionid" name="sauctionid" placeholder="Auction ID" aria-label="Search" readonly></td>

	  </tr>
	  <tr>
		  <td>Tenderer Company Name</td>
		 <td><input class="form-control w-100"  type="text" id="scompanyname" name="scompanyname" value="<?php echo  $scomp[0]->scomapnyname;?>" readonly>
		</td>
	  </tr>
	  
	  <!-- <tr>											
		  <td>Venue Of Inspection</td>
		  <td><textarea class="form-control w-100" type="text" id="svinspection" name="svinspection"></textarea></td>
	  </tr> -->
	  <!-- <tr>  												
		<td>Inspection Date & Time</td>
		<td>
From: 	
    <input class="form-control w-100" type="datetime-local" id="sfrominpectdate_time" name="sfrominpectdate_time">
 To:
    <input class="form-control w-100" type="datetime-local"  id="stoinpectdate_time" name="stoinpectdate_time">
</td>
	</tr> -->
	  <tr>
		<td>Tender Description</td>
		<td><textarea class="form-control w-100" type="text" id="semddetail" name="semddetail"></textarea></td>
	</tr>
	  
	<!-- <tr>
		<td>Last Date Of Submiting EMD</td>
		<td><input class="form-control w-100" type="date" id="slastdateemdsub" name="slastdateemdsub"></td>
	</tr> -->
	  
	  <tr>
		<td>Online Tender Start And End Date</td>
		<td><input class="form-control w-100" id="saucstartdate_time" name="saucstartdate_time" type="datetime-local" ><br>
		<input class="form-control w-100" id="saucclosedate_time" name="saucclosedate_time" type="datetime-local" >
		</td>
	</tr>
	
	
  
  <tr>
		<td>Upload Terms & Conditions</td>
		<td>
			<div class="form-check form-check-inline">
				<input type="checkbox" class="form-check-input" id="firstCheckBox" onclick="myFunction1()" name="sterms_condiupload1[]">
				<label class="form-check-label" for="firstCheckBox">Yes</label>
			</div>
			<div class="form-check form-check-inline">
				<input type="checkbox" class="form-check-input" id="secondCheckBox" onclick="myFunction2()" name="sterms_condiupload1[]">
				<label class="form-check-label" for="secondCheckBox" >No</label>
			</div>
			<div class="form-group" id="start-auction-choose-file"  style="display:none">
				<input type="file" class="form-control-file" id="sterms_condiupload" name="sterms_condiupload[]">
			</div>
			<div class="form-group" id="start-auction-textarea" style="display:none">
				<textarea class="form-control w-100" type="text" id="sterms_text" name="sterms_text"></textarea>
			</div>
			</td>
  </tr>
  <tr>
	<td>OPT-IN For External Tenderee</td>
	<td>
	<button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#myModalExBuy">
    Terms & Conditions
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModalExBuy">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><center><b>Terms and Conditions To Opt For EXTERNAL BUYERS</b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <p><strong>The auctions and related services are provided by Shopemet Networks Pvt ltd.(hereinafter referred to as "AucJunction") on the website.</strong><br>

AucJunction is an e-commerce service provider mandated by the seller/buyer to facilitate virtual auctions by the seller/buyer. The website is an online auction platform, a virtual marketplace/venue for sellers/buyers to conduct sale/purchase of assets, and for bidders to make/place bids/offers on such assets. AucJunction is considered as third party not particularly interested in the item/s being sold/bought on behalf of the seller/buyer.<br><br>


<strong>DEFINITIONS</strong><br>

<strong>7.1</strong> This agreement is governed and construed in accordance with the laws of the Union of India. Users hereby irrevocably consent to the exclusive jurisdiction and venue of courts in Bangalore, Karnataka, India in all disputes arising out of or relating to the use of the services and the website.<br>

Bidders participating in AucJunction Auctions should verify with the selling companies about the tax structure and ascertain themselves of the tax rates and other statutes in place. Any disputes shall be clarified by the Bidders directly with the selling clients and AucJunction is not responsible for any form of misunderstanding or dispute on the applicable taxes. AucJunction is only an E-Commerce Service Provider and has minimal knowledge arising out of any changes in applicable tax rates that are promulgated by the Government from time to time.</p>
 </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  <br><br>
  <div class="form-check form-check-inline ">
			<input type="checkbox" class="form-check-input" id="sterms_condexbuyers" name="sterms_condexbuyers" required>
			<label class="form-check-label" for="exampleCheck1">I agree to the Terms and Conditions</label>
			</div></td>
  </tr>
 
  
    </tbody>
  </table>
  
  <center><input type="submit" name="submit" onclick="return validatestart()" class="btn btn-info" value="Create Tender" data-dismiss="modal"></center>
 	 </form>

			</div>
		
            </div>
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
  
  
  
  
  <!-----myscript-->



<?php 
	//include('./footer.php');
?>
</body>

</html>
