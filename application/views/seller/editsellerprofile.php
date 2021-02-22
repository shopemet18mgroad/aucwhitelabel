<?php
//  include('./header');
?>
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	
	<!-- Content Row -->

	<!-- Content Row -->

	<div class="row">

		<!-- Area Chart -->
		<div class="col-xl-12 col-lg-7">
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Personal Info</h6>

				</div>
				<!-- Card Body -->
				<div class="card-body">
					<table class="table table-sm table-borderless">
						<thead>
							<th width="30%">Profile</th>


						</thead>
						<tbody>
							<tr>
								<td><img class="img-fluid" src="<?php echo base_url() . "web_files/"; ?>img/manimg.jpg" alt="Chania" width="40" height="35"></td>
							</tr>
							<tr>
								<form action="<?php echo base_url(); ?>Seller_basicinfo_update" method="POST" enctype="multipart/form-data">
									<td>Seller Name:</td>
									<td><?php echo $sqldata[0]->sname; ?></td>
							</tr>
							<tr>
								<td>Contact Person</td>
								<td><?php echo $sqldata[0]->scontactperson; ?></td>
							</tr>
							<tr>
								<td>Seller Type:</td>
								<td><?php echo $sqldata[0]->ssellertype; ?></td>
							</tr>
							<tr>
								<td>Address</td>
								<td>
									<?php
									$companyltype = unserialize($sqldata[0]->saddress);
									$companyaddress = unserialize($sqldata[0]->saddresscount);
									$xj = 0;
									if ($companyltype != NULL || $companyaddress != NULL) {
										$companyltypecnt = count($companyltype);
										$companyaddresscnt = count($companyaddress);
									}

									if ($companyltype != NULL) {
										for ($i = 0; $i < $companyltypecnt; $i++) {
											echo '<div class="input_fields_wrap1">';
											echo '<select class="form-control w-50  p-1" name="saddress[]">';
											echo '<option value="' . $companyltype[$i] . '">' . $companyltype[$i] . '</option>';
											echo '<option value="Corporate-Office">Corporate Office</option>';
											echo '<option value="Headquarter">Headquarter</option>';
											echo '</select>';
											echo '';
											echo '<textarea class="form-control float-left mt-2 p-2 w-50" type="text" name="saddresscount[]">' . $companyaddress[$i] . '</textarea>';
											echo '<a class="add_field_button1"><button type="button" class="btn btn-sm btn-primary ml-1 mb-5 mt-3">  <i class="fa fa-plus text-white"></i></button></a>';
											echo '</div>';
										}
									} else {
										echo '<div class="input_fields_wrap1">';
										echo '<select class="form-control w-50  p-1" name="saddress[]">';
										echo '<option value="Corporate-Office">Corporate Office</option>';
										echo '<option value="Manufacturing Unit">Manufacturing Unit</option>';
										echo '<option value="Headquarter">Headquarter</option>';
										echo '</select>';
										echo '';
										echo '<textarea class="form-control float-left mt-2 p-2 w-50" type="text" name="saddresscount[]"></textarea>';
										echo '<a class="add_field_button1"><button type="button" class="btn btn-sm btn-primary ml-1 mb-5 mt-3">  <i class="fa fa-plus text-white"></i></button></a>';
										echo '</div>';
									}

									?>

								</td>

							</tr>
							<tr>
								<td>City</td>
								<td><input class="form-control w-50" type="text" id="scity" name="scity" value="<?php echo $sqldata[0]->scity; ?>"></td>
							</tr>
							<tr>
								<td>Pincode</td>
								<td><input class="form-control w-50" type="text" id="spin" name="spin" value="<?php echo $sqldata[0]->spin; ?>"></td>
							</tr>
							<tr>
								<td>State /Union Ter.</td>
								<td><?php echo $sqldata[0]->sstate; ?></td>
							</tr>
							<tr>
								<td>Country</td>
								<td><?php echo $sqldata[0]->scountry; ?></td>
							</tr>

						</tbody>
					</table>

					

					<input type="submit" class="btn btn-primary offset-sm-3 mt-2" name="submit" value="Update">

					<input type="reset" class="btn btn-primary offset-sm-1 mt-2" value="Reset">
					</form>
					<a href='<?php echo base_url(); ?>seller_dashboard'><button type="button" class="btn btn-primary offset-sm-1 mt-2">Cancel</button></a>

				</div>
			</div>



			<!-- Pie Chart -->

		</div>
		<!-- /.container-fluid -->

	</div>


	<!-- End of Main Content -->

	<!-- Footer -->



	<script>
		$(document).ready(function() {
			var max_fields = 10;
			var wrapper = $(".input_fields_wrap");
			var add_button = $(".add_field_button");


			var x = 1;
			$(add_button).click(function(e) {
				e.preventDefault();
				if (x < max_fields) {
					x++;
					$(wrapper).append('<div><tr><td><select class="tos float-left p-1 " id="saddress" name="saddress"><option value="one" selected>Corporate Office</option><option value="two">Headquarter</option><option value="three" >.....</option><option value="four">.....</option><option value="five">......</option><option value="six">.....</option></select></td><td><textarea class="name ml-5 p-2 w-50" type="text" name="mytext[]"/></textarea><a href="#" class="remove_field">  <button type="button" class="btn btn-sm btn-primary ml-1 mb-5">  <i class="fa fa-minus text-white"></i></button></a></td></tr></div>');
				}

			});


			$(wrapper).on("click", ".remove_field", function(e) {

				e.preventDefault();
				$(this).parent('div').remove();
				x--;

			})

		});
	</script>

	<?php
	//include('./footer');
	?>