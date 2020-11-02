/* 
function userid4(){
var email = document.getElementById("email").value;	
var pswd = document.getElementById("pswd").value;	
var x=document.myform.email.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  


if( $('input[name="ltype[]"]:checked').length == 0 )
		   
			{
				swal("Alert!",  "Please select at least one option Auctioner Or Bidder", "error");
				return false;
			}

if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  swal("Alert!","Please enter a valid User Name, It should contain @ and .  ", "error");  
  return false;
  }  			

if( pswd.length == 0 )
		   
			{
				swal("Alert!",  "Invalid Password", "error");
				return false;
			}			
} */
