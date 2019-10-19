<!DOCTYPE html>
<html>
   <head>
     <title>Calendar</title>
	 <script>
	    function goLastMonth(month, year){
			if(month == 1){
				--year;
				month = 13;
			}
			document.location.href = "<?php $_SERVER['PHP_SELF'];?>?month="+(month-1)+"&year="+year;
		}
		
		function goNextMonth(month, year){
			if(month == 12){
				++year;
				month = 0; 
			}
			document.location.href = "<?php $_SERVER['PHP_SELF'];?>?month="+(month+1)+"&year="+year;
		}
	 </script>
   </head>
   <body>
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
					echo "<td align='center'>".$i."</td>";
				}
			  echo "</tr>";
			?>
	   </table>
   </body>
</html>