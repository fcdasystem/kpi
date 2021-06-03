<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:member_login.php");
} else {
?>



<!DOCTYPE html>
<html>
<head>
	<title>Member main page</title>
	
	

</head>
<body>


</div>
<div class="colmask threecol">
	<div class="colmid">
		<div class="colleft">
			<div class="col1">
				<!-- Column 1 start -->
				
				
				<!-- Column 1 end -->
			</div>
			<div class="col2">
				<!-- Column 2 start -->
					<br><br><br>
				
					<a href="member_details.php" style="font-size:25px; background-color:transparent;text-decoration:none; color:#369; "><b>Персональна інформація</b></a><br><br>
					<a href="member_viewbook.php" style="font-size:25px; background-color:transparent;text-decoration:none; color:#369; "><b>Запит на книгу</b></a><br><br>
					
					<h2><a href="logout.php" style="font-size:25px; background-color:transparent;text-decoration:none; color:#369; ">Вихід</a></h2><br>
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