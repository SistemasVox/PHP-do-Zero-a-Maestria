<?php
$tipoint = 100;
$tipofloat = 100.12;
$tipoStg = "Fórmula 1";
$tipoStg2 = 'Fórmula 2';
$tipomutante = "mutante";
$tipoVetor = ["Tudo", "Junto", "e", "Misturado", 05, 10, 15, true];

echo "--------------- Variável Inteira ---------------<br>";
echo $tipoint;
echo "<br>--------------- Variável Floats ---------------<br>";
echo $tipofloat;
echo "<br>--------------- Variável String ---------------<br>";
echo $tipoStg;
echo "<br>";
echo $tipoStg2;
echo "<br>--------------- Variável Array ---------------<br>";
echo $tipoint;
print_r($tipoVetor);
echo "<br>";
echo "$tipoVetor[0]";
echo "<br>";
echo $tipoVetor[1];
echo "<br>";
print_r($tipoVetor[7]);
echo "<br>";
echo "<br>--------------- Array Associativo ---------------<br>";
echo "<br>chave => valor<br>";
$arr = ['nome' => 'Marcelo', 'valor' => 1000];
print_r($arr);
echo "<br>";
print_r($arr['nome']);
echo "<br>";
echo $arr['valor'];
echo "<br>";

//Variável de variável
echo "<br>--------------- Variável de variável ---------------<br>";
echo "$tipomutante valor anteriror.";
echo "<br>";
$$tipomutante = "2002";
echo "$mutante valor novo.";
echo "<br>";

//Variável por referência
echo "<br>--------------- Variável por referência ---------------<br>";
$xref = 2;
$yref = &$xref;
echo $xref;
echo "<br>";
echo $yref;
echo "<br>";

//Variável estaticas
echo "<br>--------------- Variável estática ---------------<br>";

function testStatic()
{
    static $a = 0;
    $a++;
    echo " $a <br>";
}

testStatic();
testStatic();
testStatic();

//Variável por parâmetro
echo "<br>--------------- Variável por parâmetro---------------<br>";
function soma($a, $b)
{
    echo ($a + $b) . " = ($a + $b) <br>";
}

soma(2, 4);
soma(6, 8);
soma(10, 12);

//Variável Exponencial
echo "<br>--------------- Variável Exponencial---------------<br>";
$a = 2;
$b = 3;
echo ($a ** $b) . " = ($a ** $b) <br>";

//Variável Objeto
echo "<br>--------------- Variável Objeto ---------------<br>";
class Pessoa
{
    function falar()
    {
        echo "Hello World!";
    }
}

$marcelo = new Pessoa();
$marcelo->nome = "Marcelo";
echo $marcelo->nome;
echo "<br>";
echo $marcelo->falar();

//Obtém o tipo da variável
echo "<br>--------------- (PHP 4, PHP 5, PHP 7, PHP 8) gettype — Obtém o tipo da variável ---------------<br>";

$data = array(1, 1.11, NULL, new stdClass, 'foo', false);

foreach ($data as $value) {
    echo gettype($value);
    echo "<br>";
}

/*
    Os possíveis valores retornados pela função são:

        "boolean"
        "integer"
        "double" (por razões históricas "double" é é retornado no caso de float, e não simplesmente "float")
        "string"
        "array"
        "object"
        "resource"
        "NULL"
        "unknown type"
*/
echo gettype($value = (int) (5 / 2)) . "<br>";//Operador de cast
echo is_int($value = (int) (5 / 2)) . "<br>";//Operador de cast
echo is_int($value = (int) (5 / 2)) ? "É inteiro" . "<br>" : "Não é inteiro" . "<br>"; //Operador ternário
echo is_int($value = (string) (5 / 2)) ? "É inteiro"  . "<br>" : "Não é inteiro" . "<br>";//Operador ternário
?>