<html>
<head>
	<title>View Book</title>
	
	

</head>
<body>

<a href="member.php" style="font-size:25px; background-color:transparent;text-decoration:none; color:red; "><b>Назад</b></a><br><br>
</div>
<div class="colmask threecol">
	<div class="colmid">
		<div class="colleft">
			<div class="col1">
				<!-- Column 1 start -->
				<br><br><br>
				<?php 
include 'conn.php';
 
 $data = $mysqli->query("SELECT * FROM book"); 
   echo "<table border='1' align='center'> 
 <th>ID Книги</th> 
 <th>Назва Книги</th> 
 
 <th>Предмет</th> 
  <th>Автор</th> 
 <th>Доступність</th>
   <th>Дія</th>";
 
 $no=1;
 while ($r=$data->fetch_array())
 { 
 echo "<tr>
 <td>$r[Bid]</td> 
 <td>$r[Bname]</td>
 <td>$r[Subject]</td> 
 <td>$r[Author]</td>
 <td>$r[Availability]</td>
  
 
 <td><a href='memrequest_books.php?bid=$r[Bid]'>Request</a></td> 
 </tr>";
   $no++; 
 }
 echo "</table>"; 
 ?>
				
				
				
				
				<br><br><br><br><br><br>
				
				<!-- Column 1 end -->
			</div>
			<div class="col2">
				<!-- Column 2 start -->
					<br><br>

				
				
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
