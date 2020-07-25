<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
echo fullStackPHPClassName("02.05 - Operadores na prática");

/**
 * [ operadores ] https://php.net/manual/pt_BR/language.operators.php
 * [ atribuição ] https://php.net/manual/pt_BR/language.operators.assignment.php
 */
fullStackPHPClassSession("atribuição", __LINE__);

    $operatorA = 5;
    $operatorS = [
      "A += 5" => $operatorA += 5,
        "A -= 5" => $operatorA -= 5,
        "A *= 5" => $operatorA *= 5,
        "A /= 5" => $operatorA /=5
    ];

    var_dump($operatorS);

    $incrementA = 5;
    $decrementA = 5;
    $increment = [
        "pos-increment" => $incrementA++,
        "res-increment" => $incrementA,
        "pre-increment" => ++$incrementA,
        "pos-decrement" => $decrementA--,
        "res-decrement" => $decrementA,
        "pre-decrement" => --$decrementA
    ];

    var_dump($increment);




/**
 * [ comparação ] https://php.net/manual/pt_BR/language.operators.comparison.php
 */
fullStackPHPClassSession("comparação", __LINE__);

$relatadeA = 5;
$relatadeB = "5";
$relatadeC = 10;
$relatadeD = 10;


$relatade = [
    "A == B" => $relatadeA == $relatadeB,
    "A == C" => $relatadeA == $relatadeC,
    "D === C" => $relatadeC === $relatadeD,
    " A != C" => $relatadeA != $relatadeB
];

var_dump($relatade);

/**
 * [ lógicos ] https://php.net/manual/pt_BR/language.operators.logical.php
 */
fullStackPHPClassSession("lógicos", __LINE__);

    $logicA = false;
    $logicB = true;
    $logic = [
      "A && B" => ($logicA && $logicB),
        "A || B" => ($logicA || $logicB),
        " ! A " => (!$logicA),
        " ! B " => (!$logicB)
    ];

    var_dump($logic);

/**
 * [ aritiméticos ] https://php.net/manual/pt_BR/language.operators.arithmetic.php
 */
fullStackPHPClassSession("aritiméticos", __LINE__);
 $calcA = 5;
 $calcB = 10;
 $calc = [
     "a + b" => ($calcA + $calcB),
     "a - b" => ($calcA - $calcB),
     "a * b" => ($calcA * $calcB),
     "a / b" => ($calcA / $calcB),
    "a % b" => ($calcA % $calcB)
 ];
 var_dump($calc);