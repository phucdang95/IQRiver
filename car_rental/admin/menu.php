<?php
	error_reporting("E-NOTICE");
?>
<?php
	session_start();
	if(!$_SESSION['uname'] && (!$_SESSION['pass'])){
		header("location: ../login.php");
	}
?>
<div id="top">
			<h1><a href="#">Luxury Rental Inc.</a></h1>
			<div id="top-navigation">
				Welcome, <a href="#"><strong>Admin</strong></a>
				<br>
				<a href="logout.php">Log out</a>
			</div>
		</div>
<div id="navigation">
			<ul>
			    <li><a href="index.php"><span>Control Panel</span></a></li>
			    <li><a href="add_vehicles.php"><span>Automobile Manager</span></a></li>
			    <li><a href="client_requests.php"><span>Rental Application</span></a></li>
			    <li><a href="index.php"><span>Inbox</span></a></li>

			</ul>
		</div>
