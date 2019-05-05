<!DOCTYPE html>
<html>
<head>

<?php
	$title = 'Главная';
	require_once "blocks/head.php";
	require_once "functions/functions.php";
	$doctors = getDoctors();
	$news = getArticles (6);
	$info = getInfoAbout (1);

?>
</head>

<body>
	<?php require_once 'blocks/header.php' ?>
			<div id="wrapper">
				

 
<script type="text/javascript" src="js/slider.js">
</script>
	<div id="slider">
	<button onclick="prev()"> Prev </button>
	<img id="sliderIMG" src="img/articles/2.jpg"/>
	<button onclick="next()"> Next </button>
	</div>


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
			<div id="News_Back_Form_Contacts">

				<?php 
				for ($i = 0; $i < count($info); $i++) 
					echo '  <h3> Наши новости </h3>
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
				<div id="Our_news">
				<h3> Наши новости </h3>
				<ul> 
					 <?php 
					for ($i = 0; $i < count($news); $i++) {
						echo '<a href="/articles.php?id='.$news[$i]["id"].'"> <li>  '.$news[$i]["name"].'</li></a>';
					}
					?>

				</ul>
				</div>
				<div id="Our_news">
				<h3> Наши новости </h3>
				<ul> 
					 <?php 
					for ($i = 0; $i < count($news); $i++) {
						echo '<a href="/articles.php?id='.$news[$i]["id"].'"> <li>  '.$news[$i]["name"].'</li></a>';
					}
					?>

				</ul>
				</div>
			</div>
			</div>
	<?php require_once 'blocks/footer.php' ?>
</body>
</html>