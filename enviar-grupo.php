<?php
include('conexao.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtendo os dados enviados pelo formulário
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Conectar ao banco de dados MySQL
    $conexao = new mysqli("localhost", "root", "", "link_grupo");

    // Verificar se a conexão foi bem-sucedida
    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }

    // Consultar o banco de dados para verificar o login
    $sql_verificar_login = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
    $resultado_verificar_login = $conexao->query($sql_verificar_login);

    if ($resultado_verificar_login->num_rows === 1) {
        // Login bem-sucedido, redirecionar para a página de consulta
        $conexao->close(); // Fechar a conexão antes de redirecionar
        header('Location: index3.php'); // DIRECIONAR O LOGIN CORRETO
        exit;
    } else {
        echo '<p class="mensagem-erro">E-mail ou senha incorretos. Tente novamente.</p>';
    }

    // Fechar a conexão com o banco de dados
    $conexao->close();
}
?>





<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE ICON -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- GOOGLE ICON -->

    <link rel="stylesheet" href="_css/style.css">

    <title>Grupo de Telegram</title>
</head>

<body>

    <!-- CABEÇALHO -->
    <header class="header">
        <div class="logo">
            <a href="index.php">
                <span class="material-symbols-outlined">
                    logo_dev
                </span>
            </a>
        </div>

        <div class="cadastro">

            <form action="">
                <input type="text">
                <button type="submit">
                    <span class="material-symbols-outlined">
                        search
                    </span>
                </button>
            </form>

        </div>

        <div class="enviar-grupo">

            <a href="enviar-grupo.php">
                <button type="submit">+Enviar Grupo</button>
            </a>
            <!-- <a href="enviar_grupo.php">+Enviar Grupo</a> -->
        </div>

        <div class="entrar-cadastrar">
            <a href="criar-conta.php">
                <button type="submit">
                    <span class="material-symbols-outlined">
                        person_add
                    </span>
                    Entrar / Cadastrar
                </button>
            </a>
        </div>

    </header>
    <!-- FIM CABEÇALHO -->

    <!-- CONTAINER -->
    <section class="formulario-enviar">
        <h2>entrar</h2>

        <!-- <form action=""> -->
        <form id="login-form" method="post" action=""> <!-- CHATGPT -->
            <label for="email">E-mail:</label> <br>
            <input type="email" id="email" placeholder="Ex: exemplo@gmail.com" name="email" required> <br>

            <label for="senha">Senha:</label> <br>
            <input type="password" id="senha" name="senha" required> <br>

            <input class="btn-enviar-grupo" type="submit" value="entrar">

            <div class="criar-conta">
                <a href="criar-conta.php">Criar minha conta</a>
            </div>

            <div class="esqueci-conta">
                <a href="esqueci-conta.php">Esqueci minha Senha</a>
            </div>

        </form>
    </section>



    <!-- FIM CONTAINER -->
    <footer class="footer">
        <span>Esteja ciente que em nosso site os grupos postados são de total responsabilidade do administrador. Grupos
            postado no site links de grupos são verificados antes de irem para o site. Mas como não temos o total
            controle dos grupos, a responsabilidade é das outras plataformas que contem os grupos. Cabe aos usuários
            denunciar os grupos que estão com conteúdos inadequados. Somos um agregador de grupos, so é colocado os
            links do mesmo. </span>
    </footer>

</body>

</html>