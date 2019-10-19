<?php

   include('myscript.php');
   $db = mysqli_connect('localhost', 'root', '', 'element');
?>

<!DOCTYPE html>
<html>
   <head>
       <title>Admin</title>
	    <link rel="stylesheet" href="responsive.css">
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	   <script>
	     function goLastMonth(month, year){
			if(month == 1){
				--year;
				month = 13;
			}
			--month
			var monthstring = ""+month+"";
			var monthlength = monthstring.length;
			if(monthlength <=1){
				monthstring = "0"+monthstring;
			}
			document.location.href = "<?php $_SERVER['PHP_SELF'];?>?month="+monthstring+"&year="+year;
		}
		
		function goNextMonth(month, year){
			if(month == 12){
				++year;
				month = 0; 
			}
			++month;
			var monthstring = ""+month+"";
			var monthlength = monthstring.length;
			if(monthlength <=1){
				monthstring = "0"+monthstring;
			}
			document.location.href = "<?php $_SERVER['PHP_SELF'];?>?month="+monthstring+"&year="+year;
		}
	 </script>
	 <style>
	      .today{
			  background-color: green;
			  
		  }
		  .event{
			  background-color: #00ff00;
		  }
	 
	 </style>
   </head>
   <body>
      <div id="wrapper">
       <header>
	    <img src="Acuity.png" style="width:200px">
	   </header>
	   <div class="nav">
	        <ul>
			  <b><li><a href="home.php">HOME</a></li>
			  <li><a href="record.php">RECORD</a></li>
			  <li><a href="myaccount.php">MY ACCOUNT</a></li>
			  <li><a href="doctors.php">DOCTORS</a></li>
			  <li><a href="about.php">ABOUT US</a></li>
			  <li><a href="sign-in.html">REGISTER</a></li></b>
			</ul>
	   </div>
	   <div class="article">
	   <?php if(isset($_SESSION["username"])): ?>
		     <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			 <a href="login.php?logout='1'" style="color: red;">Logout</a>
		 <?php endif ?>
	       <?php
		   if(isset($_GET['day'])){
			   $day = $_GET['day'];
		   }else{
			   $day = date("j");
		   }
		   if(isset($_GET['month'])){
			   $month = $_GET['month'];
		   }else{
			   $month = date("n");
		   }
		   if(isset($_GET['year'])){
			   $year = $_GET['year'];
		   }else{
			   $year = date("Y"); 
		   }
		   
		   $currentTimeStamp = strtotime("$year-$month-$day");
		   $monthName = date("F", $currentTimeStamp);
		   $numDays = date("t", $currentTimeStamp);
		   $counter = 0;
		?>
       <table border="1">
	        <tr>
			  <td><input style="width:50px" type="button" value="<" name="previousbutton" onclick="goLastMonth(<?php echo $month.",".$year; ?>)"></td>
			  <td colspan="5"><?php echo $monthName.", ".$year;?></td>
			  <td><input style="width:50px" type="button" value=">" name="nextbutton" onclick="goNextMonth(<?php echo $month.",".$year; ?>)"></td>
			</tr>
			<tr>
			  <td width="50px">Sun</td>
			  <td width="50px">Mon</td>
			  <td width="50px">Tue</td>
			  <td width="50px">Wed</td>
			  <td width="50px">Thu</td>
			  <td width="50px">Fri</td>
			  <td width="50px">Sat</td>
			</tr>
			<?php
			  echo "<tr>";
			    for($i = 1; $i < $numDays+1; $i++, $counter++){
					$timeStamp = strtotime("$year-$month-$i");
					if($i == 1){
					   $firstDay = date("w", $timeStamp);
					   for($j = 0; $j < $firstDay; $j++, $counter++){
						   echo "<td>&nbsp;</td>";
					   }
					}
					if($counter % 7 == 0){
						echo "</tr><tr>";
					}
					$monthstring = $month;
					$monthlength = strlen($monthstring);
					$daystring = $i;
					$daylength = strlen($daystring);
					if($monthlength <= 1){
						$monthstring = "0".$monthstring;
					}
					if($daylength <= 0){
						$daystring = "0".$daystring;
					}
					$todaysDate = date("m/d/y");
					$dateToCompare = $monthstring.'/'.$daystring.'/'.$year;
					echo "<td align='center'";
					  if($todaysDate == $dateToCompare){
						 echo "class='today'"; 
					  }else{
						  $sqlcount = "select * from events where eventDate='".$dateToCompare."'";
						  $noOfEvents = mysqli_num_rows(mysqli_query($db, $sqlcount));
						  if($noOfEvents >= 1){
							 echo "class='event'"; 
						  }
					  }
					echo "><a href='".$_SERVER['PHP_SELF']."?month=".$monthstring."&day=".$daystring."&year=".$year."&v=true'>".$i."</a></td>";
				}
			  echo "</tr>";
			?>
	   </table> 
	   <a href="record.php">My-Patients</a>
        <?php
            if(isset($_GET['v'])){
				
				$sqlEvent = "select * from events where eventDate='".$month."/".$day."/".$year."'";
				$resultEvent = mysqli_query($db, $sqlEvent);
				echo "<hr>";
				while($event = mysqli_fetch_array($resultEvent)){
					echo "Title :".$event['Title']."</br>";
					echo "Details :".$event['Details']."</br>";
				}
			}
        ?>		
	   </div>
	   <div id="footer">
	       <p class="copyRight">&copy;Copyright 2019</p>
		   <a class="add" href="disclaimer.php">Disclaimer</a>
		   <a class="add" href="terms.php">Terms_of_use</a>
	   </div>
	   </div>
   </body>
</html>