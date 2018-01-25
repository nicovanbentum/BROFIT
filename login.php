<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once("connect.php");
require_once("Query.php");

$wwselsql="SELECT `password` FROM `user` WHERE `username` LIKE '" . mysql_escape_string($_POST['user'])
$selWachtwoord=Query($wwselsql, null , true, false, false);

if(password_verify($selWachtwoord) == $_POST['password']){
    echo "login gelukt";
}

if(isset($_POST['submit'])){
    echo 'submitted';
}

?>