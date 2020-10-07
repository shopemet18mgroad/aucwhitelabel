
   <?php include "header.php";

   ?>
		<div class="container dealsbox">
			 <div class="row">
				<div class="col-md-12">
						<div class="deals-header">
							<h4><i class="icon-dashboard"></i><i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp; Dashboard</h4>
						</div>
				</div>
			 </div>	
			 <div class="row">
				
				<div class="col-md-12">
					<div class="deals-tab-table">
							<ul class="nav nav-tabs border-0" id="myTab" role="tablist">
							
								<li class="nav-item">
									<a class="nav-link active border border-primary border-bottom-0" id="hvd-tab" data-toggle="tab" href="#hvd" role="tab" aria-controls="hvd" aria-selected="true"><b>E-Auctions/Bidder Survey Form</b></a>
								</li>
								
								
							</ul>

							<div class="tab-content w-100">
								<div class="tab-pane h-100 p-3 fade show active border border-primary" id="hvd" role="tabpanel" aria-labelledby="hvd-tab">
									<div class="table-holder"> 
										<div class="tab-content">
										<form action="../weblib/postformsurvey2.php" method="POST" id="bidder">
											<table class="table table-bordered table-sm text-center">
												<thead class="thead-auc">
												
												
												</thead>
												<tbody>
									
												
												
												
												
												
												<tr class="cinpt  w-100">
												
												<td>
												<div class="cinpt">
												<p><b>Current Status:</b><br></p>
												<div class="form-check form-check-inline ">
                                                <input type="checkbox" class="form-check-input" name="companystatus[]" value="Proprietorship">
                                                <label class="form-check-label" for="proprietor">Proprietorship</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="companystatus[]" value="Partnership">
                                                <label class="form-check-label" for="partnership">Partnership</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="companystatus[]" value="Corporation">
                                                <label class="form-check-label" for="corporation">Corporation</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" name="companystatus[]" value="Pvt Ltd">
                                                <label class="form-check-label" for="pvt ltd">Pvt Ltd</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="companystatus[]" value="Public sector">
                                                <label class="form-check-label" for="publicsector">Public sector</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="companystatus[]" value="Small business">
                                                <label class="form-check-label" for="smallbusi">Small business</label>
												</div>
												<div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input"  name="companystatus[]" value="limited">
                                                <label class="form-check-label" for="limited">Limited</label>
												</div>
												</div>
												
												
												</td></tr>
												
												
												
												
												
												</tbody>
												</table>
												
											<a href="#"><button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button></a>
											</form>

								
							</div>
						</div>
				</div>
			</div>	
		</div>
		</div>
		</div>
		</div>
		
		<?php
		include "footer.php";
		
		?>
		
		
		


