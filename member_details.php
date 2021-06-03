<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:member_login.php");
} else {
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>Member login</title>
	
	
	
</head>
<body>
<a href="member.php" style="font-size:25px; background-color:transparent;text-decoration:none; color:red; "><b>Назад</b></a><br><br>

</div>
<div class="colmask threecol">
	<div class="colmid">
		<div class="colleft">
			<div class="col1">
				<!-- Column 1 start -->
					<h1 align="center" > <font color="#369"><b>Персональна інформація</b></font></H1>
					<br><br>
				
<?php
include 'conn.php';
	
	$mid=$_SESSION['mid'];
	

$result = $mysqli->query("select * from member where Mid='".$mid."'");
while($row = $result->fetch_array())
{
 
?>
	<table cellpadding="5" cellspacing="1" border="1" align="center" width="300">
  <tr>
	<tr><th>Ім'я:</th>
	
    <td><?php echo $row['Name']; ?>
	
	</tr>
	<tr>
	<th>Квиток</th>
	</td><td><?php echo $row['Mid']; ?></td>
	</tr>
	<tr>
	<th>Email:</th>
	<td><?php echo $row['Email']; ?></td>
	</tr>
	<tr>
	
	</tr>
	
	
	</tr>
	
	<tr>
	<th>Телефон</th>
	<td><?php echo $row['ContactNo']; ?></td>
	</tr>
	<tr>
	<th>Місто</th>
	<td><?php echo $row['Address']; ?></td>
	</tr>
	<tr>
	<td colspan="2" align="center"><b> <a href='memberEdit.php?mid=$r[Mid]'>Редагувати</a></b></td>
	
	
	</table>
<?php

 }
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
<?php
}
?>