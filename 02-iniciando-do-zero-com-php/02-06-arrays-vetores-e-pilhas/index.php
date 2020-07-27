<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.06 - Arrays, vetores e pilhas");


/**
 * [ arrays ] https://php.net/manual/pt_BR/language.types.array.php
 */
fullStackPHPClassSession("index array", __LINE__);


$arrB = [
    1 => "a",
    "1" => "b",
    1.8 => "c",
    false => "d"
];
var_dump($arrB);

$varIndex = [
    "breno",
    "nicoly",
    "germana"
];
$varIndex[] = "alex";
$varIndex[] = "netinho";

var_dump($varIndex);


/**
 * [ associative array ] "key" => "value"
 */
fullStackPHPClassSession("associative array", __LINE__);

$arrayAssoc = [
    "vocal" => "Bruno",
    "violão" => "chimbinha",
    "2voz" => "marrone",
    "baixo" => "jeferson"
];
$arrayAssoc["name_band"] = "beatles";
$arrayAssoc["patrocinio"] = "coca-cola";


var_dump($arrayAssoc);

/**
 * [ multidimensional array ] "key" => ["key" => "value"]
 */
fullStackPHPClassSession("multidimensional array", __LINE__);

$brian = ["brian", "mic"];
$angus = ["name" => "Angus", "instrument"=> "guitarra"];
$instrument = [
    $brian,
    $angus
];
var_dump($instrument);

var_dump([
    "brian" => $brian,
    "angus" => $angus
]);

/**
 * [ array access ] foreach(array as item) || foreach(array as key => value)
 */
fullStackPHPClassSession("array access", __LINE__);

$garotaSafada = [
    "vocal" => "Bruno",
    "violao" => "chimbinha",
    "2voz" => "marrone",
    "baixo" => "jeferson"
];

$calcinhaPreta  =[
    "vocal" => "wesley",
    "violao"=> "hudson",
    "2voz" => "jaqueline",
    "baixo" => "lineu"
];

echo "<p>O vocal da banda é {$garotaSafada["vocal"]} e junto com {$garotaSafada{"violao"}} fazem um som</p>";

$bandasForro = [
    "garotaSafada" => $garotaSafada,
    "calcinhaPreta" => $calcinhaPreta
];

var_dump($bandasForro);

echo "<p>{$bandasForro['calcinhaPreta']['vocal']}</p>";

foreach ($calcinhaPreta as $item){
    echo "<p>{$item}</p>";
}

foreach ($calcinhaPreta as $key => $value){
    echo "<p>{$value} is a {$key} of bands!</p>";
}

foreach ($bandasForro as $bandaForre){
    var_dump($bandasForro);
    
}