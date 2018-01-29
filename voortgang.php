<?php
session_start();
require_once("connect.php");
require_once("Query.php");
$has_session = session_status() == PHP_SESSION_ACTIVE;
if ($has_session == true) {
    include_once("sessionHeader.html");
}
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

<div class="sportTabel">

</div>
</body>
</html>
