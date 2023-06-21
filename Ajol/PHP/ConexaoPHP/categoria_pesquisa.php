<?php
    include_once('conexao.php');

    $idCategoria = '';
    $nomeCategoria = '';
    $descricaoCategoria = '';
    $obsCategoria = '';
    $statusCategoria = '';

    if($_POST)
    {
        $id= $_POST['txtId'];

        $sql = $conn->query('select * from categoria where id_categoria='.$id);

        if($sql->rowCount()>=1)
        {
            foreach($sql as $row)
            {
                $idCategoria = $row[0];
                $nomeCategoria = $row[1];
                $descricaoCategoria = $row[2];
                $obsCategoria = $row[3];
                $statusCategoria = $row[4];
            }

        }
        else
        {
            echo '<p>Categoria não existe</p>';
        }

    }


?>