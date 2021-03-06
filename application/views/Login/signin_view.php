<!--
author: MANNA
author URL: http://MANNA.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>MANNA  An Admin Panel Category Flat Bootstrap Responsive Website Template | Sign In:: MANNA</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="MANNA Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="<?php echo base_url(); ?>inner_css/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>inner_css/css/snow.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>inner_css/css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>inner_css/css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>inner_css/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="<?php echo base_url(); ?>inner_css/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
			<!-- /pages_agile_info_w3l -->

						<div class="pages_agile_info_w3l">
							<!-- /login -->
							   <div class="over_lay_agile_pages_w3ls">
								    <div class="registration">
								
												<div class="signin-form profile">
													<h2>Lecturer Sign in Form</h2>
													<div class="login-form">
														<form action="<?php echo site_url('authentication/validate') ?>" method="post">
                                                            <div class="form-group has-error has-feedback">
							                                  <label class="control-label" for="inputError2"><?php echo isset($message)?$message:""; ?></label>
						                                       </div>
															<input type="text" name="username" placeholder="username" required="">
															<input type="password" name="password" placeholder="Password" required="">
															<div class="tp">
																<input type="submit" value="SIGN IN">
															</div>
														</form>
													</div>
													
													<p><a href="signup.html"> Don't have an account?</a></p>
													
													 <h6><a href="<?php echo base_url(); ?>">Back To Home</a><h6>
												</div>
										</div>
										<!--copy rights start here-->
											<div class="copyrights_agile">
												 <p>© 2020 MANNA. Proudly | powered by  <a href="http://MANNA.com/" target="_blank">MANNA</a> </p>
											</div>	
											<!--copy rights end here-->
						    </div>
						</div>
							<!-- /login -->
<!-- //pages_agile_info_w3l -->


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
<script src="<?php echo base_url(); ?>inner_css/js/snow.js"></script>
 <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript" src="<?php echo base_url(); ?>inner_css/js/bootstrap-3.1.1.min.js"></script>


</body>
</html>