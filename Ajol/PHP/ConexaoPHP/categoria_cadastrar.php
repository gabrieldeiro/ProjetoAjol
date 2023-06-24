<?php
    include_once('../ConexaoPHP/conexao.php');

    if($_POST)
    {
        $nome = $_POST['txtNome'];
        $descricao = $_POST['txtDescricao'];
        $obs = $_POST['txtObs'];
        $status = $_POST['txtStatus'];


        try 
        {
            $sql = $conn->prepare('
                insert into categoria
                (
                    nome_categoria,
                    descricao_categoria,
                    obs_categoria,
                    status_categoria
                )
                value
                (
                    :nome_categoria,
                    :descricao_categoria,
                    :obs_categoria,
                    :status_categoria

                )
            
            ');

            $sql->execute(array(
                ':nome_categoria'=>$nome,
                ':descricao_categoria'=>$descricao,
                ':obs_categoria'=>$obs,
                ':status_categoria'=>$status
            ));

            if($sql->rowCount()>=1)
            {
                echo '<p>Dados cadastrados com sucesso!</p>';
                echo '<p>ID Gerado: '.$conn->lastInsertId().'</p>';
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