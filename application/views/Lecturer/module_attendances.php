<!--
author: MANNA
author URL: http://MANNA.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>MANNA  An Admin Panel Category Flat Bootstrap Responsive Website Template | Typography  :: MANNA</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="MANNA Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="<?php echo base_url(); ?>inner_css/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>inner_css/css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>inner_css/css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>inner_css/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="<?php echo base_url(); ?>inner_css/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
  

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
                <li class="second logo"><h1><a href="<?php echo site_url('lecturer') ?>"><i class="fa fa-graduation-cap" aria-hidden="true"></i><?php echo "Hello " . ($this->session->userdata("data")->FirstName." , ".$this->session->userdata("data")->LastName); ?> </a></h1></li>
					<li class="second admin-pic">
				       <ul class="top_dp_agile">
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="<?php echo base_url(); ?>inner_css/images/user7.png" alt=""> </span> 
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
										 
											<li> <a href="<?php echo site_url('authentication/logout') ?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
									
						</ul>
				</li>
				<li class="second top_bell_nav">
				   <ul class="top_dp_agile ">
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-bell-o" aria-hidden="true"></i> <span class="badge blue">4</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>Your Notifications</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="user_img"><img src="<?php echo base_url(); ?>inner_css/images/a3.jpg" alt=""></div>
											   <div class="notification_desc">
											     <h6>John Smith</h6>
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											 <li class="odd"><a href="#">
												<div class="user_img"><img src="<?php echo base_url(); ?>inner_css/images/a1.jpg" alt=""></div>
											   <div class="notification_desc">
											     <h6>Jasmin Leo</h6>
												<p>Lorem ipsum dolor</p>
												<p><span>3 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li><a href="#">
												<div class="user_img"><img src="<?php echo base_url(); ?>inner_css/images/a2.jpg" alt=""></div>
											   <div class="notification_desc">
											     <h6>James Smith</h6>
												<p>Lorem ipsum dolor</p>
												<p><span>2 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											  <li><a href="#">
												<div class="user_img"><img src="<?php echo base_url(); ?>inner_css/images/a4.jpg" alt=""></div>
											   <div class="notification_desc">
											     <h6>James Smith</h6>
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li>
												<div class="notification_bottom">
													<a href="#">See all Notifications</a>
												</div> 
											</li>
										</ul>
									</li>
									
						</ul>
				</li>
				<li class="second top_bell_nav">
				   <ul class="top_dp_agile ">
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span class="badge blue">3</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>Your Messages</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="user_img"><img src="<?php echo base_url(); ?>inner_css/images/a3.jpg" alt=""></div>
											   <div class="notification_desc">
											     <h6>John Smith</h6>
												<p>Lorem ipsum dolor</p>
												<p><span>3 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											 <li class="odd"><a href="#">
												<div class="user_img"><img src="<?php echo base_url(); ?>inner_css/images/a1.jpg" alt=""></div>
											   <div class="notification_desc">
											     <h6>Jasmin Leo</h6>
												<p>Lorem ipsum dolor</p>
												<p><span>2 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li><a href="#">
												<div class="user_img"><img src="<?php echo base_url(); ?>inner_css/images/a2.jpg" alt=""></div>
											   <div class="notification_desc">
											     <h6>James Smith</h6>
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li>
												<div class="notification_bottom">
													<a href="#">See all Messages</a>
												</div> 
											</li>
										</ul>
									</li>
									
						</ul>
				</li>
				<li class="second top_bell_nav">
				   <ul class="top_dp_agile ">
				       <li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue">9</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 4 Pending tasks</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Database update</span><span class="percentage">40%</span>
													<div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													<div class="bar yellow" style="width:40%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
												   <div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													 <div class="bar green" style="width:90%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
													<div class="clearfix"></div>	
												</div>
											   <div class="progress progress-striped active">
													 <div class="bar red" style="width: 33%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
												   <div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													 <div class="bar  blue" style="width: 80%;"></div>
												</div>
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all pending tasks</a>
												</div> 
											</li>
										</ul>
									</li>	
								</ul>
				</li>

				<li class="second w3l_search">
				 
						<form action="#" method="post">
							<input type="search" name="search" placeholder="Search here..." required="">
							<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
						</form>
					
				</li>
				<li class="second full-screen">
					<section class="full-top">
						<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
					</section>
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
									<li><a href="<?php echo base_url(); ?>index.php/lecturer">Home</a><span>«</span></li>
                                    <li><a href="<?php echo base_url(); ?>index.php/Classes">Classes</a><span>«</span></li>
                                    <li><a href="<?php echo base_url(); ?>index.php/Student">Student</a><span>«</span></li>
									<li>Module Attendance</li>
								</ul>
							</div>
						</div>

					

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle">Attendance by Module</h2>
          
                    
                        
                        
                        

		<div class="panel-body">
			<div class="row">
              
				<div class="col-sm-12">
					<form method="get" class="form-inline" action="<?php echo base_url(); ?>index.php/Modules/load_data">
						<div class="form-group">
							<select name="Modules"  id="modules_dropdown"   class=" input-sm">
								<option value="0">Select module</option>
								<?php
								foreach($modules as $row)
								{
									if(isset($_GET["Modules"]) && $_GET["Modules"]==$row->Module_Id)
										$select = "selected=selected";
									else
										$select = "";

									echo "<option value='".$row->Module_Id."' ".$select.">".$row->Name."</option>";
								}
								?>
							</select>
						</div>
                        <div class="form-group">
							<select name="classType"  id="classes_dropdown" onchange="this.form.submit()"  class="input-sm">
								<option value="0">Select class type</option>
								<?php
							  
							foreach($class as $row)
								{
									if(isset($_GET["classType"]) && $_GET["classType"]==$row->ID)
										$select = "selected=selected";
									else
										$select = "";

									echo "<option value='".$row->ID."' ".$select.">".$row->ClassSession."</option>";
								}
								?>
							</select>
						</div>
						<!--<button type="button" class="btn btn-default btn-sm">Search</button>-->
                        <input type="submit" class="btn btn-default btn-sm" name="submit" text="View">
						<button type="reset" class="btn btn-primary btn-sm" id="reset">Reset</button>
					</form>
				</div>

			</div>
             
			<div class="row" id="table">
                
				<div class="col-sm-12">
                  
                
					<table class="table table-condensed table-bordered">
                          
						<thead>
						<tr>
                            <th>Module Id</th>
                            <th>Class Id</th>
                            <th>Modules </th>
                            <th>Class type </th>
                            <th>Trimester </th>
                            <th>Start Date </th>
                            <th>End Date </th>
                            <th>Attendance Date </th>
                            <th>Percentage</th>
                            <th>View Detail</th>
                        </tr>
						</thead>
						<tbody>
						<?php
                            //print_r($attendances);
						if(isset($attendances)){
							foreach($attendances as $row)
							{
								?>
								<tr>
									<td><?php echo $row->Module_Id; ?></td>
                                    <td><?php echo $row->Class_Id; ?></td>
                                    <td><?php echo $row->Name; ?></td>
                                     <td><?php echo $row->ClassSession; ?></td>
                                     <td><?php echo $row->Trimester; ?></td>
                                     <td><?php echo $row->Start_Date; ?></td>
                                     <td><?php echo $row->End_Date; ?></td>
                                    <td><?php echo $row->Date; ?></td>
                                    <td><?php echo $row->percentage; ?></td>
                                  <td><a href="<?php echo base_url(); ?>index.php/view_module_data?moduleview=<?php echo $row->Class_Id;?>">View</a></td>
									
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

							
						
							</div>
							<!-- //typography -->
					
							<!-- /social_media-->
						
						<!-- //social_media-->
				    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
	</div>
<!-- banner -->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2020 MANNA. Proudly | powered by  <a href="http://MANNA.com/" target="_blank">MANNA</a> </p>
</div>	
<!--copy rights end here-->
<!-- js -->

          <script type="text/javascript" src="<?php echo base_url(); ?>inner_css/js/jquery-2.1.4.min.js"></script>
		  <script src="<?php echo base_url(); ?>inner_css/js/modernizr.custom.js"></script>
		
		   <script src="<?php echo base_url(); ?>inner_css/js/classie.js"></script>
		  <script src="<?php echo base_url(); ?>inner_css/js/gnmenu.js"></script>
		  <script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		 </script>
<!-- //js -->
<script src="<?php echo base_url(); ?>inner_css/js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<script src="<?php echo base_url(); ?>inner_css/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url(); ?>inner_css/js/scripts.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>inner_css/js/bootstrap-3.1.1.min.js"></script>



</body>
<script type="text/javascript">
	document.getElementById("modules_dropdown").onchange = function () {
		document.getElementById("classes_dropdown").value = 0;
		this.form.submit();
	};
	document.getElementById("reset").onclick = function () {
		location.href = "<?php echo base_url(); ?>index.php/Modules";
	};
</script>
</html>