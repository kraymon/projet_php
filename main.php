<?php

session_start();
	
#On redirige l'utilisateur vers la page de connection si il n'est pas connecté
if(!$_SESSION['connect']){
	header('Location:connection.php');
}

include ("bd.php");

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
	
	
	
	<title>ACCUEIL</title>
	
</head>

<body>

    <header>
        <h1>MyTeam</h1>

        <a href='deconnection.php' id='connection'>
		<img id='login' src='logos/noun-login-1920837.svg'>
		Se deconnecter
		</a>
        s
    </header>

    <table>
        <
    </table>


</body>

</html>