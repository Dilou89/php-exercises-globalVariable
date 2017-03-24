
<!-- ##Exercice 2
Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables **nom**, **prenom** et **age** grâce aux sessions. Ces variables auront été définies directement dans le code.  
Il faudra afficher le contenu de ces variables sur la deuxième page. -->

<?php 
session_start();
$_SESSION['prenom']='Jean';
$_SESSION['nom']="Dupont";
$_SESSION['age']=40;
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>GlobalVariable</title>
</head>
<body>
	<div class="infoS">
		<H2>Retour des infos des inscrits</H2>
		<p>
			Bonjour <?php echo $_SESSION['prenom']." ".$_SESSION['nom'].',vous êtes agé de '.$_SESSION['age'];  ?> confirmez moi ces informations en cliquant sur le lien
		</p>


		<a href=retour.php>Retour</a>";
		
		
	</div>
</body>
</html>