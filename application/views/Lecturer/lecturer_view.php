  <!--
author: MANNA
author URL: http://MANNA.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">  
<head>
<title>MANNA  Lecturer paneotstrap00esponsive Website Template | Home :: MANNA</title>
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
<link href="<?php echo base_url(); ?>inner_css/css/export.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>inner_css/css/flipclock.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>inner_css/css/circles.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>inner_css/css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>inner_css/css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- font-awesome-icons -->
<link href="<?php echo base_url();?>inner_css/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script>
    function toggle_div_fun(id) {
	
	 var divelement=document.getElementById(id);
	  
	   if(divelement.style.display== 'none')
	      divelement.style.display= 'block';
		else 
		   divelement.style.display='none';
	
	}
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
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller scrollbar1">
						
						</div><!-- /gn-scroller -->
					</nav>
				</li>

				<!-- //nav_agile_w3l -->
				<li class="second logo"><h1><a href="main-page.html"><i class="fa fa-graduation-cap" aria-hidden="true"></i><?php echo " Hello " . ($this->session->userdata("data")->FirstName." , ".$this->session->userdata("data")->LastName); ?></a></h1></li>
					<li class="second lecturer-pic">
				       <ul class="top_dp_agile">
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="<?php echo base_url(); ?>inner_css/images/user7.png" alt=""> </span> 
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											
											<li> <a href="<?php echo site_url('authentication/logout')  ?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
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
					<div class="inner_content_w3_agile_info">
					<!-- /agile_top_w3_grids-->
                   
					
					   <div class="agile_top_w3_grids" >
					          <ul class="ca-menu">
									<li id="menu-toggle">
										<a href="#" target="_parent">
											
											<i class="fa fa-building-o" aria-hidden="true"></i>
											<div class="ca-content"> 
											<?php
                                                
                                                foreach ($list1->result() as $row)
                                                {
     	                                            $NClass = $row->NumbClass;
                                                   }
	                                                  ?>
												<h4 class="ca-main"><?php echo $NClass; ?> </h4>
                                                <h3 class="ca-sub"><a href="<?php echo base_url(); ?>index.php/Classes " target="_self">Classes</a></h3>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
										  <i class="fa fa-tasks" aria-hidden="true"></i>
											<div class="ca-content">
											<?php foreach ($list2->result() as $row)
                                                {
     	                                            $NModule = $row->NumbModule;
                                                   }
	                                                  ?>
												<h4 class="ca-main one"><?php echo $NModule  ?></h4>
                                                <h3 class="ca-sub one"><a href="<?php echo base_url(); ?>index.php/Modules " target="_self">Modules</a></h3>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-user" aria-hidden="true"></i>
											<div class="ca-content">
											<?php foreach ($list3->result() as $row)
                                                {
     	                                            $NStudent = $row->NumbStudent;
                                                   }
	                                                  ?>
											<h4 class="ca-main two"><?php echo $NStudent; ?></h4>
                                                <h3 class="ca-sub two"><a href="<?php echo base_url(); ?>index.php/Student " target="_self">Students</a></h3>
											</div>
										</a>
									</li>
								<!-- <li>
										<a href="#">
											<i class="fa fa-database" aria-hidden="true"></i>
											<div class="ca-content">
											<?php foreach ($list4->result() as $row)
                                                {
     	                                            $T_Attendance = $row->TotalAttendance;
                                                   }
	                                                  ?>
												<h4 class="ca-main three"><?php echo $T_Attendance; ?></h4>
												<h3 class="ca-sub three">Total Attendance</h3>
											</div>
										</a>
									</li>-->
									<!--<li>
										<a href="#">
											<i class="fa fa-clone" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main four">30,808</h4>
												<h3 class="ca-sub four">New Orders</h3>
											</div>
										</a>
									</li>-->
									<div class="clearfix"></div>
								</ul>
					   </div>
					
					 <!-- //agile_top_w3_grids-->
						<!-- /agile_top_w3_post_sections-->
							
								   
						<!-- //agile_top_w3_post_sections-->
							<!-- /w3ls_agile_circle_progress-->
							
						<!-- /w3ls_agile_circle_progress-->
						<!-- /chart_agile-->
						 
						  <!-- /w3ls_agile_circle_progress-->
                     
                   
							<div class="w3ls_agile_circle_progress agile_info_shadow">
							
								<canvas id="myChart" width="50" height="30"></canvas>
<script>
var ctx = document.getElementById('myChart');
    <?php
  $data = array();
foreach ($chartjs as $row) {
	$data[] = $row;
}  
    ?>
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
						</div>
						<!-- /w3ls_agile_circle_progress-->
						 <!--/prograc-blocks_agileits-->
							<div class="prograc-blocks_agileits">
								
								
								
								<div class="col-md-6 fallowers_agile agile_info_shadow">
									<h3 class="w3_inner_tittle two"> Module lectures</h3>
												<div class="work-progres">
													<div class="table-responsive">
														<table class="table table-hover">
														  <thead>
															<tr>
															  <th>Module Name</th> 
                                                              <th>Leaturer</th>
                                                              <th>Email</th>
                                                              <th>Department</th>

														    </tr>
													      </thead>
                                                            
                                                            <?php
          if($list_Module->num_rows() > 0)
          {
            foreach($list_Module->result() as $row)
          {
           ?>
         <tr>
            <td><?php echo $row->Name; ?> </td>
              <td><?php echo $row->FirstName; ?>, <?php echo $row->LastName; ?> </td>
              <td><?php echo $row->Email; ?> </td>
              <td><?php echo $row->Department; ?> </td>

         </tr>
              <?php
             }
           }
            else
          {
             ?>
         <tr>
             <td coldpan="3"> No Data Found</td>
             </tr>
           <?php
          }
         ?>  
											  </table>
											</div>
										</div>											
								</div>
									 <div class="clearfix"></div>
							</div>

						
						<!-- //weather_w3_agile_info-->
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

	<!-- /amcharts -->
				<script src="<?php echo base_url(); ?>inner_css/js/amcharts.js"></script>
		       <script src="<?php echo base_url(); ?>inner_css/js/serial.js"></script>
				<script src="<?php echo base_url(); ?>inner_css/js/export.js"></script>	
				<script src="<?php echo base_url(); ?>inner_css/js/light.js"></script>
				<!-- Chart code -->

<!-- Chart code -->


	<!-- //amcharts -->
		<script src="<?php echo base_url(); ?>inner_css/js/chart1.js"></script>
				<script src="<?php echo base_url(); ?>inner_css/js/Chart.min.js"></script>
		<script src="<?php echo base_url(); ?>inner_css/js/modernizr.custom.js"></script>
		
		<script src="<?php echo base_url(); ?>inner_css/js/classie.js"></script>
		<script src="<?php echo base_url(); ?>inner_css/js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
			<!-- script-for-menu -->

<!-- /circle-->
	 <script type="text/javascript" src="<?php echo base_url(); ?>inner_css/js/circles.js"></script>
					 
	<!-- //circle -->
	<!--skycons-icons-->
<script src="<?php echo base_url(); ?>inner_css/js/skycons.js"></script>

								
<!--//skycons-icons-->
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