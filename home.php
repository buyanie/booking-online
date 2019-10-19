<!DOCTYPE html>
<html>
   <head>
       <title>Home</title>
	   <link rel="stylesheet" href="responsive.css">
	   <meta name="viewport" content="width=device-width, initial-scale=1.0"
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
	   <a href="login.php"><img src="dese.png" style="width:100%;"></a>
	   </div>
	   <div class="article">
	       <div class="slideshow-container">

         <div class="mySlides fade">
         <div class="numbertext">Acuity Scheduling</div>
         <img src="images/doctor.png" style="width:550px; height: 350px;">
         <div class="text"></div>
         </div>

         <div class="mySlides fade">
         <div class="numbertext">Acuity Scheduling</div>
         <img src="team.jpg" style="width:550px; height: 350px;">
         <div class="text">Acuity Scheduling</div>
         </div>

          <div class="mySlides fade">
          <div class="numbertext">Acuity Scheduling</div>
          <img src="yui.jpg" style="width:550px; height: 350px;">
          <div class="text">Acuity Scheduling</div>
          </div>
		  

          </div>
          <br>

          <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
          </div>
		  <br>
		  <br>
		   <h1 class="welcome"><b>Welcome to Acuity Scheduling</b></h1>
		  <h2 class="care">At Acuity Scheduling Clinic, our core value is care.</h2>
           <p class="frstp">We care about the dignity of our patients and all members of the Acuity family. We care about the
		   participation of our people and our partners in everything we do. We care about truth in all our actions.
		   We are passionate about quality care and professional excellence.</p>
		   
		   <p class="frstp">Accelerating transformation is a strategic imperative for the long-term success of our group,
		   development of our people, wellbeing of society, and future of our country. We at Talama are 
		   intensifying our efforts across the sustainability spectrum</p>
		   
		   <p class="frstp">Acuity Scheduling clinic is committed to ensuring that our patients receive the best possible care at our hospitals.
		   By publishing our patient experience survey results, we provide clear, transparent, unbiased and accurate information to 
		   the public about patients’ experiences in our hospitals. This information is intended to empower future patients with the
		   necessary insight to make informed decisions.</p>
	   </div>
	   
	   <div id="footer">
	       <p class="copyRight">&copy;Copyright 2019</p>
		   <a class="add" href="disclaimer.php">Disclaimer</a>
		   <a class="add" href="terms.php">Terms_of_use</a> 
	   </div>
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
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>
   </body>
</html>
