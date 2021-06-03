<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>Admin login</title>
	

</head>
<body>

<a href="admin.php" style="font-size:25px; background-color:transparent;text-decoration:none; color:red; "><b>Назад</b></a><br><br>
<div class="colmask threecol">
</div>
<div class="colmask threecol">
	<div class="colmid">
		<div class="colleft">
			<div class="col1">
				<!-- Column 1 start -->
				<h1 align="center" > <font color="#6CB5FF"><b>Реєстр</b></font></H1>
				<br><br><br>

<?php
 include 'conn.php';
echo "<table border='1' align='center' cellpadding='5'> 
 <th>ID Запиту </th>
 <th>ID Повернення  </th>
 <th>ID Книги</th> 
 <th>Читацький квиток</th>
 <th>Ім'я</th>
 <th>Дата видачі</th>
 <th>Дата повернення</th>";

$result=$mysqli->query("SELECT * FROM returnstore where diff>0");

$no=1;
	
	while ($row=$result->fetch_array())
	{
    $return_id=$row['Return_id'];
	$issue_id=$row['Issue_id'];
	$mid=$row['Mid'];
	$name=$row['Name'];
	$bid=$row['Bid'];
	$bname=$row['Bname'];
	$validreturndate=$row['validreturndate'];
    $returndate=$row['Return_date'];



 

echo" <tr>
<td>$issue_id</td>
<td>$return_id</td>
<td>$bid</td>
<td>$mid</td>
<td>$name</td>
<td>$validreturndate</td>
<td>$returndate</td>

</tr>"
;
}
	








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
