
<!-- ##Exercice 3
	Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie. -->
	
	<!DOCTYPE html>
	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>GlobalVariablecookie</title>
	</head>
	<body>
		<div class="infoS">
			<H2>Identification</H2>

			<form method="post" action="inscription.php">
				<p>
					<input type="text" name="login" value="Dilou"> Login</>
					<input type='text' name='password' value="123456">Password</>

					<input type="submit" name="">Valider</>

					<?php 

					setcookie("login",$_POST["login"]);
					setcookie("password",$_POST["password"]);

					?>
				</p>


			<!-- </form>
			<a href=retour.php>Retour</a>";
		-->

	</div>
</body>
</html>