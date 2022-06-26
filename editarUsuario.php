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

        $userID = $_GET['userID'];

        $sql = "SELECT * FROM `users` WHERE `userID` = $userID";
        $busca = mysqli_query($conexao,$sql);
        $resultado = mysqli_fetch_array($busca);

        $name = $resultado['name'];
        $email = $resultado['email'];

        
        ?>
        <form action="./_editarUsuario.php" method="post">
            <label for="userID">ID do usuário:</label><br>
            <input type="text" name="userID" id="userID" required value="<?=$userID?>"><br><br>
            <label for="name">Nome:</label><br>
            <input type="text" name="name" id="name" required value="<?=$name?>"><br><br>
            <label for="email">Email:</label><br>
            <!-- Corrigir input type para "email" -->
            <input type="text" name="email" id="email" required value="<?=$email?>"><br><br>
            <button type="submit">Salvar</button>
        </form>
        <br><br><br>
        <hr>
        <p><a href="_excluirUsuario.php?userID=<?=$userID?>" style="color:#c00;">Excluir usuário</a></p>
    </div>
</body>
</html>