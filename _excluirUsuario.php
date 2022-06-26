<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "./layout/head.php"; ?>
    <title>Excluir Usuario</title>
</head>
<body>
    <?php
        include "./layout/header.php";
        include "./layout/navbar.php";
        
    ?>
    <h2 class="container">Excluir Usuário</h2>
    <div class="container">
        <?php
        include "./connection.php";

        $userID = $_GET['userID'];

        $sql = "DELETE FROM `users` WHERE `userID` = $userID";
        $busca = mysqli_query($conexao,$sql);
        $resultado = mysqli_fetch_array($busca);

        $name = $resultado['name'];
        $email = $resultado['email'];
        ?>
        <h3>Usuário foi Excluído</h3>
    </div>
</body>
</html>