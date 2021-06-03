<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:admin_login.php");
} else {
?>



<!DOCTYPE html>
<html>
<head>
	<title>Admin main page</title>
	
	
	
</head>
<body>

			</div>
			<div class="col2">
				<!-- Column 2 start -->
					<br>
					<a href="ADview_book.php" style="font-size:20px; background-color:transparent;text-decoration:none; color:#369; "><b>Список книг</b></a><br><br>
					<a href="add_books.php" style="font-size:20px; background-color:transparent;text-decoration:none; color:#369; "><b>Додати книгу</b></a><br><br>
					<a href="ADview_member.php" style="font-size:20px; background-color:transparent;text-decoration:none; color:#369; "><b>Список читачів</b></a><br><br>
					<a href="add_member.php" style="font-size:20px; background-color:transparent;text-decoration:none; color:#369; "><b>Додати читача</b></a><br><br>	
					<a href="ADfine.php" style="font-size:20px; background-color:transparent;text-decoration:none; color:#369; "><b>Журнал видачі книг</b></a><br><br>
					<a href="logout.php" style="font-size:20px; background-color:transparent;text-decoration:none; color:#369; "><b>Вихід</b></a><br>
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
<?php
}
?>
