<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Cliente</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="../styles/portal-client.css">

</head>
<body>
    <nav id="menu" onmouseleave="esconder()">
        <p onclick="esconder()">X</p>
        <img id="logo" src="../images/Marcos Felício.png" alt="logo">
        <ul>
            <li><a href="#"><img id="home" src="images/casa.png" alt="Home">Home</a></li>
            <li><a href="#"><img src="images/pasta-aberta.png" alt="Meus processos">Meus processos</a></li>
            <li><a href="#"><img src="images/adicionar-documento.png" alt="Novo processo">Novo Processo</a></li>
            <li><a href="#"><img src="images/pergunta-de-mensagens.png" alt="Dúvidas">Dúvidas</a></li>
            <li><a href="#"><img src="images/definicoes.png" alt="Ajustes">Ajustes</a></li>
            <li><a href="logout.php"><img src="images/sair.png" alt="Sair">Sair</a></li>
        </ul>
    </nav>
    <header>
        <img src="images/clients/unnamed.png" alt="Sem Perfil">
        <span id="burguer" class="material-symbols-outlined" onclick="menu()">menu</span>
        <h1>Olá, <?php echo $_SESSION['nome']; ?> !</h1>
    </header>

    <main>
        <section id="noticias">
            <article>
                <h2>Portal de Notícias</h2>
                <p>Olá, <strong><?php echo $_SESSION['nome']; ?></strong>. Por aqui você ficará sabendo das principais notícias que dominam o mundo jurídico atualmente.</p>
                <p>Fique Ligado!</p>
            </article>
        </section>
        <section id="comunicado">
            <article>
                <h2>Comunicado</h2>
                <p>Por aqui, comunicaremos qualquer evento que precise ser repassado!</p>
                <p>Logo, pedimos para que entre constantemente e fique sempre atento!</p>
            </article>
        </section>
        <section id="contato">
            <article>
                <h2>Contato</h2>
                <p>
                    <ul>
                        <li>Telefone:</li>
                        <li>Whatsapp:</li>
                        <li>E-mail:</li>
                    </ul>
                </p>
            </article>
        </section>
    </main>
    
    <footer>
    </footer>

    <script>
        function menu () {
            var nav = document.getElementById('menu')

            nav.style.display = 'block'
        }

        function esconder () {
            var nav = document.getElementById('menu')

            nav.style.display = 'none'
        }
    </script>
</body>
</html>