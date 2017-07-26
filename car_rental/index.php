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


            <section class="search">
		<div class="wrapper">
			<form action="#" method="post">


			</form>
			<a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
		</div>

		<div class="advanced_search">
			<div class="wrapper">
				<span class="arrow"></span>
				<form action="#" method="post">
					<div class="search_fields">
						<input type="text" class="float" id="check_in_date" name="check_in_date" placeholder="Rental From"  autocomplete="off">

						<hr class="field_sep float"/>

						<input type="text" class="float" id="check_out_date" name="check_out_date" placeholder="Rental To"  autocomplete="off">
					</div>
					<div class="search_fields">
						<input type="text" class="float" id="min_price" name="min_price" placeholder="Min. Price"  autocomplete="off">

						<hr class="field_sep float"/>

						<input type="text" class="float" id="max_price" name="max_price" placeholder="Max. price"  autocomplete="off">
					</div  style ="text-align:center">
					<input type="text" id="keywords" name="keywords" placeholder="MODEL"  autocomplete="off">

                    <input class="btt" type="submit" id="searchButton" value="Search"/>
				</form>
			</div>
		</div>
	</section>
	</section>



	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cars WHERE status = 'Available'";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>
				<li>
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" style="border-radius:50px" src="cars/<?php echo $rws['image'];?>" width="360" height="240">
					</a>
					<span class="price"><?php echo '$'.$rws['hire_cost'].'/day' ;?></span>
					<div class="property_details">
                   <h2> Year/Make: <span class="property_size"><?php echo $rws['car_type'];?></span></h2>
						<h2>Model: <span class="property_size"><?php echo $rws['car_name'];?></span></h2>
					</div>
				</li>
			<?php
				}
			?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->


</body>
</html>
