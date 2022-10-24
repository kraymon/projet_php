<?php

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

<header>
        <h1>MyTeam</h1>
</header>

<center>
	<!-- Début de l'encadré contenant le formulaire -->
	<fieldset>
		<p>Tous les champs avec un (*) doivent être obligatoirement complétés.</p>
		
		<form name="Evenement" method="POST" action="test_cre.php">
			<h1>CREER VOTRE EVENEMENT<h1>
			<table>
				<tr>
					<td> <label for="Nom">Nom Evenement*</label> </td>
					<td> <input type="text" name="Nom" required>  </td>
				</tr>
				<tr>
					<td> <label for="JDN"> Jour évenement  *</label></td>
					<td> <input type="number" name="JDN" min="1" max="31" required>  </td>
				</tr>
				<tr>
					<td> <label for="MDN">Mois évenement  *</label></td>
					<td> <input type="number" name="MDN" min="1" max="12" required>  </td>
				</tr>
				
				<tr>
					<td> <label for="ADN">Année évenement *</label></td>
					<td> <input type="number" name="ADN" min="2022" max="2023" required>  </td>
                </tr>
				<tr>
					<td> <label for="Adresse">Lieu Evenement *</label></td>
					<td> <input type="text" name="Adresse" required>  </td>
				</tr>
				<tr>
					<td> <label for="CP">Code Postal</label></td>
					<td> <input type="text" name="CP">  </td>
				</tr>
				<tr>
					<td> <label for="compétition">Type de compétition *</label>  </td>
					<td> <select name="compétition"> 
						<option value="six">6vs6</option>
						<option value="trois">3vs3</option>
						<option value="cinq" selected>5vs5</option>
						</select> </td>
				</tr>
				<tr>
					<td> <label for="nbequipe">nombre d'équipe *</label>  </td>
					<td> <select name="nbequipe"> 
						<option selected value="C0">16</option>
						<option value="C1">8</option>
						<option value="C2">4</option>
						</select> </td>
				</tr>

				<tr>	
					<td colspan="2"><input type="submit" id="submit" value="Créer" > <input type="reset" id="reset" value="Annuler" ></td>
				</tr>
			</table>
		</form>
	</fieldset>

	</center>