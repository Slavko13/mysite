<?php 
	require_once "connect.php";

	function getArticles () {
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `news` ORDER by `id` DESC");
		closeDB();
		if (!$id)
			return resultToArray ($result);
		else 
			return  $result->fetch_assoc();

	} 

	function resultToArray ($result) {
		$array = array ();
		while (($row = $result->fetch_assoc()) != false)
			$array[] = $row;
		return $array;
	}
?>