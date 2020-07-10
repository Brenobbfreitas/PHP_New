<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);
$userFirstName = "Breno";
$userLastName = "Freitas";
echo "<h3>{$userFirstName} {$userLastName}</h3>";

$userAge = "22";
echo "<p>{$userFirstName} {$userLastName} <span class='tag'>Tem {$userAge}</span> </p>";

//variavel variavel
$company = "UpInside";
$$company = "Treinamentos";
echo "<h3>{$company} {$UpInside}</h3>";

$calcA = 10;
$calcB = 20;

$calcB = &$calcA;

var_dump([
    "a" => $calcA,
    "b" => $calcB
]);



/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);

$true = true;
$false = false;

var_dump($true, $false);

$bestAge = ($userAge > 50);
var_dump($bestAge);

$a = 0;
$b = 0.0;
$c = "";
$d = [];
$e = null;

var_dump($a, $b, $c, $d, $e);

if ($a || $b || $c || $d || $e){
    var_dump(true);
}else{
    var_dump(false);
}

/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);

$newCode = "<p class='tag'>Novo codigo</p>";
$code = "<article><h1>Um call User function</h1></article>";
$codeClear = call_user_func("strip_tags", $code);
var_dump($code, $codeClear);

/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);

//function
$codeMore = function($newCode){
    var_dump($newCode);
};

$codeMore("valore que colocamos na funcion");
