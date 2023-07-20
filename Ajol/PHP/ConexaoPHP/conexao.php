<?php
$host = "10.37.46.20";
$dbn = "ajol";
$user = "username";
$pass = "password";

try
{
    $conn = new PDO("mysql:dbname=$dbn;host=$host", $user, $pass);

    $conn -> setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $conn -> exec(" set names utf8");

}

catch(PDOException $erro)
{
    echo $erro ->getMessage();
}

?>