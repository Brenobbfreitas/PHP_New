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
$$company = "Treinando";
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

//var_dump($true, $false);

$userAge = 44;

$bestAge = ($userAge > 50);
$bool = $bestAge == true ? var_dump($bestAge) : var_dump($bestAge);
echo $bool;

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

//function
$codeMore = function($newCode){
    var_dump($newCode);
};

$codeMore('return');

/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);
/**
$string = "ola mundo";
$array = [$string];
$object = new StdClass();
$object->hello = $string;
$null = null;
$int = 10;
$float = 10.1;

var_dump([
    $string,
    $array,
    $object,
    $null,
    $int,
    $float
]);

$name = "breno";
$name = (int)true;

echo $name;
 */

/**for ($i=0; $i <= 10; $i++){
    echo $i."<br>";
}
*/
$vetor = array("breno", "nicoly", "pato", "alberto");

foreach ($vetor as $name){
    echo $name."<br>";
}

$stopLoop = 9;

for($i=0; ;$i++){
    if($i == $stopLoop){
        break;
    }
    echo $i."<br>";
}

for($i=0; $i <= 11; $i++){
    if ($i % 2 == 0){
        continue;
    }
    echo $i."<br>";
}