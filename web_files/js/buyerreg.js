$('.ltype').click(function() {
  $('.ltype').not(this).prop('checked', false);
});

function validate(){

	var bcompany = document.getElementById("bcompany").value;
	var bcomptype = document.getElementById("bcomptype").value;
	var bbuyertype = document.getElementById("bbuyertype").value;
	var bbuyerlocation = document.getElementById("bbuyerlocation").value;
	var bcontactperson = document.getElementById("bcontactperson").value;
	var baddress = document.getElementById("baddress").value;
	var bcity = document.getElementById("bcity").value;
	var bpin = document.getElementById("bpin").value;
	var bstate = document.getElementById("bstate").value;

	var bcountry = document.getElementById("bcountry").value;
	
	var bemail = document.getElementById("bemail").value;
	
	var bphone = document.getElementById("bphone").value;
	var bpan = document.getElementById("bpan").value;
	var busername = document.getElementById("busername").value;
	var bpassword = document.getElementById("bpassword").value;
	var bconfirmpassword = document.getElementById("bconfirmpassword").value;
	var bgst = document.getElementById("bgst").value;
	var bcapcha = document.getElementById("bcapcha").value; 
	//var saddress = document.getElementsByName("saddress");
	//var ssigneddocument = document.getElementsByName("ssigneddocument");
	//var AnswerInput = document.getElementsByName("saddresscount");
	
if(bcompany == '' || bcomptype == '' || bbuyertype == '' || bbuyerlocation == '' || bcontactperson == '' || baddress == '' || bcity == '' || bpin == '' || bstate == '' || bcountry == '' || bemail == '' || bphone == '' || bpan == '' || busername == '' || bpassword == '' || bconfirmpassword == '' || bgst == ''|| bcapcha == '' ){
		swal("Alert!",  "Seller Name, Comapany Name, Company Type, Contact Person, CIN Number, GST, PCB Licence NO, Email, Phone No, Address, Pin, State,Country, Banker's Name, Account Number, Branch, IFSC Code, Upload Profile Pic cannot leave any feild blank!", "error");
		return false;
	}
 
/* console.log('AnswerInput');
		for (i=0; i<AnswerInput.length; i++)
			{
			 if (AnswerInput[i].value == "")
				{
			 	 alert('urtu*****');	
			
			 	 return false;
				}
			}
			
			$('button').click(function(){

				swal({
				  title: 'Enter email address',
				  input: 'email'
				}).then(function (email) {
				  swal({
					type: 'success',
					html: 'Your email: ' + email
				  })
				})
				  
				}); */
							
		/* 	for (i=0; i<suploadprofilepic.length; i++)
			{
			 if (suploadprofilepic[i].value == "")
				{
			 	 alert('urtu*****');	
			
			 	 return false;
				}
			}
			
			for (i=0; i<saddress.length; i++)
			{
			 if (saddress[i].value == "")
				{
			 	 alert('urtu*****');	
			
			 	 return false;
				}
			} */
}