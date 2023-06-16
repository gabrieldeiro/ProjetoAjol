<?php
$idusuariologin = '';
$nomeusuario = '';
$loginusuariologin = '';


session_start();

if ($_SESSION) {
    if (isset($_SESSION['id_usuario']) && isset($_SESSION['login_usuario']) && isset($_SESSION['senha_usuario']) ))
    // dados sql
    {
        $idusuariologin = $_SESSION['id_usuario'];
        $nomeusuario = $_SESSION['login_usuario'];
        $loginusuariologin = $_SESSION['senha_usuario'];
        
    }
    else
    {
        header('location:login.php'); 
        // vai p o login
    }
}
else
{
    header('location:login.php'); 
    // vai para login
}
?>