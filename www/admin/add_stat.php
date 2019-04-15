<?php
	require_once "../functions/connect.php";



	$name=$_REQUEST['title'];
	$less_text=$_REQUEST['less_text'];
	$full_text=$_REQUEST['full_text'];

	
		global $mysqli;
		connectDB();
	    $pr=$mysqli->query("INSERT INTO news(name,less_text,full_text)  VALUES ('$name', '$less_text', '$full_text')"); 
	   closeDB();  
		if ($pr==1) 
			{ echo "Статья добавлена!"; } 
	




?>