<?php
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
  $sql_verificar_login = "SELECT senha FROM usuarios WHERE email='$email'";
  $resultado_verificar_login = $conexao->query($sql_verificar_login);

  if ($resultado_verificar_login->num_rows === 1) {
    $row = $resultado_verificar_login->fetch_assoc();
    $senhaHash = $row["senha"];

    // Verificar a senha usando password_verify
    if (password_verify($senha, $senhaHash)) {
      // Login bem-sucedido, redirecionar para a página index.php com a mensagem de sucesso
      $conexao->close(); // Fechar a conexão antes de redirecionar
      header('Location: index.php?loginSuccess=1');
      exit;
    }
  }

  // Caso o login seja inválido, redirecionar para a página de login com a mensagem de erro
  $conexao->close(); // Fechar a conexão antes de redirecionar
  header('Location: index2.php?loginError=1');
  exit;
}
?>
