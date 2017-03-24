
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Retour</title>
</head>
<body>
	
	<p>
		Bonjour je m'appelle <?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?><br />
		je suis bien agé de <?php echo $_SESSION['age']; ?>  ans! 
	</p>
</body>
</html>
