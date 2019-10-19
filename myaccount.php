<?php
   include('myscript.php');
   
   
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
	   $province = $record['Province'];
	   $id = $record['id'];
   }
   
   //if the user is not logged in, they cannot access this page
   
?>

<!DOCTYPE html>
<html>
   <head>
       <title>Appointment</title>
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
			  <li><a href="record.php">RECORD</a></li>
			  <li><a href="myaccount.php">MY ACCOUNT</a></li>
			  <li><a href="doctors.php">DOCTORS</a></li>
			  <li><a href="about.php">ABOUT US</a></li>
			  <li><a href="register.php">REGISTER</a></li></b>
			</ul>
	   </div>
	   <div class="main_article">
	         <?php if(isset($_SESSION['msg'])):?>
		     <div class="msg">
			    <?php  
				   echo $_SESSION['msg'];
				   unset($_SESSION['msg']);
				?>
			 </div>
		 <?php endif ?>
		 
		 <?php if(isset($_SESSION["username"])): ?>
			 <a href="login.php?logout='1'" style="color: red;">Logout</a>
		 <?php endif ?>
			 </div>

	      <table>
		    <thead>
			  <tr>
			  <th>First Name</th>
			  <th>Last Name</th>
			  <th>User Role</th>
			  <th>Username</th>
			  <th>Address</th>
			  <th>DOB</th>
			  <th>Email</th>
			  <th>Mobile No</th>
			  <th>Reference</th>
			  <th>Action</th>
			 </tr>
			</thead>
			<tbody>
			  <?php while($row = mysqli_fetch_array($results)){ ?>
					<tr>
			    <td><?php echo $row['FirstName']; ?></td>
			    <td><?php echo $row['LastName']; ?></td>
				<td><?php echo $row['UserRole']; ?></td>
				<td><?php echo $row['UserName']; ?></td>
				<td><?php echo $row['Address']; ?></td>
				<td><?php echo $row['dob']; ?></td>
			    <td><?php echo $row['Email']; ?></td>
				<td><?php echo $row['Mobile']; ?></td>
				<td><?php echo $row['Reference']; ?></td>
			  <td><a class="edit-btn" href="register.php?edit=<?php echo $row['id'];?>">Edit</a></td>
			  <td><a class="del-btn" href="register.php?del=<?php echo $row['id'];?>">Delete</a></td>
			 </tr> 
				 
			  <?php }?>
			    
			</tbody>
			 
		  </table>
		  <button type="submit" name="back" class="btn"><a href="register.php">Back</a></button>
		  
	   </div>
	   <div id="footer">
	       <p class="copyRight">&copy;Copyright 2019</p>
		   <a class="add" href="disclaimer.php">Disclaimer</a>
		   <a class="add" href="terms.php">Terms_of_use</a>
	   </div>
	   </div>
   </body>
</html>