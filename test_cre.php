
<?php

$nom = $_POST["Nom"];
$jdn = strval($_POST["JDN"]); 
$mdn = strval($_POST["MDN"]);
$adn = strval($_POST["ADN"]);
$ddn = $jdn."-".$mdn."-".$adn;  
$ad = $_POST["Adresse"];
$cp = $_POST["CP"];
$compétition = $_POST["compétition"];
$nbequipe = $_POST["nbequipe"];

echo "<tr><td>Nom de l'évènement </td><td>: </td><td>".$nom."</td></tr>";
echo "<tr><td>Date de l'évènement </td><td>: </td><td>".$ddn."</td></tr>";
echo "<tr><td>Lieu de l'évènement </td><td>: </td><td>".$adresse."</td></tr>";
echo "<tr><td>Code postal </td><td>:</td><td>".$CP."</td></tr>";
echo "<tr><td>Type de compétition </td><td>: </td><td>".$compétition."</td></tr>";
echo "<tr><td>Nombre d'équipe participant </td><td>: </td><td>".$nbequipe."</td></tr>";

?>