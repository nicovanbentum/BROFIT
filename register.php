<?php

include_once("connect.php");
include_once("query.php");

if(isset($_POST['submit'])){
    echo "submitted";
}

$hashedpw = password_hash($_POST['password'], PASSWORD_DEFAULT);

$valuesRegister = array($_POST['klant'], $_POST['adres'], $_POST['woonplaats', $_POST['email'], $_POST['username'], $hashedpw])]

$sqlRegister = "INSERT INTO klant (naam, adres, woonplaats, email, username, password) VALUES (:naam, :adres, :woonplaats, :email, :username, :password)";

Query($sqlRegister, $valuesRegister, false, false, false)
?>