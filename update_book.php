<a href="admin.php" style="font-size:25px; background-color:transparent;text-decoration:none; color:red; "><b>Назад</b></a><br><br> Успішно!
<?php 

include 'conn.php';
$query=$mysqli_query("UPDATE book SET Bid = '$_POST[bid]', Bname = '$_POST[bname]', Subject = '$_POST[Subject]', Author = '$_POST[author]', Availability = '$_POST[availability]'  WHERE Bid = '$_POST[bid]'"); 


header ('location:ADview_book.php'); 

?>
