<?php 
	//include('./header.php');
	
?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src=" https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.7.1/tinymce.min.js" referrerpolicy="origin"></script>
<script>tinymce.init({
selector:'textarea',
  /* ... */
  plugins: "textcolor colorpicker",
  toolbar:
    "undo redo | styleselect | fontselect | fontsizeselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | forecolor backcolor",
font_formats:
    "Andale Mono=andale mono,times; Arial=arial,helvetica,sans-serif; Arial Black=arial black,avant garde; Book Antiqua=book antiqua,palatino; Comic Sans MS=comic sans ms,sans-serif; Courier New=courier new,courier; Calibri=calibri, Georgia=georgia,palatino; Helvetica=helvetica; Impact=impact,chicago; Symbol=symbol; Tahoma=tahoma,arial,helvetica,sans-serif; Terminal=terminal,monaco; Times New Roman=times new roman,times; Trebuchet MS=trebuchet ms,geneva; Verdana=verdana,geneva; Webdings=webdings; Wingdings=wingdings,zapf dingbats",


});</script> 

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Update Batch</h1>
           
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
	 <form action="<?php echo base_url();?>Seller_addbatch_update" method="POST" enctype="multipart/form-data">
	<tr>
		  <td width="11%">Tender Id</td>
		  <td width="4%" style="text-color:blue;"> <input type="text" class="form-control w-50" id="sauctionid" name="sauctionid" value="<?php echo $sqldata[0]->tenderid; ?>" readonly></td>
	  </tr>
	  <tr>
		  <td>Tenderer</td>
		  <td><input class="form-control w-50"  type="text" id="sname" name="sname" placeholder="Search" value="<?php echo $sqldata[0]->tenderer; ?>" aria-label="Search" readonly>
		</td>
	  </tr>
	  
	  <tr>
		  <td>Batch No.</td>
		  <td style="color:blue;"><input class="form-control w-50"  type="text" id="slotno" name="slotno" value="<?php echo $sqldata[0]->tslotno; ?>"  aria-label="Search" readonly></td>
	  </tr>
      
	  <tr>
	   
		  <td>Batch Name</td>
		  <td><input class="form-control w-50" type="text" id="slotname" name="slotname" value="<?php echo $sqldata[0]->batchname; ?>" onkeyup="auction_id1()"></td>
	  </tr>
	  <tr>
		  <td width="11%">Category</td>

		  <td width="4%"><select class="form-control w-50" id="scategory" name="scategory" >

				<option value="<?php echo $sqldata[0]->category; ?>" selected><?php echo $sqldata[0]->category; ?></option>
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
		  <td>Description</td>
		  <td><textarea class="form-control w-75" type="text" id="sdescription" name="sdescription" ><?php echo $sqldata[0]->batchdes; ?></textarea></td>
	  </tr>
	  <!-- <tr>  												
		<td>Location Of Lot</td>
		<td><input class="form-control w-50" type="text" id="slotlocation" name="slotlocation" value="<?php echo $sqldata[0]->slotlocation; ?>"></td>
	</tr> -->

	
	</tr>
		<td>Qty</td>
		<td><input class="form-control w-50" type="text" id="sqty" name="sqty" value="<?php echo $sqldata[0]->batchreqqty; ?>"></td>
	</tr>
	
	<tr>
		<td>Unit Of Measurement</td>
		<td><select class="form-control w-50" onchange="change();" id="sunitmeasurment" name="sunitmeasurment" value="<?php echo $sqldata[0]->batchunits; ?>">
				<option value="<?php echo $sqldata[0]->batchunits; ?>"><?php echo $sqldata[0]->batchunits; ?></option>
				<option value="KG">KG</option>
				<option value="Metric Ton">Metric Ton</option>
				<option value="Lot">Lot</option>
				<option value="Liter">Liter</option>
				<option value="NOS">NOS</option>
				<option value="Meter">Meter</option>
				</select></td>
	</tr>
	
	<!-- <tr>
		<td>Bid Base</td>
		<td><select class="form-control w-50" id="sbidbase" name="sbidbase" value="<?php echo $sqldata[0]->sbidbase; ?>">
				<option value="<?php echo $sqldata[0]->sunitmeasurment; ?>" selected><?php echo $sqldata[0]->sunitmeasurment; ?></option>
				<option value="KG">KG</option>
				<option value="Metric Ton">Metric Ton</option>
				<option value="Lot">Lot</option>
				<option value="Liter">Liter</option>
				<option value="NOS">NOS</option>
				<option value="Meter">Meter</option>
				</select></td>
	</tr>
	<tr>
	<td>GST</td>
	<td><input class="form-control w-50" type="text" id="sgst" name="sgst" value="<?php echo $sqldata[0]->sgst; ?>"></td>
    </tr> -->
	<tr>
		<td>HSN Code.</td>
		<td><input class="form-control w-50" type="text" id="shsncode" name="shsncode" value="<?php echo $sqldata[0]->batchhsncode; ?>"></td>
    </tr>
  
     <!-- <tr>
		<td>Other Tax</td>
		<td><input class="form-control w-50" type="text" id="sothertax" name="sothertax" value="<?php echo $sqldata[0]->sothertax; ?>"></td>
    </tr> -->
	<!-- <tr>
		<td>EMD Amount</td>
		<td><input class="form-control w-50" type="text" id="semdamount" name="semdamount" value="<?php echo $sqldata[0]->semdamount; ?>"></td>
    </tr>	 -->
	<!-- <tr>

		<td>Minimum Increament</td>
		<td><input class="form-control w-50" type="text" id="sminincre" name="sminincre" value="<?php echo $sqldata[0]->sminincre; ?>"></td>
	</tr> -->
	
	<!-- <tr>

		<td>Expected Price</td>
		<td><input class="form-control w-50" type="text" id="sprice" name="sprice" value="<?php echo $sqldata[0]->sprice; ?>"></td>
	</tr>
	
	<tr>
		<td>Starting Bid Price</td>
		<td><input class="form-control w-50" type="text" id="sstartbidprice" name="sstartbidprice" value="<?php echo $sqldata[0]->sstartbidprice; ?>"></td>
	</tr> -->
