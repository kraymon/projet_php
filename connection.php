<!DOCTYPE html>
<html>

	<head>
		<title>Se connecter</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="page_css/connection.css">

	</head>

    <body>

    <form method="post">
			
			<h4>Nom d'utilisateur :</h4>
			<input type="text" name="nom"/> <br>
			
			<br>
			
			<h4>Mot de passe :</h4>
			<input type="password" name="mdp"/> <br>
			
			<br>
			
			<a href="creation_compte.php">Créer un compte</a>
			
			<br><br>
			
			<input type="submit" value="Valider" name="envoyer"/><br>
			
			
		</form>

        <?php
        #on demarre une session
        session_start();
            
        #les variables de connection se trouvent dans le fichier bd.php
        include ("bd.php");
            
        #on créer une connection avec notre base de données
        $connection = new mysqli ($host,$user,$mdp,$bdd);
            
        #on verifie que le formulaire a été envoyé
        if(isset($_POST["envoyer"])){
                
            #on recupere les données grâce à la méthode POST
            $nom_utilisateur = htmlspecialchars($_POST["nom"]);
            $mot_de_passe = htmlspecialchars($_POST["mdp"]);
            
            $_SESSION['nom'] = $nom_utilisateur;
                
            #On créer une variable qui va contenir nos requêtes
            $sql = "SELECT * FROM utilisateurs WHERE nom_utilisateur = '$nom_utilisateur' AND mot_de_passe = '$mot_de_passe'";
            
            #on créer une variable qui va contenir le resultat des requêtes
            $result = $connection->query($sql);
                
            #On verifie que tous les champs on été renseignés
            if(empty($nom_utilisateur) || empty($mot_de_passe)){
                echo "<p class='error'> Veuillez renseigner tous les champs</p>";
            }
                
            #On verifie que le compte utilisateur existe
            else if(!empty($result) && $result->num_rows == 0){
                echo "<p class='error'>Nom d'utilisateur ou mot de passe incorrect</p>";
            }
            
            #Si tous est verifier alors on redirige l'utilisateur sur la page d'accueil du site
            else{
                
                #on declare une variable SESSION pour securiser la connection au site
                $_SESSION['connect'] = 1;
                
                header('Location:main.php');
            }
            
        }
        
            
            
            ?>
    </body>

</html>