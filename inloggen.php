<html>

<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Style.css">
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
    <h1>Inloggen</h1>
</div>

<div class="loginform">
  <form id=inloggen method="Post" action="login.php">
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