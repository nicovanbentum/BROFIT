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
$geslacht=$_POST['geslacht'];

$valuesRegister2 = array('naam'=>$naam, 'adres'=>$adres, 'woonplaats'=>$woonplaats, 'geslacht'=>$geslacht);
$sqlRegister2 = "INSERT INTO klant (naam, adres, woonplaats, geslacht, lidsinds) VALUES (:naam, :adres, :woonplaats, :geslacht, NOW())";

Query($sqlRegister2, $valuesRegister2, false, false, true);

$wwselsql= "SELECT `klantid` FROM `klant` WHERE `naam` = :naam";
$selKlantid=Query($wwselsql, array('naam'=>$naam))[0];
$klantid=$selKlantid['klantid'];

$valuesRegister = array('username'=>$username, 'password'=>$hashedpw, 'emailadres'=>$email, 'role'=>'role', 'klantid'=>$klantid );
$sqlRegister = "INSERT INTO user (username, password, emailadres, role, klantid) VALUES (:username, :password, :emailadres, :role, :klantid)";

Query($sqlRegister, $valuesRegister, false, false, true);

if(isset($_POST['submit'])){
    header('Location: registratieSuccess.php');
}

?>