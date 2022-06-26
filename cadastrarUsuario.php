<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "./layout/head.php"; ?>
    <title>Cadastrar Usuario</title>
</head>
<body>
    <?php
        include "./layout/header.php";
        include "./layout/navbar.php";
    ?>
    <h2 class="container">Cadastrar Usuário</h2>
    <div class="container" id="form">
        <form action="./_cadastrarUsuario.php" method="post">
            <label for="name">Nome:*</label><br>
            <input type="text" name="name" id="name" required autofocus><br><br>
            <label for="email">Email:</label><br>
            <!-- Corrigir input type para "email" -->
            <input type="text" name="email" id="email"><br><br>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>