<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <title>BroFit - Tarieven</title>
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
    <h1> Tarieven</h1>
</div>
<div class="tabel">
    <table>
        <thead>
            <tr>
                <th>Abonnement</th>
                <th>Omschrijving</th>
                <th>Prijs</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Fitness Maandcontract</td>
                <td>Onbeperkt sporten. Maandelijks opzegbaar</td>
                <td>€24,95 p/m</td>
            </tr>
            <tr>
                <td>Fitness Jaarcontract</td>
                <td>Onbeperkt sporten. 1 jaar vast, daarna maandelijks opzegbaar</td>
                <td>€19,95 p/m</td>
            </tr>
            <tr>
                <td>Fitness Daluren Maandcontract</td>
                <td>Sporten in daluren. Maandelijks opzegbaar</td>
                <td>€17,95 p/m</td>
            </tr>
            <tr>
                <td>Fitness Daluren Jaarcontract</td>
                <td>Sporten in daluren. 1 jaar vast, daarna maandelijks opzegbaar</td>
                <td>€12,95 p/m</td>
            </tr>
            <tr>
                <td>Fitness Student</td>
                <td>Onbeperkt sporten. Maandelijks opzegbaar. Studentenkorting</td>
                <td>€12,95p/m</td>
            </tr>
            <tr>
                <td>Fitness Student Daluren</td>
                <td>Sporten in daluren. Maandelijksopzegbaar. Studenten korting
                <td>€9,95 p/m</td>
            </tr>
        </tbody>


    </table>
</div>
<div class="main">
    <h3>Toelichting</h3>
    <p>
        Daluren<br>Ma-Vr: 7:00-17:00<br>Weekend: 9:00-16:00
    </p>
    <p>De betalingen worden eenmaal per maand van uw rekening afgeschreven. Dit doen wij iedere keer op de 1e van de maand.
    Zo willen wij ervoor zorgen dat klanten een duidelijk overzicht hebben van de financien gekoppeld aan de sportschool.
    Ook kan er voor de 1e van de maand opgezegd worden</p>
    <p>Omdat studenten een beperkter budget hebben en wij het van groot belang vinden dat studenten gewoon gezond en fit blijven,
    krijgen studenten een korting op hun sport abonnement </p>


</div>

</body>
</html>
