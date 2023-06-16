<?php
<<<<<<<< HEAD:Ajol/PHP/ConexaoPHP/usuario_excluir.php
    include_once('../ConexaoPHP/conexaoloja.php');
========
    include_once('../ConexaoPHP/conexao.php');
>>>>>>>> ab480fe045266483f159a3ddd213f531a5115177:Ajol/PHP/TelasPHP/usuario_excluir.php

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
        header('Locatiom:##'); //Link de direcionamento para a tela dps do cadastro
    }

?>

<a href="##">Voltar</a>
