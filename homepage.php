

<!DOCTYPE html>
<html>
<?php 
    require_once("head.php");
?>
<body>
<?php  
    require_once("navbar.php");
?>
    <div class="slider_bg">
 <div class="wrap">
 <section class="slider">
        <div class="flexslider carousel">
          <ul class="slides">
  	    		<li>
              <a href="signe1.php"><img width=" 250" height="250" src="img/images/douleur articulation.JPG" /></a>
              <center>
              <h2>Douleur Articulation</h2>
              </center>
  	    	</li>
  	    		<li>
  	    	    <a href="signe2.php"><img width=" 250" height="250" src="img/images/femmes-regles.JPG" /></a>
              <center>
              <h2>Douleur Abdominale</h2>
              </center>
  	    		</li>
  	    		<li>
  	    	    <a href="signe3.php"><img width=" 250" height="250" src="img/images/index.JPG" /></a>
              <center>
              <h2>Douleur Au dos</h2>
              </center>
  	    		</li>
  	    		<li>
  	    	    <a href="signe4.php"><img width=" 250" height="250" src="img/images/fatigue.jpg" /></a>
              <center>
              <h2>Fatigue Generale</h2>
              </center>
  	    		</li>
  	    		
          </ul>
        </div>
      </section>
<div class="form-group" align="center"> 
        <a href="autresignes.php" class="btn " >Autres Signes</a>
    </div>
</div>
</div>


 
<?php
    require_once("footer.php");
?>

</body>
</html>