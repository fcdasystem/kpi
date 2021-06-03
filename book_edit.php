<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>Admin login</title>
	
	
	
</head>
<body>
<a href="admin.php" style="font-size:25px; background-color:transparent;text-decoration:none; color:red; "><b>Назад</b></a><br><br>
				<!-- Column 1 start -->
				
				<?php
 include 'conn.php';
 
 $data = $mysqli->query("SELECT * FROM book WHERE Bid='$_GET[bid]'");
 $r=$data->fetch_array();
 
 echo "<h2>Редагувати Книгу</h2><hr> 
 <form method='POST' action='update_book.php'> 
 <table border='0'> 
 <tr> <td>ID Книги : </td>
 <td><input type='text' name='bid' value='$r[Bid]'></td> </tr> 
 
 <tr> <td>Назва Книги : </td>
 <td><input type='text' name='bname' value='$r[Bname]'></td> </tr>
 
 <tr> <td>Предмет : </td> <td><input type='text' name='subject' value='$r[Subject]'></td> 
 </tr> 
 
 <tr> <td>Автор :</td> <td><input type='text' name='author' value='$r[Author]'></td> </tr>
 
 <tr> <td>Доступність :</td> <td><input type='text' name='availability' value='$r[Availability]'></td> </tr>
 
 
 
 <tr> <td><input type='submit' value='Оновити'></td> 
 </tr> 
 
 </table>
 
 </form>"; 
 ?>
				
				
				
				
				
				
				<!-- Column 1 end -->
			</div>
			<div class="col2">
				<!-- Column 2 start -->
				


				
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
