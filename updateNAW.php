<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once("connect.php");
require_once("Query.php");

$naam=$_SESSION['naam'];
$adres=$_SESSION['adres'];
$woonplaats=$_SESSION['woonplaats'];
$klantid=$_SESSION['klantid'];

$valuesNAW = array('naam'=>$naam, 'adres'=>$adres, 'woonplaats'=>$woonplaats );

if(isset($_POST['submit'])){
    header('Location: index.php');
}

$sqlNAW = "INSERT INTO klant WHERE klantid = '$klantid'(naam, adres, woonplaats) VALUES (:naam, :adres, :woonplaats)";

Query($sqlNAW, $valuesNAW, false, false, true)

?>