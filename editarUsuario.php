<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "./layout/head.php"; ?>
    <title>Editar Usuario</title>
</head>
<body>
    <?php
        include "./layout/header.php";
        include "./layout/navbar.php";
    ?>
    <h2 class="container">Editar Usuário</h2>
    <div class="container" id="form">
        <form action="./_cadastrarUsuario.php" method="post">
            <label for="firstName">Nome:</label><br>
            <input type="text" name="firstName" id="firstName"><br><br>
            <label for="lastName">Sobrenome:</label><br>
            <input type="text" name="lastName" id="lastName"><br><br>
            <label for="email">Email:</label><br>
            <!-- Corrigir input type para "email" -->
            <input type="text" name="email" id="email"><br><br>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>