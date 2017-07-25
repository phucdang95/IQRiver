<!DOCTYPE html>
<html lang="en">
<head>
	<title>Luxury Rental</title>
	<meta charset="utf-8">
		
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>

			
	</section>

    <br><br>
	<section class="search">
		<div class="wrapper">
		<div id="fom">
			<form method="post">
			<h2 style="text-align:center; font-weight:bold; "> Login </h2>
				<table height="200" align="center">
					<tr>
						<td>Email Address: </td>
						<td><input type="email" name="email" required></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><input type="password" name="pass" required></td>
					</tr>
					<tr>
						<td><input type="submit" name="log" value="Login"></td>
						<td style="text-align:right; text-decoration:none"><a href="signup.php">Sign-up</a></td>
					</tr>
				</table>
			</form>
			<?php
				if(isset($_POST['log'])){
					include 'includes/config.php';
					
					$uname = $_POST['email'];
					$pass = $_POST['pass'];
					
					$qy = "SELECT * FROM client WHERE email = '$uname' AND id_no = '$pass'";
					$log = $conn->query($qy);
					$num = $log->num_rows;
					$row = $log->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['email'] = $row['email'];
						$_SESSION['pass'] = $row['id_no'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful.................\");
									window.location = (\"index.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again................\");
									window.location = (\"account.php\")
									</script>";
					}
				}
			?>
			</div>
			<a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
		</div>

	</section>
</body>
</html>