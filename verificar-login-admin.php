<!-- verificar-login-admin.php -->
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

    // Consultar o banco de dados para verificar o login do administrador
    $sql_verificar_login_admin = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha' AND isAdmin=1";
    $resultado_verificar_login_admin = $conexao->query($sql_verificar_login_admin);

    if ($resultado_verificar_login_admin->num_rows === 1) {
        // Login do administrador bem-sucedido, redirecionar para a página de administração
        $conexao->close(); // Fechar a conexão antes de redirecionar
        header('Location: pagina-administracao.php');
        exit;
    } else {
        echo '<p class="mensagem-erro">E-mail ou senha do administrador incorretos. Tente novamente.</p>';
    }

    // Fechar a conexão com o banco de dados
    $conexao->close();
}
?>
