<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <title>BroFit - Aanbod</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<?php
session_start();
if(isset($_SESSION['gebruikersnaam'])) {
    include_once("sessionHeader.html");
} else {
    include_once("header.html");
}
?>

<body>
<div class="titel">
    <img style="max-width: 25%" src="https://i.imgur.com/BcGPsGz.png">
</div>
<div class="main">
    <h1 id="Kopje"> Aanbod</h1>
    <h3>Sportoverzicht</h3>
    <p>
        In ons unieke sportoverzicht systeem staat de klant centraal. Via onze website kan de klant inloggen om zo zijn/haar sportresultaten in te zien.
        Aan de hand van deze resultaten krijgt de klant weet van zijn/haar voortgang. Aan deze resultaten kunnen acties gekoppeld worden om het sporten
        zo effectief mogelijk te maken.
        <br>
        <br>
        Door middel van tabellen en grafieken krijgt de klant een overzicht van de resultaten te zien. Hierdoor kan de klant zijn/haar groei binnen het sporten zien.
        Zo weet de klant of die effectief bezig is geweest of dat er geen groei aanwezig is. Aan de hand hiervan hopen wij de groei en ervaringen van de klant te bevorderen
        en optimaliseren.

    </p>
</div>
<div class="sum">
    <h2>Machines</h2>
    <h3>Loopband</h3>
        <img height="320" width="240" src="https://escdn.nl/images/upload/57abd2dec5d5b9f7ff0a74a8d73ffe80.jpeg">
    <h3>Leg Press</h3>
        <img height="320" width="240" src="https://4.imimg.com/data4/BH/TW/MY-3142623/leg-press-machine-500x500.jpg">
    <h3>Lat Machine</h3>
    <img height="320" width="240" id="image" src="https://sep.yimg.com/ay/fitnessgiant/body-solid-dpls-sf-pro-dual-vertical-press-lat-machine-28.png">
</div>
</body>
</html>
