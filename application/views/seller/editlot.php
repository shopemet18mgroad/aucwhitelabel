<?php 
	//include('./header.php');
	
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Update Lot</h1>
           
          </div>

          <!-- Content Row -->
          <div class="row p-2">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
               <table class="table table-striped table-sm text-left p-4" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-info text-white">
      <tr>
		<th colspan="10"><center>Edit Lot</center></th>  
      </tr>
    </thead>
    <tbody>
	 <form action="<?php echo base_url();?>Seller_addlot_update" method="POST" enctype="multipart/form-data">
	<tr>
		  <td width="11%">Auction Id</td>
		  <td width="4%" style="text-color:blue;"> <input type="text" class="form-control w-50" id="sauctionid" name="sauctionid" value="<?php echo $sqldata[0]->sauctionid; ?>" readonly></td>
	  </tr>
	  <tr>
		  <td>Seller</td>
		  <td><input class="form-control w-50"  type="text" id="sname" name="sname" placeholder="Search" value="<?php echo $sqldata[0]->sname; ?>" aria-label="Search" readonly>
		</td>
	  </tr>
	  
	  <tr>
		  <td>Lot No.</td>
		  <td style="color:blue;"><input class="form-control w-50"  type="text" id="slotno" name="slotno" value="<?php echo $sqldata[0]->slotno; ?>"  aria-label="Search" readonly></td>
	  </tr>
      
	  <tr>
	   
		  <td>Lot Name</td>
		  <td><input class="form-control w-50" type="text" id="slotname" name="slotname" value="<?php echo $sqldata[0]->slotname; ?>" onkeyup="auction_id1()"></td>
	  </tr>
	  <tr>
		  <td width="11%">Category</td>

		  <td width="4%"><select class="form-control w-50" id="scategory" name="scategory" >

				<option value="<?php echo $sqldata[0]->scategory; ?>" selected><?php echo $sqldata[0]->scategory; ?></option>
				<option value="Ferrous">Ferrous</option>
				<option value="Non Ferrous">Non Ferrous</option>
				<option value="Minor Metals" >Minor Metals</option>
				<option value="Plain paper">Plain paper</option>
				<option value="Granules">Granules</option>
				<option value="General">General</option>
				<option value="PCB">PCB</option>
				<option value="All Construction Materials">All Construction Materials</option>
				</select>
			</td>
	  </tr>
	   <tr>
		  <td>Description</td>
		  <td><textarea class="form-control w-75" type="text" id="sdescription" name="sdescription" value="<?php echo $sqldata[0]->sdescription; ?>"><?php echo $sqldata[0]->sdescription; ?></textarea></td>
	  </tr>
	  <tr>  												
		<td>Location Of Lot</td>
		<td><select class="form-control w-50" id="slotlocation" name="slotlocation" value="<?php echo $sqldata[0]->slotlocation; ?>">
				
				<option value="<?php echo $sqldata[0]->slotlocation; ?>" selected><?php echo $sqldata[0]->slotlocation; ?></option>
				<option value="Mangalore">Mangalore</option>
				<option value="Bangalore" >Bangalore</option>
				<option value="Mysore">Mysore</option>
				<option value="Mumbai">Mumbai</option>
				<option value="Delhi">Delhi</option>
				<option value="Hydrabad">Hydrabad</option>
				</select></td>
	</tr>

	
	</tr>
		<td>Qty</td>
		<td><input class="form-control w-50" type="text" id="sqty" name="sqty" value="<?php echo $sqldata[0]->sqty; ?>"></td>
	</tr>
	
	<tr>
		<td>Unit Of Measurment</td>
		<td><select class="form-control w-50" id="sunitmeasurment" name="sunitmeasurment" value="<?php echo $sqldata[0]->sunitmeasurment; ?>">
				<option value="<?php echo $sqldata[0]->sunitmeasurment; ?>"><?php echo $sqldata[0]->sunitmeasurment; ?></option>
				<option value="KG">KG</option>
				<option value="Matric Tone">Matric Tone</option>
				<option value="Lot">Lot</option>
				<option value="Litters">Litters</option>
				<option value="Numbers">Numbers</option>
				<option value="Meters">Meters</option>
				</select></td>
	</tr>
	
	<tr>
		<td>Bid Base</td>
		<td><select class="form-control w-50" id="sbidbase" name="sbidbase" value="<?php echo $sqldata[0]->sbidbase; ?>">
				<option value="<?php echo $sqldata[0]->sunitmeasurment; ?>" selected><?php echo $sqldata[0]->sunitmeasurment; ?></option>
				<option value="KG">KG</option>
				<option value="Matric Tone">Matric Tone</option>
				<option value="Lot">Lot</option>
				<option value="Litters">Litters</option>
				<option value="Numbers">Numbers</option>
				<option value="Meters">Meters</option>
				</select></td>
	</tr>
	<tr>
	<td>GST</td>
	<td><input class="form-control w-50" type="text" id="sgst" name="sgst" value="<?php echo $sqldata[0]->sgst; ?>"></td>
    </tr>
	<tr>
		<td>HSN Code.</td>
		<td><input class="form-control w-50" type="text" id="shsncode" name="shsncode" value="<?php echo $sqldata[0]->shsncode; ?>"></td>
    </tr>
  
     <tr>
		<td>Other Tax</td>
		<td><input class="form-control w-50" type="text" id="sothertax" name="sothertax" value="<?php echo $sqldata[0]->sothertax; ?>"></td>
    </tr>
	<tr>
		<td>EMD Amount</td>
		<td><input class="form-control w-50" type="text" id="semdamount" name="semdamount" value="<?php echo $sqldata[0]->semdamount; ?>"></td>
    </tr>	
	<tr>

		<td>Minimum Increament</td>
		<td><input class="form-control w-50" type="text" id="sminincre" name="sminincre" value="<?php echo $sqldata[0]->sminincre; ?>"></td>
	</tr>
	
	<tr>

		<td>Expected Price</td>
		<td><input class="form-control w-50" type="text" id="sprice" name="sprice" value="<?php echo $sqldata[0]->sprice; ?>"></td>
	</tr>
	
	<tr>
		<td>Starting Bid Price</td>
		<td><input class="form-control w-50" type="text" id="sstartbidprice" name="sstartbidprice" value="<?php echo $sqldata[0]->sstartbidprice; ?>"></td>
	</tr>

	<tr>
		<td>Lifting Period</td>
		<td><input class="form-control w-75" type="datetime-local" id="sliftingperiod2" name="sliftingperiod2" value="<?php echo date('Y-m-d\TH:i', strtotime($sqldata[0]->sliftingperiod2)); ?>">
		<input class="form-control w-50 mt-2" type="text" id="sliftingperiod" name="sliftingperiod" placeholder="Exp.15 days" value="<?php echo $sqldata[0]->sliftingperiod; ?>"></td>
    </tr>
	<tr>
		<td>PCB Certificate</td>
		<td><div class="form-check form-check-inline">
			<input type="checkbox" class="form-check-input" id="spcbcertificate1[]" name="spcbcertificate" value="1" <?php
if($sqldata[0]->spcbcertificate){echo "checked";}else{echo "unchecked";}		?>>
			<label class="form-check-label" for="exampleCheck1">Yes</label>
			</div>
			<div class="form-check form-check-inline">
			<input type="checkbox" class="form-check-input" id="spcbcertificate2[]" name="spcbcertificate" value="0" <?php
if($sqldata[0]->spcbcertificate){echo "unchecked";}else{echo "checked";}		?>>
			<label class="form-check-label" for="exampleCheck1">No</label>
			</div></td>
    </tr>
  
    </tbody>
  </table>
  
  <center>
	
 <input type="submit"  name="submit" onclick="return validatelot()" class="btn btn-info text-white" value="Update Lot" data-dismiss="modal">
  </center>
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
	
<?php 
	//include('./footer.php');
?>

</body>

</html>
