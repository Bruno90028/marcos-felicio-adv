<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcos Felício Advocacia</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/modelo.css">
    <link rel="stylesheet" href="styles/modelo-all.css">

    <style>
        h1 {
            text-align: center;
            padding: 10px;
        }

        body {
            background-color: #62658579;
        }

        main {
            position: relative;
            margin: auto;
            max-width: 700px;
            background-color: white;
        }

        main > div > p {
            text-align: center;
        }

        form {
            text-align: center;
            margin-bottom: 30px;
        }

        input {
            font-size: 1.2em;
            width: 400px;
            padding-top: 20px;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 1px solid black;
            margin-top: 10px;
            outline: none;
        }

        input:focus {
            border-bottom: 2px solid #b89542;
        }

        #submit {
            width: 90px;
            padding: 10px;
            background-color: #62658579;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        #submit:hover {
            background-color: #222333;
            color: white;
        }

        textarea {
            font-size: 1.2em;
            width: 400px;
            margin-top: 30px;
            border-top: none;
            border-left: none;
            border-right: none;
            outline: none;
            border-bottom: 1px solid black;
        }

        textarea:focus {
            border-bottom: 2px solid #b89542;
        }

        #mapa {
            text-align: center;
            padding: 20px;
        }

        iframe {
            width: 370px;
        }

@media screen and (min-width: 768px) and (max-width: 992px) {
    iframe {
            width: 650px;
        }
}

@media screen and (min-width: 992px) and (max-width: 1200px) {
    iframe {
            width: 650px;
        }
}

@media screen and (min-width: 1200px) {
    iframe {
            width: 650px;
        }
}
    </style>

</head>
<body>
    <header>
        <a href="index.html"><img src="images/Marcos Felício.png" alt="Logotipo"></a>
    </header>

    <span id="burguer" class="material-symbols-outlined" onclick="clickMenu()">menu</span>

    <menu id="menu">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="atuacao.html">Áreas de atuação</a></li>
            <li><a href="sobre-nos.html">Sobre nós</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
    </menu>
    <div class="linha"></div>
    <main>
        <h1>Contato</h1>
            <div>
                <p>Mande-nos um e-mail e entraremos em contato com você!</p>
                <!--<form action="https://api.staticforms.xyz/submit" method="post" autocomplete="on">-->
                <form action="enviar-email.php" method="post" autocomplete="on">
                    <p>
                        <input type="text" name="name" id="name" required placeholder="Nome Completo" autocomplete="name">
                    </p>
                    <p>
                        <input type="email" name="email" id="email" required placeholder="Digite seu@email" autocomplete="email">
                    </p>
                    <p>
                        <input type="tel" name="tel" id="tel" required placeholder="Telefone com DDD" autocomplete="tel">
                    </p>
                    <p>
                        <input type="text" name="assunto" id="assunto" required placeholder="Assunto">
                    </p>
                    <p>
                        <textarea name="msg" id="msg" cols="30" rows="5" required placeholder="Escreva sua Mensagem..."></textarea>
                    </p>
                    <input type="submit" id="submit" value="Enviar" onclick="enviado()">
                    <!--
                    <input type="hidden" name="accessKey" value="aee10ea6-3964-4de8-87f8-8f7b52dea6c1">
                    <input type="hidden" name="redirectTo" value="https://bruno90028.github.io/marcos-felicio-adv/contato.html">
                    -->
                </form>
            </div>
            <div id="mapa">
                <h3>Estamos localizados aqui:</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d229.92239538693227!2d-43.36093612778123!3d-22.77434840948316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1725378037591!5m2!1spt-BR!2sbr" width="600" height="450" style="border:1px solid rgba(0, 0, 0, 0.212); margin-bottom:10px; margin-top:10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <p>Avenida Automóvel Clube, nº 2660, 2º andar - loja F, Vilar dos Teles, São João de Meriti - RJ, 26193-000 - Em frente a Agência Bradesco</p>
            </div>
    </main>
    <div class="linha"></div>
    <footer>
        <div>
            <h5>Mídias Sociais</h5>
        </div>
        <div>
            <h5>Páginas</h5>
        </div>
        <div>
            <h5>Fale Conosco</h5>
            <p><a href="https://wa.me/5521980416206" target="_blank">(21) 98041 - 6206</a></p>
            <p>marcosfelicio.adv@gmail.com</p>
        </div>
        <p>© Todos os direitos reservados para <strong>MARCOS FELÍCIO ADVOCACIA.</strong></p>
    </footer>
    
    <script>
        function clickMenu() {
            if (menu.style.display == 'block'){
                menu.style.display = 'none'
            } else {
                menu.style.display = 'block'
            }
        }

        function enviado() {
            var nome = document.getElementById('name').value

            window.alert(`Olá, ${nome}. Seu e-mail foi enviado com sucesso! Aguarde que entraremos em contato.`)
        }
    </script>
</body>
</html>