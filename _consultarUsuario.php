<!DOCTYPE html>
<html lang="pt-br">
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
    <div class="container">
        <h2>Usuários Cadastrados</h2>
        <?php
            $nome = $_GET['name'];

            $sql = "SELECT * FROM `users` WHERE `name` LIKE '%$nome%'";
            $busca = mysqli_query($conexao,$sql);
        ?>
        <table>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Ação</th>
            </tr>

            <?php while ($resultado = mysqli_fetch_array($busca)) {?>
                <?php
                $name = ucwords($resultado['name']);
                $email = $resultado['email'];
                $userID = $resultado['userID'];
                ?>
                
                <tr>
                    <td><?=$name?></td>
                    <td><?=$email?></td>
                    <td><a href="./editarUsuario.php?userID=<?=$userID?>">editar</a></td>
                </tr>
                
            <?php } ?>
        </table>

    </div>
</body>
</html>