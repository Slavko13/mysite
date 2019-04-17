<!DOCTYPE html>
<html>
<head>
	<?php
	$title = 'Редактирование статьи'; 
	require_once "blocks/head.php";
	?>
</head>
<body>
	<?php 
	require_once 'blocks/header.php'
	 ?>
	 <div id="wrapper">
		<div id="leftCol">
<?php 

require_once "functions/connect.php";
global $mysqli;
connectDB();

if (isset($_GET['id'])) {
	$id=$_GET['id'];
} 
$result=$mysqli->query("SELECT * FROM news WHERE id='$id'");
$mas=$result->fetch_assoc();

print<<<HERE
<form id="form_for_red" action="upd_stat.php" method="POST"  >

    <h2>Редактирование</h2>
    <p> Название статьи </p>
        <input type="text" name="title" value="$mas[name]"><br>
        <p> Текст для предпoказа </p>
        <textarea name="less_text" cols="60" rows="20" maxlength="260" >
          $mas[less_text]
        </textarea>
        <p> Полная статья </p>
        <textarea name="less_text" cols="60" rows="20" >
          $mas[full_text]


        </textarea>
         <input type="hidden" name="id" value="$mas[id]">
        <input type="submit" name="send_to_BD" value="send">
</form>
HERE;

closeDB();
echo' 
  <div class="comeback">
  <a href="../admin/">Вернуться назад</a>
  </div>'
?>

</div>
</div>
<?php require_once 'blocks/footer.php'?>
</body>
</html>