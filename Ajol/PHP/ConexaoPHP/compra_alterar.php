<?php
    include_once('conexao.php');

    if($_POST)
    {   
        $id_compra =  $_POST['txtid_compra'];
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
                update compra set

                id_compra = :id_compra,
                id_usuario_compra = :id_usuario_compra,
                valortotal_compra = :valortotal_compra,
                qtde_compra = :qtde_compra,
                datafechamento_compra =  :datafechamento_compra,
                formadepagamento_compra =   :formadepagamento_compra,
                cupom_compra = :cupom_compra,
                valordesconto_compra = :valordesconto_compra,
                obs_compra = :obs_compra,
                status_compra = :status_compra
                where id_compra=:id_compra

                ");

                $sql->execute(array(
                    ':id_compra'=>$id_compra,
                    ':id_usuario_compra'=>$id_usuario_compra,
                    ':valortotal_compra'=>$valortotal_compra,
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
