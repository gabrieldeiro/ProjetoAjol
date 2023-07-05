<?php
    include_once('conexao.php');

    if($_POST)
    {
        $id= $_POST['txtId'];

        try{
            $sql = $conn->prepare("
                delete from usuario where id_usuario=:id_usuario
            ");

            $sql->execute(array(
                ':id_usuario'=>$id
            ));

            if($sql->rowCount()>=1)
            {
                echo '<p>Dados excluidos com sucesso</P>';
            }

        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    else
    {
        header('Location:../TelasPHP/sistema.php?tela=usuario');
    }

?>

<a href="../TelasPHP/sistema.php?tela=usuario">Voltar</a>
