<?php

include_once("connect.php");
include_once("query.php");

if(isset($_POST['submit'])){
    echo "submitted";
}

$hashedpw = password_hash($_POST['password'], PASSWORD_DEFAULT);

$valuesRegister = array('username'=>$_POST['username'], 'password'=>$hashedpw, 'emailadres'=>$_POST['email'] );

$sqlRegister = "INSERT INTO user (username, password, emailadres) VALUES (:username, :password, :emailadres)";

Query($sqlRegister, $valuesRegister, false, false, true)


?>