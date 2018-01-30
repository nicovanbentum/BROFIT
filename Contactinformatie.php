<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <title>BroFit - Contact Informatie</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<?php
session_start();
//check of er een ingelogde sessie bestaat
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
        <p>
            E-mail: <a href="mailto:brofit.info@gmail.com">brofit.info@gmail.com</a>
        </p>
        <h2>Amersfoort</h2>
        <p>
            Utrechtseweg 6<br>
            3811 NB, Amersfoort<br>
            033 445 1985
        </p>

        <h2>Amsterdam</h2>
        <p>
            Kempering 63-64<br>
            1104 KG, Amsterdam<br>
            020 497 5404
        </p>

        <h2>Utrecht</h2>
        <p>
            Europaplein 705<br>
            3536 WP, Utrecht<br>
            030 722 8901
        </p>

        <h2>Den Haag</h2>
        <p>
            Grote Marktstraat 40<br>
            2511 BJ, Den Haag<br>
            023 808 0888
        </p>
        <h2>Lelystad</h2>
        <p>
            De Meent 18<br>
            8224 BR, Lelystad<br>
            023 808 0888
        </p>

    </div>

</body>
</html>


