<?php
    include_once('conexao.php');
    include_once('loginautenticar.php');

    date_default_timezone_set('America/Sao_Paulo');
    $dataf = date("Y-m-d H:i:s");

    if($_POST)
    {   

        $id_compra = $idCompra;
        $id_usuario_compra = $idusuariologin;
        $valortotal_compra = $_POST['txtValorf'];
        $qtde_compra = $_POST['txtQtde'];
        $datafechamento_compra = $dataf;
        $formadepagamento_compra = ' ';
        $cupom_compra = ' ';
        $valordesconto_compra = ' ';
        $obs_compra= ' ';
        $status_compra = 'FINALIZADO';
        $estagio_compra= ' ';

        try 
        {
            
            $sql = $conn->prepare
            ("
                update compra set
                    id_compra=:id_compra,
                    id_usuario_compra=:id_usuario_compra,
                    valortotal_compra=:valortotal_compra,
                    qtde_compra=:qtde_compra,
                    datafechamento_compra=:datafechamento_compra,
                    formadepagamento_compra=:formadepagamento_compra,
                    cupom_compra=:cupom_compra,
                    valordesconto_compra=:valordesconto_compra,
                    obs_compra=:obs_compra,
                    status_compra=:status_compra,
                    estagio_compra=:estagio_compra
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
                ':status_compra'=>$status_compra,
                ':estagio_compra'=>$estagio_compra
                
            ));
                
            if($sql->rowCount()>=1)
            {
                header('Location:../TelasPHP/finalcompra.php');
    
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
        
