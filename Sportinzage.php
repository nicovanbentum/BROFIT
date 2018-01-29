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
<div class="sportschema" style="text-align:center">
    <h1> Sportschema</h1>
    <iframe width="500" height="365" frameborder="1" scrolling="no" src="https://hogeschoolutrecht-my.sharepoint.com/personal/bas_gaastra_student_hu_nl/_layouts/15/WopiFrame.aspx?sourcedoc={ba478311-6297-47b1-9e12-5eebf53ba7b5}&action=embedview&wdAllowInteractivity=False&wdHideGridlines=True&wdHideHeaders=True&wdDownloadButton=True&wdInConfigurator=True&wdHideSheetTabs=True">
    </iframe>
</div>

</body>
</html>
