<!DOCTYPE html>
<html>
<head>
<?php
	require_once "functions/functions.php";
	$title = 'Админка';
	require_once "blocks/head.php";
	$news = getArticles ();
?>
</head>

<body>
	<?php 
	require_once 'blocks/header.php'
	 ?>
	<div id="wrapper">
    <h3><p style="text-align:center">Зона Админки</p></h3>
		<div id="leftCol">


			<?php require_once 'all_forms.php'; ?>

    <div id="red_stat" class="show_all" style="display: none;" >
    	<p>Редактировать статью</p>
    	<?php 
    		for ($i = 0; $i < count($news); $i++) {
    			echo '<br>';
    			echo '<a href="red_stat.php?id='.$news[$i]["id"].'"><strong> '.$news[$i]["name"].'</strong></a>';
    		}
        

    	?>
   	</div>


   	<div id="del_stat" class="show_all" style="display: none;">
   	<form method="POST" action="del_stat.php">
    	<br>
    	<p>Удалить статью</p>
    	<?php 
    		for ($i = 0; $i < count($news); $i++) {
    			echo '<input name="stats[]" value="'.$news[$i]["id"].'" type="checkbox"> <strong>'.$news[$i]["name"].'</strong>';
    			echo '<br>';
    		}
    	?>
    	<input type="submit" name="del_stat" value="Удаляй">
   	</form>
   </div>



    </div>
	<?php require_once 'blocks/rightCol.php'?>
	</div>
	
	<?php require_once 'blocks/footer.php' ?>
</body>
</html>