<?php
    include('myscript.php');

?>

<!DOCTYPE html>
<html>
   <head>
       <title>Login</title>
	   <link rel="stylesheet" href="responsive.css">
   </head>
   <body>
      <div id="wrapper">
       <header>
	    <img src="acuity.png" style="width:200px">
	   </header>
	   <div class="nav">
	           <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">online booking</span>
    </a>
	        <ul>
			
			 <b> <li><a href="home.php"><font color="blue">HOME</font></a></li> 
			  <li><a href="about.php"><font color="blue">ABOUT US</font></a></li>
			  <li><a href="login.php"><font color="blue">LOG IN</font></a></li>
			  <li><a href="register.php"><font color="blue">REGISTER</font></a>
			  <li><a href="contact.php"><font color="blue">CONTACT US</font></a> 
			  </b>
			  
			</ul>
	   </div>
	   <div class="main_article">
	      <div class="head">
		     <h2><font color="blue">LOG IN</font></h2>
		  </div>
		    <form action="login.php" method="post">
			    <?php
				     include ('errors.php');
				  ?>
			    <div class="input">
				  <label>Username:</label>
				  <input type="text" name="username"></br>
				  </div>
				  <div class="input">
				  <label>Password:</label>
				  <input type="password" name="password"></br>
				  </div>
				<div class="input">
				  <button type="submit" name="login" class="btn">Login</button>
				</div>
				<p>
				 Not Yet a member? <a href="register.php">Register</a>
				</p>
			</form>
		  
	   </div>
	   <div id="footer">
	       <p class="copyRight">&copy;Copyright 2019</p>
		   <a class="add" href="disclaimer.php">Disclaimer</a>
		   <a class="add" href="terms.php">Terms_of_use</a>
	   </div>
	   </div>
   </body>
</html>