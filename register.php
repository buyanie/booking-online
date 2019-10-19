<?php
     include('myscript.php');
     
	 
	 $db = mysqli_connect('localhost', 'root', '', 'element');
	    
   //edit
   if(isset($_GET['edit'])){
	   $id = $_GET['edit'];
	   $edit_state = true;
	   
	   $rec = mysqli_query($db, "SELECT * FROM users WHERE id=$id");
	   $record = mysqli_fetch_array($rec);
	   $first = $record['FirstName'];
	   $last = $record['LastName'];
	   $userrole = $record['UserRole'];
	   $username = $record['UserName'];
	   $password = $record['Password'];
	   $address = $record['Address'];
	   $dob = $record['dob'];
	   $email = $record['Email'];
	   $cellNum = $record['Mobile'];
	   $referene = $record['Reference'];
	   $id = $record['id'];
   }
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
		     <h2><font color="blue">SYSTEM USER REGISTATION PAGE</font></h2>
		  </div>
		    <form action="register.php" method="post">
			      <?php
				     include ('errors.php');
				  ?>
				<input type="hidden" name="id" value="<?php echo $id;?>">
				<div class="input">
				  <label>First Name:</label>
				  <input type="text" name="first" value="<?php echo $first;?>"></br>
				  </div>
				  <div class="input">
				  <label>Last Name:</label>
				  <input type="text" name="last" value="<?php echo $last;?>"></br>
				  </div>
				  <div class="group">
				    <label>User Role</label>
					<select name="role" value="<?php echo $userrole;?>">
					  <option value="Usertype">Choose user type</option>
					  <option value="Patient">Patient</option>
					  <option value="Admin">Admin</option>
					  <option value="Doctor">Doctor</option>
					</select>
				</div>
			    <div class="input">
				  <label>Username/ID:</label>
				  <input type="text" name="username" placeholder="ID Number" value="<?php echo $username;?>"></br>
				  </div>
				  <div class="input">
				  <label>Password:</label>
				  <input type="password" name="password" value="<?php echo $password;?>"></br>
				  </div>
				  <div class="input">
				  <label>Re-Enter Password:</label>
				  <input type="password" name="pwd"></br>
				</div>
				<div class="input">
				  <label>Address:</label>
				  <input type="text" name="address" value="<?php echo $address;?>"></br>
				  </div>
				  <div class="input">
				  <label>DOB:</label>
				  <input type="date" name="dob" value="<?php echo $dob;?>"></br>
				  </div>
				  <div class="input">
				  <label>Email:</label>
				  <input type="text" name="email" value="<?php echo $email;?>"></br>
				  </div>
				  <div class="input">
				  <label>Mobile:</label>
				  <input type="text" name="mobile" value="<?php echo $cellNum;?>"></br>
				  </div>
				  <div class="input">
				  <label>Select Reference:</label>
				  <select name="reference" value="<?php echo $province;?>">
				      <option value="ref">Choose Reference</option>
					  <option value="Word Of Mouth">Word Of Mouth</option>
					  <option value="Website">Website</option>
					  <option value="QWT">QWT</option>
					  <option value="Myself">Myself</option>
					  <option value="Other">Other</option>
					 
					</select>
					</div>
				<div class="input">
				  <?php if($edit_state == false): ?>
				  <button type="submit" name="register" class="btn">Save</button>
				<?php else: ?>
				   <button type="submit" name="update" class="btn">Update</button>
				<?php endif ?>
				</div>
				<p>
				 Already a member? <a href="login.php">Log-in</a>
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