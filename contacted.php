<?php
   include('myscript.php');
?>

<!DOCTYPE html>
<html>
   <head>
       <title>Contact_Us</title>
	    <link rel="stylesheet" href="responsive.css">
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <div id="wrapper">
       <header>
	   <img src="download.png" style="width:200px">
	   </header>
	   <div class="nav">
	        <ul>
			  <b><li><a href="home.php">HOME</a></li>
			  <li><a href="about.php">ABOUT US</a></li>
			  <li><a href="admin.php">ADMIN</a></li>
			  <li><a href="service.php">OUR SERVICE</a></li>
			  <li><a href="sign-in.html">REGISTER</a></li>
			  <li><a href="contact.php">CONTACT US</a></li></b>
			</ul>
	   </div>
	   <div class="main_article">
	   <div class="head">
	   <h2>Users Comments/messages</h2>
	   <?php if(isset($_SESSION['msg'])):?>
		     <div class="msg">
			    <?php  
				   echo $_SESSION['msg'];
				   unset($_SESSION['msg']);
				?>
			 </div>
		 <?php endif ?>
	   </div>  
	   </div>
	   <div id="footer">
	       <p class="copyRight">&copy;Copyright 2019</p>
		   <a class="add" href="disclaimer.php">Disclaimer</a>
		   <a class="add" href="terms.php">Terms_of_use</a>
	   </div>
	   </div>
   </body>
</html>