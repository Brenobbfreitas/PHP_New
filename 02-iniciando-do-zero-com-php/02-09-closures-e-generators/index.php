<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);


$person = function($name){
    printf("Hello %s \r  \n", $name);
} ;

$person('Breno');
$person('Barreto');

$myAge = function($year){
    $age = date("Y") - $year;
    return "<p> Voce tem {$age} anos! </p>";
};

echo $myAge(1999);


$priceBrl = function($price){
    return number_format($price, 2, ",", ".");
};

echo "<p>O projeto custa R$ {$priceBrl(3600)}. Vamos fechar ?";

$myCart = [];
$myCart["totalPrice"] = 0;
$cartAdd = function ($item , $qtd, $price) use (&$myCart){
    $myCart[$item] = $qtd * $price;
    $myCart["totalPrice"] += $myCart[$item];
};

$cartAdd("Html5", 2, 500);

var_dump($myCart);

/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);


$iterator = 4000;


function generatorDate($days){

    for($day = 1; $day < $days; $day++){
        yield date("d/m/y", strtotime("+{$day}days"));
    }
}

echo "<div style='text-aling: center'>";
foreach (generatorDate($iterator) as $date){
    echo "<small class='tag'>($date)</small>". PHP_EOL;
}   

echo "</div>";