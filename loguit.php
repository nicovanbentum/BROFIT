<?php
session_start();

//destroyed huidige sessie en redirect naar de home pagina
unset($_SESSION["gebruikersnaam"]);
unset($_SESSION["wachtwoord"]);
session_destroy();

header('Location: index.php');
?>