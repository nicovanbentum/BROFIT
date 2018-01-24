<?php
$user=" ";
$password=" ";
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

//login check
if(isset($_POST['submit'])){

    if(($_POST['user'] == $user) and (password_verify($password, $hashed_password))){
        echo "login gelukt.";
    }
    else
    {
        echo "login mislukt.";
    }
}
?>
<html>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>

<header>
    <div class="navbar">
        <a href="http://localhost/SportschoolBenno/Home.html">Home</a>
        <a href="http://localhost/SportschoolBenno/Sportinzage.html"> Sportinzage</a>
        <a href="http://localhost/SportschoolBenno/SporttipsEnAdviezen.html">Sporttips en Adviezen</a>
        <a href="http://localhost/sportschoolBenno/Aanbod.html">Aanbod</a>
        <a href="http://localhost/sportschoolBenno/Tarieven.html">Tarieven</a>
        <a href="http://localhost/sportschoolBenno/Contactinformatie.html">Contact Informatie</a>
        <a id="INLOG" href="http://localhost/sportschoolBenno/registreer.php">Registreren</a>
        <a id="INLOG" href="http://localhost/sportschoolBenno/inloggen.php">Inloggen</a>

    </div>
</header>

<body>

<div class="imgage">
    <h1 class="titel">Sportschool Benno L</h1>
</div>
<div class="PageTitel">
    <h1>Inloggen</h1>
</div>

<div class="loginform">
  <form method="Post" action="connect.php">
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