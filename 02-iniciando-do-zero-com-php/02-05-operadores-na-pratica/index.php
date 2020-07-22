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

    $relatadeA = 5;
    $relatadeB = "5";
    $relatadeC = 10;
    $relatadeD = 10;

    $relatade = [
      "A == B" => $relatadeA == $relatadeB,
      "A == C" => $relatadeA == $relatadeC,
        "D === C" => $relatadeC === $relatadeD
    ];

    var_dump($relatade);

/**
 * [ comparação ] https://php.net/manual/pt_BR/language.operators.comparison.php
 */
fullStackPHPClassSession("comparação", __LINE__);

var_dump(0 == "a");

/**
 * [ lógicos ] https://php.net/manual/pt_BR/language.operators.logical.php
 */
fullStackPHPClassSession("lógicos", __LINE__);


/**
 * [ aritiméticos ] https://php.net/manual/pt_BR/language.operators.arithmetic.php
 */
fullStackPHPClassSession("aritiméticos", __LINE__);
