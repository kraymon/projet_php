
<!DOCTYPE html>
<html>

	<head>
		<title></title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="page_css/connection.css">
		<script src="https://kit.fontawesome.com/d82b06789a.js" crossorigin="anonymous"></script>

	</head>
	
	
	<body>
    <form method="post">
		
		<table>
		<tr>
		<td>
			<h4>Adresse :</h4>
			<input type = "text" name="adresse"/>
			
			<h4>Email :</h4>
			<input type = "text" name="email"/>
			
			<h4>Numéro de téléphone :</h4>
			<input type = "text" name="tel"/>
		</td>
		<td>
			<h4>Nom d'utilisateur :</h4>
			<input type = "text" name="nom"/>
			
			<h4>Mot de passe :</h4>
			<input type = "password" name="mdp"/>
			
			<h4>Confirmer mot de passe :</h4>
			<input type = "password" name="mdp2"/>
		</td>
		</tr>
		
		</table>
			
			<br><br>
			
			<input type = "submit" value = "valider" name="envoyer"/>
		
		</form>
<?php
		
		#les variables de connection se trouvent dans le fichier bd.php
		include ("bd.php");
		
		#on créer une connection avec notre base de données
		$connection = new mysqli ($host,$user,$mdp,$bdd);
		
		
		#on verifie que le formulaire a été envoyé
		if(isset($_POST["envoyer"])){
			
			#on stock les données du formulaire envoyé
			$nom_utilisateur = $_POST["nom"];
			$mot_de_passe = $_POST["mdp"];
			$confirmation_mdp = $_POST["mdp2"];
			$adresse = $_POST["adresse"];
			$email = $_POST["email"];
			$telephone = $_POST["tel"];
			
			#On créer une variable qui va contenir nos requêtes
			$sql = "SELECT * FROM utilisateurs WHERE nom_utilisateur = '$nom_utilisateur'";
		
			#on créer une variable qui va contenir le resultat des requêtes
			$result = $connection->query($sql);
			
			
			#on verifie que tous les champs ont été remplis
			if(empty($nom_utilisateur) || empty($mot_de_passe) || empty($confirmation_mdp) || empty($adresse) || empty($email) || empty($telephone) ){
				echo "<p class='error'> Veuillez renseigner tous les champs</p>";
			}
			
			#on verifie que le mot de passe a bien été confirmé
			else if ($mot_de_passe != $confirmation_mdp){
				echo "<p class='error'> Mot de passe incorrect</p>";
			}
			
			#On verifie que le nom utilisateur n'est pas deja utilisé
			else if( !empty($result) && $result->num_rows != 0){
				echo "<p class='error'>Nom utilisateur déja utilisé, veuillez en choisir un autre</p>";
			}
			
			#si tous les tests précédents ont été passés alors on ajoute les données de l'utilisateur à la base de données
			else{
				$a = "INSERT INTO utilisateurs(id_utilisateur,nom_utilisateur,mot_de_passe,adresse,email,telephone) VALUES (\N,'$nom_utilisateur','$mot_de_passe','$adresse','$email','$telephone')";
				
				$connection->query($a);
				
				#on ferme la connection à la base de données
				$connection->close();
				
				#On redirige l'utilisateur vers la page de connection
				header('Location:connection.php');
			}
				
		}
		
		?>
</body>
</html>