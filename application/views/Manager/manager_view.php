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
					<h1><i class="fa fa-graduation-cap" aria-hidden="true"></i><?php echo "Hello " . ($this->session->userdata("data")->FirstName . " , " . $this->session->userdata("data")->LastName); ?></a></h1>
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
			<div class="inner_content_w3_agile_info">
				<div class="w3ls_agile_circle_progress agile_info_shadow">
					<ul class="ca-menu">
							<li id="menu-toggle">
								<a href="#">
									<i class="fa fa-database" aria-hidden="true"></i>
									<div class="ca-content">
										<?php foreach ($list1->result() as $row) {
											$T_Room = $row->TotalRoom;
										}
										?>
										<h4 class="ca-main three"><?php echo $T_Room; ?></h4>
										<h3 class="ca-sub three"><a href="<?php echo site_url('Rooms') ?>" target="_blank">Rooms</a></h3>
									</div>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-clone" aria-hidden="true"></i>
									<div class="ca-content">
										<?php foreach ($list2->result() as $row) {
											$T_Lectures = $row->TotalLectures;
										}
										?>
										<h4 class="ca-main four"><?php echo $T_Lectures; ?></h4>
										<h3 class="ca-sub four"><a href="<?php echo site_url('Lectures') ?>" target="_blank">Lectures</a></h3>
									</div>
								</a>
							</li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<!-- /w3ls_agile_circle_progress-->
				<!--/prograc-blocks_agileits-->
				<!-- //weather_w3_agile_info-->
				<!-- /social_media-->
				<div class="social_media_w3ls">

					<div class="col-md-3 socail_grid_agile facebook">
						<ul class="icon_w3_info">
							<li><a href="#" class="wthree_facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li>Facebook</li>
						</ul>
						<ul class="icon_w3_social">
							<li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
							<li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
							<li><i class="fa fa-user" aria-hidden="true"></i></li>
						</ul>
						<div class="clearfix"></div>
						<div class="bottom_info_social">
							<div class="col-md-4 agile_w3l_social_media_text_img">
								<img src="<?php echo base_url(); ?>inner_css/images/admin.jpg" alt="">
							</div>
							<div class="col-md-8 agile_w3l_social_media_text">
								<h4>Hurisa Joe</h4>
								<p>Lorem ipsum dolor sit amet</p>
							</div>

							<div class="clearfix"></div>
						</div>
					</div>
					<div class="col-md-3 socail_grid_agile twitter">
						<ul class="icon_w3_info">
							<li><a href="#" class="wthree_facebook"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li>Twitter</li>
						</ul>
						<ul class="icon_w3_social">
							<li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
							<li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
							<li><i class="fa fa-user" aria-hidden="true"></i></li>
						</ul>
						<div class="clearfix"></div>
						<div class="bottom_info_social">
							<div class="col-md-4 agile_w3l_social_media_text_img">
								<img src="<?php echo base_url(); ?>inner_css/images/a1.jpg" alt="">
							</div>
							<div class="col-md-8 agile_w3l_social_media_text">
								<h4>Jasmin Joe</h4>
								<p>Lorem ipsum dolor sit amet</p>
							</div>

							<div class="clearfix"></div>
						</div>
					</div>
					<div class="col-md-3 socail_grid_agile gmail">
						<ul class="icon_w3_info">
							<li><a href="#" class="wthree_facebook"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li>Google+</li>
						</ul>
						<ul class="icon_w3_social">
							<li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
							<li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
							<li><i class="fa fa-user" aria-hidden="true"></i></li>
						</ul>
						<div class="clearfix"></div>
						<div class="bottom_info_social">
							<div class="col-md-4 agile_w3l_social_media_text_img">
								<img src="<?php echo base_url(); ?>inner_css/images/a2.jpg" alt="">
							</div>
							<div class="col-md-8 agile_w3l_social_media_text">
								<h4>John Pal</h4>
								<p>Lorem ipsum dolor sit amet</p>
							</div>

							<div class="clearfix"></div>
						</div>
					</div>
					<div class="col-md-3 socail_grid_agile dribble">

						<ul class="icon_w3_info">
							<li><a href="#" class="wthree_facebook"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							<li>Dribbble</li>
						</ul>
						<ul class="icon_w3_social">
							<li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
							<li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
							<li><i class="fa fa-user" aria-hidden="true"></i></li>
						</ul>
						<div class="clearfix"></div>
						<div class="bottom_info_social">
							<div class="col-md-4 agile_w3l_social_media_text_img">
								<img src="<?php echo base_url(); ?>inner_css/images/a4.jpg" alt="">
							</div>
							<div class="col-md-8 agile_w3l_social_media_text">
								<h4>Honey Pal</h4>
								<p>Lorem ipsum dolor sit amet</p>
							</div>

							<div class="clearfix"></div>
						</div>

					</div>
					<div class="clearfix"></div>

				</div>
				<!-- //social_media-->
			</div>
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

	<!-- /amcharts -->
	<script src="<?php echo base_url(); ?>inner_css/js/amcharts.js"></script>
	<script src="<?php echo base_url(); ?>inner_css/js/serial.js"></script>
	<script src="<?php echo base_url(); ?>inner_css/js/export.js"></script>
	<script src="<?php echo base_url(); ?>inner_css/js/light.js"></script>
	<!-- Chart code -->
	<script>
		var chart = AmCharts.makeChart("chartdiv", {
			"theme": "light",
			"type": "serial",
			"startDuration": 2,
			"dataProvider": [{
				"country": "USA",
				"visits": 4025,
				"color": "#FF0F00"
			}, {
				"country": "China",
				"visits": 1882,
				"color": "#FF6600"
			}, {
				"country": "Japan",
				"visits": 1809,
				"color": "#FF9E01"
			}, {
				"country": "Germany",
				"visits": 1322,
				"color": "#FCD202"
			}, {
				"country": "UK",
				"visits": 1122,
				"color": "#F8FF01"
			}, {
				"country": "France",
				"visits": 1114,
				"color": "#B0DE09"
			}, {
				"country": "India",
				"visits": 984,
				"color": "#04D215"
			}, {
				"country": "Spain",
				"visits": 711,
				"color": "#0D8ECF"
			}, {
				"country": "Netherlands",
				"visits": 665,
				"color": "#0D52D1"
			}, {
				"country": "Russia",
				"visits": 580,
				"color": "#2A0CD0"
			}, {
				"country": "South Korea",
				"visits": 443,
				"color": "#8A0CCF"
			}, {
				"country": "Canada",
				"visits": 441,
				"color": "#CD0D74"
			}, {
				"country": "Brazil",
				"visits": 395,
				"color": "#754DEB"
			}, {
				"country": "Italy",
				"visits": 386,
				"color": "#DDDDDD"
			}, {
				"country": "Taiwan",
				"visits": 338,
				"color": "#333333"
			}],
			"valueAxes": [{
				"position": "left",
				"axisAlpha": 0,
				"gridAlpha": 0
			}],
			"graphs": [{
				"balloonText": "[[category]]: <b>[[value]]</b>",
				"colorField": "color",
				"fillAlphas": 0.85,
				"lineAlpha": 0.1,
				"type": "column",
				"topRadius": 1,
				"valueField": "visits"
			}],
			"depth3D": 40,
			"angle": 30,
			"chartCursor": {
				"categoryBalloonEnabled": false,
				"cursorAlpha": 0,
				"zoomable": false
			},
			"categoryField": "country",
			"categoryAxis": {
				"gridPosition": "start",
				"axisAlpha": 0,
				"gridAlpha": 0

			},
			"export": {
				"enabled": true
			}

		}, 0);
	</script>
	<!-- Chart code -->
	<script>
		var chart = AmCharts.makeChart("chartdiv1", {
			"type": "serial",
			"theme": "light",
			"legend": {
				"horizontalGap": 10,
				"maxColumns": 1,
				"position": "right",
				"useGraphSettings": true,
				"markerSize": 10
			},
			"dataProvider": [{
				"year": 2020,
				"europe": 2.5,
				"namerica": 2.5,
				"asia": 2.1,
				"lamerica": 0.3,
				"meast": 0.2,
				"africa": 0.1
			}, {
				"year": 2016,
				"europe": 2.6,
				"namerica": 2.7,
				"asia": 2.2,
				"lamerica": 0.3,
				"meast": 0.3,
				"africa": 0.1
			}, {
				"year": 2015,
				"europe": 2.8,
				"namerica": 2.9,
				"asia": 2.4,
				"lamerica": 0.3,
				"meast": 0.3,
				"africa": 0.1
			}],
			"valueAxes": [{
				"stackType": "regular",
				"axisAlpha": 0.5,
				"gridAlpha": 0
			}],
			"graphs": [{
				"balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
				"fillAlphas": 0.8,
				"labelText": "[[value]]",
				"lineAlpha": 0.3,
				"title": "Europe",
				"type": "column",
				"color": "#000000",
				"valueField": "europe"
			}, {
				"balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
				"fillAlphas": 0.8,
				"labelText": "[[value]]",
				"lineAlpha": 0.3,
				"title": "North America",
				"type": "column",
				"color": "#000000",
				"valueField": "namerica"
			}, {
				"balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
				"fillAlphas": 0.8,
				"labelText": "[[value]]",
				"lineAlpha": 0.3,
				"title": "Asia-Pacific",
				"type": "column",
				"color": "#000000",
				"valueField": "asia"
			}, {
				"balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
				"fillAlphas": 0.8,
				"labelText": "[[value]]",
				"lineAlpha": 0.3,
				"title": "Latin America",
				"type": "column",
				"color": "#000000",
				"valueField": "lamerica"
			}, {
				"balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
				"fillAlphas": 0.8,
				"labelText": "[[value]]",
				"lineAlpha": 0.3,
				"title": "Middle-East",
				"type": "column",
				"color": "#000000",
				"valueField": "meast"
			}, {
				"balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
				"fillAlphas": 0.8,
				"labelText": "[[value]]",
				"lineAlpha": 0.3,
				"title": "Africa",
				"type": "column",
				"color": "#000000",
				"valueField": "africa"
			}],
			"rotate": true,
			"categoryField": "year",
			"categoryAxis": {
				"gridPosition": "start",
				"axisAlpha": 0,
				"gridAlpha": 0,
				"position": "left"
			},
			"export": {
				"enabled": true
			}
		});
	</script>

	<!-- //amcharts -->
	<script src="<?php echo base_url(); ?>inner_css/js/chart1.js"></script>
	<script src="<?php echo base_url(); ?>inner_css/js/Chart.min.js"></script>
	<script src="<?php echo base_url(); ?>inner_css/js/modernizr.custom.js"></script>

	<script src="<?php echo base_url(); ?>inner_css/js/classie.js"></script>
	<script src="<?php echo base_url(); ?>inner_css/js/gnmenu.js"></script>
	<script>
		new gnMenu(document.getElementById('gn-menu'));
	</script>
	<!-- script-for-menu -->

	<!-- /circle-->
	<script type="text/javascript" src="<?php echo base_url(); ?>inner_css/js/circles.js"></script>
	<script>
		var colors = [
			['#ffffff', '#fd9426'],
			['#ffffff', '#fc3158'],
			['#ffffff', '#53d769'],
			['#ffffff', '#147efb']
		];
		for (var i = 1; i <= 7; i++) {
			var child = document.getElementById('circles-' + i),
				percentage = 30 + (i * 10);

			Circles.create({
				id: child.id,
				percentage: percentage,
				radius: 80,
				width: 10,
				number: percentage / 1,
				text: '%',
				colors: colors[i - 1]
			});
		}
	</script>
	<!-- //circle -->
	<!--skycons-icons-->
	<script src="<?php echo base_url(); ?>inner_css/js/skycons.js"></script>
	<script>
		var icons = new Skycons({
				"color": "#fcb216"
			}),
			list = [
				"partly-cloudy-day"
			],
			i;

		for (i = list.length; i--;)
			icons.set(list[i], list[i]);
		icons.play();
	</script>
	<script>
		var icons = new Skycons({
				"color": "#fff"
			}),
			list = [
				"clear-night", "partly-cloudy-night", "cloudy", "clear-day", "sleet", "snow", "wind", "fog"
			],
			i;

		for (i = list.length; i--;)
			icons.set(list[i], list[i]);
		icons.play();
	</script>
	<!--//skycons-icons-->
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
	<script src="<?php echo base_url(); ?>inner_css/js/flipclock.js"></script>

	<script type="text/javascript">
		var clock;

		$(document).ready(function() {

			clock = $('.clock').FlipClock({
				clockFace: 'HourlyCounter'
			});
		});
	</script>
	<script src="<?php echo base_url(); ?>inner_css/js/bars.js"></script>
	<script src="<?php echo base_url(); ?>inner_css/js/jquery.nicescroll.js"></script>
	<script src="<?php echo base_url(); ?>inner_css/js/scripts.js"></script>

	<script type="text/javascript" src="<?php echo base_url(); ?>inner_css/js/bootstrap-3.1.1.min.js"></script>


</body>

</html>