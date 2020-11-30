<?php 
	//include('./header.php');
	//print_r($sellerinfo); die; 
?>

		<div class="container">
		  <div class="row">
		 
			<div class="col-md-3">
			
			    <div class="newsbox-containertray m-1 ">
						<div class="newsbox-header ">
							<h4>Latest News</h4>
						</div>
						
						<div class="wrapper ">
						
							<!--<ul class="data-list" data-autoscroll>
								<li><i class="fa fa-hand-o-right" aria-hidden="true"></i><p>Breaking News 1</p>
								<p>Breaking News 1</p>
								<p>Breaking News 1</p>
								<p>Breaking News 1</p>
								
								</li>
								<li><i class="fa fa-hand-o-right" aria-hidden="true"></i> 
								<p>Breaking News 1</p>
								<p>Breaking News 1</p>
								<p>Breaking News 1</p>
								</li>
								<li><i class="fa fa-hand-o-right" aria-hidden="true"></i> Breaking News 3</li>
								<li><i class="fa fa-hand-o-right" aria-hidden="true"></i> Breaking News 4</li>
								<li><i class="fa fa-hand-o-right" aria-hidden="true"></i> Breaking News 5</li>
								<li><i class="fa fa-hand-o-right" aria-hidden="true"></i> Breaking News 6</li>
								<li><i class="fa fa-hand-o-right" aria-hidden="true"></i> Breaking News 7</li>
								<li><i class="fa fa-hand-o-right" aria-hidden="true"></i> Breaking News 8</li>
								<li><i class="fa fa-hand-o-right" aria-hidden="true"></i> Breaking News 9</li>
								<li><i class="fa fa-hand-o-right" aria-hidden="true"></i> Breaking News 10</li>
								<li><i class="fa fa-hand-o-right" aria-hidden="true"></i> Breaking News 11</li>
								<li><i class="fa fa-hand-o-right" aria-hidden="true"></i> Breaking News 12</li>
								<li><i class="fa fa-hand-o-right" aria-hidden="true"></i> Breaking News 13</li>
								<li><i class="fa fa-hand-o-right" aria-hidden="true"></i> Breaking News 14</li>
							</ul>-->
								 
							<div class="">
						
								<div class="nw newswrapper ">
								
								<ul>
								<?php foreach($lnews as $sqld){?>
								<li>
								
								<a href=""><?php echo $sqld->tittle; ?></a>
								<p><?php echo $sqld->content; ?></p>
								</li>
								<li class="odd"><a href=""><?php echo $sqld->description; ?></a>
								
								</li>
								<?php }?>
								<!--<li><a href="">Aucjunction10200003</a>
								<p>FERROUS Mild Steel ( MS) Scrap Stainless Steel ( SS) Scrap – BENGALURU, KARNATAKA on October 2020</p>
								</li>-->
								
								</ul>
							
								</div>
									
								</div>
								
						</div>
						
					</div>
					
			</div>
			
			<div class="col-md-9 pl-5">
					<div class="auclist-containertray m-2">
							<div class="auclisting-header">
							<h4>Oncoming Events</h4>
							</div>
							<div class="tab-holder w-100 ">
							<ul class="nav nav-tabs border-0" id="myTab" role="tablist">
							
								<li class="nav-item">
									<a class="nav-link active border border-primary border-bottom-0" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Upcoming Auctions</a>
								</li>
								<li class="nav-item">
									<a class="nav-link border border-primary border-bottom-0" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Today's Auctions</a>
								</li>
								<li class="nav-item">
									<a class="nav-link border border-primary border-bottom-0" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">ALL</a>
								</li>
							</ul>

							<div class="tab-content w-100">
								<div class="tab-pane h-100 p-3 active border border-primary" id="home" role="tabpanel" aria-labelledby="home-tab" onclick="one()">
										<div class="table-holder"> 
											<table class="table table-bordered" id="dataTable">
												<thead class="thead-auc">
													<tr>
														
														<th width="30%">AUCTION ID</th>
														<th width="30%">DESCRIPTION</th>
														<th width="30%">DATE & TIME</th>
														
														
													</tr>
												</thead>
												<tbody>
												<?php foreach($sqldata1 as $sqldat){?>
													<tr>
													
																						
					<td><?php echo $sqldat->sauctionid; ?></td>
					<td><?php echo $sqldat->sdescription; ?></td>
					<td><?php echo $sqldat->saucstartdate_time; ?></td>
														
													</tr>
													<?php }?>
																				
												</tbody>
											</table>
										</div> 
			<div class="row mt-1">
			<div class="col-sm-12 col-md-9">
				<div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
				<ul class="pagination offset-lg-11">
				<li class="paginate_button page-item previous disabled" id="dataTable_previous">
				<a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
				</li>
				<li class="paginate_button page-item active">
				<a href="#home" aria-controls="dataTable" id="home" data-dt-idx="1" tabindex="0" class="page-link">1</a>
				</li>
				
				<li class="paginate_button page-item next disabled" id="dataTable_next">
				<a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">Next</a>
				</li>
				</ul>
				</div>
				</div>
			</div>									
								</div>
								
								
								
								
					<div class="tab-pane h-100 p-3 border border-primary" id="home2" role="tabpanel" aria-labelledby="home-tab">
										<div class="table-holder"> 
											<table class="table table-bordered">
												<thead class="thead-auc">
													<tr>
														<th width="10%">SL No</th>
														<th width="30%">AUCTION ID</th>
														<th width="30%">DESCRIPTION</th>
														<th width="30%">DATE & TIME</th>
														
														
													</tr>
												</thead>
												<tbody>
													
													
													<tr>
														<td>7</td>
														<td>Aucjunction10200007 – BENGALURU, KARNATAKA</td>
														<td>PCB Cut sheets, Rejected PCBs, Acrylic Material Boards, FR4 Copper Clad Laminated Cut Sheets, PCB Scrap Aluminium, </td>
														<td>October 2020</td>
													</tr>
													<tr>
														<td>8</td>
														<td>Aucjunction10200008 – BENGALURU, KARNATAKA</td>
														<td>Bimetal Scrap, Cu 70%, Ni 30%</td>
														<td>October 2020</td>
													</tr> <tr>
														<td>9</td>
														<td>Aucjunction10200009 – BENGALURU,  KARNATAKA</td>
														<td>UPS Batteries , Running Condition</td>
														<td>October 2020</td>
													</tr>													
												</tbody>
											</table>
										</div> 			
								
									</div>
								
								
								
								
								
								<div class="tab-pane h-100 p-3 border border-primary" id="profile" role="tabpanel" aria-labelledby="profile-tab">No Records Found</div>
								<div class="tab-pane h-100 p-3 border border-primary" id="messages" role="tabpanel" aria-labelledby="messages-tab">Upcoming Events 3</div>
								<div class="tab-pane h-100 p-3 border border-primary" id="settings" role="tabpanel" aria-labelledby="settings-tab">Upcoming Events 4</div>
								
								
								<div class="tab-pane h-100 p-3 border border-primary" id="all" role="tabpanel" aria-labelledby="all-tab">
								
										
											<table class="table table-bordered">
												<thead class="thead-auc">
													<tr>
														<th width="10%">SL No</th>
														<th width="30%">AUCTION ID</th>
														<th width="30%">DESCRIPTION</th>
														<th width="30%">DATE & TIME</th>
														
														
													</tr>
												</thead>
												<tbody>
													<tr>
													
														<td>1</td>
														<td>Aucjunction10200001 – BENGALURU, KARNATAKA</td>
														<td>FERROUS CR Steel Scrap</td>
														<td>October 2020</td>
														
													</tr>
													<tr>
													
														<td>2</td>
														<td>Aucjunction10200002 – BENGALURU, KARNATAKA</td>
														<td>FERROUS SS 304 Scrap SS 304 Pipe</td>
														<td>October 2020</td>
														
													</tr>
													<tr>
														
														<td>3</td>
														<td>Aucjunction10200003 – BENGALURU, KARNATAKA</td>
														<td>FERROUS Mild Steel ( MS) Scrap Stainless Steel ( SS) Scrap</td>
														<td>October 2020</td>
														
													</tr>  
													<tr>
														<td>4</td>
														<td>Aucjunction10200004 – BENGALURU, KARNATAKA</td>
														<td>Binding Wires</td>
														<td>October 2020</td>
													</tr>
														<tr>
														<td>5</td>
														<td>Aucjunction10200005 – BENGALURU, KARNATAKA</td>
														<td>FERROUS CR and HR Punching Laser Scrap SS Aluminium Scrap</td>
														<td>October 2020</td>
													</tr>
													<tr>
														<td>6</td>
														<td>Aucjunction10200006 – BENGALURU, KARNATAKA</td>
														<td>FERROUS MS Scrap</td>
														<td>October 2020</td>
													</tr>

													<tr>
														<td>7</td>
														<td>Aucjunction10200007 – BENGALURU, KARNATAKA</td>
														<td>PCB Cut sheets, Rejected PCBs, Acrylic Material Boards, FR4 Copper Clad Laminated Cut Sheets, PCB Scrap Aluminium, </td>
														<td>October 2020</td>
													</tr>
													<tr>
														<td>8</td>
														<td>Aucjunction10200008 – BENGALURU, KARNATAKA</td>
														<td>Bimetal Scrap, Cu 70%, Ni 30%</td>
														<td>October 2020</td>
													</tr> <tr>
														<td>9</td>
														<td>Aucjunction10200009 – BENGALURU,  KARNATAKA</td>
														<td>UPS Batteries , Running Condition</td>
														<td>October 2020</td>
													</tr>															
												</tbody>
											</table>
									
			<div class="row mt-1">
			<div class="col-sm-12 col-md-9">
				<div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
				<ul class="pagination offset-lg-11">
				<li class="paginate_button page-item previous disabled" id="dataTable_previous">
				<a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
				</li>
				<li class="paginate_button page-item active">
				<a href="#home" aria-controls="dataTable" id="home" data-dt-idx="1" tabindex="0" class="page-link">1</a>
				</li>
				
				<li class="paginate_button page-item next disabled" id="dataTable_next">
				<a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">Next</a>
				</li>
				</ul>
				</div>
			
			</div>										
								</div>
								</div>
							
							
							</div>
		 
						</div>
				
			
					</div>
					
			</div>
			
		  </div>
		</div>
		<div class="container dealsbox">
			 <div class="row">
				<div class="col-md-12">
						<div class="deals-header">
							<h4>Deals of The Day</h4>
						</div>
				</div>
				<div class="col-md-12">
						<div class="deals-tab-table">
							<ul class="nav nav-tabs border-0" id="myTab" role="tablist">
							
								<li class="nav-item">
									<a class="nav-link active border border-primary border-bottom-0" id="hvd-tab" data-toggle="tab" href="#hvd" role="tab" aria-controls="hvd" aria-selected="true">High Value Deals</a>
								</li>
								<li class="nav-item">
									<a class="nav-link border border-primary border-bottom-0" id="deals-tab" data-toggle="tab" href="#deals" role="tab" aria-controls="profile" aria-selected="false">Deals of The Day</a>
								</li>
							</ul>

							<div class="tab-content w-100">
							<div class="tab-pane h-100 p-3 active border border-primary" id="hvd" role="tabpanel" aria-labelledby="hvd-tab">No Records Found</div>
							<!--	<div class="tab-pane h-100 p-3 active border border-primary" id="hvd" role="tabpanel" aria-labelledby="hvd-tab">
										<div class="table-holder"> 
											<table class="table table-bordered">
												<thead class="thead-auc">
													<tr>
														<th width="10%">SL No</th>
														<th width="20%">Company Name</th>
														<th width="50%">Description</th>
														<th width="20%">Download Details </th>
														
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>JCB India Ltd. (Ballabgarh, Jaipur & Pune)</td>
														<td>JCB India Ltd. (Every Month) is selling Various Iron Scrap through auction totaling to 1000 to 1500 MT across 3 plants - Ballabgarh , Pune and Jaipur. If interested in participating in the auction Contact Aucjunction for further details.</td>
														<td><i class="fa fa-download" aria-hidden="true"></i></td>
														
													</tr>
													<tr>
														<td>2</td>
														<td>JCB India Ltd. (Ballabgarh, Jaipur & Pune)</td>
														<td>JCB India Ltd. (Every Month) is selling Various Iron Scrap through auction totaling to 1000 to 1500 MT across 3 plants - Ballabgarh , Pune and Jaipur. If interested in participating in the auction Contact Aucjunction for further details.</td>
														<td><i class="fa fa-download" aria-hidden="true"></i></td>
														
													</tr>
													<tr>
														<td>3</td>
														<td>JCB India Ltd. (Ballabgarh, Jaipur & Pune)</td>
														<td>JCB India Ltd. (Every Month) is selling Various Iron Scrap through auction totaling to 1000 to 1500 MT across 3 plants - Ballabgarh , Pune and Jaipur. If interested in participating in the auction Contact Aucjunction for further details.</td>
														<td><i class="fa fa-download" aria-hidden="true"></i></td>
														
													</tr>  
													<tr>
														<td>4</td>
														<td>JCB India Ltd. (Ballabgarh, Jaipur & Pune)</td>
														<td>JCB India Ltd. (Every Month) is selling Various Iron Scrap through auction totaling to 1000 to 1500 MT across 3 plants - Ballabgarh , Pune and Jaipur. If interested in participating in the auction Contact Aucjunction for further details.</td>
														<td><i class="fa fa-download" aria-hidden="true"></i></td>
														
													</tr>  													
												</tbody>
											</table>
										</div>    		
								</div> -->
								<div class="tab-pane h-100 p-3 border border-primary" id="deals" role="tabpanel" aria-labelledby="hvd-tab">No Records Found</div>
								
							</div>
						</div>
				</div>
			 </div>	
		</div>
		
		
		<script>
function one(){
	var x= document.getElementByID("home");
	x.id="home2";
	
}</script>
		<?php 
	//include('./footer.php');
	?>