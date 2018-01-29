<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once("connect.php");
require_once("Query.php");

$hashedpw = password_hash($_POST['password'], PASSWORD_DEFAULT);

$username=$_POST['username'];
$email=$_POST['email'];
$naam=$_POST['naam'];
$adres=$_POST['adres'];
$woonplaats=$_POST['woonplaats'];

$valuesRegister = array('username'=>$username, 'password'=>$hashedpw, 'emailadres'=>$email );

if(isset($_POST['submit'])){
    header('Location: registratieSuccess.php');
}

$sqlRegister = "INSERT INTO user (username, password, emailadres, role, klantid) VALUES (:username, :password, :emailadres, 'user', NULL)";

$wwselsql= "SELECT `klantid` FROM `user` WHERE `username` = :gebruikersnaam";
$selKlantid=Query($wwselsql, array('gebruikersnaam'=>$username))[0];
$klantid=$selKlantid['klantid'];

$valuesRegister2 = array('naam'=>$naam, 'adres'=>$adres, 'woonplaats'=>$woonplaats, 'email'=>$email, 'klantid'=>$klantid);
$sqlRegister2 = "INSERT INTO klant(naam, adres, woonplaats, email, klantid) VALUES (:naam, :adres, :woonplaats, :email, :klantid)";


Query($sqlRegister, $valuesRegister, false, false, true);
Query($sqlRegister2, $valuesRegister2, false, false, true);

?>