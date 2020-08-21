<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.08 - Estruturas de repetição");

/*
 * [ while ] https://php.net/manual/pt_BR/control-structures.while.php
 * [ do while ] https://php.net/manual/pt_BR/control-structures.do.while.php
 */


// fullStackPHPClassSession("while, do while", __LINE__);

// $while = [];
// $looping = 1;

// while($looping <= 5){
//     $while[] = $looping;
//     $looping++;
// }
// var_dump($while);

// $while = [];
// $looping = 5;

// do {
//     $while[] = $looping;
//     $looping--;
// }while($looping >= 1);

//     var_dump($while);
/*
 * [ for ] https://php.net/manual/pt_BR/control-structures.for.php
 */
fullStackPHPClassSession("for", __LINE__);

// for ($i = 1; $i <=10 ; $i++){
//     if($i % 2 == 0){
//         echo "<p>o valor é par{$i}</p>";
//     }else{
//     echo "<p>o valor é impar {$i}</p>";
//     }
// };

/**
 * [ break ] https://php.net/manual/pt_BR/control-structures.break.php
 * [ continue ] https://php.net/manual/pt_BR/control-structures.continue.php
 */
fullStackPHPClassSession("break, continue", __LINE__);

    $a = 0;
    while($a++ <= 9){
        if($a == 7)continue;
        echo $a ."posição ";
        
    }


    function soma($num1, $num2){

        $total = $num1 + $num2;

        return $total;
    }

    echo soma(30, 25);


// for ($c = 1; $c <= 10; $c++){
//     if($c % 2 == 1){
//         continue;
//     }
//     if ($c >= 10){
//         break;
//     }
//     echo "<p>Pulou + 2 ::{$c}</p>";
// }

/**
 * [ foreach ] https://php.net/manual/pt_BR/control-structures.foreach.php
 */
fullStackPHPClassSession("foreach", __LINE__);

// $array = [];
// for ($ar = 0; $ar <= 5; $ar++){
//     $array[] = $ar;
// }

// var_dump($array);

// foreach ($array as $item){
//     var_dump($item);
// }

// foreach ($array as $key => $value){
//     var_dump("{$key} = {$value}");
// }