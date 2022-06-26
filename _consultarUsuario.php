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
    <h2 class="container">Usuários Cadastrados</h2>
    <div class="container">
        <?php
            $sql = "SELECT * FROM `users` WHERE 1";
            $busca = mysqli_query($conexao,$sql);
        ?>
        <table>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th></th>
            <th></th>
        </tr>

        <?php
            while ($resultado = mysqli_fetch_array($busca)) {?>
                <?php
                $name = $resultado['name'];
                $email = $resultado['email'];
                $userID = $resultado['userID'];
                ?>
                <tr>
                    <td><?=$name?></td>
                    <td><?=$email?></td>
                    <td><a href="./_editarUsuario.php?id=<?=$userID?>"><img src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/32/000000/external-edit-interface-kiranshastry-lineal-kiranshastry.png"/></a></td>
                </tr>
            <?php }
        ?>
        </table>

    </div>
</body>
</html>