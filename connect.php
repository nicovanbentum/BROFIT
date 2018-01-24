<?php

function openCon()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "WuTeP1HoCcXYoKbd";
    $db = "sportschooldb2";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die ("Connection failed: %/n" . $conn->error);

    return $conn;

}

function closeConn($conn)
    {
        $conn -> close();
    }

function SignIn()
{
    session_start();   //start session for user profile page
    if(!empty($_POST['user']))
    {
        $query = mysql_query("SELECT *  FROM user where username = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysqli_error());
        $row = mysql_fetch_array($query) or die(mysql_error());
        if(!empty($row['userName']) AND !empty($row['pass']))
        {
            $_SESSION['userName'] = $row['pass'];
            echo "1";

        }
        else
        {
            echo "0";
        }
    }
}
if(isset($_POST['submit']))
{
    SignIn();
}

?>