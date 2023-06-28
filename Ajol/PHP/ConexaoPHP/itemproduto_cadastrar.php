<?php
    include_once('../ConexaoPHP/conexao.php');

    if($_POST)
    {
        $id_produto_itemproduto = $_POST['txtId_produto_itemproduto'];
        $id_compra_itemproduto = $_POST['txtId_compra_itemproduto'];
        $qtde_itemproduto = $_POST['txtId_qte_itemproduto'];
        $valortotal_itemproduto = $_POST['txtValortotal_itemproduto'];
        $valorparcial_itemproduto = $_POST['txtValorparcial_itemproduto'];
        $valorlinha_itemproduto = $_POST['txtValorlinha_itemproduto'];
        $formapg_itemproduto = $_POST['txtFormapg_itemproduto'];
        $obs_itemproduto = $_POST['txtObs_itemproduto'];
        $status_itemproduto = $_POST['txtStatus_itemproduto'];


        try 
        {
            $sql = $conn->prepare('
                insert into itemproduto
                (
                   
                    id_produto_itemproduto,
                    id_compra_itemproduto,
                    qtde_itemproduto,
                    valortotal_itemproduto,
                    valorparcial_itemproduto,
                    valorlinha_itemproduto,
                    formapg_itemproduto,
                    obs_itemcompra,
                    status_itemcompra
                    
                    )
                value
                (
                    :id_produto_itemproduto,
                    :id_compra_itemproduto,
                    :qtde_itemproduto,
                    :valortotal_itemproduto,
                    :valorparcial_itemproduto,
                    :valorlinha_itemproduto,
                    :formapg_itemproduto,
                    :obs_itemcompra,
                    :status_itemcompra

                )
            
            ');

            $sql->execute(array(
                ':id_produto_itemproduto'=>$id_produto_itemproduto,
                'id_compra_itemproduto'=>$id_compra_itemproduto,
                ':qtde_itemproduto'=>$qtde_itemproduto,
                ':valortotal_itemproduto'=> $valortotal_itemproduto,
                ':valorparcial_itemproduto'=> $valorparcial_itemproduto,
                ':valorlinha_itemproduto'=> $valorlinha_itemproduto,
                ':formapg_itemproduto'=>$formapg_itemproduto,
                ':obs_itemcompra'   =>    $obs_itemproduto,
                ':status_itemcompra' => $status_itemproduto

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

<!-- REVER -->