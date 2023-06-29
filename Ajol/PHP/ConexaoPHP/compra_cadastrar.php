<?php
    include_once('conexao.php');

    if($_POST)
    {
          
    $id_usuario_compra = $_POST['txtid_usuario_compra'];
    $valortotal_compra = $_POST['txtvalortotal_compra'];
    $qtde_compra = $_POST['txtqte_compra'];
    $datafechamento_compra = $_POST['txtdatadefechamento_compra'];
    $formadepagamento_compra = $_POST['txtformadepagamento_compraId_compra'];
    $cupom_compra = $_POST['txtcupom_compra'];
    $valordesconto_compra = $_POST['txtvalordesconto_compra'];
    $obs_compra= $_POST['txtobs_compra'];
    $status_compra = $_POST['txtstatus_compra'];


        try 
        {

            $sql = $conn->prepare("
                insert into compra
                (
                    
                    id_usuario_compra,
                    valortotal_compra,
                    qtde_compra,
                    datafechamento_compra,
                    formadepagamento_compra,
                    cupom_compra,
                    valordesconto_compra,
                    obs_compra,
                    status_compra
                )
                value
                (
                    :id_usuario_compra,
                    :valortotal_compra,
                    :qtde_compra,
                    :datafechamento_compra,
                    :formadepagamento_compra,
                    :cupom_compra,
                    :valordesconto_compra,
                    :obs_compra,
                    :status_compra
                )
            ");

            $sql->execute(array(
                ':id_usuario_compra'=>$id_usuario_compra,
                ':valortotal_compra'=> $valortotal_compra,
                ':qtde_compra'=>$qtde_compra,
                ':datafechamento_compra'=>$datafechamento_compra,
                ':formadepagamento_compra'=>$formadepagamento_compra,
                ':cupom_compra'=>$cupom_compra,
                ':valordesconto_compra'=>$valordesconto_compra,
                ':obs_compra'=>$obs_compra,
                ':status_compra'=>$status_compra
            ));

            if($sql->rowCount()>=1)
            {
                echo '<p>Dados cadastrados com sucesso!</p>';
                echo '<p>ID Gerado: ' .$conn->lastInsertId(). '</p>';
            }
                
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }

    } 
    else
    {
        header('Location:../TelasPHP/sistema.php?tela=funcionario');
    }
    
?>

<a href="../TelasPHP/sistema.php?tela=funcionario">Voltar</a>