<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>member registration</title>
	
	
	
</head>
<body>
<a href="admin.php" style="font-size:25px; background-color:transparent;text-decoration:none; color:red; "><b>Назад</b></a><br><br>
<div class="colmask threecol">
	<div class="colmid">
		<div class="colleft">
			<div class="col1">
				<!-- Column 1 start -->
				
				<h1 align="center" > <font color="#6CB5FF"><b>Додати читача</b></font></H1>
	<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF" >


<tr>
<td width="78"><B>Ім'я</B></td>
<td width="6">:</td>
<td width="294"><input name="name" type="text"></td>
</tr>
<tr>
<td width="78"><B>Чиатацький квиток</B></td>
<td width="6">:</td>
<td width="294"><input name="mid" type="text"></td>
</tr>
<tr>
<td width="78"><B>Email</B></td>
<td width="6">:</td>
<td width="294"><input name="email" type="email"></td>
</tr>
<tr>
<td><B>Пароль</B></td>
<td>:</td>
<td><input name="pass" type="password"></td>
</tr>

<tr>
<td width="78"><B>Номер телефону</B></td>
<td width="6">:</td>
<td width="294"><input name="contactno" type="tel"></td>
</tr>
<tr>
<td width="78"><B>Місто</B></td>
<td width="6">:</td>
<td width="294"><textarea rows="4" cols="22" name="address" ></textarea></td>
</tr>
<tr>
<td>&nbsp;</td>

<td><input type="submit" name="submit" value="Створити"><a href=""></td>
<td><font color="#6CB5FF"></font>
<input type="submit" name="reset" value="Відхилити"><a href=""></td>
<td><font color="#6CB5FF"></font></td>


</table>
</td>
</form>
<?php
if(isset($_POST["submit"])){

if(!empty($_POST['name']) && !empty($_POST['pass']) && !empty($_POST['mid']) && !empty($_POST['email']) && !empty($_POST['contactno']) && !empty($_POST['address'])) {
	$name=$_POST['name'];
	$mid=$_POST['mid'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$contact=$_POST['contactno'];
	$address=$_POST['address'];
	

	include 'conn.php';

	$query=$mysqli->query("SELECT * FROM member WHERE Mid='".$mid."'");
	$numrows=$query->num_rows;
	if($numrows==0)
	{
	$sql="INSERT INTO member(Name,Mid,Email,Password,ContactNo,Address) VALUES('$name','$mid','$email','$pass','$contact','$address')";

	$result=$mysqli->query($sql);


	} 
	else
	{
	echo "Таке імя вже існує";
	}

} 

	else
	{
		echo "All fields are required!";
	}
	header ('location:admin.php'); 
}

?>


</tr>
</table><br><br><br><br><br><br><br>	
				
				
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
