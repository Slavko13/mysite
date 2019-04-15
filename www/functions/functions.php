<?php 
	require_once "connect.php";

	function getArticles ($limit, $id=null) {
		global $mysqli;
		connectDB();
		if ($id)
			$myid = "WHERE `id` = ".$id;
		$result = $mysqli->query("SELECT * FROM `news`$myid ORDER by `id` DESC LIMIT $limit");
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