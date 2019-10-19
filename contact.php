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
   <style>
    .mys{ color:blue}
   </style>
      <div id="wrapper">
       <header>
	     <img src="acuity.png" style="width:200px">
	   </header>
	   <div class="nav mys">
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
		     <h2><font color="blue">CONTACT US</font></h2>
		  </div>
	       <form  method="post" action="contact.php">
		   <?php
				     include ('errors.php');
				  ?>
		       <input type="hidden" name="id" value="<?php echo $id;?>">
			  
				 <div class="group">
				    <label>Name:</label>
					<input type="text" name="name">
				</div>
				 <div class="group">
				    <label>Email:</label>
					<input type="text" name="email" >
				</div>
			   <div class="group">
				    <label>Subject:</label>
					<input type="text" name="subject">
				</div>
		        <div class="group">
				    <label>Message:</label>
					<textarea name="message"></textarea>
				</div>
				
				<div class="group">
				
				  <button type="submit" name="contact" class="btn">Submit</button>
				
					
				</div>
	      </form>
	   </div>
	   <div id="footer">
	       <p class="copyRight">&copy;Copyright 2019</p>
		   <a class="add" href="disclaimer.php">Disclaimer</a>
		   <a class="add" href="terms.php">Terms_of_use</a>
	   </div>
	   </div>
	   <script src="remove.js"></script>
   </body>
</html>