<?php
session_start();
unset($_SESSION["gebruikersnaam"]);
unset($_SESSION["wachtwoord"]);
$_SESSION['session_check']=false;
session_destroy();

header('Location: index.php');
?>