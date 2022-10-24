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
<<<<<<< HEAD
<header>
        <h1>MyTeam</h1>
</header>
<table>
<tr>
			<td> <h1> CREER UN EVENEMENTS </h1>
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

    
>>>>>>> 3bc5875d125082bb4508958bd1679d4dd120539d

</body>

</html>