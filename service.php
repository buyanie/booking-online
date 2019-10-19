<?php
  include('myscript.php');
?>

<!DOCTYPE html>
<html>
   <head>
       <title>Home</title>
	    <link rel="stylesheet" href="responsive.css">
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <div id="wrapper">
       <header>
	    <img src="acuity.png" style="width:200px">
	   </header>
	   <div class="nav">
	   <a href="login.php?logout='1'" style="color: red;">Logout</a>
	        <ul>
			  
			  <b> <li><a href="home.php"><font color="blue">HOME</font></a></li> 
			<b> <li><a href="home.php"><font color="blue">ABOUT US</font></a></li>
			  <li><a href="about.php"><font color="blue">SERVISE</font></a></li>
			  <li><a href="login.php"><font color="blue">APPOINTMENTS</font></a></li>
			  <li><a href="register.php"><font color="blue">REGISTER</font></a>
			  <li><a href="contact.php"><font color="blue">CONTACT US</font></a> 
			</ul>
	   </div>
	   <div class="main_article">
           <div class="left">
		      <img src="red.jpg" class="doc" style="width:275px; height: 150px;">
			  <h3><u>Dentist</u></h3>
			  <p>At our best Acuity scheduling, we carry out all complex dental implant treatment in the most 
			  scientific way through our leading western trained dental implant surgeon who is has over 22 years of exclusive
			  dental implant treatment experience. Our services in the field of dental implants are unmatched . Majority of our
			  patients come through word of mouth and we specializes in corrective dental treatments where the road has come to
			  an end in others hands. Our cosmetic dentistry techniques are superlative and unique and customer designed. For Dr Malepe
			  who is our Dental implant surgeon, Dental implant treatment is his passion and , vision and goal.</p>
			  <p>To book an appointment, <a href="appointment.php">Click here</a></p>
		   </div>
		   <div class="middle">
		      <img src="wea.jpg" class="doc" style="width:275px; height: 150px;">
			  <h3><u>Endocrinologists</u></h3>
		       <p>At Acuity scheduling clinic, we also have optometrists.are equipped with the latest technology to provide you with 
			   affordable eye care that adheres to the highest standards.Our buy one get one free promotion is now on 
			   and available to both medical aid and cash paying patients. Our services include Comprehensive eye test,
               Interior & exterior eye examination, Dispensing of spectacles, Licence department eye test with certificate, 
			   Specialised test for conditions such as glaucoma, diabetic retinopathy and dry-eye syndrome</p>
			   <p>To book an appointment, <a href="appointment.php">Click here</a></p>
		   </div>
		   <div class="right">
		        <img src="images/zb.jpg" class="doc" style="width:275px; height: 150px;">
		        <h3><u>Dermatologists</u></h3>
				<p>At Acuity Clinic, we also have Dermatologists. Dermatology involves but is not limited to study, research, and
				diagnosis of normal and disorders, diseases, cancers, cosmetic and ageing conditions of the skin, fat, hair, nails
				and oral and genital membranes, and the management of these by different investigations and therapies, including but
				not limited to dermatohistopathology, topical and systemic medications</p>
				<p>To book an appointment, <a href="appointment.php">Click here</a></p>
		   </div>
	   </div>
	   <?php if(isset($_SESSION["username"])): ?>
			 <a href="login.php?logout='1'" style="color: red;">Logout</a>
		 <?php endif ?>
	    <div id="footer">
	       <p class="copyRight">&copy;Copyright 2019</p>
		   <a class="add" href="disclaimer.php">Disclaimer</a>
		   <a class="add" href="terms.php">Terms_of_use</a>
	   </div>
	   </div>
   </body>
</html>