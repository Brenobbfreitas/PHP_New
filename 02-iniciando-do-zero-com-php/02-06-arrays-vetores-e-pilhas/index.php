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

/**
 * [ array access ] foreach(array as item) || foreach(array as key => value)
 */
fullStackPHPClassSession("array access", __LINE__);

