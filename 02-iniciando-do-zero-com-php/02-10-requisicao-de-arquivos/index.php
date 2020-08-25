<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.10 - Requisição de arquivos");

/*
 * [ include ] https://php.net/manual/pt_BR/function.include.php
 * [ include_once ] https://php.net/manual/pt_BR/function.include-once.php
 */
fullStackPHPClassSession("include, include_once", __LINE__);
//include "header.php";
include __DIR__. "/header.php";

$profile = new StdClass();
$profile->name = "robson";
$profile->company = "tjpb";
$profile->email = "robson@gmail.com";
include __DIR__. "/profile.php";

$profile = new StdClass();
$profile->name = "gabriel";
$profile->company = "Google";
$profile->email = "Gabriel@gmail.com";
include __DIR__. "/profile.php";


//include_once: geralmente usado para inserir cofigurações; n]ap gera conflito
var_dump($profile);
/*
 * [ require ] https://php.net/manual/pt_BR/function.require.php
 * [ require_once ] https://php.net/manual/pt_BR/function.require-once.php
 */
fullStackPHPClassSession("require, require_once", __LINE__);

require __DIR__ . "/config.php";

echo "<h1>". Course ."</h1>";

var_dump(require  __DIR__ . "/config.php");

var_dump(require_once __DIR__. "/config.php");

//require algum arquivo de configuração para rodar a aplicação, dependecia, função