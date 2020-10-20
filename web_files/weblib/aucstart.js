$('.ltype').click(function() {
  $('.ltype').not(this).prop('checked', false);
});

function validatestart(){
	var scategory = document.getElementById("scategory").value;
	var svinspection = document.getElementById("svinspection").value;
	var svinspection = document.getElementById("sonlineaucdate_time").value;
	var sterms_condiaccept = document.getElementById("sterms_condiaccept[]").value;
	var sterms_condiupload = document.getElementById("sterms_condiupload[]").value;
	
	
	
	
	if(scategory == '' || svinspection == '' || sonlineaucdate_time == '' ){
		swal("Alert!",  "Category, Seller, Venue Of Inspection, Online Auction Date cannot leave any field blank!", "error");
		return false;
	}
		
	
	
		if( $('input[name="sterms_condiaccept[]"]:checked').length == 0 )
		   
			{
				swal("Alert!",  "Aucjunction Terms & Conditions Should Be Selected", "error");
				return false;
			}
				
				
				
				if( $('input[name="sterms_condiupload[]"]:checked').length == 0 )
			{
				swal("Alert!",  "Upload Terms & Conditions ", "error");
				return false;
			}
	
	
	
}


function validatelot(){
	var slotname = document.getElementById("slotname").value;
	var scategory = document.getElementById("scategory").value;
	var sdescription = document.getElementById("sdescription").value;
	var slotlocation = document.getElementById("slotlocation").value;
	var sfrominpectdate_time = document.getElementById("sfrominpectdate_time").value;
	var stoinpectdate_time = document.getElementById("stoinpectdate_time").value;
	var semddetail = document.getElementById("semddetail").value;
	var emdlastdate = document.getElementById("emdlastdate").value;
	var slastdateemdsub = document.getElementById("slastdateemdsub").value;
	var sfrominpectdate_time = document.getElementById("sfrominpectdate_time").value;
	var sfrominpectdate_time = document.getElementById("sfrominpectdate_time").value;
	var sfrominpectdate_time = document.getElementById("sfrominpectdate_time").value;
	var sfrominpectdate_time = document.getElementById("sfrominpectdate_time").value;
	var sfrominpectdate_time = document.getElementById("sfrominpectdate_time").value;
	
	
	
	
	if(scategory == '' || svinspection == '' || sonlineaucdate_time == '' ){
		swal("Alert!",  "Category, Seller, Venue Of Inspection, Online Auction Date cannot leave any field blank!", "error");
		return false;
	}
		
	
	
		if( $('input[name="sliftingperiod[]"]:checked').length == 0 )
		   
			{
				swal("Alert!",  "Aucjunction Terms & Conditions Should Be Selected", "error");
				return false;
			}
				
		
	
}
