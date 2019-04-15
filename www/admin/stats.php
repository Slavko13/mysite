<!DOCTYPE html>
<html>
<head>
<?php
	require_once "functions/functions.php";
	$title = 'Статьи';
	require_once 'blocks/head.php';
	$news = getArticles (3);
	
	
?>
</head>
<body>
	<?php require_once 'blocks/header.php' ?>

	<div id="wrapper">
		<div id="leftCol">
			<?php
				for ($i = 0; $i < count($news); $i++) {
					if($i == 0)
						echo "<div id=\"lastArticle\">";
					else
						echo "<div class=\"prevArticle\">";
					echo '<img src="/img/articles/'.$news[$i]["id"].'.jpg" alt=Статья '.$news[$i]["id"].'" title="Статья '.$news[$i]["id"].'">
					<h2> '.$news[$i]["name"].'</h2>
					<p> '.$news[$i]["less_text"].'</p>
					<a href="/articles.php?id='.$news[$i]["id"].'">
						<div class="nextStage">Читать далее </div>
					</a>
		</div>';
			if($i == 0)
				echo '<div	class=\"clear\"><br></div>';
					
					}
			?>
		</div>
	<?php require_once 'blocks/rightCol.php'?>
	</div>

	<?php require_once 'blocks/footer.php' ?>
</body>
</html>	