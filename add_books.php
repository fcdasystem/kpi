<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>add_books</title>
</head>
<body>
<a href="admin.php" style="font-size:25px; background-color:transparent;text-decoration:none; color:red; "><b>Назад</b></a><br><br>
<div class="colmask threecol">
	<div class="colmid">
		<div class="colleft">
			<div class="col1">
				<!-- Column 1 start -->
				
				<h1 align="center" > <font color="#6CB5FF"><b>Додати книгу</b></font></H1>
	<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr><form name="form1" method="post" action="">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF" >
<tr>
<td width="78">ID Книги</td>
<td width="6">:</td>
<td width="294"><input name="bid" type="text" ></td>
</tr>
<tr>
<td width="78">Назва Книги</td>
<td width="6">:</td>
<td width="294"><input name="bname" type="text" ></td>
</tr>
<tr>
<td width="78">Предмет</td>
<td width="6">:</td>
<td width="294"><input name="subject" type="text" ></td>
</tr>
<tr>
<td width="78">Автор</td>
<td width="6">:</td>
<td width="294"><input name="author" type="text" ></td>
</tr>
<tr>
<td width="78">На Складі</td>
<td width="6">:</td>
<td width="294"><select name="availability" >
<option value="">Вибрати</option>
  <option value="1">Так</option>
  <option value="0">Ні</option>


</td>

</tr>
<tr>


</tr>
<tr>
<td>&nbsp;</td>


<td><input type="submit" name="Add" value="Додати"><a href=""></td>
<td><font color="#6CB5FF"></font>
<input type="submit" name="Reset" value="Відхилити"><a href=""></td>
</tr>
</table>
</form>

<?php
if(isset($_POST["Add"])){

if(!empty($_POST['bname']) && !empty($_POST['bid']) ) 
	{
	$bname=$_POST['bname'];
	
	$subject=$_POST['subject'];
	$author=$_POST['author'];
	$availability=$_POST['availability'];
	$bid=$_POST['bid'];
	

	include 'conn.php';

	$query=$mysqli->query("SELECT * FROM book WHERE Bid='".$bid."'");
	$numrows=$query->num_rows;
		if($numrows==0)
		{
			$sql="INSERT INTO book(Bid,Bname,Subject,Author,Availability) VALUES('$bid','$bname','$subject','$author','$availability')";

			$result=$mysqli->query($sql);


			if($result){
			echo "Книга успішно додана";
			} else {
			echo "Failure!";
			}

		} 
			
		else {
			echo "Ця книга вже додана!";
		}

	} else {
	echo "Всі поля обоов'язкові до заповнення!";
}
}
?>


</table>
				
				
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
