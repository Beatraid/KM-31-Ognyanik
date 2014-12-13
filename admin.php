<?php
ob_start();
include('functions.php');

define("LOGIN", "admin");
define("PASSW", "1029384756sujhm");

if(check_POST('submit'))
{
	if((!strcmp(check_POST('login'), LOGIN)) && (!strcmp(check_POST('pass'), PASSW)))
	{
		setcookie('admin', md5(PASSW), 0);	
		header("Location:admin.php");
	}
}

if(check_POST('submit_ban'))
{
	Ban(check_POST('login'));
	header("Location:admin.php");
}
	
if(check_POST('submit_unban'))
{
	UnBan(check_POST('login'));
	header("Location:admin.php");
}	
	
if(check_POST('submit_delcomm'))
{
	DelComment(check_POST('comm_num'));	
	header("Location:admin.php");
}	
	
?>

		
<!doctype html>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css"/> 
<meta charset="utf-8">
<title>Админка</title>
<style>
.comment{
	border:1px black solid;
	border-radius:20px;
	padding:10px;
	width:100%;
	margin-bottom:20px;
}
</style>

</head>

<body>
<header>
<?php
	
	if((!isset($_COOKIE['admin'])) || (strcmp($_COOKIE['admin'], md5(PASSW))))
	{
		echo
			"<center><form method='post' action='admin.php'>
				<table>
				<tr><td>Логин:</td><td><input type='text' required name='login'></td></tr>
				<tr><td>Пароль:</td> <td><input type='password' required name='pass'></td><tr>
				<tr><td colspan='2' align='center'><input class='menu_button' value='Отправить' name='submit' type='submit'></td></tr>
				</table>
				
			</form></center>";
		return;	
	}
	
	?>
<h2> Користувачі </h2>    
 
<?php WriteUsers(); ?>

<div style="margin-top:10px;"><div style="width:30px; height:20px; background-color:gray; float:left; "></div> - забанені користувачі</div>


<h2>Забанити користувача</h2>
<form action='' method=post>
Логін: <input type='text' name='login'>
<button type='submit' name='submit_ban' value='ban'>Підтвердити</button>
</form>

<h2>Розбанити користувача</h2>
<form action='' method=post>
Логін: <input type='text' name='login'>
<button type='submit' name='submit_unban' value='ban'>Підтвердити</button>
</form>
<br><br><h2>Комментарі користувачів</h2>
<form action='' method=post>
Видалити комментар #: <input type='text' name='comm_num'>
<button type='submit' name='submit_delcomm' value='ban'>Підтвердити</button>
</form>
<br>
<br>
<?php WriteComments('all') ?>
</header>
</body>
</html>
<?php ob_end_flush(); ?>
