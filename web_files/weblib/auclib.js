$('.ltype').click(function() {
  $('.ltype').not(this).prop('checked', false);
});

function validateformb(){
	var ah = document.getElementById("heading").value;
	var an = document.getElementById("company").value;
	var a = document.getElementById("address").value;
	var b = document.getElementById("companywebsite").value;
	var c = document.getElementById("companytelephone").value;
	var d = document.getElementById("companymobile").value;
	var e = document.getElementById("companyemail").value;
	var f = document.getElementById("concernperson").value;
	var g = document.getElementById("concernpersondesignation").value;
	var h = document.getElementById("concernpersonnumber").value;
	var i = document.getElementById("concernpersonemail").value;	
	var j = document.getElementsByName('companystatus');
	var k = document.getElementsByName('tboptions');
	var pcba = document.getElementById("pcba").value;
	var pcbb = document.getElementById("pcbb").value;
	var pcbc = document.getElementById("pcbc").value;
	var partaucasopt = document.getElementsByName('partaucasopt');
	var partaucascon = document.getElementById("partaucascon").value;
	var wenlastauccon = document.getElementById("wenlastauccon").value;
	var wenlastaucopt = document.getElementsByName('wenlastaucopt');
	var quanofscrap = document.getElementById("quanofscrap").value;
	var metcatoflot = document.getElementById("metcatoflot").value;
	var bidlocpart = document.getElementById("bidlocpart").value;
	var wayallauc = document.getElementById("wayallauc").value;
	var influenced = document.getElementsByName('influenced');
	var decisionmaker = document.getElementsByName('decisionmaker');
	var decisionmakercon = document.getElementById("decisionmakercon").value;
	var valfeed = document.getElementById("valfeed").value;
	
	
	if(ah == '' || an == '' || a == '' || c == '' || d == '' || e == '' || f == '' || g == '' || h == '' || i == ''){
		swal("Alert!",  "heading, company, address, company website, company telephone, company email, concern person, concern person designation, concern personnumber ,concern personemail cannot leave any field blank!", "error");
		return false;
	}
	
	
		if( $('input[name="companystatus[]"]:checked').length == 0 )
		   
			{
				swal("Alert!",  "Atleast One Option in Company Status Should Be Selected", "error");
				return false;
			}
				if( $('input[name="tboptions[]"]:checked').length == 0 )
			{
				swal("Alert!",  "Atleast One Option in Type of Business Should Be Selected", "error");
				return false;
			}
			/* else
				return true; */

	
	/* var jstatus = false;
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
	} */
	
	if(pcba == '' || pcbb == '' || pcbc == ''){
		swal("Alert!",  "PCB Categoery Cannot Be left Blank!", "error");
		return false;
	}
	
	if( $('input[name="partaucasopt[]"]:checked').length == 0 )
		   
			{
				swal("Alert!",  "Atleast one option has to be selected If you were to participate in an online auction what are the products would you likely to bid(Sell or Buy) on? Should Be Selected", "error");
				return false;
			}
	
	/* var lstatus = false;
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
	} */
	if(partaucascon == ''){
		swal("Alert!",  "Atleast one option has to be selected If you were to participate in an online auction what are the products would you likely to bid(Sell or Buy) on? others please specify Cannot Be left Blank!", "error");
		return false;
	}
	if(wenlastauccon == ''){
		swal("Alert!",  "When was the last time you participated in Auctions to Sell or Buy Cannot Be left Blank!", "error");
		return false;
	}
	
	if( $('input[name="wenlastaucopt[]"]:checked').length == 0 )
		   
			{
				swal("Alert!",  "Atleast One Option When was the last time you participated in Auctions to Sell or Buy Cannot Be left Blank Should Be Selected", "error");
				return false;
			}
	/* var mstatus = false;
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
	 */
	
	if(quanofscrap == ''){
		swal("Alert!",  "What is the approximate quantity of Industrial scrap! cannot be left blank", "error");
		return false;
	}
	if(metcatoflot == ''){
		swal("Alert!",  "Material category value of “ Lot” each time when you Dispose/Auction! cannot be left blank", "error");
		return false;
	}
	if(bidlocpart == ''){
		swal("Alert!",  "Bidding locations you can participate, only Bangalore, with in Karnataka, only in South states or Pan India. cannot be left blank!", "error");
		return false;
	}
	if(wayallauc == ''){
		swal("Alert!",  "What all Auction websites you have visited cannot be left Blank!", "error");
		return false;
	}
	
	if( $('input[name="influenced[]"]:checked').length == 0 )
		   
			{
				swal("Alert!",  "Atleast One Option in who influenced are you with following", "error");
				return false;
			}
	/* var nstatus = false;
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
	} */
	
	if( $('input[name="decisionmaker[]"]:checked').length == 0 )
		   
			{
				swal("Alert!",  "Atleast One Option in Desicion Maker  Should Be Selected", "error");
				return false;
			}
	
	/* var ostatus = false;
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
	} */
	if(decisionmakercon == ''){
		swal("Alert!",  "Desicion Maker Content If No please specify the contact person Cannot Be left Blank!", "error");
		return false;
	}
	if(valfeed == ''){
		swal("Alert!",  "Valueable feed back Cannot Be left Blank!", "error");
		return false;
	}
	
}


