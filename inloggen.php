<html>

<head>

    <link rel="stylesheet" type="text/css" href="Style.css">
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
  <form id=inloggen method="Post" action="login.php">
      <h1>INLOGGEN</h1>
      <input type="hidden" name='submitted' id='submitted' value='1'/>
      <br>
      <input type="text" name = "user" placeholder = "gebruikersnaam" />
      <br>
      <input type="password" name = "password" placeholder = "wachtwoord" />
      <br>
      <input type="submit" name = "submit" value = "log in"/ >
  </form>
</div>
</body>
</html>