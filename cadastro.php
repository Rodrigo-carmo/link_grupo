<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Obtendo os dados enviados pelo formulário
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];

  // Criptografar a senha usando o algoritmo bcrypt
  $senhaHash = password_hash($senha, PASSWORD_BCRYPT);

  // Aqui você pode realizar validações nos dados, como verificar se o email é válido, etc.

  // Conectar ao banco de dados MySQL
  $conexao = new mysqli("localhost", "root", "", "link_grupo");

  // Verificar se a conexão foi bem-sucedida
  if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
  }

  // Verificar se o email já está cadastrado
  $sql_verificar_email = "SELECT id FROM usuarios WHERE email='$email'";
  $resultado_verificar_email = $conexao->query($sql_verificar_email);
  if ($resultado_verificar_email->num_rows > 0) {
    // Redirecionar para a página index.php com a mensagem de erro
    header('Location: index.php?error=1');
    exit;
  }

  // Inserir os dados na tabela de usuários com a senha criptografada (exemplo)
  $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senhaHash')";
  if ($conexao->query($sql) === TRUE) {
    // Redirecionar para a página index.php com a mensagem de sucesso
    header('Location: index.php?success=1');
    exit;
  } else {

    echo "Erro ao cadastrar: " . $conexao->error;
  }

  // Fechar a conexão com o banco de dados
  $conexao->close();
}
?>