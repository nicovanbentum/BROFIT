<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require_once("connect.php");
require_once("Query.php");

if(isset($_SESSION['gebruikersnaam'])) {
    include_once("sessionHeader.html");
} else {
    include_once("header.html");
}

$klantid=$_SESSION['klantid'];
$klantidArray=array('klantid'=>$klantid);
$selAantalSQL="SELECT a.*, f.naam as fnaam FROM activiteit a LEFT JOIN faciliteit f ON f.faciliteitid = a.faciliteitid WHERE klantid=:klantid AND a.faciliteitid = :faciliteitid";
//$aantalArray=Query($selAantalSQL, $klantidArray);
$faciliteiten = "SELECT * FROM faciliteit";
$faciliteitenArray = Query($faciliteiten);
$hoeveelheden = array();
foreach($faciliteitenArray as $key=>$faciliteit){
    $values = array('klantid'=>$klantid, 'faciliteitid'=>$faciliteit['faciliteitid']);
    $hoeveelheden[$key] = Query($selAantalSQL, $values);
}
$sql = "SELECT AVG(a.hoeveelheid) as gemiddeld,  f.naam as fnaam FROM activiteit a LEFT JOIN faciliteit f ON f.faciliteitid = a.faciliteitid WHERE klantid=:klantid GROUP BY a.faciliteitid";
$average = Query($sql, array('klantid'=>$klantid))[0];
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

<?php
    foreach($hoeveelheden as $key=>$value){
?>
    <table>
        <tr>
            <th>Machine</th>
            <th>Aantal</th>
        </tr>
        <?php foreach($value as $k=>$v){ ?>
            <tr>
                <td><?= $v['fnaam']?></td>
                <td><?= $v['hoeveelheid'] ?></td>
            </tr>
        <?php } ?>
    </table>
<?php
    }
?>
</div>

<table>
    <tr>
        <th>Machine</th>
        <th>Gemiddelde</th>
    </tr>
    <tr>
        <td><?= $average['fnaam'] ?></td>
        <td><?= round($average['gemiddeld']) ?></td>
    </tr>
</table>

<!--<p>--><?php /*echo highlight_string("<?php\n\$data =\n" . var_export($average, true) . ";\n?>"); */?><!--</p>-->

</div>

<div style="text-align:center">
<a href="/brofit/voortgang.php" class="button">Update</a>
</div>

</body>
</html>
<style>
    table, td, th{
        padding: 5px;
        margin: auto;
        font-family: Calibri;
    }
</style>