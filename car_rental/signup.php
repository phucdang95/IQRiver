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


	<section class="listings">
		<div class="wrapper">
			<div style="text-align:center;">
				<h3>Sign-up </h3>

            <form method="post" >
					Full Name: <input type="text" name="fname" required><br><br>
					Phone Number: <input type="text" name="phone" required><br><br>
					Email Address: <input type="email" name="email" required><br><br>
					Password: <input type="password" name="id_no" required><br><br>
					Gender: <select name="gender">
									<option> Select Gender </option>
									<option> Male </option>
									<option> Female </option>
								</select><br><br>


					Location: <input type="text" name="location" required><Br><Br>
					         <input type="submit" name="save" value="Submit">


				</form>
                </div>
				<?php
						if(isset($_POST['save'])){
							include 'includes/config.php';
							$fname = $_POST['fname'];
							$id_no = $_POST['id_no'];
							$gender = $_POST['gender'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
							$location = $_POST['location'];

							$qry = "INSERT INTO cars.client (fname,email,id_no,phone,location,gender,status)
							VALUES('$fname','$email','$id_no','$phone','$location','$gender','Available')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered.\");
											window.location = (\"account.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"signup.php\")
											</script>";
							}
						}

					  ?>
			</ul>
		</div>
	</section>


</body>
</html>
