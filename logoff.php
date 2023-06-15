<?php

session_start();
session_destroy();
header('location:login.php');
// volta p o login
?>