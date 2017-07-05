<?php 
session_start();

 ?>
<html>
    <head>
       <link rel='stylesheet' type='text/css' href='w_c_boatsh.css' />

    <title>IQ River Crossing</title>
    </head>
    <body>   
        
   <?php 
    $name = $_SESSION['name'] ;
    echo '<h1>Welcome,' . " <span>$name</span></h1>";
   
     ?> 
    <div class="image">
 <a href="boat2.php"><img class="boat2" src="images/sailing.png" alt=""></a>
<a href="boatsh_c.php"><img class="cabbage" src="images/cabbage.png" alt=""></a>
<a href="w_c_sh_boat.php"><img class="sheep" src="images/sheep.png" alt=""></a>
<a href=""><img class="wolf" src="images/wolf.png" alt=""></a>
  
  
  </div> 
        
        <p id="inst">Please help the man in the boat to move the wolf, the sheep and the cabbage to the other side of the river.<Br>
   Wolf eat sheep, sheep eat cabbage when no man around. </p>
        
    </body>
    
</html>



