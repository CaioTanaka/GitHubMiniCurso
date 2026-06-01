<?php
$x = 9.6;
$y = 10;
$z = 24.5;
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
$idade = 25;
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
        echo "{$nota} não é uma nota válida.";
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
        break;
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
for($i = 0 ; $i < 10 ; $i++){ // podemos fazer o contador $i+=3 por exmplo, decrementar i-- etc...
    echo "Hello World!<br>";
}

//contador, errado, mas é um contador
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



// - Dicionários
// Chave => Elemento
$lugares = array("Minas Gerais"=>"Brasil",
                 "Ilha da Páscoa"=>"Chile",
                 "Roma"=>"Itália");

echo $lugares["Minas Gerais"]; // printa o valor associado, no caso Brasil

$lugares["Tokyo"] = "Japão";

$chavesArray = array_keys($lugares); // retorna um novo array com todas as chaves;
$itensArray = array_values($lugares); // retorna um novo array com todos os elementos;
$inversoLugares = array_flip($lugares); // inverte os valores, elementos viram as chaves e vice versa;
$reversoLugares = array_reverse($lugares); // retorna um novo array de trás para frente;

foreach($chavesArray as $key){
    echo "{$key} <br>";
}

// printa as chaves e seus valores
foreach($lugares as $chave => $valor){
    echo "{$chave} = {$valor} <br>";
}



// - Funções: isset() e empty()
// isset: retorna TRUE se a variável está declarada e NÃO É NULO;
// empty: retorna TRUE se a variável não está declarada, é falsa, null ou "";

$usuario = "Roberto";

if(isset($usuario)){
    echo "Olá, usuário {$usuario}<br>";
}
else{
    echo "Usuário não encontrado<br>";
}

$usuario = "";
if(empty($usuario)){
    echo "Variável Vazia<br>";
}
else{
    echo "Variável encontrada<br>";
}


// Formulário de Login
if(isset($_POST["login"])){
    $user = $_POST["usuario"];
    $senha = $_POST["senha"];

    if(empty($user)){
        echo "Usuário inválido<br>";
    }
    elseif(empty($senha)){
        echo "Senha Inválida<br>";
    }
    else{
        echo "Olá, {$user}<br>";
    }
}

// Exemplo formulário com rádio button
//Para isso dar certo, é preciso usar o mesmo "name" no HTML, para eles pertencerem ao mesmo grupo,
//Então, não permitirá selecionar 2 bolinhas ao msm tempo, por serem do msm "grupo"

if(isset($_POST["confirma"])){
    $cartaoCredito = null;

    if(isset($_POST["cartao"])){
        $cartaoCredito = $_POST["cartao"];
        switch($cartaoCredito){
            case "Visa":
                $cartaoCredito = "Visa";
                break;
            case "Mastercard":
                $cartaoCredito = "Mastercard";
                break;
            case "American Express":
                $cartaoCredito = "American Express";
                break;
            default:
            echo "Cartão não selecionado";
        }
        echo "Cartão selecionado: {$cartaoCredito}<br>";
    }
}




// - Funções 
function helloWorld(){
    echo "Hello, World!<br>";
}
helloWorld();

function informacoesUsuario(string $nome , int $idade , string $cpf){
    echo "Hello, {$nome}!<br>
    Idade: {$idade}<br>
    CPF: {$cpf}";
}

informacoesUsuario("Cain" , 800 , "120.345.678-90");

function parImpar(int $numero){
    if($numero % 2 == 0){
        return "É um número par.<br>";
    }
    else{
        return "É um número ímpar.<br>";
    }
}

$a = parImpar(2);
$b = parImpar(3);
echo "{$a}";
echo "{$b}";

function distanciaDoisPontos(int $x1 , int $x2 , int $y1 , int $y2){
    $resultado = sqrt(pow(($x2-$x1) , 2) + pow(($y2-$y1) , 2));
    return $resultado;
}
$rotaMaisCurta = distanciaDoisPontos(3 , 7 , 5 , 8);
echo $rotaMaisCurta;



// - Funções para utilizar com Strings]
$nome = "Roberto Carlos";
$cpf = "123.456.789-00";

$nome = strtolower($nome); // Deixa a string em minúsculo;
$nome = strtoupper($nome); // Deixa a string em maiúsculo;
$nome = trim($nome); // Retira os espaços em branco da string;
$nome = str_pad($nome , 20 , "0"); // Formata a string, neste caso, estamos adicionando 20 números 0 na string;
$cpf = str_replace("." , "" , $cpf); // Troca oq tem na string por outro caracter;
$nome = strrev($nome); // inverte o nome;
$nome = str_shuffle($nome); // Embaralha a string;
$igual = strcmp($cpf , "123456780-90"); // Compara se os valores são iguais;
$tam = strlen($cpf); // Retorna o tamanho da string;
$indice = strpos($cpf , "-"); // Retorna a posição da primeira ocorrencia do valor;
$primeiroNome = substr($nome , 0 , 6); // Recorta a string, exemplo = Roberto Carlos vira apenas Roberto, os 2 valores são os indices que eu quero recortar;

$nomeCompleto = explode("" , $nome); // Transforma uma string em um array, por exemplo Roberto i = 0 e Carlos i = 1;
// Caso eu queria fazer o inverso, também é possível = array ---> String

$nomeTeste = array("Dom" , "Pedro" , "II");
$criandoNome = implode("" , $nomeTeste); // Separador e dps variável



// - Validação e higienização de inputs
if(isset($_POST["login"])){
    $usuario = filter_input(INPUT_POST , "username" , FILTER_SANITIZE_SPECIAL_CHARS);
    echo "Olá, {$usuario}";

    $idade = filter_input(INPUT_POST , "idade" , FILTER_SANITIZE_NUMBER_INT);
    echo "Você tem {$idade}";

    $email = filter_input(INPUT_POST , "email" , FILTER_SANITIZE_EMAIL);
    $emailValido = filter_input(INPUT_POST , "email" , FILTER_VALIDATE_EMAIL);
    if(isset($email) && !empty($emailValido)){
        echo "E-Mail válido: {$email}";
    }
    else {
        echo "E-mail inválido";
    }
    // argumento INPUT_POST = definir o tipo que é. Caso fosse get, poderia ser INPUT_GET também etc. O segundo é o "rótulo" e o terceiro o tipo de filtro;

    $numFilhos = filter_input(INPUT_POST , "qntsFilho" , FILTER_VALIDATE_INT);
    if(empty($numFilhos)){
        echo "Insira um número válido";
    }
    


// - Função Include()
}
?>