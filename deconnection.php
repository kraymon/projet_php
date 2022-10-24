<?php
session_start();

#On detruit toutes les variables de session
$_SESSION = array();
session_destroy();

#on redirige vers la page de connection
header('Location:connection.php');


?>