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
    $cidadeUsuario ='';
    $estadoUsuario = '';
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
                $datanascimentoUsuario=$row[7];
                $imgUsuario=$row[5];
                $enderecoUsuario=$row[8];
                $bairroUsuario=$row[11];
                $numeroUsuario=$row[9];
                $complementoUsuario=$row[10];
                $cepUsuario=$row[12];
                $cidadeUsuario =$row[15];
                $estadoUsuario = $row[16];
                $emailUsuario=$row[6];
                $obsUsuario=$row[13];
                $statusUsuario=$row[14];

            }
        }
        else
        {
            echo '<p>Usuário não existe</p>';
        }    

    }
    
?>