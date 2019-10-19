<?php
      

        session_start();
       $first = "";
	   $last = "";
	   $userrole = "";
	   $username = "";
	   $password = "";
	   $address = "";
	   $dob = "";
	   $email = "";
	   $cellNum = "";
	   $province = "";
	   $id = 0;
	   $errors = array();
	   
	   $edit_state = false;
	   //Connect to the database
   $db = mysqli_connect('localhost', 'root', '', 'element');
   //Register for users
   if(isset($_POST['register'])){
	   $first = $_POST['first'];
	   $last = $_POST['last'];
	   $userrole = $_POST['role'];
	   $username = $_POST['username'];
	   $password = $_POST['password'];
	   $pwd2 = $_POST['pwd'];
	   $address = $_POST['address'];
	   $dob = $_POST['dob'];
	   $email = $_POST['email'];
	   $cellNum = $_POST['mobile'];
	   $reference = $_POST['reference'];
	   $pat = "Patient";
	   $doc = "Doctor";
	   $adm = "Admin";
	  
       if(empty($first)){
		   array_push($errors, "First name is required");
	   }
	   if(empty($last)){
		   array_push($errors, "Last is required");
	   }
	   if(empty($userrole)){
		   array_push($errors, "User role is required");
	   }
	   if(empty($username)){
		   array_push($errors, "Username is required");
	   }
	   if(empty($password)){
		   array_push($errors, "Password is required");
	   }
	   if($password != $pwd2){
		   array_push($errors, "The two password do not match");
	   }
	   if(empty($address)){
		   array_push($errors, "Address is required");
	   }
	   if(empty($dob)){
		   array_push($errors, "Date of birth is required");
	   }
	   if(empty($email)){
		   array_push($errors, "Email is required");
	   }
	   if(empty($cellNum)){
		   array_push($errors, "Cell Number is required");
	   }
	   if(empty($reference)){
		   array_push($errors, "Reference is required");
	   }
	   
	   
	   if(count($errors) == 0 && $userrole == $pat){	   
        $pswd = md5($password);
	   $query = "INSERT INTO users(FirstName, LastName, UserRole, UserName, Password, Address, dob, Email, Mobile, Reference)
            	 VALUES ('$first','$last','$userrole','$username','$password','$address','$dob','$email','$cellNum','$reference')";
       mysqli_query($db, $query);
	     $_SESSION['username'] = $username;
	    $_SESSION['msg'] = "Registration Successful";
	   echo "<script>window.open('service.php','_self')</script>"; 
	   	}else if(count($errors) == 0 && $userrole == $adm){
			$pswd = md5($password);
	   $query = "INSERT INTO users(FirstName, LastName, UserRole, UserName, Password, Address, dob, Email, Mobile, Reference)
            	 VALUES ('$first','$last','$userrole','$username','$password','$address','$dob','$email','$cellNum','$reference')";
       mysqli_query($db, $query);
	     $_SESSION['username'] = $username;
	    $_SESSION['msg'] = "Registration Successful";
	   echo "<script>window.open('admin.php','_self')</script>";
		}else if(count($errors) == 0 && $userrole == $doc){
			$pswd = md5($password);
	   $query = "INSERT INTO users(FirstName, LastName, UserRole, UserName, Password, Address, dob, Email, Mobile, Reference)
            	 VALUES ('$first','$last','$userrole','$username','$password','$address','$dob','$email','$cellNum','$reference')";
       mysqli_query($db, $query);
	     $_SESSION['username'] = $username;
	    $_SESSION['msg'] = "Registration Successful";
	   echo "<script>window.open('doctors.php','_self')</script>";
		}
   }
   
   //Booking 
   if(isset($_POST['book'])){
	   $doc = $_POST['doctors'];
	   $dop = $_POST['dop'];
	   $timeslot = $_POST['time'];
	   $name = $_POST['name'];
	   $address = $_POST['address'];
	   $mobile = $_POST['mobile'];
	   $genda = $_POST['genda'];
	   
	   if(empty($doc)){
		   array_push($errors, "Doctor name is required");
	   }
	   if(empty($dop)){
		   array_push($errors, "Appointment date is required");
	   }
	   if(empty($timeslot)){
		   array_push($errors, "Time is required");
	   }
	   if(empty($name)){
		   array_push($errors, "name is required");
	   }
	   if(empty($address)){
		   array_push($errors, "Address is required");
	   }
	   if(empty($mobile)){
		   array_push($errors, "Mobile number is required");
	   }
	   if(empty($genda)){
		   array_push($errors, "Gender is required");
	   }
       if(count($errors) == 0){
	   $query = "INSERT INTO appointment(Doctor, dop, Time, PatientName, Mobile, Address, Gender)
	             VALUES ('$doc','$dop', '$timeslot', '$name', '$mobile','$address','$genda')";
       mysqli_query($db, $query);
	   $_SESSION['msg'] = "Appointment saved";
	   header('location: record.php');
	   }
   }
   
   //Contact us 
   if(isset($_POST['contact'])){
	   $user = $_POST['name'];
	   $uemail = $_POST['email'];
	   $subject = $_POST['subject'];
	   $message = $_POST['message'];
       if(empty($user)){
		   array_push($errors, "Name is required");
	   }
	   if(empty($uemail)){
		   array_push($errors, "Email is required");
	   }
	   if(empty($subject)){
		   array_push($errors, "Subject is required");
	   }
	   if(empty($message)){
		   array_push($errors, "Message is required");
	   }
	    if(count($errors) == 0){	   
	   $query = "INSERT INTO contactus(Name, Email, Subject, Message)
            	 VALUES ('$user','$uemail','$subject','$message')";
       mysqli_query($db, $query);
	    $_SESSION['msg'] = "Thank you for contacting us, we'll contact you as soon as we recieve your message";
	   header('location: contacted.php');
	   	}
   }
   
   //get users' messages from contact us table
   function getMessage($db){
	   $sql = "SELECT * FROM contactus";
	   $res = mysqli_query($db, $sql);
	   while($row = $res->fetch_assoc()){
		    echo "<div class='comments'>";
		       echo $row['Name']."<br>";
		       echo $row['Email']."<br>";
		       echo $row['Subject']."<br>";
               echo $row['Message'];
			   //delete message
			   echo "<p>
			       <form class='delete-form' method='post' action='".deleteComments($db)."'>
				       <input type='hidden' name='name' value='".$row['Name']."'></br>
					   <button type='submit' name='commentDelete'>Delete</button>
				   </form>
			   </p>";
            echo "</div>";		  
	   }
   }
   
   //function to delete users' comments/message
   function deleteComments($db){
	   if(isset($_POST['commentDelete'])){
		   $name = $_POST['name'];
		   $sql = "DELETE FROM contactus WHERE Name='$name'";
		   $res = mysqli_query($db, $sql);
		   header("Location: message.php");
	   }
   }
   
   //login users
   if(isset($_POST['login'])){
	   $username = $_POST['username'];
	   $password = $_POST['password'];
	   $pat = "Patient";
	   $doc = "Doctor";
	   $adm = "Admin";
	   if(empty($username)){
		   array_push($errors, "Username is required");
	   }
	   if(empty($password)){
		   array_push($errors, "Password is required");
	   } 
	   if(count($errors) == 0){
		   $p = md5($password);
		   $query = "select * from users where UserName='$username' And Password='$password' And UserRole='$pat'";
	       $run_pat = mysqli_query($db, $query);
	  
	       $query_doc = "select * from users where UserName='$username' And Password='$password' And UserRole='$doc'";
	       $run_doc = mysqli_query($db, $query_doc);
	  
	       $query_adm = "select * from users where UserName='$username' And Password='$password' And UserRole='$adm'";
	       $run_adm = mysqli_query($db, $query_adm);
	  
	       if(mysqli_num_rows($run_pat)==1){
		         echo "<script>window.open('service.php','_self')</script>"; 
	          }else if(mysqli_num_rows($run_doc)==1){
		         echo "<script>window.open('doctors.php','_self')</script>";
	          }else if(mysqli_num_rows($run_adm)==1){
		         echo "<script>window.open('admin.php','_self')</script>";
	          }else{
		         echo "<script>alert('Username or password is invalid')</script>";
	         }
	   }
   }
    //logout
   if(isset($_GET['logout'])){
	   session_destroy();
	   unset($_SESSION['username']);
	   header('location: login.php');
   }
   
   //Update users
   if(isset($_POST['update'])){
	   $first = $_POST['first'];
	   $last = $_POST['last'];
	   $userrole = $_POST['role'];
	   $username = $_POST['username'];
	   $password = $_POST['password'];
	   $address = $_POST['address'];
	   $dob = $_POST['dob'];
	   $email = $_POST['email'];
	   $cellNum = $_POST['mobile'];
	   $province = $_POST['province'];
	   $id = $_POST['id'];
	   
	   mysqli_query($db, "UPDATE users SET FirstName = '$first', LastName = '$last', UserRole = '$userrole', UserName = '$username', Password = '$password',  Address = '$address', dob = '$dob', Email = '$email', Mobile = '$cellNum', Province = '$province' WHERE id = $id");
	   $_SESSION['msg'] = "Account updated";
	   header('location: myaccount.php');
   }
   if(isset($_GET['del'])){
	   $id = $_GET['del'];
	   mysqli_query($db, "DELETE FROM users WHERE id = $id");
	   $_SESSION['msg'] = "Account deleted";
	   header('location: myaccount.php');
   }
   
   $results = mysqli_query($db, "SELECT * FROM users");
   
?>
