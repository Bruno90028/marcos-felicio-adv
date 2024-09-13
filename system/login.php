<?php
    include('conexao.php');

    if(isset($_POST['cpf']) || isset($_POST['senha'])) {

        if(strlen($_POST['cpf']) == 0) {
            echo "Preencha seu e-mail!";
        } else if (strlen($_POST['senha']) == 0) {
            echo "Preencha sua senha!";
        } else {

            $cpf = $mysqli->real_escape_string($_POST['cpf']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM usuarios WHERE cpf = '$cpf' AND senha = '$senha'";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução!");

            $quantidade = $sql_query->num_rows;

            if($quantidade == 1) {

                $usuario = $sql_query->fetch_assoc();

                if (!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];
                $_SESSION['foto'] = $usuario['foto'];
                $_SESSION['associado'] = $usuario['associado'];

                header("Location: painel-client.php");

            } else {
                echo "Falha ao logar! E-mail ou senha incorretos.";
            }

        }

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../styles/login.css">
    <link rel="stylesheet" href="../styles/login-all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<body>
    <main>
        <div id="container">
            <div id="imagem">
                
        <a href="../index.html"><span class="material-symbols-outlined">          arrow_back</span></a>
            </div>
            <div id="formulario">
                <h3>Marcos Felício Advocacia</h3>
                <h5>**ATENÇÃO:**</h5>
                <h5>Usuário é o CPF</h5>
                <h5>Senha é a data de nascimento (ddmmaaaa)</h5>
                <form action="login.php" method="POST">
                    <p><input type="text" name="cpf" id="user" required placeholder="Usuário" maxlength="11"></p>
                    <p><input type="password" name="senha" id="senha" required placeholder="*********" maxlength="16" minlength="8"></p>
                    <p><input type="submit" value="Entrar" id="submit"></p>
                </form>
</body>
</html>