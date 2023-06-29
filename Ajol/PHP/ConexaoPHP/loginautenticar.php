<?php
$idusuariologin = '';
$nomeusuario = '';
$loginusuariologin = '';
$nomeusuariologin = '';
$imgusuariologin = '';


session_start();

if ($_SESSION) 
{
    if (isset($_SESSION['id_usuario']) && isset($_SESSION['login_usuario']) && isset($_SESSION['senha_usuario']) )
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

    $sql = $conn->query('select * from usuario where id_usuario='.$idusuariologin);

    if($sql->rowCount()>=1)
    {
        foreach ($sql as $row) 
        {
            $nomeusuariologin=$row[1];
            $imgusuariologin=$row[5];
        }
    }
}
else
{
    header('location:login.php'); 
    // vai para login
}
?>