<?php
    include_once('conexao.php');

    if($_POST)
    {
        $id = $_POST['txtId'];

        try 
        {
            $sql = $conn->prepare("
                delete from categoria where id_categoria=:id_categoria
            ");

            $sql->execute(array(
                ':id_categoria'=> $id
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
        header('Location:../TelasPHP/frm_categoria.php');
    }

?>

<a href="../TelasPHP/frm_categoria.php">Voltar</a>