function validateformi(){
	var ah = document.getElementById("heading").value;
	var an = document.getElementById("company").value;
	var a = document.getElementById("address").value;
	var b = document.getElementById("companywebsite").value;
	var c = document.getElementById("companytelephone").value;
	var d = document.getElementById("companymobile").value;
	var e = document.getElementById("companyemail").value;
	var f = document.getElementById("concernperson").value;
	var g = document.getElementById("concernpersondesignation").value;
	var h = document.getElementById("concernpersonnumber").value;
	var i = document.getElementById("concernpersonemail").value;	
	var j = document.getElementsByName('companystatus');
	var k = document.getElementsByName('tboptions');
	var orgest = document.getElementById("orgest").value;
	var locinind = document.getElementById("locinind").value;
	var procraw = document.getElementById("procraw").value;
	var ruimport = document.getElementById("ruimport").value;
	var prodmatopt = document.getElementsByName('prodmatopt');
	var prodmatcon = document.getElementById("prodmatcon").value;
	var howoffenopt = document.getElementsByName('howoffenopt');
	var decfactoropt = document.getElementsByName('decfactoropt');
	var decfactorcon = document.getElementById("decfactorcon").value;
	var ratesup = document.getElementsByName('ratesup');
	var liketoreplace = document.getElementsByName('liketoreplace');
	var howoftenpart = document.getElementsByName('howoftenpart');
	var scrapbyprod = document.getElementsByName('scrapbyprod');
	var miscellaneous = document.getElementById("miscellaneous").value;
	var scrapqnt = document.getElementById("scrapqnt").value;
	var decmaker = document.getElementsByName('decmaker');
	var decmakercon = document.getElementById("decmakercon").value;
	var valfeed = document.getElementById("valfeed").value;
	
	
	if(ah == '' || an == '' || a == '' || c == '' || d == '' || e == '' || f == '' || g == '' || h == '' || i == ''){
		swal("Alert!",  "heading, company, address, company website, company telephone, company email, concern person, concern person designation, concern personnumber ,concern personemail cannot leave any field blank!", "error");
		return false;
	}
	
	if( $('input[name="tboptions[]"]:checked').length == 0 )
		   
			{
				swal("Alert!",  "Atleast One Option in Type of Business Should Be Selected", "error");
				return false;
			}
	/* var jstatus = false;
	if(j.length != 0){
		for(var ka = 0; ka < j.length; ka++){
			if(j[ka].checked){
				jstatus = true;
			}
		}
	}
	if(!jstatus){
		swal("Alert!",  "Atleast One Option in Type of Business Should Be Selected", "error");
		var jstatus = false;  
		return false;
	} */
	
	if( $('input[name="companystatus[]"]:checked').length == 0 )
		   
			{
				swal("Alert!",  "Atleast One Option in Ownership Status Should Be Selected", "error");
				return false;
			}
	
	
	/* var kstatus = false;
	if(k.length != 0){
		for(var ka = 0; ka < k.length; ka++){
			if(k[ka].checked){
				kstatus = true;
			}
		}
	}
	if(!kstatus){
		swal("Alert!",  "Atleast One Option in Ownership Status Should Be Selected", "error");
		var kstatus = false;  
		return false;
	}
	 */

	
	if(orgest == ''){
		swal("Alert!",  "When was your organisation established cannot be left blank" , "error");
		return false;
	}
	
	
	if(locinind == ''){
		swal("Alert!",  "How many location do you have across India cannot be left blank" , "error");
		return false;
	}
	
	if(procraw == ''){
		swal("Alert!",  "Please tell me how do you typically procure Raw-Materials and dispose industrial scrap (Bi-Product) wasteDisposals cannot be left blank" , "error");
		return false;
	}
	
	if(ruimport == ''){
		swal("Alert!",  "Are you importring any product category’s from outside India cannot be left blank" , "error");
		return false;
	}
	
	if( $('input[name="prodmatopt[]"]:checked').length == 0 )
		   
			{
				swal("Alert!",  "Atleast One Option in which of the following Products/Materials do you typically procure for your company/Firm depending on day to day operations Should Be Selected", "error");
				return false;
			}
	/* var pstatus = false;
	if(p.length != 0){
		for(var ka = 0; ka < p.length; ka++){
			if(p[ka].checked){
				pstatus = true;
			}
		}
	}
	
	if(!pstatus){
		swal("Alert!",  "Atleast One Option in which of the following Products/Materials do you typically procure for your company/Firm depending on day to day operations Should Be Selected", "error");
		var jstatus = false;  
		return false;
	} */
	
	
	if(prodmatcon == ''){
		swal("Alert!",  "Please tell me which of the following Products/Materials do you typically procure for your company/Firm depending on day to day operations others specifiy cannot be left blank", "error");
		return false;
	}
	
	if( $('input[name="howoffenopt[]"]:checked').length == 0 )
		   
			{
				swal("Alert!",  "Atleast One Option in How often do you sell or purchase these products Should Be Selected", "error");
				return false;
			}
		
	/* var rstatus = false;
	if(r.length != 0){
		for(var ka = 0; ka < r.length; ka++){
			if(r[ka].checked){
				rstatus = true;
			}
		}
	}
	
	if(!rstatus){
		swal("Alert!",  "Atleast One Option in How often do you sell or purchase these products Should Be Selected", "error");
		var rstatus = false;  
		return false;
	} */
	
	if( $('input[name="decfactoropt[]"]:checked').length == 0 )
		   
			{
				swal("Alert!",  "Atleast One Option in Which are these factors are important to you when you make the decision about about which Brands to Purchase Should Be Selected", "error");
			return false;
			}
	
	/* var sstatus = false;
	if(s.length != 0){
		for(var ka = 0; ka < s.length; ka++){
			if(s[ka].checked){
				sstatus = true;
			}
		}
	}
	
	if(!sstatus){
		swal("Alert!",  "Atleast One Option in Which are these factors are important to you when you make the decision about about which Brands to Purchase Should Be Selected", "error");
		var sstatus = false;  
		return false;
	} */
	
	
	if(decfactorcon == ''){
		swal("Alert!",  "Which are these factors are important to you when you make the decision about about which Brands to Purchase Others,pls specify cannot be left blank", "error");
		return false;
	}
	
	
	if( $('input[name="ratesup[]"]:checked').length == 0 )
		   
			{
				swal("Alert!",  "Overall how would you rate your Current supplier taking every things into consideration? on the scale of 1 to 10 were one is not at all satisfied and towards 10 is extremely satisfied", "error");
			return false;
			}		
	
	/* var ustatus = false;
	if(u.length != 0){
		for(var ka = 0; ka < u.length; ka++){
			if(u[ka].checked){
				ustatus = true;
			}
		}
	}
	if(!ustatus){
		swal("Alert!",  "Atleast One Option in Company Status Should Be Selected", "error");
		var ustatus = false;  
		return false;
	} */
	
	
	if( $('input[name="liketoreplace[]"]:checked').length == 0 )
		   
			{
				swal("Alert!",  "How likely are you to replace your current supplier? Should Be Selected", "error");
			return false;
			}	
	
	
	/* var vstatus = false;
	if(v.length != 0){
		for(var ka = 0; ka < v.length; ka++){
			if(v[ka].checked){
				vstatus = true;
			}
		}
	}
	if(!vstatus){
		swal("Alert!",  "Atleast One Option in Company Status Should Be Selected", "error");
		var vstatus = false;  
		return false;
	} */
	
	if( $('input[name="howoftenpart[]"]:checked').length == 0 )
		   
			{
				swal("Alert!",  "How often do you participate in auction process? Should Be Selected", "error");
			return false;
			}	
	
	
	
	/* var wstatus = false;
	if(w.length != 0){
		for(var ka = 0; ka < w.length; ka++){
			if(w[ka].checked){
				wstatus = true;
			}
		}
	}
	if(!wstatus){
		swal("Alert!",  "Atleast One Option in Company Status Should Be Selected", "error");
		var wstatus = false;  
		return false;
	 */
	
	
	if( $('input[name="scrapbyprod[]"]:checked').length == 0 )
		   
			{
			swal("Alert!",  "Please name the Industrial scrap Bi-Product waste disposal dealt by you? E-Auction/Traditional Should Be Selected", "error");
			return false;
			}
	
	/* var xstatus = false;
	if(x.length != 0){
		for(var ka = 0; ka < x.length; ka++){
			if(x[ka].checked){
				xstatus = true;
			}
		}
	}
	if(!xstatus){
		swal("Alert!",  "Atleast One Option in Company Status Should Be Selected", "error");
		var xstatus = false;  
		return false;
	}
	 */
	
	if(miscellaneous == ''){
		swal("Alert!",  "Please name the Industrial scrap Bi-Product waste disposal dealt by you? E-Auction/Traditional Miscellaneous cannot be left blank", "error");
		return false;
	}
	
	if(scrapqnt == ''){
		swal("Alert!",  "Approx Quantity of industrial scrap (Bi-Product) waste generated in a year cannot be left blank", "error");
		return false;
	}
	
	if( $('input[name="decmaker[]"]:checked').length == 0 )
		   
			{
			swal("Alert!",  "Are you primary user decision maker in your Company/Firm regarding disposal of above mentiioned Product category Should Be Selected", "error");
			return false;
			}
	
	
	/* var aastatus = false;
	if(aa.length != 0){
		for(var ka = 0; ka < aa.length; ka++){
			if(aa[ka].checked){
				aastatus = true;
			}
		}
	}
	if(!aastatus){
		swal("Alert!",  "Atleast One Option in Company Status Should Be Selected", "error");
		var aastatus = false;  
		return false;
	} */

	if(decmakercon == ''){
		swal("Alert!",  "Are you primary user decision maker in your Company/Firm regarding disposal of above mentiioned Product category If No please specify the contact person cannot be left blank" , "error");
		return false;
	}
	
	if(valfeed == ''){
			swal("Alert!",  "Valueable feed back Cannot Be left Blank!", "error");
		return false;
	}
	
	
	
}


