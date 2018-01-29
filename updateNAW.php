<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once("connect.php");
require_once("Query.php");

$gebruikersnaam=$_SESSION['gebruikersnaam'];

$selsql= "SELECT klantid FROM user WHERE username = :gebruikersnaam";
$selKlantid=Query($selsql, array('gebruikersnaam'=>$gebruikersnaam))[0];

$naam=$_POST['naam'];
$adres=$_POST['adres'];
$woonplaats=$_POST['woonplaats'];
$klantid=$selKlantid['klantid'];

//update klant met nieuwe NAW gegevens
$valuesNAW = array('naam'=>$naam, 'adres'=>$adres, 'woonplaats'=>$woonplaats, 'klantid'=>$klantid);

$sqlNAW = "UPDATE klant SET naam=:naam, adres=:adres, woonplaats=:woonplaats WHERE klantid=:klantid";

Query($sqlNAW, $valuesNAW, false, false, true);

if(isset($_POST['submit'])){
    header('Location: index.php');
}

?>