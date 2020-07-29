<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.07 - Estruturas de controle");

/*
 * [ if ] https://php.net/manual/pt_BR/control-structures.if.php
 * [ elseif ] https://php.net/manual/pt_BR/control-structures.elseif.php
 * [ else ] https://php.net/manual/pt_BR/control-structures.else.php
 */
fullStackPHPClassSession("if, elseif, else", __LINE__);

    $teste = true;

    if($teste){
        var_dump(true);
    } else{
        var_dump(false);
    }

    $age = 2;

    if($age < 18){
        var_dump("pode tirar abilitação");
    } elseif ($age >= 21){
        var_dump("pode consumir bebida alcoolica");
    } else{
        var_dump("maior de idade");
    }

    $hour = 3;
    if ($hour >= 5 || $hour < 23){
        if ($hour < 7 ){
            var_dump("bob marley");
        }else{
            var_dump("after bridge");
        }
    }else{
        var_dump("ZZZZzzzzzZZZZ");
    }
/*
 * [ isset ] https://php.net/manual/pt_BR/function.isset.php
 * [ empty] https://php.net/manual/pt_BR/function.empty.php
 */
fullStackPHPClassSession("isset, empty, !", __LINE__);

$rock = "";

if (!isset($rock)){
    var_dump("Rock and Roll");
}else{
    var_dump("die");
}

$rockandroll = "ACDC";
if (!empty($rockandroll)){
    var_dump("Rock existe e toca {$rockandroll}");
}else{
    var_dump("Não existe ou não está tocando");
}

/*
 * [ switch ] https://secure.php.net/manual/pt_BR/control-structures.switch.php
 */
fullStackPHPClassSession("switch", __LINE__);


$payment = "canceled";

switch ($payment){
    case "billet_printed":
        break;
 var_dump("boleto impresso");
    case 'canceled':
        break;
var_dump("pagamento cancelado");
    case 'past_due':
    case 'pending':
var_dump("aguardando pagamento");
        break;
    case 'aproved':
    case 'completed':
var_dump("pagamento aprovado");
        break;
    default:
        var_dump("erro ao processar pagamento");
        break;
};



