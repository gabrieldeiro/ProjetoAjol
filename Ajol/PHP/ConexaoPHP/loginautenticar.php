<?php
$idusuariologin = '';
$nomeusuario = '';
$loginusuariologin = '';
$nomeusuariologin = '';
$imgusuariologin = '';

session_start();

if ($_SESSION) 
{
    if (isset($_SESSION['id_usuario']) && isset($_SESSION['login_usuario']) && isset($_SESSION['senha_usuario']))
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

    $sqlCompra = $conn->query('select status_compra from compra where id_usuario_compra='.$idusuariologin);

    if($sql->rowCount()>=1)
    {
        //Teoria do STATUS COMPRA COMEÇA AQUI
        
        if ($sqlCompra->rowCount()>=1) 
        {
            $statusCompra=$row[0];

            if ($statusCompra == 'Ativo') 
            {
                
            }
            else if($statusCompra == '' or $statusCompra == 'Inativo') 
            {
                try 
                {
                    $sqlCompra2 = $conn->prepare("update compra
                    set status_compra = 'Ativo' where id_usuario_compra = :id_usuario");
   
                    $sqlCompra2 = $conn->execute(array(
                       ':id_usuario' => $idusuariologin
                    ));
                    if ($sqlCompra2->rowCount()>=1) 
                    {
                        echo "<script> Alert('Compra criada com sucesso, isso é uma mensagem temporária') </script>";
                    }
                } 
                catch (PDOException $erro) 
                {
                    echo $erro->getMessage();
                }

            }
        }
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