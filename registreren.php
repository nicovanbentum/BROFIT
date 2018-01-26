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
    <h1 class="titel">BroFit</h1>
</div>
<div class="titel">
    <h1>Registreren</h1>
</div>

<div class="loginform">
  <form id="registeren" action="register.php" method="Post"
  accept-charset="UTF-8">
      <input type="hidden" name='submitted' id='submitted' value='1'/>
      <input type="text" name = "naam" id="naam" placeholder = "naam" />
      <br>
      <input type="text" name = "adres" id="adres" placeholder = "adres" />
      <br>
      <input type="text" name = "woonplaats" id="woonplaats" placeholder = "woonplaats" />
      <br>
      <input type="text" name = "email" id="email" placeholder = "e-mail" />
      <br>
      <input type="text" name = "username" id="username" placeholder = "gebruikersnaam" />
      <br>
      <input type="password" name = "password" id="password" placeholder = "wachtwoord" />
      <br>
      <input type="submit" name = "submit" value = "registreer"/ >
  </form>
</div>
</body>
</html>