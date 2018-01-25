<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once("connect.php");
require_once("Query.php");

$gebruikersnaam=$_POST['user'];

$wwselsql= "SELECT `password` FROM `user` WHERE `username` LIKE '$gebruikersnaam'";
$selWachtwoord=Query($wwselsql, null , true, false, false);

if(isset($_POST['submit']) and password_verify('$selWachtwoord', PASSWORD_DEFAULT) == $_POST['password']){
    echo 'submitted';
}

?>