
<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:member_login.php");
} else 
{
?>
<html>
<head>
	<title>View Book</title>
	
	

</head>
<body>
<a href="member.php" style="font-size:25px; background-color:transparent;text-decoration:none; color:red; "><b>Назад</b></a><br><br>
</div>
<div class="colmask threecol">
	<div class="colmid">
		<div class="colleft">
			<div class="col1">
				<!-- Column 1 start -->
				<br><br><br>
				
				<?php
	include 'conn.php';
	
	
	
	$mid=$_SESSION['mid'];
	
	$result=$mysqli->query("SELECT * FROM book where Bid='$_GET[bid]'");
	while($row=$result->fetch_assoc())
	{
	$available=$row['Availability'];
	$bid=$row['Bid'];
	$bname=$row['Bname'];
	
	}

	$mid=$_SESSION['mid'];
	$query=$mysqli->query("select * from member where Mid='$mid'");
	while($row=$query->fetch_assoc())
	{
		$mid=$row['Mid'];
		$mname=$row['Name'];
	
	}
	//check book availability and no of books issued by member
	
	$query2=$mysqli->query("select * from member where Mid='$mid'");
	while($row=$query2->fetch_assoc())
	{
		$book1=$row['Book1'];
		$book2=$row['Book2'];
		
	
	}
	
	
	
	
	
	if($available=='no')
	{
		echo"Книга не доступна";
	}
	else if($book1!=NULL && $book2!=NULL)
	{
		echo"Cannot request more than 2 books";
	}
	
    else			   
	{
	
	
	
	$sql="INSERT INTO requestbook(Mid,Name,Bid,Bname,requestdate) VALUES('$mid','$mname','$bid','$bname',now())";
   
	$result=$mysqli->query($sql);
	if($result)
	{
		echo "Успішний запит";
	}
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
<?php
}
?>
