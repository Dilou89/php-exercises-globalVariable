
<!-- ##Exercice 2
Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables **nom**, **prenom** et **age** grâce aux sessions. Ces variables auront été définies directement dans le code.  
Il faudra afficher le contenu de ces variables sur la deuxième page. -->

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>GlobalVariable</title>
</head>
<body>
	<div class="infoS">
		<H2>Retour info du serveur</H2>
		<?php 
		echo $_SERVER['HTTP_USER_AGENT'];
		echo $_SERVER["REMOTE_ADDR"];
		echo $_SERVER["SERVER_NAME"];
		?>
	</div>
</body>
</html>