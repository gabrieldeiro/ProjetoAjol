<?php

$bd = 'ajol';
$host = '10.37.46.58';
$user = 'root';
$pass = '';

try {
    $conn = new PDO("mysql:dbname=$bd;host=$host", $user,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $conn->exec("set names utf8");
} catch (PDOException $ex) {
    echo $ex->getMessage();
}

?>