<?php
    include_once('conexao.php');


    $idUsuario = '';
    $nomeUsuario = '';
    $loginUsuario = '';
    $senhaUsuario = '';
    $cpfUsuario = '';
    $datanascimentoUsuario = '';
    $imgUsuario = '';
    $enderecoUsuario = '';
    $bairroUsuario = '';
    $numeroUsuario = '';
    $complementoUsuario = '';
    $cepUsuario = '';
    $emailUsuario = '';
    $obsUsuario = '';
    $statusUsuario = '';

    if($_POST)
    {
        $id = $_POST['txtId'];

        $sql = $conn->query('select * from usuario where id_usuario='.$id);

        if($sql->rowCount()>=1)
        {
            foreach ($sql as $row) 
            {
                $idUsuario=$row[0];
                $nomeUsuario=$row[1];
                $loginUsuario=$row[3];
                $senhaUsuario=$row[4];
                $cpfUsuario=$row[2];
                $datanascimentoUsuario=$row[5];
                $imgUsuario=$row[13];
                $enderecoUsuario=$row[6];
                $bairroUsuario=$row[9];
                $numeroUsuario=$row[7];
                $complementoUsuario=$row[8];
                $cepUsuario=$row[10];
                $emailUsuario=$row[13];
                $obsUsuario=$row[11];
                $statusUsuario=$row[12];

            }
        }
        else
        {
            echo '<p>Usuário não existe</p>';
        }    

    }
    
?>