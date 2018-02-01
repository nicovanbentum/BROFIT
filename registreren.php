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

<div class="titel">
    <img style="max-width: 25%" src="https://i.imgur.com/BcGPsGz.png">
</div>

<div class="form-style-6">
  <form id="registeren" action="register.php" method="Post"
  accept-charset="UTF-8">
      <h1>REGISTREREN</h1>
      <input type="hidden" name='submitted' id='submitted' value='1'/>
      <input type="text" name = "naam" id="naam" placeholder = "naam" />
      <br>
      <input type="text" name = "adres" id="adres" placeholder = "huisnummer" />
      <br>
      <input type="text" name = "woonplaats" id="woonplaats" placeholder = "postcode" />
      <br>
      <input type="text" name = "geslacht" id="geslacht" placeholder = "geslacht" />
      <br>
      <input type="text" name = "email" id="email" placeholder = "e-mail" />
      <br>
      <input type="text" name = "iban" id="iban" placeholder="iban"/>
      <br>
      <select name="Abbo">
          <option value="2" name="basic">Basic abo</option>
          <option value="3" name="student">Student abo</option>
          <option value="4" name="daluren">Daluren abo</option>
      </select>
      <input type="text" name = "username" id="username" placeholder = "gebruikersnaam" />
      <br>
      <input type="password" name = "password" id="password" placeholder = "wachtwoord" />
      <br>
      <input type="submit" name = "submit" value = "registreer"/ >
  </form>
</div>
</body>
</html>