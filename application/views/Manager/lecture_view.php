<!--
author: MANNA
author URL: http://MANNA.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>MANNA An Admin Panel Category Flat Bootstrap Responsive Website Template | Typography :: MANNA</title>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="MANNA Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->
	<link href="<?php echo base_url(); ?>inner_css/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo base_url(); ?>inner_css/css/component.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo base_url(); ?>inner_css/css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo base_url(); ?>inner_css/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="<?php echo base_url(); ?>inner_css/css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">

	<script type="text/javascript">
		document.getElementById("classes_dropdown").onchange = function() {
			//document.getElementById("modules_dropdown").value = 0;
			this.form.submit();
		};
		document.getElementById("reset").onclick = function() {
			location.href = "<?php echo base_url(); ?>index.php/Classes";
		};
	</script>


</head>

<body>
	<!-- banner -->
	<div class="wthree_agile_admin_info">
		<!-- /w3_agileits_top_nav-->
		<!-- /nav-->
		<div class="w3_agileits_top_nav">
			<ul id="gn-menu" class="gn-menu-main">
				<!-- /nav_agile_w3l -->
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><i class="fa fa-bars" aria-hidden="true"></i><span>Menu</span></a>
				</li>

				<!-- //nav_agile_w3l -->
				<li class="second logo">
					<h1><a href="main-page.html"><i class="fa fa-graduation-cap" aria-hidden="true"></i><?php echo "Hello " . ($this->session->userdata("data")->FirstName . " , " . $this->session->userdata("data")->LastName); ?></a></h1>
				</li>
				<li class="second lecturer-pic">
					<ul class="top_dp_agile">
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">
									<span class="prfil-img"><img src="<?php echo base_url(); ?>inner_css/images/a5.jpg" alt=""> </span>
								</div>
							</a>
						</li>

					</ul>
				</li>
				<li class="second top_bell_nav">
					<ul class="top_dp_agile ">
						<li class="dropdown head-dpdn">
						<li> <a href="<?php echo site_url('manager_authentication/logout')  ?>"><i class="fa fa-sign-out"></i></a> </li>
				</li>
			</ul>
			<!-- //nav -->

		</div>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->

		<!-- /inner_content-->
		<div class="inner_content">
			<!-- /inner_content_w3_agile_info-->
			<div class="w3l_agileits_breadcrumbs">
				<div class="w3l_agileits_breadcrumbs_inner">
					<ul>
						<li><a href="<?php echo base_url(); ?>index.php/manager">Home</a><span>«</span></li>
						<li>Lectures Attended</li>
					</ul>
				</div>
			</div>
				<!-- /inner_content_w3_agile_info-->
				<div class="inner_content_w3_agile_info two_in">
					<h2 class="w3_inner_tittle">Lectures Attended</h2>
					<div class="w3ls_agile_circle_progress agile_info_shadow">
						<div class="panel-body">
							<div class="row">

								<div class="col-sm-12">
									<form method="get" class="form-inline" action="<?php echo base_url(); ?>index.php/Lectures/Load_data">

										<div class="form-group">
											<select name="modules" id="modules_dropdown" class="form-control input-lg">
												<option value="">Select Module</option>
												<?php
												foreach ($modules as $row) : ?>
													<option value="<?php echo $row->Module_Id; ?>"><?php echo $row->Name; ?></option>
												<?php endforeach;
												?>
											</select>
										</div>
										<!--<button type="button" class="btn btn-default btn-sm">Search</button>-->
										<Input type="submit" class="btn btn-primary btn-sm" name="submit">
									</form>
								</div>

							</div>
							<div class="row">
								<div class="col-sm-12">
									<table class="table table-condensed table-bordered">
										<thead>
											<tr>
												<th>Module Name</th>
												<th>Total Hours</th>
												<th>Module ID</th>
												<th>Date</th>
												<th>Time In</th>
												<th>Time Out</th>
												<th>Number of Students</th>
												<th>% of Students in Attendance</th>
											</tr>
										</thead>
										<tbody>
											<?php
											if (isset($module)) {
												foreach ($module as $row) {
											?>
													<tr>
														<td><?php echo $row->Name; ?></td>
														<td><?php echo $row->Total_hours; ?></td>
														<td><?php echo $row->Module_Id; ?></td>
														<td><?php echo $row->Date; ?></td>
														<td><?php echo $row->Time_In; ?></td>
														<td><?php echo $row->Time_Out; ?></td>
														<td><?php echo $row->NumOSt; ?></td>
														<td><?php echo $row->PercentageP; ?></td>
													</tr>
											<?php
												}
											}
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- //typography -->

				<!-- /social_media-->

				<!-- //social_media-->
			
			<!-- //inner_content_w3_agile_info-->
		</div>
		<!-- //inner_content-->
	</div>
	<!-- banner -->
	<!--copy rights start here-->
	<div class="copyrights">
		<p>© 2020 MANNA. Proudly | powered by <a href="http://MANNA.com/" target="_blank">MANNA</a> </p>
	</div>
	<!--copy rights end here-->
	<!-- js -->

	<script type="text/javascript" src="<?php echo base_url(); ?>inner_css/js/jquery-2.1.4.min.js"></script>
	<script src="<?php echo base_url(); ?>inner_css/js/modernizr.custom.js"></script>

	<script src="<?php echo base_url(); ?>inner_css/js/classie.js"></script>
	<script src="<?php echo base_url(); ?>inner_css/js/gnmenu.js"></script>
	<script>
		new gnMenu(document.getElementById('gn-menu'));
	</script>
	<!-- //js -->
	<script src="<?php echo base_url(); ?>inner_css/js/screenfull.js"></script>
	<script>
		$(function() {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}



			$('#toggle').click(function() {
				screenfull.toggle($('#container')[0]);
			});
		});
	</script>
	<script src="<?php echo base_url(); ?>inner_css/js/jquery.nicescroll.js"></script>
	<script src="<?php echo base_url(); ?>inner_css/js/scripts.js"></script>

	<script type="text/javascript" src="<?php echo base_url(); ?>inner_css/js/bootstrap-3.1.1.min.js"></script>


</body>

</html>