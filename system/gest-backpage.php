<?php
    if(isset($_POST['submit'])) {
        include_once('conexao.php');

        $noticia = $mysqli->real_escape_string($_POST['area']);
        $data = date('d/m/Y');

        $result =  mysqli_query($mysqli, "INSERT INTO noticias('noticia', 'dat') VALUES ('$noticia', '$data')");
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/backpage.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Área de Trabalho</title>

    <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() }); // convert all text areas to rich text editor on that page

        bkLib.onDomLoaded(function() {
             new nicEditor().panelInstance('area1');
        }); // convert text area with id area1 to rich text editor.

        bkLib.onDomLoaded(function() {
             new nicEditor({fullPanel : true}).panelInstance('area2');
        }); // convert text area with id area2 to rich text editor with full panel.
    </script>


    <style>
        menu {
            text-align: center;
            background-color: black;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        menu a {
            text-decoration: none;
            color: white;
            padding: 11px;
        }

        menu a:hover {
            color: black;
            background-color: lightgray;
        }

        #equipe, #noticias {
            display: none;
        }
    </style>
</head>
<body>
    <header>
        <div id="container">
            <h3>Olá, Bruno!</h3>
        </div>
    </header>

    <div id="alt" onclick="mostrarmenu()">
        <span class="material-symbols-outlined">
            arrow_forward_ios
            </span>
    </div>

    <nav id="menu">
        <span class="material-symbols-outlined" onclick="escondermenu()">arrow_back_ios</span>
        <h5>Vs 1.0</h5>
        <ul>
            <li><a href="backpage.html"><span class="material-symbols-outlined">
                home
                </span>Início</a></li>
            <li><a href="adm-backpage.html"><span class="material-symbols-outlined">
                computer
                </span>Administrativo</a></li>
            <li><a href="ass-backpage.html"><span class="material-symbols-outlined">
                groups
                </span>Associações</a></li>
            <li><a href="clients-backpage.html"><span class="material-symbols-outlined">
                person
                </span>Clientes</a></li>
                <li><a href="comercial-backpage.html"><span class="material-symbols-outlined">
                    shoppingmode
                    </span>Comercial</a></li>
            <li><a href="financeiro-backpage.html"><span class="material-symbols-outlined">
                account_balance
                </span>Financeiro</a></li>
                <li><a href="#"><span class="material-symbols-outlined">
                    settings
                    </span>Gestão</a></li>
            <li><a href="process-backpage.html"><span class="material-symbols-outlined">
                file_open
                </span>Processos</a></li>
            <li><a href="#"><span class="material-symbols-outlined">logout
                </span>Sair</a></li>
        </ul>
    </nav>
    <main>
        <menu>
            <a href="#" onclick="comunicados()">Comunicados</a>
            <a href="#" onclick="noticias()">Notícias</a>
            <a href="#" onclick="equipe()">Equipe</a>
        </menu>

        <section id="comunicados">
            <h2>comunicados</h2>
        </section>
        <section id="noticias" style="position: relative;">
            <h2 style="text-align: center; margin-top: 20px;">Notícias</h2>
            <p style="text-align: center; margin-top: 10px; margin-bottom: 20px;">Digite aqui o texto que aparecerá para <strong>todos o clientes</strong>!</p>
            <form action="gest-backpage.php" method="post" style="text-align: center; background-color: white;">
            <textarea name="area" id="area" style="width: calc(100vw - 205px); height: 500px;"></textarea>
            <input type="submit" value="Enviar" style="cursor: pointer; margin-top: 20px;">
            </form>

        </section>
        <section id="equipe">
            <div id="adicionar">
                <h2>Adicionar novo membro:</h2>
            </div>
        </section>
    </main>
    <footer>

    </footer>

    <script>
        function escondermenu () {
            var menu = document.getElementById('menu')
            var alt = document.getElementById('alt')

            menu.style.display = 'none'
            alt.style.display = 'block'
        }

        function mostrarmenu () {
            var menu = document.getElementById('menu')
            var alt = document.getElementById('alt')
            
            menu.style.display = 'block'
            alt.style.display = 'none'
        }

        function comunicados () {
            var equipe = document.getElementById('equipe')
            var comunicados = document.getElementById('comunicados')
            var noticias = document.getElementById('noticias')

            equipe.style.display = 'none'
            comunicados.style.display = 'block'
            noticias.style.display = 'none'
        }


        function noticias () {
            var equipe = document.getElementById('equipe')
            var comunicados = document.getElementById('comunicados')
            var noticias = document.getElementById('noticias')

            equipe.style.display = 'none'
            comunicados.style.display = 'none'
            noticias.style.display = 'block'
        }

        function equipe () {
            var equipe = document.getElementById('equipe')
            var comunicados = document.getElementById('comunicados')
            var noticias = document.getElementById('noticias')

            equipe.style.display = 'block'
            comunicados.style.display = 'none'
            noticias.style.display = 'none'
        }
    </script>
</body>
</html>