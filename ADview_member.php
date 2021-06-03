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
				<h1 align="center" > <font color="#6CB5FF"><b>Список читачів</b></font></H1>
				<br><br><br>
				<?php 
include 'conn.php';
 $data = $mysqli->query("SELECT * FROM member"); 
 echo "<table border='1' align='center'> 
 <th>Ім'я</th> 
 <th>Номер квитка</th> 
 
 <th>Email:</th> 
 <th>Пароль</th>
 
 
 <th>Телефон</th>
 <th>Місто</th>
 <th>Дії</th>";
 
 
 while ($r=$data->fetch_array())
 { 
 echo "<tr>
 <td>$r[Name]</td> 
 <td>$r[Mid]</td>
 <td>$r[Email]</td> 
 <td>$r[Password]</td>
 
   <td>$r[ContactNo]</td>
    <td>$r[Address]</td>
	
 
 
 <td><a href='ADmember_edit.php?mid=$r[Mid]'>Редагувати</a> | <a href='delete_data.php?mid=$r[Mid]'>Видалити</a></td> 
 </tr>";
 }
 echo "</table>"; 
 ?>
				
				
				
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
