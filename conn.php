<?php
		
	$mysqli = new mysqli('localhost','root','root','library');
	if($mysqli->connect_error)
	{
		die('Connection Error('.$mysqli->connect_errno.')'.$mysqli->connection_error);
	}


?>