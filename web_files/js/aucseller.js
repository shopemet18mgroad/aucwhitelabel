$('.ltype').click(function() {
  $('.ltype').not(this).prop('checked', false);
});

function validate(){

	var sname = document.getElementById("sname").value;
	var scomapnyname = document.getElementById("scomapnyname").value;
	var scompanytype = document.getElementById("scompanytype").value;
	var scontactperson = document.getElementById("scontactperson").value;
	var scin = document.getElementById("scin").value;
	var sgst = document.getElementById("sgst").value;
	var spcb = document.getElementById("spcb").value;
	var semail = document.getElementById("semail").value;
	var sphone = document.getElementById("sphone").value;

	var spin = document.getElementById("spin").value;
	
	var sstate = document.getElementById("sstate").value;
	
	var scountry = document.getElementById("scountry").value;
	var sbankername = document.getElementById("sbankername").value;
	var saccountnumber = document.getElementById("saccountnumber").value;
	var sbranch = document.getElementById("sbranch").value;
	var sifsccode = document.getElementById("sifsccode").value;
	var suploadprofilepic = document.getElementById("suploadprofilepic").value;
	 
	//var saddress = document.getElementsByName("saddress");
	//var ssigneddocument = document.getElementsByName("ssigneddocument");
	var AnswerInput = document.getElementsByName("saddresscount");
	
if(sname == '' || scomapnyname == '' || scompanytype == '' || scontactperson == '' || scin == '' || sgst == '' || spcb == '' || semail == '' || sphone == '' || spin == '' || sstate == '' || scountry == '' || sbankername == '' || saccountnumber == '' || sbranch == '' || sifsccode == '' || suploadprofilepic == ''){
		swal("Alert!",  "Seller Name, Comapany Name, Company Type, Contact Person, CIN Number, GST, PCB Licence NO, Email, Phone No, Address, Pin, State,Country, Banker's Name, Account Number, Branch, IFSC Code, Upload Profile Pic cannot leave any feild blank!", "error");
		return false;
	}
 
console.log('AnswerInput');
		for (i=0; i<AnswerInput.length; i++)
			{
			 if (AnswerInput[i].value == "")
				{
			 	 alert('urtu*****');	
			
			 	 return false;
				}
			}
			
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