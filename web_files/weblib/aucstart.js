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
	var slastdateemdsub = document.getElementById("slastdateemdsub").value;
	var sprice = document.getElementById("sprice").value;
	var sstartbidprice = document.getElementById("sstartbidprice").value;
	var sqty = document.getElementById("sqty").value;
	var sunitmeasurment = document.getElementById("sunitmeasurment").value;
	var sbidbase = document.getElementById("sbidbase").value;
	var sgst = document.getElementById("sgst").value;
	var sothertax = document.getElementById("sothertax").value;
	var semdamount = document.getElementById("semdamount").value;
	var sliftingperiod2 = document.getElementById("sliftingperiod2").value;
	var sliftingperiod = document.getElementById("sliftingperiod").value;
	
	
	if(slotname == '' || scategory == '' || sdescription == '' || slotlocation == '' || sfrominpectdate_time == '' || stoinpectdate_time == '' || semddetail == '' || slastdateemdsub == '' || sprice == '' || sstartbidprice == '' || sqty == '' || sunitmeasurment == '' || sbidbase == '' || sgst == '' || sothertax == '' || semdamount == '' || sliftingperiod2 == ''|| sliftingperiod == '' ){
	
		swal("Alert!","lotname ,Category, lotlocation, description, frominpectdate&time ,toinpectdate_time, Emddetail,lastdateemdsub,price ,startbidprice, Quantity,Unitmeasurment  ,Bidbase ,gst,othertax,liftingperiod,emdamount,cannot leave any field blank!", "error");
		return false;
	}
		

	
		if( $('input[name="spcbcertificate[]"]:checked').length == 0 )
		   
			{
				swal("Alert!",  "PCB Certificate Should Be Selected", "error");
				return false;
			}
				
}
	

