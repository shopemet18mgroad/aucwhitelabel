$('.ltype').click(function() {
  $('.ltype').not(this).prop('checked', false);
});

function validateformb(){
	var ah = document.getElementById("heading").value;
	var a = document.getElementById("address").value;
	var b = document.getElementById("companywebsite").value;
	var c = document.getElementById("companytelephone").value;
	var d = document.getElementById("companymobile").value;
	var e = document.getElementById("companyemail").value;
	var f = document.getElementById("concernperson").value;
	var g = document.getElementById("concernpersondesignation").value;
	var h = document.getElementById("concernpersonnumber").value;
	var i = document.getElementById("concernpersonemail").value;	
	var j = document.getElementsByName('companystatus[]');
	var k = document.getElementsByName('tboptions[]');
	var pcba = document.getElementById("pcba").value;
	var pcbb = document.getElementById("pcbb").value;
	var pcbc = document.getElementById("pcbc").value;
	var partaucasopt = document.getElementsByName('partaucasopt[]');
	var partaucascon = document.getElementById("partaucascon").value;
	var wenlastauccon = document.getElementById("wenlastauccon").value;
	var wenlastaucopt = document.getElementsByName('wenlastaucopt[]');
	var quanofscrap = document.getElementById("quanofscrap").value;
	var metcatoflot = document.getElementById("metcatoflot").value;
	var bidlocpart = document.getElementById("bidlocpart").value;
	var wayallauc = document.getElementById("wayallauc").value;
	var influenced = document.getElementsByName('influenced[]');
	var decisionmaker = document.getElementsByName('decisionmaker[]');
	var decisionmakercon = document.getElementById("decisionmakercon").value;
	var valfeed = document.getElementById("valfeed").value;
	
	
	if(ah == '' || a == '' || c == '' || d == '' || e == '' || f == '' || g == '' || h == '' || i == ''){
		swal("Alert!",  "Name, Address, Company website, Company Telephone, Company Email, Concern Person, Concern Person Designation, Concern Personnumber ,Concern Personemail Cannot leave any feild blank!", "error");
		return false;
	}
	
	var jstatus = false;
	if(j.length != 0){
		for(var ka = 0; ka < j.length; ka++){
			if(j[ka].checked){
				jstatus = true;
			}
		}
	}
	
	if(!jstatus){
		swal("Alert!",  "Atleast One Option in Company Status Should Be Selected", "error");
		var jstatus = false;  
		return false;
	}
	var kstatus = false;
	if(k.length != 0){
		for(var ka = 0; ka < k.length; ka++){
			if(k[ka].checked){
				kstatus = true;
			}
		}
	}
	
	if(!kstatus){
		swal("Alert!",  "Atleast One Option in Type of Business Should Be Selected", "error");
		var kstatus = false;  
		return false;
	}
	if(pcba == '' || pcbb == '' || pcbc == ''){
		swal("Alert!",  "PCB Categoery Cannot Be left Blank!", "error");
		return false;
	}
	
	var lstatus = false;
	if(partaucasopt.length != 0){
		for(var ka = 0; ka < partaucasopt.length; ka++){
			if(partaucasopt[ka].checked){
				lstatus = true;
			}
		}
	}
	if(!lstatus){
		swal("Alert!",  "Atleast one option has to be selected If you were to participate in an online auction", "error");
		var lstatus = false;  
		return false;
	}
	if(partaucascon == ''){
		swal("Alert!",  "If you were to participate in an online auction Cannot Be left Blank!", "error");
		return false;
	}
	if(wenlastauccon == ''){
		swal("Alert!",  "When was the last time you participated in Auctions to Sell or Buy Cannot Be left Blank!", "error");
		return false;
	}
	var mstatus = false;
	if(wenlastaucopt.length != 0){
		for(var ka = 0; ka < wenlastaucopt.length; ka++){
			if(wenlastaucopt[ka].checked){
				mstatus = true;
			}
		}
	}
	if(!mstatus){
		swal("Alert!",  "Atleast One Option in last time you participated in Auctions Should Be Selected", "error");
		var mstatus = false;  
		return false;
	}
	
	
	if(quanofscrap == ''){
		swal("Alert!",  "What is the approximate quantity of Industrial scrap!", "error");
		return false;
	}
	if(metcatoflot == ''){
		swal("Alert!",  "Material category value of “ Lot” each time when you Dispose/Auction!", "error");
		return false;
	}
	if(bidlocpart == ''){
		swal("Alert!",  "Bidding locations you can participate cannot be left blank!", "error");
		return false;
	}
	if(wayallauc == ''){
		swal("Alert!",  "What all Auction websites you have visited cannot be left Blank!", "error");
		return false;
	}
	var nstatus = false;
	if(influenced.length != 0){
		for(var ka = 0; ka < influenced.length; ka++){
			if(influenced[ka].checked){
				nstatus = true;
			}
		}
	}
	if(!nstatus){
		swal("Alert!",  "Atleast One Option in When was the last time you participated in Auctions Should Be Selected", "error");
		var nstatus = false;  
		return false;
	}
	var ostatus = false;
	if(decisionmaker.length != 0){
		for(var ka = 0; ka < decisionmaker.length; ka++){
			if(decisionmaker[ka].checked){
				ostatus = true;
			}
		}
	}
	if(!ostatus){
		swal("Alert!",  "Atleast One Option in Desicion Maker Should Be Selected", "error");
		var ostatus = false;  
		return false;
	}
	if(decisionmakercon == ''){
		swal("Alert!",  "Desicion Maker Content Cannot Be left Blank!", "error");
		return false;
	}
	if(valfeed == ''){
		swal("Alert!",  "Valueable feed Cannot Be left Blank!", "error");
		return false;
	}
	
}

$(function(){
	$('.nw').easyTicker({
		direction: 'up',
		easing: 'swing'
	});

});