<?php
    include_once('conexao.php');

    if($_POST)
    {
        $id = $_POST['txtId_itemproduto'];

        try 
        {
            $sql = $conn->prepare("
                delete from produto where id_produto=:id_produto
            ");
            
            $sql->execute(array(
                ':id_itemproduto'=> $id
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

<!-- rever -->