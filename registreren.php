<html>
<head>

<link rel="stylesheet" type="text/css" href="Style.css">
    <title>LOG IN PAGINA</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>

<?php
include_once("header.html");
?>

<body>

<div class="imgage">
    <h1 class="titel">Sportschool Benno L</h1>
</div>
<div class="PageTitel">
    <h1>Registreren</h1>
</div>

<div class="loginform">
  <form method="Post">
      <input type="text" name = "naam" placeholder = "naam" />
      <br>
      <input type="text" name = "adres" placeholder = "adres" />
      <br>
      <input type="text" name = "woonplaats" placeholder = "woonplaats" />
      <br>
      <input type="text" name = "geslacht" placeholder = "geslacht" />
      <br>
      <input type="text" name = "user" placeholder = "gebruikersnaam" />
      <br>
      <input type="password" name = "password" placeholder = "wachtwoord" />
      <br>
      <input type="submit" name = "submit" value = "registreer"/ >
  </form>
</div>
</body>
</html>