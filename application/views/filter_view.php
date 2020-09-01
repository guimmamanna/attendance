
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title> :: MANNA</title>
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
			<div class="inner_content_w3_agile_info two_in">
				<div class="w3ls_agile_circle_progress agile_info_shadow">
					<div class="panel-body">
						<div class="row">

							<div class="col-sm-12">
								<form method="get" class="form-inline" action="<?php echo base_url(); ?>index.php/filter_controller/index">

									<div class="form-group">
										<select name="room" id="room" class="form-control input-lg">
											<option value="">Select Room</option>
											<?php
											foreach ($room as $row) : ?>
												<option value="<?php echo $row->room_Id; ?>"><?php echo $row->room_number; ?></option>
											<?php endforeach;
											?>
										</select>
									</div>
									<!--<button type="button" class="btn btn-default btn-sm">Search</button>-->
									<Input type="submit" class="btn btn-primary btn-sm" name="submit">
								

						
						<div class="row">
							<div class="col-sm-12">
								<table class="table table-condensed table-bordered">
									<thead>
										<tr>
											<th>Module Name</th>
											<th>Building Name</th>
											<th>Room Number</th>
											<th>Room Capacity</th>
										
										</tr>
									</thead>
									<tbody>
										<?php
										foreach ($rooms as $row) {
										?>

											<tr>
												<td><?php echo $row->Name; ?></td>
												<td><?php echo $row->building_name; ?></td>
												<td><?php echo $row->room_number; ?></td>
												<td><?php echo $row->room_capacity; ?></td>
												
											</tr>
										<?php
										}
										?>

									</tbody>
								</table>
							</div>
						</div>
			
	
	

