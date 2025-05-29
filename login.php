<?php

session_start();
include 'includes/config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $_SESSION['email'] = $email;
    header("Location: index.php");
  } else {
    echo "<p class='erro'>Login falhou. Verifique suas credenciais.</p>";
  }
}
?>
<?php include('header.php')?>

<link rel="stylesheet" href="style.css">
<div class="form-container">
  <form method="POST" class="form">
    <h2>Login</h2>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="senha" placeholder="Senha" required>
    <button type="submit">Entrar</button>
    <p>Não tem conta? <a href="cadastro_prod.php">Cadastre-se</a></p>
  </form>
</div>
