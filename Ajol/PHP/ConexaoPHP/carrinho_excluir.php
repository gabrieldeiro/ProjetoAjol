<?php
    include_once('conexao.php');

    if($_POST)
    {
        $id= $_GET['id'];

        try 
        {
            $sql = $conn->prepare("
                delete from itemproduto where id_itemproduto=:id_itemproduto
            ");

            $sql->execute(array(
                ':id_itemproduto'=> $id
            ));

            if($sql->rowCount()>= 1)
            {
                echo '<p>Dados excluidos com sucesso!</p>';
            }
            

        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    else
    {
        header('Location:../TelasPHP/loja.php');
    }

?>


<a href="../TelasPHP/loja.php">Voltar</a>
