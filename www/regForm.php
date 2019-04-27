<html> 
<head>
<?php
	require_once "functions/functions.php";
	$title = 'Регистрация';
	require_once 'blocks/head.php';
	
?>
	<script language='javascript'> 


	function z() 
	{ 
	var a=document.getElementById('name').value; 
	var b=document.getElementById('log').value; 
	if(a=='')

	{
		document.getElementById('text').innerHTML="Вы не заполнили все поля";
		return false;
	}
	else{
		return false;
	}
}

function passProv(){


	var c=document.getElementById('pass').value;
	var d=document.getElementById('acs').value; 


	if (c != d)
		{

			document.getElementById('passText').innerHTML="Пароли не совпадают";
			return false;
		}
		else 
		{
			return true;
		}
	}
	
		
	


	</script> 
</head> 
<body> 
	<?php require_once 'blocks/header.php' ?>
	<table width="350	"> 
		<form action=form.php method=GET onsubmit="return z()"> 
		<p style="text-align:center">Регистрационная форма</p> 
		<div id="text"></div>
	<tr> 
		<td>Имя</td> 
		<td><input type=Text id=name name=name placeholder="Имя"></td> 
		
	</tr> 
		<tr> 
		<td>Логин</td> 
		<td><input type=Text id=log placeholder="Логин" name=login></td> 
		 
	</tr> 
	<tr> 
		<td>Пароль</td> 
		<td><input type=Text id=pass placeholder="Пароль"></td> 
		 
	</tr> 
	<tr> 
		<td>Подтверждение</td> 
		<td><input type=Text id=acs placeholder="Подтверждение" oblur="passProv()"></td> 
		<td><div id="passText"></div></td>
		
	</tr> 
	<tr> 
		<td><input type=button	 value=отправить onclick="z()" onsubmit="return true"></td> 
	</tr> 
	</table> 
	<?php require_once 'blocks/footer.php' ?>
</body> 	
</html>