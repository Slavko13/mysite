<!DOCTYPE html>
<html>
<head>
	<?php
	require_once "functions/functions.php";
	$doctors = getDoctors(1, $_GET["id"]);
	require_once 'blocks/head.php';
	?>
	
</head>
<body>
	<?php require_once 'blocks/header.php' ?>
				<div id="wrapper" >
					<div id="Doctor-profile">
			  	<?php
						
					echo '
					<div id="block_pic">
					<img src="img/STAN.jpg"/>
					</div>
					<div id="block_info"> 
					<ul> 

					<li> <h4> <i>'.$doctors["First_name"].' '.$doctors["Second_name"].' '.$doctors["Patronymic"].'</i> </h4></li>	
						<li> <i>'.$doctors["Position"].'</i></li>
						<li><i> '.$doctors["Phone_number"].'</i> </li>
						<li> <i>'.$doctors["Reception_hours"].'</i> </li>
						</div> </ul>' 
						;?>  
					</div>
				<?php require_once 'blocks/rightCol.php'?>

				</div>
		<?php require_once 'blocks/footer.php' ?>
</body>
</html>