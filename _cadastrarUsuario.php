<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "./layout/head.php"; ?>
    <title>Cadastrar Usuario</title>
</head>
<body>
    <?php
        include "./connection.php";
        include "./layout/header.php";
        include "./layout/navbar.php";
    ?>
    <?php
        $firstName = strtolower($_POST['firstName']);
        $lastName = strtolower($_POST['lastName']);
        $email = strtolower($_POST['email']);
    ?>
    <div class="container">
        <p>
            <?php
                
                if (!empty($firstName) && !empty($lastName)) {

                    $sql = "INSERT INTO `users`(`firstName`, `lastName`, `email`)
                    VALUES ('$firstName','$lastName','$email')";
                    $inserir = mysqli_query($conexao, $sql);

                    echo "<h3>Usuário cadastrado conforme dados abaixo:</h3>";
                    echo "Nome: $firstName<br>";
                    echo "Sobrenome: $lastName<br>";
                    echo "Email: $email";
                } else {
                    echo "<h3>Favor preencher os campos obrigatórios.</h3>";
                }
            ?>
        </p>
    </div>
</body>
</html>