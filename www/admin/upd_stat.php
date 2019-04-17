<?php
	require_once "functions/connect.php";



	$name=$_REQUEST['title'];
	$less_text=$_REQUEST['less_text'];
	$full_text=$_REQUEST['full_text'];
	$id=$_REQUEST['id']; 

	
		global $mysqli;
		connectDB();
	    $pr=$mysqli->query("UPDATE news SET name='$name',less_text='$less_text',full_text='$full_text' WHERE id='$id'  "); 
	   closeDB();  
		if ($pr==1) 
			{ echo "Статья обновлена!"; } 
	

echo'	
	<div class="comeback">
	<a href="../admin/">Вернуться назад</a>
	</div>'


?>