<?php
   include('booking.php');
   
   
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
   </head>
   <body>
      <div id="wrapper">
       <header>
	    <img src="acuity.png" style="width:200px">
	   </header>
	   <div class="nav">
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
	         <?php if(isset($_SESSION['msg'])):?>
		     <div class="msg">
			    <?php  
				   echo $_SESSION['msg'];
				   unset($_SESSION['msg']);
				?>
			 </div>
		 <?php endif ?>
	      <table>
		    <thead>
			  <tr>
			   <th>Doctor</th>
			  <th>Appointment date</th>
			  <th>Time</th>
			  <th>Name</th>
			  <th>Mobile</th>
			  <th>Address</th>
			  <th>Gender</th>
			  <th>Action</th>
			 </tr>
			</thead>
			<tbody>
			  <?php while($row = mysqli_fetch_array($results)){ ?>
					<tr>
				<td><?php echo $row['Doctor']; ?></td>
			    <td><?php echo $row['dop']; ?></td>
			    <td><?php echo $row['Time']; ?></td>
				<td><?php echo $row['PatientName']; ?></td>
				<td><?php echo $row['Mobile']; ?></td>
			    <td><?php echo $row['Address']; ?></td>
				<td><?php echo $row['Gender']; ?></td>
			  <td><a class="edit-btn" href="appointment.php?edit=<?php echo $row['id'];?>">Edit</a></td>
			  <td><a class="del-btn" href="appointment.php?del=<?php echo $row['id'];?>">Delete</a></td>
			 </tr> 
				 
			  <?php }?>
			    
			</tbody>
			 
		  </table>
		  <button type="submit" name="back" class="btn"><a href="admin.php">Back</a></button>
		  
	   </div>
	   <div id="footer">
	       <p class="copyRight">&copy;Copyright 2019</p>
		   <a class="add" href="disclaimer.php">Disclaimer</a>
		   <a class="add" href="terms.php">Terms_of_use</a>
	   </div>
	   </div>
   </body>
</html>