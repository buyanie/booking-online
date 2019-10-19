<?php
	   $doc = "";
	   $dop = "";
	   $timeslot = "";
	   $name = "";
	   $mobile = "";
	   $address = "";
	   $genda = "";
	   $id = 0;
	   $errors = array();
	   $edit_state = false;

   $db = mysqli_connect('localhost', 'root', '', 'element');
   
   if(isset($_POST['book'])){
	   $doc = $_POST['doctors'];
	   $dop = $_POST['dop'];
	   $timeslot = $_POST['time'];
	   $name = $_POST['name'];
	   $address = $_POST['address'];
	   $mobile = $_POST['mobile'];
	   $genda = $_POST['genda'];
	   
	   $sql_d = "SELECT * FROM appointment WHERE dop='$dop'";
	   $res_d = mysqli_query($db,$sql_d);
	   
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
	   if(mysqli_num_fields($res_d) == 1){
		   array_push($errors, "<img src='sorry.jpg' style='width:30px; height:30px;'>Sorry....the date is already taken!!!!! try another one");
	   }
       if(count($errors) == 0){
	   $query = "INSERT INTO appointment(Doctor, dop, Time, PatientName, Mobile, Address, Gender)
	             VALUES ('$doc','$dop', '$timeslot', '$name', '$mobile','$address','$genda')";
       mysqli_query($db, $query);
	   $_SESSION['msg'] = "Appointment saved";
	   
	   }
   }
   //search
   function search($db){
	   if(isset($_POST['serch'])){
		   $searchName = $_POST['name'];
		   $querySearch = "SELECT Doctor, dop, Time, PatientName, Mobile, Address, Gender FROM appointment WHERE PatientName='$searchName'";
		   $resultSearch = mysqli_query($db, $querySearch);
		   
		   while($row = $resultSearch->fetch_assoc()){
			   echo $row['Doctor']."<br>";
		       echo $row['dop']."<br>";
		       echo $row['Time']."<br>";
               echo $row['PatientName'];
			   echo $row['Mobile']."<br>";
		       echo $row['Address']."<br>";
		       echo $row['Gender']."<br>";
		   }
	   }
   }
   if(isset($_POST['update'])){
	   $doc = $_POST['doctors'];
	   $dop = $_POST['dop'];
	   $timeslot = $_POST['time'];
	   $name = $_POST['name'];
	   $address = $_POST['address'];
	   $mobile = $_POST['mobile'];
	   $genda = $_POST['genda'];
	   $id = $_POST['id'];
	   
	   mysqli_query($db, "UPDATE `appointment` SET Doctor = '$doc', dop = '$dop', Time = '$timeslot', PatientName = '$name', Mobile = '$mobile', Address = '$address', Gender = '$genda' WHERE id = $id");
	   $_SESSION['msg'] = "Appointment updated";
	   header('location: record.php');
   }
   if(isset($_GET['del'])){
	   $id = $_GET['del'];
	   mysqli_query($db, "DELETE FROM appointment WHERE id = $id");
	   $_SESSION['msg'] = "Appointment deleted";
	   header('location: record.php');
   }
   
   $results = mysqli_query($db, "SELECT * FROM appointment");
   
?>