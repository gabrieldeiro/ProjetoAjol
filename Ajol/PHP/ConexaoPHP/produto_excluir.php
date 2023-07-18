<?php
    include_once('conexao.php');

    $idt = $_GET['id'];

    if($_POST)
    {
        $id = $_POST['txtId'];

        try 
        {
            $sql = $conn->prepare("
                delete from produto where id_produto=:id_produto
            ");
            
            $sql->execute(array(
                ':id_produto'=> $id
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
        header('location:../TelasPHP/sistema.php?tela=produto&id='.$idt);
    }
?>

<a href="../TelasPHP/sistema.php?tela=produto&id=<?=$idt?>">Voltar</a>