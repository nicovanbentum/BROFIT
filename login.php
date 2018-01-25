<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once("connect.php");
require_once("Query.php");

$gebruikersnaam=$_POST['user'];

$wwselsql= "SELECT `password` FROM `user` WHERE `username` = :gebruikersnaam";
$selWachtwoord=Query($wwselsql, array('gebruikersnaam'=>$gebruikersnaam))[0];

$result=password_verify($_POST['password'], $selWachtwoord['password']);

if(isset($_POST['submit']) and $result == true){
    echo 'login gelukt';
}

?>

