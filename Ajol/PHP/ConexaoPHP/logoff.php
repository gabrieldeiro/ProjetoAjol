<?php

session_start();
session_destroy();
header('location:../TelasPHP/index.php');
// volta p o login
?>