<!-- 
	<tr>
		<td>Lifting Period</td>
		<td><input class="form-control w-75" type="datetime-local" id="sliftingperiod2" name="sliftingperiod2" value="<?php echo date('Y-m-d\TH:i', strtotime($sqldata[0]->sliftingperiod2)); ?>">
		<input class="form-control w-50 mt-2" type="text" id="sliftingperiod" name="sliftingperiod" placeholder="Exp.15 days" value="<?php echo $sqldata[0]->sliftingperiod; ?>"></td>
    </tr>
	<tr> -->
		<!-- <td>PCB Certificate</td>
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
    </tr> -->
  
    </tbody>
  </table>
  
  <center>
	
 <input type="submit"  name="submit" onclick="return validatelot()" class="btn btn-info text-white" value="Update Lot" data-dismiss="modal"> </form>
 <a href="<?php echo base_url()."Seller_editforthcomtenders_2/editforthcom_2/".str_ireplace('/','-',$sqldata[0]->tenderid);?>"><button  class="btn btn-info">Cancel</button></a>
 <a href="<?php echo base_url()."Seller_addanotherbatch/index/".str_ireplace('/','-',$sqldata[0]->tenderid).'/'.$sqldata[0]->tenderer.'/'.$sqldata[0]->tslotno;?>"><button  class="btn btn-info text-white">Add Another Lot</button></a>
  </center>
 
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
	<script>
  function change() {
  if (document.getElementById('sunitmeasurment').value == 'KG')
    document.getElementById("sbidbase").value = 'KG';
  else if (document.getElementById('sunitmeasurment').value == 'Metric Ton')
    document.getElementById("sbidbase").value = 'Metric Ton';
  else if (document.getElementById('sunitmeasurment').value == 'Lot')
    document.getElementById("sbidbase").value = 'Lot';
  else if (document.getElementById('sunitmeasurment').value == 'Liter')
    document.getElementById("sbidbase").value = 'Liter';
  else if (document.getElementById('sunitmeasurment').value == 'NOS')
    document.getElementById("sbidbase").value = 'NOS';
  else if (document.getElementById('sunitmeasurment').value == 'Meter')
    document.getElementById("sbidbase").value = 'Meter';
};

  </script>
<?php 
	//include('./footer.php');
?>

</body>

</html>
