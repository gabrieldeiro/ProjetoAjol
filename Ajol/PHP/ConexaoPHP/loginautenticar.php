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

    $sql = $conn->query('select * from usuario where id_usuario='.$idusuariologin);//serve apenas para a foto de perfil

    $sqlCompra = $conn->query('select status_compra from compra where id_usuario_compra='.$idusuariologin);

    if($sql->rowCount()>=1)
    {
        //Teoria do STATUS COMPRA COMEÇA AQUI
        
        if ($sqlCompra->rowCount()>=1) 
        {
            foreach ($sqlCompra as $row) 
            {
                $statusCompra=$row[0];
            }

            if ($statusCompra == 'Ativo' or $statusCompra == 'ativo') 
            {
                return;//talvez um header
            }
            else if($statusCompra == '') 
            {

                $status_compra = 'Ativo';

                try 
                {
    
                $sqlCompra2 = $conn->prepare("
                insert into compra
                (
                    id_usuario_compra,
                    valortotal_compra,
                    qtde_compra,
                    datafechamento_compra,
                    formadepagamento_compra,
                    cupom_compra,
                    valordesconto_compra,
                    obs_compra,
                    status_compra
                )
                value
                (
                    :id_usuario_compra,
                    '',
                    '',
                    '',
                    '',
                    '',
                    '',
                    '',
                    :status_compra
                )
                    ");
                $sql->execute(array(
                    ':id_usuario_compra'=>$idusuariologin,
                    ':status_compra'=>$status_compra
                ));
    
                echo "<p>Compra criada com sucesso, isso é uma mensagem temporária</p>";
                } 
                
                catch (PDOException $erro) 
                {
                    echo $erro->getMessage();
                    echo "<p>Erro ao criar cadastro </p>";
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
    //header('location:login.php'); 
    // vai para login
}
