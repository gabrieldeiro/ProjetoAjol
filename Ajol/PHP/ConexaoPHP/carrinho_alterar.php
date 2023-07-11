<?php 
    include_once('conexao.php');



    if($_POST)
    {

        

        $id= $_GET['id'];
        

        $sqlitem = $conn->query('select * from itemproduto where id_itemproduto='.$id);

        if($sqlitem->rowCount()>=1)
        {
            foreach($sqlitem as $row)
            {
                $valoruni = $row[5];
            }
        }

        $qtde = $_POST['txtQtde'];
        $valortotal = $qtde * $valoruni ;

        try 
        {
            
            $sql = $conn->prepare('
                update itemproduto set
                    qtde_itemproduto=:qtde_itemproduto,
                    valortotal_itemproduto=:valortotal_itemproduto
                where id_itemproduto=:id_itemproduto
            ');

            $sql->execute(array(
                ':id_itemproduto'=>$id,
                ':qtde_itemproduto'=>$qtde,
                'valortotal_itemproduto'=>$valortotal
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
        header('location:../TelasPHP/carrinho.php');
    }

?>

<a href="../TelasPHP/carrinho.php">Voltar</a>