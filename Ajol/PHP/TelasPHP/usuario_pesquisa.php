<?php
<<<<<<<< HEAD:Ajol/PHP/ConexaoPHP/usuario_pesquisa.php
    include_once('../ConexaoPHP/conexaoloja.php');
========
    include_once('../ConexaoPHP/conexao.php')
>>>>>>>> ab480fe045266483f159a3ddd213f531a5115177:Ajol/PHP/TelasPHP/usuario_pesquisa.php

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