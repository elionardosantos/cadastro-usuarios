<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "./layout/head.php"; ?>
    <title>Consultar Usuario</title>
</head>
<body>
    <?php
        include "./connection.php";
        include "./layout/header.php";
        include "./layout/navbar.php";
    ?>
    <h2 class="container">Consultar Usuário</h2>
    <div class="container" id="form">
        <form action="./_consultarUsuario.php" method="get">
            <label for="name">Nome:</label><br>
            <input type="text" name="name" id="name"><br><br>
            <button type="submit">Consultar</button>
        </form>
    </div>
</body>
</html>