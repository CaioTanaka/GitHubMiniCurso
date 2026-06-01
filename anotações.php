<?php
$x = 9;
$texto = "ABCDE";
$dinheiro = 26.9;
$ligado = true;


//Caso deseje definir uma variável mais tarde, use = null

//Mesmas operações
//+ , - , * , / , ** , %

/*Mesma ordem de prioridade
()
++ , --
!
* , / , %
+ , -
*/

//- Funções Matemáticas = abs($x); - Dá o valor absoluto = módulo
     round($x); //- para o número mais próximo (Também podemos escolher para qual dígito arredondar = round($x , 2);)
     floor($x); //- Arredonda sempre para baixo
     ceil($x); //- Arredonda sempre para cima
     pow($x , $y); //- Potência da base x com expoente y
     sqrt($x); //- Raiz quadrada de x
     //max($x , ... , $z) - //Encontra o maior valor
     min($x , $y , $z) - //Encontra o menor número
     rand(); - //Gera um valor aleatório (Podemos adicionar parâmetros de mínimo e máximo também)

//Concatenar string = .
     $x = "Hello, ";
     $y = "World!";
     $z = "{$x} . {$y}"; //- {} placeholder como no python



//- Usando $_GET e em method, qualquer informação é adicionada ao URL, por isso é usado $_POST

     /*
     $_GET = informações são adicionada no URL
     Logo, não é seguro
     Possível salvar sites com certos valores
     Possível salvar pedidos no cache
     Melhor para procura

     $_POST = informações guardadas dentro do corpo HTML
     Mais seguro
     Sem limite de dados
     Não pode salvar pedidos no cache
     Melhor para mandar credenciais
     */



//- IF ELIF E ELSE -
if ($idade >= 18){
    echo "Login Liberado";
}
elseif ($idade <= 0) {
    echo "Idade inválida";
}
elseif($idade >= 100) {
    echo "teste";
}
else {
    echo "Acesso negado";
}



//- OPERADORES LÓGICOS - MESMA SINTAXE DO JAVA - || ; && ; ! ; <= ; >=
$temp = 20;
$nublado = true;

if($temp >= 0 && $temp < 30){
echo"Clima Agradável";
}
elseif($temp < 0 || $temp > 30){
    echo"Clima Adverso";
}

if($nublado){
    echo"Está nublado";
}
else{
    echo"Está ensolarado";
}

$verifCartao = true;
$saldo = false;

if($verifCartao && $saldo){
    echo"Compra confirmada";
}
else {
    echo "Compra recusada";
}



//- SWITCH - Substituto para situações que existem muitos elseifs
$nota = "A";

switch($nota){
    case "A":
        echo"Nota Máxima";
        break;
    case "B":
        echo"Nota Média";
        break;
    case "C":
        echo"Nota Baixa";
        break;
    case "D":
        echo "Nota Vermelha";
        break;
    default:
        echo "{$grade} não é uma nota válida.";
    }

$dia = date("l"); // Função parecida com a do Postgres NOW(), permite isolar dia, mês, ano, dia da semana etc...

switch($dia){
    case "Mon":
        echo "Hoje é segunda";
        break;
    case "Tue":
        echo "Hoje é terça-feira";
        break;
    case "Wed":
        echo "Hoje é quarta-feira";
        break;
    case "Thu":
        echo "Hoje é quinta-feira";
        brak;
    case "Fri":
        echo "Hoje é sexta-feira";
        break;
    case "Sat":
        echo "Hoje é sábado";
        break;
    case "Sun":
        echo "Hoje é domingo";
        break;
}



//- Lanços de Repetição - For e While
for($i ; i < 10 ; $i++){ // podemos fazer o contador $i+=3 por exmplo, decrementar i-- etc...
    echo "Hello World!<br>";
}

$segundos = 0;
$rodando = true;
while($rodando){
    if(isset($_POST["Stop"])){ // Aqui utiliza a função isset para verificar se um botão está acionado, utilizando $_POST
        $rodando = false;
    }
    $segundos++;
    echo $segundos . "<br>";
    sleep(1);
}



//- Arrays
$mercado = array("Banana" , "Arroz" , "Feijão" , "Farinha");
echo $mercado[0] . "<br>"; //Banana
echo $mercado[1] . "<br>"; //Arroz ...

$mercado[0] = "Coca-Cola";

array_push($mercado , "Suco de Laranja" , "Batata"); //permite adicionar mais itens no fim do vetor
array_pop($mercado); // remove o último elemento
array_shift($mercado); // remove o primeiro elemento
$mercadoReverso = array_reverse($mercado); // reverte o vetor
$quantos = count($mercado); //conta quantos elementos temos no vetor

// Modo para printar todos os elementos, diferente do for convencional.
foreach($mercado as $itens){
    echo $itens . "<br>";
}

?>