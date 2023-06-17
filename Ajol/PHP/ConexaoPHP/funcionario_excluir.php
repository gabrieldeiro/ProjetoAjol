<?php
    include_once('conexao.php');

    if($_POST)
    {
        $id=$_POST['txtId'];

        try 
        {
            $sql=$conn->prepare("
                delete from funcionario where id_funcionario=:id_funcionario
            ");

            $sql->execute(array(
                ':id_funcionario'=>$id
            ));

            if ($sql->rowCount()>=1)
            {
                echo '<p>Dados Excluidos com sucesso!</p>';
            }

        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    else
    {
        header('Location:##');
    }

?>

<a href="##">Voltar</a>