<!DOCTYPE html>
<html lang="en">
<head>
	<title>S</title>
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

	</section><!--  end hero section  -->

	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cars WHERE car_id = '$_GET[id]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
			?>
				<li>
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" style="border-radius:50px" src="cars/<?php echo $rws['image'];?>" width="360" height="240">
					</a>
					<span class="price"><?php echo '$'.$rws['hire_cost'];?></span>
					<div class="property_details">
                        <h2> Year/Make: <span class="property_size"><?php echo $rws['car_type'];?></span></h2>
						<h2>Model: <span class="property_size"><?php echo $rws['car_name'];?></span></h2>
					</div>
				</li>
				
				<h3>You picked:  <?php echo $rws['car_type']." ";  echo $rws['car_name'];?> </h3>
				<?php
					if(!$_SESSION['email'] && (!$_SESSION['pass'])){
                    echo "<script type = \"text/javascript\">
									alert(\"Please Log-in.\");
									window.location = (\"account.php\")
									</script>";
                                    

				?>
				<?php
					} else
						{
							?>
								<a href="pay.php">Click here to reserve this car</a>
							<?php
						}
				?>
				<?php
						if(isset($_POST['save'])){
							include 'includes/config.php';
							$fname = $_POST['fname'];
							$id_no = $_POST['id_no'];
							$gender = $_POST['gender'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
							$location = $_POST['location'];

							$qry = "INSERT INTO client (fname,id_no,gender,email,phone,location,car_id,status)
							VALUES('$fname','$id_no','$gender','$email','$phone','$location','$_GET[id]','Pending')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered. Proceed to pay\");
											window.location = (\"pay.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"book_car.php\")
											</script>";
							}
						}

					  ?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->


</body>
</html>
