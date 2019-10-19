<!DOCTYPE html>
<html>
   <head>
     <title>Events</title>
   </head>
   <body>
	   <div class="article">
	       <form name="eventForm.php" method="post" action="<?php $_SERVER['PHP_SELF'];?>?month=<?php echo $month;?>&day=<?php echo $day;?>&year=<?php echo $year;?>&v=true&add=true">
		        <table style="width:45%; margin-left: 30px;">
				    <tr>
					   <td width="150px">Title:</td>
					   <td width="250px"><input type="text" name="title"></td>
					</tr>
					<tr>
					   <td width="150px">Details</td>
					   <td width="250px"><textarea name="details"></textarea></td>
					</tr>
					<tr>
					   <td colspan="2" align="center"><input type="submit" name="btnadd" value="Add Event"></td>
					   
					</tr>
				</table>
		   </form>
       </div>	   
   </body>
</html>