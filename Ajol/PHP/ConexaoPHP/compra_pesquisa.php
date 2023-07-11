<?php
    include_once('conexao.php');

    $id_compra = '';
    $id_usuario_compra = '';
    $valortotal_compra = '';
    $qtde_compra = '';
    $datafechamento_compra = '';
    $formadepagamento_compra = '';
    $cupom_compra = '';
    $valordesconto_compra = '';
    $obs_compra = '';
    $status_compra = '';
    $estagio_compra = '';


    
    
    
    if($_POST)
    {
        $id_compra=$_POST['txtid_compra'];

        $sql = $conn->query('select * from compra where id_compra='.$id_compra);

        if($sql->rowCount()>=1)
        {
            foreach($sql as $row)
            {


                
                    $id_compra = $row[0];
                    $id_usuario_compra = $row[1];
                    $valortotal_compra = $row[2];
                    $qtde_compra = $row[3];
                    $datafechamento_compra = $row[4];
                    $formadepagamento_compra = $row[5];
                    $cupom_compra = $row[6];
                    $valordesconto_compra = $row[7];
                    $obs_compra = $row[8];
                    $status_compra = $row[9];
                    $estagio_compra = $row[10];
               

            }

            

        }
        else
        {
            echo '<p>Funcionario não existe</p>';
        }

    }
    

?>

