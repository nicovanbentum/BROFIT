<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once("connect.php");
require_once("Query.php");

$hashedpw = password_hash($_POST['password'], PASSWORD_DEFAULT);

$username=$_POST['username'];
$email=$_POST['email'];

$valuesRegister = array('username'=>$username, 'password'=>$hashedpw, 'emailadres'=>$email );

if(isset($_POST['submit'])){
    header('Location: registratieSuccess.php');
}

$sqlRegister = "INSERT INTO user (username, password, emailadres, role, klantid) VALUES (:username, :password, :emailadres, 'user', NULL)";

Query($sqlRegister, $valuesRegister, false, false, true)

?>