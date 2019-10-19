<!DOCTYPE html>
<html>
   <head>
       <title>About-Us</title>
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
	   <div class="aside">
	   <a href="login.php"><img src="images/doctor.png" style="width:100%;"></a>
	   </div>
	   <div class="article">
	       <div class="slideshow-container">
              </div>
            <div class="mySlides fade">
         <div class="numbertext">Acuity Scheduling</div>
         <img src="images/doctor.png" style="width:550px; height: 350px;">
         <div class="text"></div>
         </div>
		 <br>
		  <h2 class="care">Vision</h2>
	   <p class="frstp">We strive to provide professional advice, excellent service and to promote Total Body Wellness 
	   in tranquil surroundings.</p>
	   
	   <h2 class="care">Mission</h2>
	    <p class="frstp">As professional Skin and Body Care Therapists, it is our aim to bring our clients the very best in treatment techniques, 
		product knowledge and the latest technology.</p>
		
		<h2 class="care">History</h2>
		<p class="frstp">The Acuity Scheduling Clinic was erected in 1999. The Acuity Scheduling Clinic was run by a dedicated therapist, Lee-Ann de Wet, until she and 
		her husband, Andy, were blessed with a beautiful little girl, Kirsten, on April 12 2000.This was exactly a month after Eileen Burt and Reta Bezuidenhout,
		now de Meyer, bought the Clinic. It has grown from a one-man band to a symphony of 6 full time therapists, a nail technician, a student from time to time and a full time office worker. 
Eileen was ready for early retirement and sold her shares to Reta. The take over was on the 1 November 2007.</p>
	   </div>
	      	   <script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
	   <div id="footer">
	       <p class="copyRight">&copy;Copyright 2019</p>
		   <a class="add" href="disclaimer.php">Disclaimer</a>
		   <a class="add" href="terms.php">Terms_of_use</a>
	   </div>
	   </div>
   </body>
</html>