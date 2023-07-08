<?php
$idusuariologin = '';
$nomeusuario = '';
$loginusuariologin = '';
$nomeusuariologin = ''; //perfil
$imgusuariologin = ''; //perfil
$statusCompra='';
$idCompra='';

session_start();

if ($_SESSION) 
{
    if (isset($_SESSION['id_usuario']) && isset($_SESSION['login_usuario']) && isset($_SESSION['senha_usuario']))
    // dados sql
    {
        $idusuariologin = $_SESSION['id_usuario'];
        $nomeusuario = $_SESSION['login_usuario'];
        $loginusuariologin = $_SESSION['senha_usuario'];


        $sqlCompra = $conn->query("select * from compra where id_usuario_compra='.$idusuariologin.' and status_compra='ATIVO'");
        if($sqlCompra->rowCount()>=1)
        {
            foreach ($sqlCompra as $row) 
            {
                $idCompra = $row[0];
                $statusCompra=$row[9];

            }
        }
        else
        {
            $sqlCompra2 = $conn->prepare("
                insert into compra
                (
                    id_usuario_compra,
                    status_compra
                )
                value
                (
                    :id_usuario_compra,
                    :status_compra
                )
            ");

            $sqlCompra2->execute(array(
                ':id_usuario_compra'=>$idusuariologin,
                ':status_compra'=>'ATIVO'
            ));

            if($sqlCompra2->rowCount()==1)
            {
                $idCompra = $conn->lastInsertId();
            }
        }

        //sistema para pegar foto e nome do usuário para a home.
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
}


