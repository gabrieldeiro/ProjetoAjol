<?php
    include_once('../ConexaoPHP/conexao.php');

    if($_POST)
    {
        $id = $_POST['txtId'];
        $nome = $_POST['txtNome'];
        $descricao = $_POST['txtDescricao'];
        $obs = $_POST['txtObs'];
        $status = $_POST['txtStatus'];


        try 
        {
            $sql = $conn->prepare('
                update categoria set
                    nome_categoria=:nome_categoria,
                    descricao_categoria=:descricao_categoria,
                    obs_categoria=:obs_categoria,
                    status_categoria=:status_categoria
                where id_categoria=:id_categoria
    
            ');

            $sql->execute(array(
                ':id_categoria'=>$id,
                ':nome_categoria'=>$nome,
                ':descricao_categoria'=>$descricao,
                ':obs_categoria'=>$obs,
                ':status_categoria'=>$status
            ));

            if($sql->rowCount()>=1)
            {
                echo '<p>Dados alterados com sucesso!</p>';
            }




        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }

    }
    else
    {
        header('Location:../TelasPHP/sistema.php?tela=categoria');
    }

?>

<a href="../TelasPHP/sistema.php?tela=categoria">Voltar</a>