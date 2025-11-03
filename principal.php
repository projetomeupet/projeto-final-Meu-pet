<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Sistema de Pets 🐶</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f8ff;
      text-align: center;
    }
    h1 {
      color: #4a148c;
    }
    button {
      margin: 10px;
      padding: 10px 20px;
      border: none;
      background-color: #7e57c2;
      color: white;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
    }
    button:hover {
      background-color: #5e35b1;
    }
  </style>
</head>
<body>
  <h1>Bem-vindo(a) ao Sistema de Cadastro de Pets!</h1>
  <p>Usuário logado: <strong><?php echo $_SESSION['usuario']; ?></strong></p>

  <button onclick="window.location.href='create_pet.php'">Cadastrar Pet</button>
  <button onclick="window.location.href='read_pet.php'">Listar Pets</button>
  <button onclick="window.location.href='logout.php'">Sair</button>
</body>
</html>
