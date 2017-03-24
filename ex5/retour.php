
<?php 

setcookie("login",$_POST["login"]);
setcookie("password",$_POST["password"]);

?>	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Retour</title>
</head>
<body>
	
	<div class="infoS">
		<H2>inscription</H2>

		<?php    
		echo 
		"<form method='POST' action='inscription.php'>
		<input type='text' name='login' value='".$_COOKIE['login']."'>
		<input type='text' name='password' value='".$_COOKIE['password']."'>

		<input type='submit' value='correction'>" ;
		?>
	</div>



</body>
</html>
