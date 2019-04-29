<!DOCTYPE html>
<html>
<head>

<?php
	$title = 'Главная';
	require_once "blocks/head.php";
	require_once "functions/functions.php";
	$doctors = getDoctors();

?>
</head>

<body>
	<?php require_once 'blocks/header.php' ?>
			<div id="wrapper">
				<div id="doctors">

					<?php 
					for ($i = 0; $i < count($doctors); $i++) {
						echo '
						<a href="/doctors.php?id='.$doctors[$i]["id"].'">
						<div class="doctor-items"> 
						<div class="pic" >
							<img src="img/STAN.jpg"/> 	
						</div>
						<h4> '.$doctors[$i]["First_name"].' '.$doctors[$i]["Second_name"].' '.$doctors[$i]["Patronymic"].' </h4>
						<p> '.$doctors[$i]["Position"].'</p>
					</div> </a>';
					}
					?>

				</div>
			<?php require_once 'blocks/rightCol.php'?>
			</div>
	<?php require_once 'blocks/footer.php' ?>
</body>
</html>