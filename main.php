<?php
$host = "localhost";
$user = "root";
$mdp = "password";
$bdd = "dev_projet";


$idcon = new mysqli($host, $user, $mdp, $bdd) ;
if ( $idcon->connect_errno ) {
	exit ("Impossible de se connecter à la base de données 
'$bdd' à cause de l'erreur suivant : " . $idcon->connect_error .
"." ) ;
}


?>

<!DOCTYPE html>

<head>

	<meta charset="utf-8">
	<link rel="stylesheet" href="pages_css/main.css">
	<link rel="icon" href="">
	<script src=""></script>
	<script src="https://kit.fontawesome.com/d82b06789a.js" crossorigin="anonymous"></script>
	
	
	<title>ACCUEIL</title>
	
</head>
<body>
    <h1>subject ?</h1>

</body>
</html>