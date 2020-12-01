
function userid4(){
var exampleInputEmail = document.getElementById("exampleInputEmail").value;	
var exampleInputPassword = document.getElementById("exampleInputPassword").value;	
//var x=document.myform.exampleInputEmail.value;  
//var atposition=x.indexOf("@");  
// dotposition=x.lastIndexOf(".");  
if( $('input[name="ltype"]:checked').length == 0 )
		   
			{
				swal("Alert!",  "Please select at least one option Auctioner Or Bidder", "error");
				return false;
			}

if(exampleInputEmail == ''  || exampleInputPassword == '' ){
		swal("Alert!",  "Username and Password cannot be blank!", "error");
		return false;
	}
	


/* if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  swal("Alert!","Please enter a valid User Name, It should contain @ and .  ", "error");  
  return false;
  }   */			

/* if( pswd.length == 0 )
		   
			{
				swal("Alert!",  "Invalid Password", "error");
				return false;
			} */			
} 
