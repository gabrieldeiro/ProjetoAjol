<?php
    include_once('conexao.php');
    include_once('loginautenticar.php');

    $cont = '';

    if($_POST)
    {
        $id = $idCompra;
        
        $sql = $conn->query('select sum(qtde_itemproduto) from itemproduto where id_compra_itemproduto='. $id);

        if($sql->rowCount()>=1)
        {
            foreach($sql as $row)
            {
                $cont = $row[0];
            }
        }
        else
        {
            echo '<p>Categoria não existe</p>';
        }

    }


?>