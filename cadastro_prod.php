<?php
include 'includes/config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $usuario = $_POST['usuario'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $sql = "INSERT INTO usuarios (usuario, email, senha) VALUES ('$usuario', '$email', '$senha')";
  if ($conn->query($sql) === TRUE) {
    echo "<p class='sucesso'>Cadastro realizado com sucesso!</p>";
  } else {
    echo "<p class='erro'>Erro: $conn->error</p>";
  }
}
?>
<a href="login.php">
    <button>Voltar ao login</button>
</a>

<link rel="stylesheet" href="style.css">
<div class="form-container">
  <form method="POST" class="form">
    <h2>Cadastro</h2>
    <input type="text" name="usuario" placeholder="Usuário" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="senha" placeholder="Senha" required>
    <button type="submit">Cadastrar</button>
  </form>
</div>
