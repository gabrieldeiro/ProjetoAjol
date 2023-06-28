<?php
    include_once('conexao.php');

    $id = '';
    $id_produto_itemproduto = '';
    $id_compra_itemproduto = '';
    $qtde_itemproduto = '';
    $valortotal_itemproduto = '';
    $valorparcial_itemproduto = '';
    $valorlinha_itemproduto = '';
    $formapg_itemproduto = '';
    $obs_itemproduto = '';
    $status_itemproduto = '';

    
       
    
    
    
    if($_POST)
    {
        $id=$_POST['txtId_itemproduto'];

        $sql = $conn->query('select * from itemproduto where id_itemproduto='.$id);

        if($sql->rowCount()>=1)
        {
            foreach($sql as $row)
            {


                $id = $row[0];
                $id_produto_itemproduto = $row[1];
                $id_compra_itemproduto = $row[2];
                $qtde_itemproduto = $row[3];
                $valortotal_itemproduto = $row[4];
                $valorparcial_itemproduto = $row[5];
                $valorlinha_itemproduto = $row[6];
                $formapg_itemproduto = $row[7];
                $obs_itemproduto = $row[8];
                $status_itemproduto = $row[9];

                
               

            }

            

        }
        else
        {
            echo '<p>Funcionario não existe</p>';
        }

    }
    

?>

