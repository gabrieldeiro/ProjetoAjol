<?php
    include_once('conexao.php');

    if($_POST)
    {
        $id = $_POST['txtId'];

        try 
        {
            $sql = $conn->prepare("
                delete from produto where id_compra=:id_compra
            ");
            
            $sql->execute(array(
                ':id_compra'=> $id
            ));

            if($sql->rowCount()>=1)
            {
                echo '<p>Dados excluidos com sucesso!</p>';
            }


        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }

    }
    else
    {
        header('location:../TelaPHP/frm_produto.php');
    }
?>

<a href="../TelaPHP/frm_produto.php">Voltar</a>