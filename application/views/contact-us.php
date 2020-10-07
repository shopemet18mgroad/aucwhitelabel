<?php 
	include('./header.php');
?>
		<div class="container">
			<div class="col-md-12">
				  
			</div>
		  <div class="row">
			
			<div class="col-md-6">
				 <h2 class="aboutus-title tspace">Contact Us</h2>
				 <div class="">
					<form class="form-signin cform" method="post" action="php/contact.php" id="cform" autocomplete="on">
							<div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                    <input class="form-control" name="firstname" placeholder="Firstname" type="text" required autofocus />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                    <input class="form-control" name="lastname" placeholder="Lastname" type="text" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                    <input class="form-control" name="email" placeholder="Address Line 1" type="text" required />
                                </div>
                            </div>
							<div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                    <input class="form-control" name="email" placeholder="Address Line 2" type="text" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                    <input class="form-control" name="subject" placeholder="Subject" type="text" required />
                                </div>
                            </div>
                            
							<div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                    <input class="form-control" name="firstname" placeholder="City" type="text" required autofocus />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                    <input class="form-control" name="lastname" placeholder="State" type="text" required />
                                </div>
                            </div>
							<div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                    <input class="form-control" name="firstname" placeholder="Postal Code" type="text" required autofocus />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                   <select class="form-control" id="sel1">
									<option>Country</option>
									<option>INDIA</option>
									<option>USA</option>
									<option>UK</option>
								  </select>
                                </div>
                            </div>
							<div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                    <input class="form-control" name="firstname" placeholder="Company" type="text" required autofocus />
                                </div>
                                
                            </div>
							<div class="row" >
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <textarea style="resize:vertical;" class="form-control" placeholder="Message..." rows="6" name="comment" required></textarea>
                                </div>
                            </div>
							<div class="row" >
								 <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top: 10px;"> 
                                    <button type="button" class="btn btn-primary btn-lg">Send Enquiry</button>
                                </div>
								
                            </div>
							
			    	</form>
				 </div>
			</div>
			<div class="col-md-6 text-center">
			<div class="contact-tp">
				<div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">Corp Office - 1</h4>
                    <p>Address: </br>
					#179, 2nd Floor, Mysore Road Cross, Bangalore - 560 002</p>
                  </div>
                </div>
				<div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">Corp Office - 2</h4>
                   <p>Address: </br>
					#1755, SVS Complex, Kengeri Satellite Town, Bangalore - 560 060.</p>
                  </div>
                </div>
			</div>
			<div class ="contact-bt">
				<div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-globe fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">Contact Info</h4>
                    <p>Email: info@shopemet.com</br>Phone: +91 9980596460</br>URL:www.rawmet24.com</br>URL:www.aucjunction.com</p>
                  </div>
                </div>
			</div>	
			</div>
		  </div>
		</div>
		
		<?php 
	include('./footer.php');
?>