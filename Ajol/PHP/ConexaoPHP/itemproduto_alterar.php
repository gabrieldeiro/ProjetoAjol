<?php
    include_once('conexao.php');

    if($_POST)
    {

        $id = $_POST['txtId_itemproduto'];
        $id_produto_itemproduto = $_POST['txtId_produto_itemproduto'];
        $id_compra_itemproduto = $_POST['txtId_compra_itemproduto'];
        $qtde_itemproduto = $_POST['txtId_qte_itemproduto'];
        $valortotal_itemproduto = $_POST['txtValortotal_itemproduto'];
        $valorunitario_itemproduto = $_POST['txtValorunitario_itemproduto'];
        $obs_itemproduto = $_POST['txtObs_itemproduto'];
        $status_itemproduto = $_POST['txtStatus_itemproduto'];


        try 
        {
            
            $sql = $conn->prepare("
                update itemproduto set
                id_produto_itemproduto = :id_produto_itemproduto,
                id_compra_itemproduto = :id_compra_itemproduto,
                qtde_itemproduto = :qtde_itemproduto,
                valortotal_itemproduto = :valortotal_itemproduto,
                valorunitario_itemproduto = :valorunitario_itemproduto,
                obs_itemcompra = :obs_itemcompra,
                status_itemcompra = :status_itemcompra
                where id_funcionario=id_produto_itemproduto
                
            ");

            $sql->execute(array(
                ':id_itemproduto'=>$id,
                ':id_produto_itemproduto'=>$id_produto_itemproduto,
                'id_compra_itemproduto'=>$id_compra_itemproduto,
                ':qtde_itemproduto'=>$qtde_itemproduto,
                ':valortotal_itemproduto'=> $valortotal_itemproduto,
                ':valorunitario_itemproduto'=> $valorunitario_itemproduto,
                
                ':obs_itemcompra'   =>    $obs_itemproduto,
                ':status_itemcompra' => $status_itemproduto
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
        header('Location:../TelasPHP/frm_funcionario.php');
    }

?>

<a href="../TelasPHP/frm_funcionario.php">Voltar</a>

<!-- rever -->