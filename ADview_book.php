<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>Admin login</title>
	
	

</head>
<body>
<a href="admin.php" style="font-size:25px; background-color:transparent;text-decoration:none; color:red; "><b>Назад</b></a><br><br>
<div class="colmask threecol">
	<div class="colmid">
		<div class="colleft">
			<div class="col1">
				<!-- Column 1 start -->
				<h1 align="center" > <font color="#6CB5FF"><b>Список книг</b></font></H1>
				<br><br><br>
				<?php 
include 'conn.php';

 $data = $mysqli->query("SELECT * FROM book"); 
   echo "<table border='1' align='center' cellpadding='5'> 
 <th>ID Книги</th> 
 <th>Назва Книги</th> 
 
 <th>Предмет</th> 
  <th>Автор</th> 
 <th>Доступність</th>
 
 
 <th>Дії</th>";
 
 
 while ($r=$data->fetch_array())
 { 
 echo "<tr>
 <td>$r[Bid]</td> 
 <td>$r[Bname]</td>
 <td>$r[Subject]</td> 
 <td>$r[Author]</td>
 <td>$r[Availability]</td>
  
 
 <td><a href='book_edit.php?bid=$r[Bid]'>Редагувати</a> | <a href='delete_book.php?bid=$r[Bid]'>Видалити</a></td> 
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
