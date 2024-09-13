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
        <img src="<?php echo $_SESSION['foto']; ?>" alt="Sem Perfil">
        <span id="burguer" class="material-symbols-outlined" onclick="menu()">menu</span>
        <h1>Olá, <?php echo $_SESSION['nome']; ?> !</h1>
    </header>

    <main>
        <section id="noticias">
            <article>
                <h2>Portal de Notícias</h2>
                <p id="pnoticias"></p>
            </article>
        </section>
        <section id="comunicado">
            <article>
                <h2>Comunicado</h2>
                <p id="pcomunicado"></p>
            </article>
        </section>
        <section id="contato">
            <article>
                <h2>Contato</h2>
                <p>
                    <ul>
                        <li>Telefone: <span id="telefone">21 77777-7777</span></li>
                        <li>Whatsapp: <span id="whatsapp">21 77777-7777</span></li>
                        <li>E-mail: <span id="email">nãodeucerto@naodeucerto</span></li>
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

        var noticias = document.getElementById('pnoticias')
        var comunicado = document.getElementById('pcomunicado')
        
        noticias.innerHTML = `Olá, <strong><?php echo $_SESSION['nome']; ?></strong>. Por aqui você ficará sabendo das principais notícias que dominam o mundo jurídico atualmente.`
        comunicado.innerHTML = `Por aqui, comunicaremos qualquer evento que precise ser repassado!`

        var telefone = document.getElementById('telefone')
        var whatsapp = document.getElementById('whatsapp')
        var email = document.getElementById('email')

        if (<?php echo $_SESSION['associado']; ?> == 'sim') {
            telefone.innerText = '99999-9999'
            whatsapp.innerText = '99999-9999'
            email.innerText = 'email@email'
        } else {
            telefone.innerText = '88888-8888'
            whatsapp.innerText = '88888-8888'
            email.innerText = 'outroemail@email'
        }
</script>
</body>
</html>