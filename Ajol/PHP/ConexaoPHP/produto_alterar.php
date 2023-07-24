<?php
    include_once('conexao.php');

    $idt = $_GET['id'];

    if($_POST)
    {
        $id = $_POST['txtId'];
        $idcategoria = $_POST['txtIdcategoria'];
        $datacadastro = $_POST['txtCadastro'];
        $nome = $_POST['txtNome'];
        $marca = $_POST['txtMarca'];
        $lote = $_POST['txtLote'];
        $qtde = $_POST['txtQtde'];
        $peso = $_POST['txtPeso'];
        $dimensao = $_POST['txtDimensao'];
        $escala = $_POST['txtEscala'];
        $valorunitario = $_POST['txtValorunitario'];
        $valorcusto = $_POST['txtValorcusto'];
        $desconto = $_POST['txtDesconto'];
        $img = '';
        $img2 ='';
        $img3 ='';
        $obs = $_POST['txtObs'];
        $status =$_POST['txtStatus'];

        $bla = "";
        // no alterar tyem dois if um co imagem e outro sem, ista se significa setrocar a imagem ele faz senao mantem a anterior
        
        
        try 
        {

            if (isset($_FILES['txtImg']))
            {
                $img = $_FILES['txtImg'];
                $img2 = $_FILES['txtImg2'];
                $img3 = $_FILES['txtImg3'];
            }    
            else
            {
                $img='';
            }

            $sql = $conn->prepare("
                update produto set
                    id_categoria_produto=:id_categoria_produto,
                    nome_produto=:nome_produto,
                    marca_produto=:marca_produto,
                    datacadastro_produto=:datacadastro_produto,
                    lote_produto=:lote_produto,
                    qtde_produto=:qtde_produto,
                    peso_produto=:peso_produto,
                    dimensao_produto=:dimensao_produto,
                    escala_produto=:escala_produto,
                    valorunitario_produto=:valorunitario_produto,
                    valorcusto_produto=:valorcusto_produto,
                    desconto_produto=:desconto_produto,
                    obs_produto=:obs_produto,
                    status_produto=:status_produto
                where id_produto=:id_produto
            ");

            $sql->execute(array(
                ':id_produto'=>$id,
                ':id_categoria_produto'=>$idcategoria,
                ':nome_produto'=>$nome,
                ':marca_produto'=>$marca,
                ':datacadastro_produto'=>$datacadastro,
                ':lote_produto'=>$lote,
                ':qtde_produto'=>$qtde,
                ':peso_produto'=>$peso,
                ':escala_produto'=>$escala,
                ':dimensao_produto'=>$dimensao,
                ':valorunitario_produto'=>$valorunitario,
                ':valorcusto_produto'=>$valorcusto,
                ':desconto_produto'=>$desconto,
                ':obs_produto'=>$obs,
                ':status_produto'=>$status
            ));

            if($img['name'] != '')
            {
                $sql = $conn->prepare("
                    update produto set
                        img_produto=:img_produto
                    where id_produto=:id_produto
                ");

                $sql->execute(array(
                    ':id_produto'=>$id,
                    ':img_produto'=>$img['name']
                ));

                
                if($sql->rowCount()>=1)
                {
                    echo '<p>Dados alterados com sucesso!</p>';

                    $pasta = '../../img/prod/'.$id.'/';

                    if(!file_exists($pasta))
                    {
                        mkdir($pasta);
                    }

                    $foto = $pasta.$img['name'];

                    move_uploaded_file($img['tmp_name'],$foto);
    
                }

            }

            if($img2['name'] != '')
            {
                $sql = $conn->prepare("
                    update produto set
                        img2_produto=:img2_produto
                    where id_produto=:id_produto
                ");

                $sql->execute(array(
                    ':id_produto'=>$id,
                    ':img2_produto'=>$img2['name']
                ));

                
                if($sql->rowCount()>=1)
                {
                    echo '<p>Dados alterados com sucesso!</p>';

                    $pasta = '../../img/prod/'.$id.'/';

                    if(!file_exists($pasta))
                    {
                        mkdir($pasta);
                    }

                    $foto2 = $pasta.$img2['name'];

                    move_uploaded_file($img2['tmp_name'],$foto2);
    
                }

            }

            if($img3['name'] != '')
            {
                $sql = $conn->prepare("
                    update produto set
                        img3_produto=:img3_produto
                    where id_produto=:id_produto
                ");

                $sql->execute(array(
                    ':id_produto'=>$id,
                    ':img3_produto'=>$img3['name']
                ));

                
                if($sql->rowCount()>=1)
                {
                    echo '<p>Dados alterados com sucesso!</p>';

                    $pasta = '../../img/prod/'.$id.'/';

                    if(!file_exists($pasta))
                    {
                        mkdir($pasta);
                    }

                    $foto3 = $pasta.$img3['name'];

                    move_uploaded_file($img3['tmp_name'],$foto3);
    
                }

            }
        if($sql->rowCount()>=1)
            echo '<p>Dados alterados com sucesso!</p>';
        }
        catch (PDOException $ex)
        {
            echo $ex->getMessage();
        }

    }
    else
    {
        header('Location:../TelasPHP/sistema.php?tela=produto');
    }

?>

<a href="../TelasPHP/sistema.php?tela=produto&id=<?=$idt?>">Voltar</a>
