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
        $delete = mysqli_query($conexao,$sql);

        if ($delete) {
            echo "<h3>Usuário foi Excluído</h3>";
        } else {
            echo "<h3>O Usuário não foi Excluído</h3>";
        }
        ?>
        
    </div>
</body>
</html>