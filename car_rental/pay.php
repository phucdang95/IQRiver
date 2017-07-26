<!DOCTYPE html>
<html lang="en">
<head>
	<title>Luxuary rental</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
    <link href="creditcard/creditCardTypeDetector.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="creditcard/jquery.creditCardTypeDetector.js"></script>
		<script type="text/javascript">

			$(document).ready(function(){
				$('#checkout_card_number').creditCardTypeDetector({ 'credit_card_logos' : '.card_logos' });
			});
		</script>


</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>

	</section>	<br>
    <h1>Confirm Payment</h1><br>
	  <label for="owner">Name on Card: </label>
	   <input type="text" class="form-control" id="owner"></br><br>
	    <label for="checkout_card_number">Card Number: </label>

	<input id="checkout_card_number" type="text" size="20" pattern="[0-9]*" autocomplete="off" class="stripe_card_number" required="required" />
    
	<div><ul class="card_logos">
		<li class="card_visa">Visa</li>
		<li class="card_mastercard">Mastercard</li>
		<li class="card_amex">American Express</li>
		<li class="card_discover">Discover</li>
		<li class="card_jcb">JCB</li>
		<li class="card_diners">Diners Club</li>
	</ul>
    </div>
	<br>

	                       

	                 
	                    
	                        <label>Expiration Date: </label>
	                        <select>
	                            <option value="01">January</option>
	                            <option value="02">February </option>
	                            <option value="03">March</option>
	                            <option value="04">April</option>
	                            <option value="05">May</option>
	                            <option value="06">June</option>
	                            <option value="07">July</option>
	                            <option value="08">August</option>
	                            <option value="09">September</option>
	                            <option value="10">October</option>
	                            <option value="11">November</option>
	                            <option value="12">December</option>
	                        </select>
	                        <select>
	                           
	                            <option value="17"> 2017</option>
	                            <option value="18"> 2018</option>
	                            <option value="19"> 2019</option>
	                            <option value="20"> 2020</option>
	                            <option value="21"> 2021</option>
	                        </select>&nbsp;

	                     <label for="cvv">CVV: </label>
	                        <input type="text" class="form-control" id="cvv" size=1> <br><br><Br>

	                       <div><h2>Billing Address</h2>
	                        Street Address: <input type="text" class="form-control" ><br>

	                        <br><label>City: </label>
	                        <input type="text" class="form-control" size=10 >
	                        &nbsp;
	                      <label>State: </label>
	                        <input type="text" class="form-control" size=2 >
                            &nbsp;
	                        <label>Zip Code: </label>
	                        <input type="text" class="form-control" size=4 ><Br><br>
	                        
	                        <label >Phone: </label>
	                        <input type="text" class="form-control" >

	                   <div class="form-group" id="pay-now"> <Br><br>
	                       <button type="submit" name= "pay"  id="confirm-purchase" onClick="Javascript:window.location.href = 'wait.php';">Submit</button>
                           	
	                    </div>
	               	           
                        


	
				
			
			
</body>
</html>