<?php
session_start();
unset($_SESSION["gebruikersnaam"]);
unset($_SESSION["wachtwoord"]);
session_destroy();

header('Location: index.php');
?>