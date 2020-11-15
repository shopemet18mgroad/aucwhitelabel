$('input[id="myCheck"]').on('change', function() {
   $('input[id="idCheck"]').not(this).prop('checked', false);  
	
});
$('input[id="idCheck"]').on('change', function() {
   $('input[id="myCheck"]').not(this).prop('checked', false);	
	});

function myFunction() {
  var checkBox1 = document.getElementById("myCheck");
  var text1 = document.getElementById("text");
  var checkBox = document.getElementById("idCheck");
  var text = document.getElementById("text2");
 

  if (checkBox1.checked == true){
   text1.style.display = "block";
	
  } else{
    text1.style.display = "none"; 

 }


  if (checkBox.checked == true){
    text.style.display = "block";

  } else {
     text.style.display = "none";
	
 }
  
}

function validatestart(){
	 var cat = document.getElementById('scategory').value;
	 var scompanyname = document.getElementById("scompanyname").value;
	var svinspection = document.getElementById("svinspection").value;
	 var sfrominpectdate_time = document.getElementById(sfrominpectdate_time).value;
	 var stoinpectdate_time = document.getElementById(stoinpectdate_time).value;
	  var sstartbidprice = document.getElementById(sstartbidprice).value;
	   var slastdateemdsub = document.getElementById(slastdateemdsub).value;
	   var saucstartdate_time = document.getElementById(saucstartdate_time).value;
	   var saucclosedate_time = document.getElementById(saucclosedate_time).value;
	var sterms_text = document.getElementById("sterms_text").value;
 var fileInput =  document.getElementById('sterms_condiupload');
  var Yes =  document.getElementById('myCheck');
  
 	
	
	
	if(scompanyname == '' || svinspection == '' || sfrominpectdate_time == '' || stoinpectdate_time == '' || sstartbidprice == '' || slastdateemdsub == '' || saucstartdate_time == '' || saucclosedate_time == '' ){
		swal("Alert!",  "Category,Seller Company Name, Seller, Venue Of Inspection, Online Auction Date cannot leave any field blank!", "error");
		return false;
	}
	
	if(cat == 'Select'){
		 swal("Alert!", "Please Select Categoery First", "error");
		 return false;
	 }
	
		
	
	
			if( $('input[name="sterms_condiaccept"]:checked').length == 0 )
			{
				swal("Alert!",  "Aucjunction Terms & Conditions Should Be Selected", "error");
				return false;
			}
			 if(Yes.checked){
					 if (!document.getElementById("sterms_condiupload").value) {
				event.preventDefault();
				swal("Alert!","Please choose a file!", "error");
				return false; 			
				}else{
					var filePath = fileInput.value; 
          
            Allowing file type 
            var allowedExtensions =  /(\.doc|\.docx|\.png|\.pdf|\.jpg|\.xlsx|\.gif)$/i; 
              
            if (!allowedExtensions.exec(filePath)) { 
                swal("Alert!",'Invalid file type',"error"); 
                fileInput.value = ''; 
                return false; 
            }
				}
				
			 }else{
				  if (!document.getElementById("sterms_text").value) {
				event.preventDefault();
				swal("Alert!","Text Area Cannot Be Left Blank!", "error");
				return false; 			
				}
			 }
			 
			 
		 	

				
			 	if( $('input[name="sterms_condiupload1[]"]:checked').length == 0 )  
			{ 
				swal("Alert!",  "Please select one checkbox ", "error");
				return false;
			} 

				/* else if(sterms_text == ''){
		 swal("Alert!", "Please write", "error");
		 return false;
	 }
			else{
				return true;
			} */
				/* if (!document.getElementById("sterms_text").value) {
            event.preventDefault();
            swal("Alert!","Please writessss!", "error");
			return false; 			
        }  */
			
		 
	
            
			 		
			
	

	
	}
          
