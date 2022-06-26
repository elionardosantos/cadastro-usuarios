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
    <div class="container">
        <p>
            <?php
                include "./connection.php";
                
                $name = strtolower($_POST['name']);
                $email = strtolower($_POST['email']);
                
                if (!empty($name) && !empty($email)) {

                    $sql = "INSERT INTO `users`(`name`, `email`)
                    VALUES ('$name','$email')";
                    $inserir = mysqli_query($conexao, $sql);

                    echo "<h3>Usuário cadastrado conforme dados abaixo:</h3>";
                    echo "Nome: $name<br>";
                    echo "Email: $email";
                } else {
                    echo "<h3>Favor preencher os campos obrigatórios.</h3>";
                }
            ?>
        </p>
    </div>
</body>
</html>