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
	 <link href="<?php echo base_url()."web_files/";?>css/mediaform.css" rel="stylesheet" type="text/css">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Lot</h1>
           
          </div>

          <!-- Content Row -->
          <div class="row w-100 p-2">

            <!-- Earnings (Monthly) Card Example -->
			<div class="col-md-10 offset-sm-1 p-2">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
               <table class="table table-striped table-sm text-left p-4" id="dataTable" width="100%" cellspacing="0">
    <thead class="bg-info text-white">
      <tr>
		<th colspan="10"><center>Add Lot</center></th>  
      </tr>
    </thead>
    <tbody>
	<form name="myForm"  action="<?php echo base_url();?>Admin_addlot_info" method="POST" enctype="multipart/form-data">
	<tr>
		  <td width="2%">Auction Id</td>
		  <td width="4%" style="text-color:blue;"> <input type="text" class="form-control w-100" id="sauctionid" name="sauctionid" value="<?php echo $auctionid; ?>" readonly></td>
	  </tr>
	  <tr>
		  <td>Seller</td>
		  <td><input class="form-control w-100"  type="text" id="sname" name="sname" placeholder="Search" value="<?php echo $sname; ?>" aria-label="Search" readonly>
		</td>
	  </tr>
	  
	  <!-- <tr>
		  <td>Lot No.</td>
		  
		  <td style="color:blue;">
		  <input class="form-control float-left w-100"  type="number" id="slotno" name="slotno" aria-label="Search" >
		
		 </td>
	  </tr> -->
      
	  <tr>
	   
		  <td>Lot Name</td>
		  <td><input class="form-control w-100" type="text" id="slotname" name="slotname" onkeyup="validate_lotno()"></td>
	  </tr>
	  <tr>
		  <td width="11%">Category</td>
		  <td width="4%"><select class="form-control w-100" id="scategory" name="scategory">
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
		  <td>Description</td>
		  <td><textarea class="form-control w-100" type="text" id="sdescription" name="sdescription" ></textarea>
	  </tr>
	  <tr>  												
		<td>Location Of Lot</td>
		<td><input class="form-control w-100" type="text" id="slotlocation" name="slotlocation">
		</td>
	</tr>
	
	<tr>
		<td>Unit Of Measurement</td>
		<td><select class="form-control w-100"  onchange="change();" id="sunitmeasurment" name="sunitmeasurment">
				<option value="KG" selected>KG</option>
				<option value="Metric Ton">Metric Ton</option>
				<option value="Lot">Lot</option>
				<option value="Liter">Liter</option>
				<option value="NOS">NOS</option>
				<option value="Meter">Meter</option>
				</select></td>
	</tr>
	<tr>
		<td>Qty</td>
		<td><input class="form-control w-100" type="text" id="sqty" name="sqty"></td>
	</tr>
	
	<tr>
		<td>Bid Base</td>
		<td><select class="form-control w-100" id="sbidbase" name="sbidbase">
				<option value="KG" selected>KG</option>
				<option value="Metric Ton">Metric Ton</option>
				<option value="Lot">Lot</option>
				<option value="Liter">Liter</option>
				<option value="NOS">NOS</option>
				<option value="Meter">Meter</option>
				</select></td>
	</tr>
	<tr>
	<td>GST</td>

	<td><input class="form-control w-100" type="text" id="sgst" name="sgst" placeholder="Exp. Max 28%"></td>

	<tr>
		<td>HSN Code.</td>
		<td><input class="form-control w-100" type="text" id="shsncode" name="shsncode"></td>
    </tr>
  
     <tr>
		<td>Other Tax</td>
		<td><input class="form-control w-100" type="text" id="sothertax" name="sothertax"></td>
    </tr>
	<tr>
		<td>EMD Amount</td>
		<td><input class="form-control w-100" type="text" id="semdamount" name="semdamount"></td>
    </tr>	
	<tr>

		<td>Minimum Increament</td>
		<td><input class="form-control w-100" type="text" id="sminincre" name="sminincre"></td>
	</tr>
	<tr>

		<td>Expected Price</td>
		<td><input class="form-control w-100" type="text" id="sprice" name="sprice"></td>
	</tr>
	
	<tr>
		<td>Starting Bid Price</td>
		<td><input class="form-control w-100" type="text" id="sstartbidprice" name="sstartbidprice"></td>
	</tr>
	
	<tr>
		<td>Lifting Period</td>
		<td><input class="form-control w-100" type="datetime-local" id="sliftingperiod2" name="sliftingperiod2">
		<input class="form-control w-100 mt-2" type="text" id="sliftingperiod" name="sliftingperiod" placeholder="Exp.15 days"></td>
    </tr>
	<tr>
		<td>PCB Certificate</td>
		<td><div class="form-check form-check-inline">
			<input type="checkbox" class="form-check-input" id="spcbcertificate1[]" name="spcbcertificate" value="1">
			<label class="form-check-label" for="exampleCheck1">Yes</label>
			</div>
			<div class="form-check form-check-inline">
			<input type="checkbox" class="form-check-input" id="spcbcertificate2[]" name="spcbcertificate" value="0">
			<label class="form-check-label" for="exampleCheck1">No</label>
			</div></td>
    </tr>
  
    </tbody>
  </table>
  
  <center>
  
	<input type="submit" name="submit2" onclick="return validatelot()" class="btn btn-info text-white" value="Add Another Lot" data-dismiss="modal">
 
	<input type="submit"  name="submit" onclick="return validatelot()" class="btn btn-info text-white" value="Submit" data-dismiss="modal">
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
<script>
  /* function validate_lotno(){
	  var val = document.getElementById("slotno").value;
		if(val != ''){
			 $.get('<?php echo base_url() .'admin_addlot_info/validate_lotno/'; ?>'+val, function(data2){				 
				 if($.trim(data2) == "BYE"){
					swal("Alert!",  "Lot No. Already Exists", "error");
					document.getElementById("slotno").value = "";
					return false;
				}else{
					return true;
				}
			 });
			
		}else{
			swal("Alert!",  "Please Enter Lot Name!", "error");
			return false;
		}
  } */
  </script>	
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

