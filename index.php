<!DOCTYPE html>
<html lang="pt-br">

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
                <input type="text" id="codigoBarrasInput" oninput="filtrarItens()" placeholder="busque aqui...">
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
    <a href="https://mundofut9.tv/">
        <div class="img-propaganda">
            <img src="_img/MundoFut-Ad-1-970x90-1.png" alt="">
        </div>
    </a>



    <?php
session_start();

// Verificar se a variável de sessão "views" está definida
if (!isset($_SESSION['views'])) {
    // Se não estiver definida, definimos como 1 (a primeira visita)
    $_SESSION['views'] = 1;
} else {
    // Caso contrário, incrementamos a contagem de visualizações
    $_SESSION['views']++;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua Página</title>
</head>

<body>
    <!-- Conteúdo da sua página -->
    <h1>Bem-vindo à sua página!</h1>
    <p>Visualizações: <?php echo $_SESSION['views']; ?></p>
</body>

</html>











    <main class="container-main">

        <div class="box-direita item">
            <div id="contadorBuscas">Total de buscas: 0</div>
            <h1>grupos premium 5 estrelas</h1>

            <div class="box-container">
                <div class="box item">
                    <div class="box-texto">Premium</div>
                    <img src="_img/teste.avif" alt="">
                    <span>Nome Grupo</span>
                    <p>Sub Nome</p>
                    <button class="btn-box">Acessar</button>
                </div>

                <div class="box item">
                    <div class="box-texto">Premium</div>
                    <img src="_img/teste.avif" alt="">
                    <span>Nome Grupo</span>
                    <p>Sub Nome</p>
                    <button class="btn-box">Acessar</button>
                </div>

                <div class="box item">
                    <div class="box-texto">Premium</div>
                    <img src="_img/teste.avif" alt="">
                    <span>Nome Grupo</span>
                    <p>Sub Nome</p>
                    <button class="btn-box">Acessar</button>
                </div>

                <div class="box item">
                    <div class="box-texto">Premium</div>
                    <img src="_img/teste.avif" alt="">
                    <span>Nome Grupo</span>
                    <p>Sub Nome</p>
                    <button class="btn-box">Acessar</button>
                </div>

                <div class="box item">
                    <div class="box-texto">Premium</div>
                    <img src="_img/teste.avif" alt="">
                    <span>Nome Grupo</span>
                    <p>Sub Nome</p>
                    <button class="btn-box">Acessar</button>
                </div>

                <div class="box item">
                    <div class="box-texto">Premium</div>
                    <img src="_img/teste.avif" alt="">
                    <span>Nome Grupo</span>
                    <p>Sub Nome</p>
                    <button class="btn-box">Acessar</button>
                </div>

                <div class="box item">
                    <div class="box-texto">Premium</div>
                    <img src="_img/teste.avif" alt="">
                    <span>Nome Grupo</span>
                    <p>Sub Nome</p>
                    <button class="btn-box">Acessar</button>
                </div>

                <div class="box item">
                    <div class="box-texto">Premium</div>
                    <img src="_img/teste.avif" alt="">
                    <span>Nome Grupo</span>
                    <p>Sub Nome</p>
                    <button class="btn-box">Acessar</button>
                </div>

                <div class="box item">
                    <div class="box-texto">Premium</div>
                    <img src="_img/teste.avif" alt="">
                    <span>Nome Grupo</span>
                    <p>Sub Nome</p>
                    <button class="btn-box">Acessar</button>
                </div>
            </div>


            <!-- GRUPO NORMAL -->


            <br><br>
            <h1>links de grupos</h1>
            <div class="box-container">
                <div class="box item">
                    <div class="box-texto"></div>
                    <img src="_img/teste.avif" alt="">
                    <span>Nome Grupo</span>
                    <p>Sub Nome</p>
                    <button class="btn-box">Acessar</button>
                </div>

                <div class="box item">
                    <div class="box-texto"></div>
                    <img src="_img/teste.avif" alt="">
                    <span>Nome Grupo</span>
                    <p>Sub Nome</p>
                    <button class="btn-box">Acessar</button>
                </div>

                <div class="box item">
                    <div class="box-texto"></div>
                    <img src="_img/teste.avif" alt="">
                    <span>Nome Grupo</span>
                    <p>Sub Nome</p>
                    <button class="btn-box">Acessar</button>
                </div>


                <div class="box item">
                    <div class="box-texto"></div>
                    <img src="_img/teste.avif" alt="">
                    <span>Nome Grupo</span>
                    <p>Sub Nome</p>
                    <button class="btn-box">Acessar</button>
                </div>


                <div class="box item">
                    <div class="box-texto"></div>
                    <img src="_img/teste.avif" alt="">
                    <span>Nome Grupo</span>
                    <p>Sub Nome</p>
                    <button class="btn-box">Acessar</button>
                </div>

                <div class="box item">
                    <div class="box-texto"></div>
                    <img src="_img/teste.avif" alt="">
                    <span>Nome Grupo</span>
                    <p>Sub Nome</p>
                    <button class="btn-box">Acessar</button>
                </div>

                <div class="box item">
                    <div class="box-texto"></div>
                    <img src="_img/teste.avif" alt="">
                    <span>Nome Grupo</span>
                    <p>Sub Nome</p>
                    <button class="btn-box">Acessar</button>
                </div>


                <div class="box item">
                    <div class="box-texto"></div>
                    <img src="_img/teste.avif" alt="">
                    <span>Nome Grupo</span>
                    <p>Sub Nome</p>
                    <button class="btn-box">Acessar</button>
                </div>

                <div class="box item">
                    <div class="box-texto"></div>
                    <img src="_img/teste.avif" alt="">
                    <span>Nome Grupo</span>
                    <p>Sub Nome</p>
                    <button class="btn-box">Acessar</button>
                </div>

            </div>
        </div>



        <div class="box-esquerda">
            <div class="box-categorias">
                <div class="todas-categorias">
                    <h2>todas categorias</h2>
                </div>
            </div>

            <div class="coluna-categorias">
                <h2>categorias</h2>

                <div class="grupo">
                    <img src="_img/telegram.png" alt="">
                    <div class="nome">
                        <p>Nome do grupo</p>
                        <p>Grupo do telegram para compartilhar mensagem na amizade</p>
                    </div>
                </div>

                <div class="grupo">
                    <img src="_img/telegram.png" alt="">
                    <div class="nome">
                        <p>Nome do grupo</p>
                        <p>Grupo do telegram para compartilhar mensagem na amizade</p>
                    </div>
                </div>

                <div class="grupo">
                    <img src="_img/telegram.png" alt="">
                    <div class="nome">
                        <p>Nome do grupo</p>
                        <p>Grupo do telegram para compartilhar mensagem na amizade</p>
                    </div>
                </div>

                <div class="grupo">
                    <img src="_img/telegram.png" alt="">
                    <div class="nome">
                        <p>Nome do grupo</p>
                        <p>Grupo do telegram para compartilhar mensagem na amizade</p>
                    </div>
                </div>

                <div class="grupo">
                    <img src="_img/telegram.png" alt="">
                    <div class="nome">
                        <p>Nome do grupo</p>
                        <p>Grupo do telegram para compartilhar mensagem na amizade</p>
                    </div>
                </div>

                <div class="grupo">
                    <img src="_img/telegram.png" alt="">
                    <div class="nome">
                        <p>Nome do grupo</p>
                        <p>Grupo do telegram para compartilhar mensagem na amizade</p>
                    </div>
                </div>

                <div class="grupo">
                    <img src="_img/telegram.png" alt="">
                    <div class="nome">
                        <p>Nome do grupo</p>
                        <p>Grupo do telegram para compartilhar mensagem na amizade</p>
                    </div>
                </div>

                <div class="grupo">
                    <img src="_img/telegram.png" alt="">
                    <div class="nome">
                        <p>Nome do grupo</p>
                        <p>Grupo do telegram para compartilhar mensagem na amizade</p>
                    </div>
                </div>

                <div class="grupo">
                    <img src="_img/telegram.png" alt="">
                    <div class="nome">
                        <p>Nome do grupo</p>
                        <p>Grupo do telegram para compartilhar mensagem na amizade</p>
                    </div>
                </div>

                <div class="grupo">
                    <img src="_img/telegram.png" alt="">
                    <div class="nome">
                        <p>Nome do grupo</p>
                        <p>Grupo do telegram para compartilhar mensagem na amizade</p>
                    </div>
                </div>

                <div class="grupo">
                    <img src="_img/telegram.png" alt="">
                    <div class="nome">
                        <p>Nome do grupo</p>
                        <p>Grupo do telegram para compartilhar mensagem na amizade</p>
                    </div>
                </div>



            </div>

        </div>

    </main>

    <section>

    </section>



    <!-- FIM CONTAINER -->
    <footer class="footer">
        <span>Esteja ciente que em nosso site os grupos postados são de total responsabilidade do administrador. Grupos
            postado no site links de grupos são verificados antes de irem para o site. Mas como não temos o total
            controle dos grupos, a responsabilidade é das outras plataformas que contem os grupos. Cabe aos usuários
            denunciar os grupos que estão com conteúdos inadequados. Somos um agregador de grupos, so é colocado os
            links do mesmo. </span>
    </footer>




    <script src="_js/script.js"></script>
</body>

</html>