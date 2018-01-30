<?php
session_start();
require_once("connect.php");
require_once("Query.php");

//check of er een ingelogde sessie bestaat
if(isset($_SESSION['gebruikersnaam'])) {
    include_once("sessionHeader.html");
} else {
    include_once("header.html");
}

//haal klantid op, selecteer NAW op basis van klantid, ken het toe aan een variable
$klantid=$_SESSION['klantid'];
$valuesArray=array('klantid'=>$klantid);
$selNAWSql="SELECT naam, adres, woonplaats FROM klant WHERE klantid=:klantid";
$klantinfo=Query($selNAWSql, $valuesArray)[0];

//assign variables voor in de html
$showNaam=$klantinfo['naam'];
$showAdres=$klantinfo['adres'];
$showWoonplaats=$klantinfo['woonplaats'];

?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <title>BS Home</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
<div class="titel">
    <img style="max-width: 25%" src="https://i.imgur.com/BcGPsGz.png">
</div>

<div class="form-style-6">
    <form id="registeren" action="updateNAW.php" method="Post"
          accept-charset="UTF-8">
        <h1>NAW Gegevens</h1>
        <input required type="hidden" name='submitted' id='submitted' value='1'/>
        <label for="naam">Naam:</label>
        <input required type="text" name = "naam" id="naam" placeholder="<?php echo $showNaam;?>"/>
        <br>
        <label for="adres">Adres:</label>
        <input required type="text" name = "adres" id="adres" placeholder = "<?php echo $showAdres;?>" value=""/>
        <br>
        <label for="woonplaats">Woonplaats:</label>
        <input required type="text" name = "woonplaats" id="woonplaats" placeholder = "<?php echo $showWoonplaats;?>" value="" />
        <br>
        <input required type="submit" name = "submit" value = "gegevens bijwerken" />
    </form>
</div>

</div>
</body>
</html>
