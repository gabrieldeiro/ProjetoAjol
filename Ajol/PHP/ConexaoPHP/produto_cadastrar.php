<?php
    include_once('conexao.php');

    $idt = $_GET['id'];

    if($_POST)
    {
        $idcategoria = $_POST['txtIdcategoria'];
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
        // $img2 = '';
        // $img3 = '';
        $obs = $_POST['txtObs'];
        $status =$_POST['txtStatus'];

        try 
        {
            if(isset($_FILES['txtImg']))
            {
                $img = $_FILES['txtImg'];

            }
            else
            {
                echo 'Erro, a imagem deve ser enviada';
                return;
            }

            $sql = $conn->prepare("
                insert into produto
                (
                    id_categoria_produto,
                    nome_produto,
                    marca_produto,
                    lote_produto,
                    qtde_produto,
                    peso_produto,
                    dimensao_produto,
                    escala_produto,
                    valorunitario_produto,
                    valorcusto_produto,
                    desconto_produto,
                    img_produto,
                    obs_produto,
                    status_produto
                    
                )
                value
                (
                    :id_categoria_produto,
                    :nome_produto,
                    :marca_produto,
                    :lote_produto,
                    :qtde_produto,
                    :peso_produto,
                    :dimensao_produto,
                    :escala_produto,
                    :valorunitario_produto,
                    :valorcusto_produto,
                    :desconto_produto,
                    :img_produto,
                    :obs_produto,
                    :status_produto
                )
            ");
            //lembrar de colocar as outras img na tabela de insert

            $sql->execute(array(
                ':id_categoria_produto'=>$idcategoria,
                ':nome_produto'=>$nome,
                ':marca_produto'=>$marca,
                ':lote_produto'=>$lote,
                ':qtde_produto'=>$qtde,
                ':peso_produto'=>$peso,
                ':dimensao_produto'=>$dimensao,
                ':escala_produto'=>$escala,
                ':valorunitario_produto'=>$valorunitario,
                ':valorcusto_produto'=>$valorcusto,
                ':desconto_produto'=>$desconto,
                ':img_produto'=>$img['name'],
                //':img2_produto'=>$img2['name'],
                //':img3_produto'=>$img3['name'],
                ':obs_produto'=>$obs,
                ':status_produto'=>$status 
            ));

            if($sql->rowCount()>=1)
            {
                echo '<p>Dados cadastrados com sucesso!</p>';
                echo '<p>ID Gerado: '. $conn->lastInsertId().'</p>';

                $pasta = '../../img/prod/'.$conn->lastInsertId().'/';

                if(!file_exists($pasta))
                {
                    mkdir($pasta);
                }

                $foto = $pasta.$img['name'];

                move_uploaded_file($img['tmp_name'],$foto);
                
            }

        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }

    }
    else
    {
        header('Location:../TelasPHP/sistema.php?tela=produto&id='.$idt);
    }

?>

<a href="../TelasPHP/sistema.php?tela=produto&id=<?=$idt?>">Voltar</a>
