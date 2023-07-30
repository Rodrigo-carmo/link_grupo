<!-- login-admin.php -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/style.css">
    <title>Grupo de Telegram - Login Administrador</title>
</head>

<body>

    <header class="header">
        <!-- Cabeçalho aqui -->
    </header>

    <section class="formulario-enviar">
        <h2>Entrar como Administrador</h2>

        <form id="login-admin-form" method="post" action="verificar-login-admin.php">
            <label for="email">E-mail:</label> <br>
            <input type="email" id="email" placeholder="Ex: exemplo@gmail.com" name="email" required> <br>

            <label for="senha">Senha:</label> <br>
            <input type="password" id="senha" name="senha" required> <br>

            <input class="btn-enviar-grupo" type="submit" value="Entrar como Administrador">
        </form>
    </section>

    <footer class="footer">
        <!-- Rodapé aqui -->
    </footer>

</body>

</html>
