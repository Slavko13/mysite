<!DOCTYPE html>
<html>
<head>
	<?php
	$title = ' Контакты';
	require_once "blocks/head.php";
	require_once "functions/functions.php";
	$info = getInfoAbout ();

	

?>
</head>
<body>
	<?php require_once 'blocks/header.php' ?>
<div id="wrapper">
	<div id="leftCol">
		<?php 
		for ($i = 0; $i < count($info); $i++) 
			echo '
		<div class="our_blocks">
			<h3> '.$info[$i]["Name"].' </h3>
			<p> '.$info[$i]["Adress"].' </p>
			<p> Регистратура: </p> 
			<p>'.$info[$i]["Phone_number"].' </p>
			<p> '.$info[$i]["Email"].'</p>
			<p> Главный врач '.$info[$i]["Main_doctor"].': </p>
			<p>'.$info[$i]["Main_doctor_number"].' </p>
			<p>Режим работы </p>
			<p> с '.$info[$i]["Time"].' </p>
		</div>
		';?>
		<div id="forFrame">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1333.6822938259534!2d37.69992603745552!3d55.79363172606686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sru!4v1556993138370!5m2!1sru!2sru" width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
			</iframe>
		</div>
	</div>

<?php require_once 'blocks/rightCol.php'?>
</div>
<?php require_once 'blocks/footer.php' ?>
</body>
</html>