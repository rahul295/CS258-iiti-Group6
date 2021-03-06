<?php 
	session_start();
	if($_SESSION['isLoggedIn']!=3){
		session_destroy();
    	header("location: Login_form.php");
    }
?>


<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/Layout0.css"/>
	<link rel="stylesheet" type="text/css" href="css/Admin.css"/>
	<link rel="stylesheet" type="text/css" href="css/iframe.css"/>
	<link rel="stylesheet" type="text/css" href="css/search1.css" />
	<link rel="stylesheet" type="text/css" href="css/search2.css" />
	<script src="js/modernizr.custom.js"></script>
</head>

<body>
<!--Header Bar-->
	<div class="introBar">
		<div class="introHead1">SICDOC</div>
		<div class="introHead2"> Sophisticated Instrumentation Lab </div>

		<div class="column">
					<div id="sb-search" class="sb-search">
						<form>
							<input class="sb-search-input" placeholder="Enter your search query" type="text" value="" name="search" id="search">
							<input class="sb-search-submit" type="submit" value="">
							<span class="sb-icon-search"></span>
						</form>
					</div>
			</div>

		<script src="js/classie.js"></script>
		<script src="js/uisearch.js"></script>
		<script>
			new UISearch( document.getElementById( 'sb-search' ) );
		</script>
		
	</div>
	<!--End of Header Bar-->

	<!--SideBar Contents-->
	<section class="sidebar">
		<div class="imagebox"><!--<img src="images/userdefault.png" width="190" height="190" style="position: absolute; top: 6px; left: -10px;">--></div>

		<div class="seperatorinbox" style="position: absolute;  top: 230px;  left: 12px;"></div>
		<div class="sidebartext" style=" position: absolute;  top: 231px;  left: 40px; text-align: center; padding-left: 0px; width: 140px;">User</div>
		<div class="seperatorinbox" style="position: absolute;  top: 270px;  left: 12px;"></div>

		<a href="Notifications_User.html" style="text-decoration: none">
		<img src="images/notification.png" width="15" height="15" style="position: absolute; top: 305px; left: 25px;">
		<div class="sidebartext" style=" position: absolute;  top: 291px;  left: 40px;">Notifications</div>
		</a>
		<div class="seperatorinbox" style="position: absolute;  top: 332px;  left: 12px;"></div>
		
		<a href="Startexpt.html" style="text-decoration: none">
		<img src="images/sexperiment.png" width="15" height="15" style="position: absolute; top: 350px; left: 24px;">
		<div class="sidebartext" style="position: absolute;  top: 335px;  left: 40px;">Submit Form</div>
		</a>

	</section>
	<!--End of Sidebar Content-->
	
	<button href="Logout.php" class="logout">Logout</button></body>

</html>