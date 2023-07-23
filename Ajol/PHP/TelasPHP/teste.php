<!DOCTYPE html>
<html lang="pt-br">
<link rel="shortcut icon" href="../../../resto/icone.png" type="image/x-icon">

<head>
    <meta charset="UTF-8">
    <title>Manipulando o DOM - Aula 3</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: "Roboto Mono", monospace;
            min-height: 400px;
            min-width: 450px;
            background-size: 80vh;
            color: rgb(0, 0, 0);
            background-image: url("https://www.uniabeu.edu.br/wp-content/uploads/2020/03/fundo-lilas.png");
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            font-size: 24px;
            font-weight: bold;
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        button {
            font-size: 24px;
            font-family: "Futura Lt BT", sans-serif;
            background-color: black;
            background-repeat: no-repeat;
            cursor: pointer;
            overflow: hidden;
            outline: none;
            padding: 8px 20px 8px 20px;
            color: white;
            box-shadow: 0px 0px 5px gray;
            border-radius: 5px 5px 0 0;
            border: none;
            transition: 500ms;
            opacity: 0.8;
            margin: 30px 0;
        }

        button:hover {
            color: white;
            background-color: gray;
        }

        button:active {
            color: black;
            background-color: white;
        }

        .lista {
            padding: 20px;
            list-style-type: none;
            border: 4mm ridge rgba(234, 122, 11, 0.992);
        }

        .alura-logo {
            width: 150px;
            position: absolute;
            top: 2%;
            right: 2%;
        }

        [data-cores="laranja"] {
            color: orange;
        }

        [data-cores="vermelho"] {
            color: red;
        }

        [data-cores="branco"] {
            color: white;
        }

        [data-cores="amarelo"] {
            color: yellow;
        }

        [data-cores="rosa"] {
            color: pink;
        }

        [data-cores="preto"] {
            color: black;
        }
    </style>
</head>

<body>
    <button data-botao="fechar">Fechar Estoque</button>
    <button hidden data-botao="abrir">Abrir Estoque</button>

    <ul class="lista" data-lista>
        <li data-cores="laranja" class="item">Tinta laranja</li>
        <li data-cores="vermelho" class="item">Tinta vermelha</li>
        <li data-cores="branco" class="item">Tinta branca</li>
        <li data-cores="amarelo" class="item">Tinta amarela</li>
        <li data-cores="rosa" class="item">Tinta rosa</li>
        <li data-cores="preto" class="item">Tinta preta</li>
    </ul>
    <a href="https://alura.com.br/" target="_blank"><img src="https://www.alura.com.br/assets/img/home/alura-logo.svg" alt="" class="alura-logo"></a>

    <script>
        const botoes = document.querySelectorAll('[data-botao]');
        const lista = document.querySelector('[data-lista]');
        const btnAbrir = document.querySelector('[data-botao="abrir"]');
        const btnFechar = document.querySelector('[data-botao="fechar"]');

        botoes.forEach(elemento => {
            elemento.addEventListener('click', (evento) => {
                visibilidade(evento.target.dataset.botao, lista);
            })
        })

        function visibilidade(operacao, elementoLista) {
            if (operacao == "fechar") {
                elementoLista.hidden = "false";
                btnAbrir.hidden = "";
                btnFechar.hidden = "false";
            } else {
                elementoLista.hidden = "";
                btnAbrir.hidden = "false";
                btnFechar.hidden = "";
            }
        }
    </script>
</body>

</html>