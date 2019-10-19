<?php
   include('booking.php');
       
   $db = mysqli_connect('localhost', 'root', '', 'element');
   
   if(isset($_GET['edit'])){
	   $id = $_GET['edit'];
	   $edit_state = true;
	   
	   $rec = mysqli_query($db, "SELECT * FROM appointment WHERE id=$id");
	   $record = mysqli_fetch_array($rec);
	   $doc = $record['Doctor'];
	   $dop = $record['dop'];
	   $timeslot = $record['Time'];
	   $name = $record['PatientName'];
	   $address = $record['Address'];
	   $mobile = $record['Mobile'];
	   $genda = $record['Gender'];
	   $id = $record['id'];
   }
?>

<!DOCTYPE html>
<html>
   <head>
       <title>Appointment</title>
	    <link rel="stylesheet" href="responsive.css">
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  </script>
   </head>
   <body>
   <script>
	     function printContent(el){
		      var restorepage = document.body.innerHTML;
			  var printcontent = document.getElementById(el).innerHTML;
			  document.body.innerHTML = printcontent;
			  window.print();
			  document.body.innerHTML = restorepage;
		 }
	</script>
      <div id="wrapper">
       <header>
	     <img src="Acuity.png" style="width:200px">
	    <h1>Acuity Scheduling</h1>
	   </header>
	   <div class="nav">
	   <a href="login.php?logout='1'" style="color: red;">Logout</a>
	        <ul>
			  <b><li><a href="home.php"><font color="blue">HOME</font></a></li>
			  <li><a href="about.php"><font color="blue">ABOUT US</font></a></li>
			  <li><a href="service.php"><font color="blue">SERVUCES</font></a></li>
			  <li><a href="appointment.php"><font color="blue">APPOINTMENT</font></a></li>
			  <li><a href="register.php"><font color="blue">REGISTER</font></a></li>
			  <li><a href="contact.php"><font color="blue">CONTACT US</font></a></li></b>
			</ul>
	   </div>
	   <div class="main_article">
	   <div class="head">
		     <h2>Doctor Appointment Form</h2>
		  </div>
	       <form id="frm1" method="post" action="appointment.php">
		        <?php
				     include ('errors.php');
				  ?>
		       <input type="hidden" name="id" value="<?php echo $id;?>">
			   <div class="group">
				    <label>Select Doctor</label>
					<select name="doctors" value="<?php echo $doc;?>">
					  <option value="<?php echo $doc;?>">Choose Doctor type</option>
					  <option value="General Practitioner(R500.00">General Practitioner(R400.00)</option>
					  <option value="dentist(R500.00">Dentist(R500.00)</option>
					  <option value="dermatologists(R650.00)">Dermatologists(R650.00)</option>
					  <option value="Cardiologists(R400.00)">Cardiologists(R1200.00)</option>
					  <option value="Endocrinologists(R800.00)">Endocrinologists(R800.00)</option>
					  <option value="Anesthesiologists(R300.00)">Anesthesiologists(R300.00)</option>
					</select>
				</div>
				 <div class="group">
				    <label>Appointment date</label>
					<input type="date" name="dop" value="<?php echo $dop;?>">
				</div>
				 <div class="group">
				    <label>Time Slot</label>
					<input type="time" name="time" value="<?php echo $timeslot;?>" id="time">
				</div>
				<h5>Patient Details</h5>
			   <div class="group">
				    <label>Patient Name</label>
					<input type="text" name="name"  id="name" value="<?php echo $name;?>">
				</div>
		        <div class="group">
				    <label>Patient Mobile</label>
					<input type="text" name="mobile" value="<?php echo $mobile;?>">
				</div>
				<div class="group">
				    <label>Address</label>
					<input type="text" name="address" value="<?php echo $address;?>">
				</div>
				<div class="group">
				    <label>Gender</label>
					<select name="genda" value="<?php echo $genda;?>">
					  <option value="<?php echo $genda;?>">Choose gender</option>
					  <option value="male">Male</option>
					  <option value="female">Female</option>
					</select>
				</div>
				<div class="group">
				<?php if($edit_state == false): ?>
				  <button type="submit" name="book" class="btn" onclick="myFunction()">Book</button>
				<?php else: ?>
				   <button type="submit" name="update" class="btn">Update</button>
				<?php endif ?>	
				</div>
				
	      </form>
		  <button onclick="myFunction()">Appointment Info</button>
		  <button onclick="printContent('demo')" name="prnt">Print Content</button>
		  <p id="demo">
		  
		  </p>				

        <script>
        function myFunction() {
             var x = document.getElementById("frm1");
             var text = "";
             var i;
             for (i = 0; i < x.length ;i++) {
             text += x.elements[i].value + "<br>";
         }
         document.getElementById("demo").innerHTML = text;
		 console.log(frm1);
      }
       </script>
          <?php if(isset($_SESSION["username"])): //log users out ?>
			 <a href="login.php?logout='1'" style="color: red;">Logout</a>
		    <?php endif ?>
	   </div>
	   <div id="footer">
	       <p class="copyRight">&copy;Copyright 2019</p>
	   </div>
	   </div>
	   
   </body>
</html>