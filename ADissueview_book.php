<html>
<head>
	<title>Issue Book</title>
	
	

</head>
<body>

<a href="admin.php" style="font-size:25px; background-color:transparent;text-decoration:none; color:red; "><b>Назад</b></a><br><br>
</div>
<div class="colmask threecol">
	<div class="colmid">
		<div class="colleft">
			<div class="col1">
				<!-- Column 1 start -->
				<br><br><br>
<?php 
	include 'conn.php';
  
 
 //display requestbook table
 $data = mysql_query("SELECT * FROM requestbook"); 
   echo "<table border='1' align='center'> 
  <th>Request ID</th>
  <th>Member Id</th> 
 <th>Member Name</th>
 <th>Book ID</th> 
 <th>Book Name</th> 
  <th>Request date</th> 

 
 
 <th>Action</th>";
 

 while ($r=mysql_fetch_array($data))
 { 
 echo "<tr>
 <td>$r[request_id]</td> 
 <td>$r[mid]</td>
 <td>$r[name]</td> 
 <td>$r[bid]</td>
 <td>$r[bname]</td>
 <td>$r[requestdate]</td>
 
 
 <td><a href='ADissue.php?request_id=$r[Request_id]'>Issue</a></td> 
 </tr>";
 
 }
 echo "</table>"; 
 ?>
				
				
				
				
				<br><br><br><br><br><br>
				
				<!-- Column 1 end -->
			</div>
			<div class="col2">
				<!-- Column 2 start -->
					<br><br>

					<a href="admin.php" style="font-size:25px; background-color:transparent;text-decoration:none; color:#369; "><b>Home</b></a><br><br>
				
				<!-- Column 2 end -->
			</div>
			<div class="col3">
				<!-- Column 3 start -->
					<div id="ads">
					
						
					
					</div>
				<!-- Column 3 end -->
			</div>
		</div>
	</div>
</div>
<div id="footer">
	
	
	
</div>

</body>
</html>
