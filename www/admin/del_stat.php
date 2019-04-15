<?php
require_once "functions/connect.php";

$result=$_POST['stats'];
    for($i=0; $i < count($result); $i++)
    {
      echo($result[$i] . " ");
    }


	global $mysqli;
		connectDB();
	for($i=0; $i < count($result); $i++) {
		$id=$result[$i];
	 	$pr=$mysqli->query("DELETE FROM news Where id='$id'");
	 	} 
	 closeDB(); 
	 if ($pr==1) { echo "Статья удалена!"; } 
?>