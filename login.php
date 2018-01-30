<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once("connect.php");
require_once("Query.php");

$gebruikersnaam=$_POST['user'];

//klantid ophalen
$selsql= "SELECT klantid FROM user WHERE username = :gebruikersnaam";
$selKlantid=Query($selsql, array('gebruikersnaam'=>$gebruikersnaam))[0];

//session data voor later gebruik
$_SESSION['klantid']=$selKlantid['klantid'];
$_SESSION['gebruikersnaam']=$gebruikersnaam;
$_SESSION['wachtwoord']=$_POST['password'];

//hashed wachtwoord ophalen
$wwselsql= "SELECT `password` FROM `user` WHERE `username` = :gebruikersnaam";
$selWachtwoord=Query($wwselsql, array('gebruikersnaam'=>$gebruikersnaam))[0];


//checkt pw overeenkomst
$result=password_verify($_POST['password'], $selWachtwoord['password']);

//final submit, checkt voor bad log in
if(isset($_POST['submit']) and $result == true){
    header('Location: buttonsDashboard.php');
} else {
    session_destroy();
    header('location: inloggen.php');
}

?>
