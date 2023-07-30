<!DOCTYPE html>
<php lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE ICON -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
        <h2>recuperar senha</h2>

        <form action="">

            <label for="email">E-mail</label> <br>
            <input type="email" id="email" placeholder="Ex: exemplo@gmail.com" name="email" required> <br>


            <input class="btn-enviar-grupo" type="submit" value="Enviar">


            <div class="esqueci-conta">
                <a href="criar-conta.php">Criar minha conta</a>
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

</php>