function validateforms(){
	
	var ah = document.getElementById("heading").value;
	var an = document.getElementById("company").value;
	var a = document.getElementById("address").value;
	var b = document.getElementById("companywebsite").value;
	var c = document.getElementById("companytelephone").value;
	var d = document.getElementById("companymobile").value;
	var e = document.getElementById("companyemail").value;
	var f = document.getElementById("concernperson").value;
	var g = document.getElementById("concernpersondesignation").value;
	var h = document.getElementById("concernpersonnumber").value;
	var i = document.getElementById("concernpersonemail").value;	
	var j = document.getElementsByName('companystatus');
	var k = document.getElementsByName('tboptions');
	var princprod = document.getElementsByName('princprod');
	var princprodcon = document.getElementById("princprodcon").value;
	var ruimport = document.getElementById("ruimport").value;
	var stockcleare = document.getElementById("stockcleare").value;
	var transportexp = document.getElementById("transportexp").value;
	var deliverystat = document.getElementById("deliverystat").value;
	var ifanymoq = document.getElementById("ifanymoq").value;
	var docquantopt = document.getElementsByName('docquantopt');
	var systemtoreview = document.getElementsByName('systemtoreview');
	var paymentterms = document.getElementById("paymentterms").value;
	var annualturnover = document.getElementById("annualturnover").value;
	var valfeed = document.getElementById("valfeed").value;
	
	if(ah == '' || an == '' || a == '' || c == '' || d == '' || e == '' || f == '' || g == '' || h == '' || i == ''){
		swal("Alert!",  "heading, company, address, company website, company telephone, company email, concern person, concern person designation, concern personnumber ,concern personemail cannot leave any field blank!", "error");
		return false;
	}
	
	if( $('input[name="tboptions[]"]:checked').length == 0 )
		   
			{
			swal("Alert!",  "Atleast One Option in Type of Business Should Be Selected", "error");
			return false;
			}
	
	
	/* var jstatus = false;
	if(j.length != 0){
		for(var ka = 0; ka < j.length; ka++){
			if(j[ka].checked){
				jstatus = true;
			}
		}
	}
	if(!jstatus){
		swal("Alert!",  "Atleast One Option in Type of Business Should Be Selected", "error");
		var jstatus = false;  
		return false;
	} */
	
	if( $('input[name="companystatus[]"]:checked').length == 0 )
		   
			{
			swal("Alert!",  "Atleast One Option in Ownership Status Should Be Selected", "error");
			return false;
			}
	
/* 	var kstatus = false;
	if(k.length != 0){
		for(var ka = 0; ka < k.length; ka++){
			if(k[ka].checked){
				kstatus = true;
			}
		}
	}
	if(!kstatus){
		swal("Alert!",  "Atleast One Option in Ownership Status Should Be Selected", "error");
		var kstatus = false;  
		return false;
	} */
	
	if( $('input[name="princprod[]"]:checked').length == 0 )
		   
			{
			swal("Alert!",  "Primary industry or line of business at this location? Should Be Selected", "error");
			return false;
			}
	
	/* var lstatus = false;
	if(l.length != 0){
		for(var ka = 0; ka < l.length; ka++){
			if(l[ka].checked){
				lstatus = true;
			}
		}
	}
	if(!lstatus){
		swal("Alert!",  "Atleast One Option in Type of Business Should Be Selected", "error");
		var lstatus = false;  
		return false;
	} */
	
	if(princprodcon == ''){
		swal("Alert!",  "Primary industry or line of business at this location? Others,pls specify cannot be left blank", "error");
		return false;
	}
	
	if(ruimport == ''){
		swal("Alert!",  "Are you importing any product category’s from outside India, if yes what product? Country imported? cannot be left blank" , "error");
		return false;
	}
	
	if(stockcleare == ''){
		swal("Alert!",  "What is the approximate time taken to clear the stock/how fast is stock cleared, once you get a lot in your gowrdon? cannot be left blank" , "error");
		return false;
	}

	if(transportexp == ''){
		swal("Alert!",  "Is transportaion free of cost or chargeable? is it with Karnataka, only with south India or Pan India transportation cannot be left blank" , "error")
		return false;
	}
	
	if(deliverystat == ''){
		swal("Alert!",  "How fast can you dispatch the order once the order placed ? within 24h, 48h, 72h, or one week cannot be left blank" , "error");
		return false;
	}
	
	if(ifanymoq == ''){
		swal("Alert!",  "Do you have any kind of “CAP”while placing every order, like minimum order should by “5” Tons, ”1000” KG, so on? if yes please specify cannot be left blank" , "error");
		return false;
	}
	
	if( $('input[name="docquantopt[]"]:checked').length == 0 )
		   
			{
			swal("Alert!",  "Atleast One Option in If required, can you provide documentation for material/testing conformance to applicable specifications (e.g., material certifications, quality certificates of conformance/complice LAB test) Should Be Selected", "error");
			return false;
			}
	
/* 	var sstatus = false;
	if(s.length != 0){
		for(var ka = 0; ka < s.length; ka++){
			if(s[ka].checked){
				sstatus = true;
			}
		}
	}
	if(!sstatus){
		swal("Alert!",  "Atleast One Option in If required, can you provide documentation for material/testing conformance to applicable specifications (e.g., material certifications, quality certificates of conformance/complice LAB test) Should Be Selected", "error");
		var sstatus = false;  
		return false;
	} */
	
		if( $('input[name="systemtoreview[]"]:checked').length == 0 )
		   
			{
			swal("Alert!",  "Atleast One Option in Is there a system in place to review, promtly resolve, take corrective/preventive action for customer complaints Should Be Selected", "error");
			return false;
			}
	
	
	/* var tstatus = false;
	if(t.length != 0){
		for(var ka = 0; ka < l.length; ka++){
			if(t[ka].checked){
				tstatus = true;
			}
		}
	}
	if(!tstatus){
		swal("Alert!",  "Atleast One Option in Is there a system in place to review, promtly resolve, take corrective/preventive action for customer complaints Should Be Selected", "error");
		var sstatus = false;  
		return false;
	} */
	
	/* if(systemtoreview == ''){
		swal("Alert!",  "Payment Terms, Credit period for industries against PDC cannot be left blank" , "error");
		return false;
	} */
	
	if(paymentterms == ''){
		swal("Alert!",  "Payment Terms, Credit period for industries against PDC cannot be left blank" , "error");
		return false;
	}
	
	if(annualturnover == ''){
		swal("Alert!",  "Annual sales(turnover) cannot be left blank" , "error");
		return false;
	}
	
	if(valfeed == ''){
		swal("Alert!",  "Valueable feed back Cannot Be left Blank!", "error");
		return false;
	}



		}
	

	