<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>Admin login</title>
	
	

</head>
<body>
<a href="admin.php" style="font-size:25px; background-color:transparent;text-decoration:none; color:red; "><b>Назад</b></a><br><br>

</div>
<div class="colmask threecol">
	<div class="colmid">
		<div class="colleft">
			<div class="col1">
				<!-- Column 1 start -->
				<br>
				<?php
 include 'conn.php';
 
 $data = $mysqli->query("SELECT * FROM member WHERE Mid='$_GET[mid]'");
 $r=$data->fetch_array();
  
 echo "<h2>Редагувати</h2><hr> 
 <form method='POST' action='ADupdate_member.php'> 
 <table border='0'> 
 <tr> <td>Ім'я : </td>
 <td><input type='text' name='Name' value='$r[Name]'></td> </tr> 
 
 <tr> <td>RollNo : </td>
 <td><input type='text' name='mid' value='$r[Mid]'></td> </tr>
 
 <tr> <td>Email : </td> <td><input type='text' name='Email' value='$r[Email]'></td> 
 </tr> 
 
 <tr> <td>Пароль :</td> <td><input type='text' name='Password' value='$r[Password]'></td> </tr>
 
 
 
 <tr> <td>Contact No:</td> <td><input type='text' name='ContactNo' value='$r[ContactNo]'></td> </tr>
 
 <tr> <td>Місто :</td> <td><textarea name='Address' class='25' rows='5'>$r[Address]</textarea></td> </tr>
 

 
 <tr> <td><input type='submit' value='Оновити'></td> 
 </tr> 
 
 </table>
 
 </form>"; 
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
