<?php
session_start();
?>
<html>
    <head>
        <link rel='stylesheet' type='text/css' href='boatback.css' />

    <title>IQ River Crossing</title>
    </head>
    <body>   
        <?php
        echo  "<h1> WELCOME, <span>" . $_SESSION['n']."</span></h1>";
       
        ?>
   
    <div class="image">        
 <a href="boatback.php"><img class="boat2" src="images/sailing.png" alt=""></a>
 <a href=""><img class="cabbage" src="images/cabbage.png" alt=""></a>
 <a href=""><img class="sheep" src="images/sheep.png" alt=""></a>
 <a href="wolf.php"><img class="wolf" src="images/wolf.png" alt=""></a>
  
  
  </div> 
        
        
        <div class="buttonDIV">
  <a class="testbutton" href="start.html">Home</a>
  <a class="testbutton" href="game1.php">Restart</a>
 <a class="testbutton" href="#popupMenu1">Hints</a>
  <a class="testbutton" href="http://sustainability.lehigh.edu/sites/sustainability.lehigh.edu/files/Trash.png">Quit</a>
        </div>
        
        
<div id="popupMenu1" class="overlay">
	<div class="popupMenu">
		<h2>How to play:</h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
<p>Please help the man in the boat to move the wolf, the sheep and the cabbage to the other side of the lake.</p>
<p>Notice that: wolves eat sheep, sheep eat cabbage when no man around.</p>
<span id="hint">HINT: MUST SAILS THE SHEEP TWICE!</span>

	</div>

</div>
</div>
        
    </body>
    
</html>



