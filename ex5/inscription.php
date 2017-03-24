
<?php 

setcookie("login",$_POST["login"]);
setcookie("password",$_POST["password"]);

?>	
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
		<H2>Identification</H2>

		<form method="POST" action="retour.php">
			
			<?php 
			echo "Votre login :".$_POST['login']." Votre mot de passe : ".$_POST['password']; 
			?>
			"<input type='submit' value='Modifier'>





		</body>
		</html>
