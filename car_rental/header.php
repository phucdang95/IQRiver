<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<header>
			<div class="wrapper">
				<h1 class="logo">Luxury Rental</h1>
				
				<nav>

					<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					?>
                    
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="index.php">Rent Cars</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
                   
                   
					<a href="account.php">Customer Login</a> /
					<a href="login.php">Admin Login</a>
                   

					<?php
						} else{
					?>
                    
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="status.php">View Status</a></li>
								<li><a href="message_admin.php">Message Admin</a></li>
							</ul>
					<a href="admin/logout.php">Logout</a>
					<?php
						}
					?>
				</nav>
			</div>
		</header>