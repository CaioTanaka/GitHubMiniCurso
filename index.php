<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>username:</label><br>
        <input type="text" name = "username"><br>
        <label> password:<label><br>
        <input type="text" password = "password"><br>
        <input type="submit" value="Log in">
    </form>
</body>
</html>

<?php
    echo "{$_POST["username"]} <br>"; 
    echo "{$_POST["password"]} <br>";

    $usuario = $_POST["username"];
    $falhaLogin = true;
     
    if ($usuario == "teste" && $falhaLogin) {
        echo "Falha na autenticação";
    }
    elseif ($usuario == 'teste'){
        echo "Login Liberado";
    }
    else {
        echo "Usuário Desconhecido";

    }

?>
