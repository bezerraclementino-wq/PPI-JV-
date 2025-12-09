<?php

if (!isset($_SESSION['id'])) {
    die("Você não está logado.<p> <a href=\"login.php\">SAIR</a></p>");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel</title>
</head>
<body>
    <h1>Bem-vindo, <?php echo $_SESSION['nome']; ?></h1>
 <a href="index.php"> <button> VOLTAR</button></a>
</body>
</html>