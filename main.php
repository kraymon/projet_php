<?php
<<<<<<< HEAD
=======

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



>>>>>>> 790bb96f564808ff0f1593b9a04bedcd3de0cf32
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
<<<<<<< HEAD
</header>
<table>
<tr>
			<td> <h1> <a href="crevenements.php" target="_blank"> CREER UN EVENEMENTS </a> </h1>
			<p> Créer votre équipe de 5 avec vos joueurs préférer </p> </td>
			<td>
			<h1> REJOINDRE UN EVENEMENTS </h1>
			<p> inscriver un joueur </p>
			</td>
</tr>

<tr>
			<td> <h1> INSCRIRE UN JOUEUR </h1>
			<p> Créer votre équipe de 11 avec vos joueurs préférer </p> </td>
			<td>
			<h1> CREER UNE EQUIPE</h1>
			<p> sélectionner votre 5</p>
			</td>
</tr>

</table>
=======

        <a href='deconnection.php' id='connection'>
		<img id='login' src='logos/noun-login-1920837.svg'>
		Se deconnecter
		</a>
        s
    </header>
>>>>>>> 790bb96f564808ff0f1593b9a04bedcd3de0cf32

    <table>
        <
    </table>


</body>

</html>