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
    <div class="container">
        <?php
            include "./connection.php";

            $userID = $_POST['userID'];
            $name = $_POST['name'];
            $email = $_POST['email'];

            $sql = "UPDATE `users` SET `userID`='$userID',`name`='$name',`email`='$email' WHERE `userID` = $userID";
            $atualizar = mysqli_query($conexao,$sql);
            
            if ($atualizar) {
                echo "<h3>Usuário atualizado</h3>";
            } else {
                echo "<h3>O usuário não foi atualizado</h3>";
            }
        ?>
    </div>
</body>
</html>