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
    /* PHP razoávelmente parecido com python:
     python ---> x = 9

     PHP ---< $x = 9;

     Caso deseje definir uma variável mais tarde, use = null

     Mesmas operações
     + , - , * , / , ** , % 

     Mesma ordem de prioridade
     ()
     ++ , -- 
     !
     * , / , %
     + , -

     Funções Matemáticas = abs($x); - Dá o valor absoluto = módulo
     round($x); - para o número mais próximo (Também podemos escolher para qual dígito arredondar = round($x , 2);)
     floor($x); - Arredonda sempre para baixo
     ceil($x); - Arredonda sempre para cima
     pow($x , $y); - Potência da base x com expoente y
     sqrt($x); - Raiz quadrada de x
     max($x , ... , $z) - Encontra o maior valor
     min($x , $y , $z) - Encontra o menor número
     rand(); - Gera um valor aleatório (Podemos adicionar parâmetros de mínimo e máximo também)


    
     Concatenar string = .
     $x = "Hello, ";
     $y = "World!";
     $z = "{$x} . {$y}";



     // Usando $_GET e em method (linha 9), qualquer informação é adicionada ao URL, por isso é usado $_POST

     /*$_GET = informações são adicionada no URL
     Logo, não é seguro
     Possível salvar sites com certos valores
     Possível salvar pedidos no cache
     Melhor para procura

     /*$_POST = informações guardadas dentro do corpo HTML
     Mais seguro
     Sem limite de dados
     Não pode salvar pedidos no cache
     Melhor para mandar credenciais



     IF ELIF E ELSE

     if ($idade >= 18){
        echo "Login Liberado";
     } 
     elseif ($idade =< 0) {
        echo "Idade inválida";
     }
     elseif($idade >= 100) {
        echo "teste";
     }
     else {
        echo "Acesso negado";
     }
    */
    

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