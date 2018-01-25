<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once("connect.php");
require_once("Query.php");

$hashedpw = password_hash($_POST['password'], PASSWORD_DEFAULT);

$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];

$valuesRegister = array('username'=>$username, 'password'=>$password, 'emailadres'=>$email );

if(isset($_POST['submit'])){
    echo 'submitted';
}

$sqlRegister = "INSERT INTO user (username, password, emailadres, role, klantid) VALUES (:username, :password, :emailadres, 'user', NULL)";

Query($sqlRegister, $valuesRegister, false, false, true)

?>