function validatestart_edit(){

	var svinspection = document.getElementById("svinspection").value;
	 var sonlineaucdate_time = document.getElementById("sonlineaucdate_time").value;
	var sterms_text = document.getElementById("sterms_text").value;
 var fileInput =  document.getElementById('sterms_condiupload');
  var Yes =  document.getElementById('myCheck');
  
 
	
	
	if(svinspection == '' || sonlineaucdate_time == '' ){
		swal("Alert!",  "Category, Seller, Venue Of Inspection, Online Auction Date cannot leave any field blank!", "error");
		return false;
	}
	
	
		
	
	
			if( $('input[name="sterms_condiaccept"]:checked').length == 0 )
			{
				swal("Alert!",  "Aucjunction Terms & Conditions Should Be Selected", "error");
				return false;
			}
			 if(Yes.checked){
					 if (!document.getElementById("sterms_condiupload").value) {
				event.preventDefault();
				swal("Alert!","Please choose a file!", "error");
				return false; 			
				}else{
					var filePath = fileInput.value; 
          
            // Allowing file type 
            var allowedExtensions =  /(\.doc|\.docx|\.png|\.pdf|\.jpg|\.xlsx|\.gif)$/i; 
              
            if (!allowedExtensions.exec(filePath)) { 
                swal("Alert!",'Invalid file type',"error"); 
                fileInput.value = ''; 
                return false; 
            }
				}
				
			 }else{
				  if (!document.getElementById("sterms_text").value) {
				event.preventDefault();
				swal("Alert!","Text Area Cannot Be Left Blank!", "error");
				return false; 			
				}
			 }
			 
			 
		 	

				
			 	if( $('input[name="sterms_condiupload1[]"]:checked').length == 0 )  
			{ 
				swal("Alert!",  "Please select one checkbox ", "error");
				return false;
			} 

				/* else if(sterms_text == ''){
		 swal("Alert!", "Please write", "error");
		 return false;
	 }
			else{
				return true;
			} */
				/* if (!document.getElementById("sterms_text").value) {
            event.preventDefault();
            swal("Alert!","Please writessss!", "error");
			return false; 			
        }  */
			
		 
	
            
			 		
			
	

	
	}		
			
	

$('input[id="spcbcertificate2[]"]').on('change', function() {
   $('input[id="spcbcertificate1[]"]').not(this).prop('checked', false);	
	
});
$('input[id="spcbcertificate1[]"]').on('change', function() {
   $('input[id="spcbcertificate2[]"]').not(this).prop('checked', false);	
	
});


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
	var shsncode = document.getElementById("shsncode").value;
	var sothertax = document.getElementById("sothertax").value;
	var semdamount = document.getElementById("semdamount").value;
	var sliftingperiod2 = document.getElementById("sliftingperiod2").value;
	var sliftingperiod = document.getElementById("sliftingperiod").value;
	
	
	if(slotname == '' || scategory == '' || sdescription == '' || slotlocation == '' || sfrominpectdate_time == '' || stoinpectdate_time == '' || semddetail == '' || slastdateemdsub == '' || sprice == '' || sstartbidprice == '' || sqty == '' || sunitmeasurment == '' || sbidbase == '' || sgst == '' || shsncode == ''|| sothertax == '' || semdamount == '' || sliftingperiod2 == ''|| sliftingperiod == '' ){
	
		swal("Alert!","lotname ,Category, lotlocation, description, frominpectdate&time ,toinpectdate_time, Emddetail,lastdateemdsub,price ,startbidprice, Quantity,Unitmeasurment  ,Bidbase ,gst,othertax,liftingperiod,emdamount,cannot leave any field blank!", "error");
		return false;
	}
		

	 
		if( $('input[name="spcbcertificate"]:checked').length == 0 )
		   
			{
				swal("Alert!",  "PCB Certificate Should Be Selected", "error");
				return false;
			} 
	}			

	

  function auction_id1(){
	 //var cat = document.getElementById('scategory').value;
	  var cat2 = document.getElementById('slotname').value;
	   var d = new Date();
	   var m = d.getHours();
	   var n = d.getMinutes();
	   var s = d.getSeconds();
	 
	 if(cat2.length<6){
		  document.getElementById('slotno').value = "A-"+m+-+s
		  ;
	 }
 } 

