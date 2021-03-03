<!-- Start of NewsBox  -->

<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div class="newsbox-containertray mt-1">
				<div class="newsbox-header ">
					<h4>Latest News</h4>
				</div>
				<div class="wrapper">
					<div class="overflow-hidden">
						<div class="nw newswrapper ">
							<ul>
								<?php if (isset($lnews)) {
									foreach ($lnews as $sqld) { ?>

										<li class="odd">
											<marquee direction="up"  behavior="scroll" onmouseover="this.stop();" onmouseout="this.start();">
												<a href=""><?php echo $sqld->tittle; ?></a>
												<p><?php echo $sqld->content; ?></p>
											</marquee>
										</li>
								<?php }
								} ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End of Marquee  -->
		<!-- Start of AUCTION EVENTS  -->
		<div class="col-md-9 pl-5">
			<div class="auclist-containertray mt-1">
				<div class="auclisting-header">
					<h4>AUCTION EVENTS</h4>
				</div>
				<div class="tab-holder w-100 mt-4">
					<ul class="nav nav-tabs border-0" id="myTab" role="tablist">

						<li class="nav-item">
							<a class="nav-link active border border-primary border-bottom-0" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Upcoming Auctions</a>
						</li>
						<li class="nav-item">
							<a class="nav-link border border-primary border-bottom-0" id="home2-tab" data-toggle="tab" href="#home2" role="tab" aria-controls="home2" aria-selected="false">Today's
								Auctions</a>
						</li>
						<li class="nav-item">
							<a class="nav-link border border-primary border-bottom-0" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">ALL</a>
						</li>
					</ul>

					<div class="tab-content w-100">
						<div class="tab-pane h-100 p-3 active border border-primary" id="home" role="tabpanel" aria-labelledby="home-tab" onclick="one()">
							<div class="table-holder">
								<table class="table table-bordered display" id="">
									<thead class="thead-auc">
										<tr>

											<th width="30%">AUCTION ID</th>
											<th width="20%">Lot No</th>
											<th width="30%">DESCRIPTION</th>
											<th width="30%">DATE & TIME</th>


										</tr>
									</thead>
									<tbody>
										<?php if (isset($sqldata1)) {
											foreach ($sqldata1 as $sqldat) { ?>
												<tr>


													<td><?php echo $sqldat->sauctionid; ?></td>
													<td><?php echo $sqldat->slotno; ?></td>
													<td><?php echo $sqldat->sdescription; ?></td>
													<td><?php echo $sqldat->saucstartdate_time; ?></td>

												</tr>
										<?php }
										} ?>

									</tbody>
								</table>
							</div>
						</div>
						<div class="tab-pane h-100 p-3 border border-primary" id="home2" role="tabpanel" aria-labelledby="home-tab">
							<div class="table-holder">
								<table class="table table-bordered display" id="">
									<thead class="thead-auc">
										<tr>

											<th width="30%">AUCTION ID</th>
											<th width="20%">Lot No</th>
											<th width="30%">DESCRIPTION</th>
											<th width="30%">DATE & TIME</th>


										</tr>
									</thead>
									<tbody>
										<?php if (isset($sqldata)) {
											foreach ($sqldata as $s) { ?>
												<tr>
													<td><?php echo $s->sauctionid; ?></td>
													<td><?php echo $s->slotno; ?></td>
													<td><?php echo $s->sdescription; ?></td>
													<td><?php echo $s->saucstartdate_time; ?></td>
												</tr>
										<?php }
										} ?>
									</tbody>
								</table>
							</div>

						</div>

						<div class="tab-pane h-100 p-3 border border-primary" id="all" role="tabpanel" aria-labelledby="all-tab">
							<div class="table-holder">

								<table class="table table-bordered text-center display" id="">
									<thead class="thead-auc">
										<tr>

											<th width="30%">AUCTION ID</th>
											<th width="20%">Lot No</th>
											<th width="30%">DESCRIPTION</th>
											<th width="30%">DATE & TIME</th>

										</tr>
									</thead>
									<tbody>
										<?php if (isset($all)) {
											foreach ($all as $sql) { ?>
												<tr>

													<td><?php echo $sql->sauctionid; ?></td>
													<td><?php echo $sql->slotno; ?></td>
													<td><?php echo $sql->sdescription; ?></td>
													<td><?php echo $sql->saucstartdate_time; ?></td>
												</tr>
										<?php }
										} ?>
									</tbody>
								</table>
							</div>

						</div>
						<div class="tab-pane h-100 p-3 border border-primary" id="profile" role="tabpanel" aria-labelledby="profile-tab">No Records Found</div>
						<div class="tab-pane h-100 p-3 border border-primary" id="messages" role="tabpanel" aria-labelledby="messages-tab">Upcoming Events 3</div>
						<div class="tab-pane h-100 p-3 border border-primary" id="settings" role="tabpanel" aria-labelledby="settings-tab">Upcoming Events 4</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End of AUCTION EVENTS  -->

<!-- Start of Deals of the Day -->
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

					<div class="tab-pane h-100 p-3 border border-primary" id="deals" role="tabpanel" aria-labelledby="hvd-tab">No Records Found</div>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- End of Deals of the Day -->

<script>
	function one() {
		var x = document.getElementByID("home");
		x.id = "home2";

	}
</script>
<script>
	$(document).ready(function() {
		$('table.display').DataTable();
	});
</script>