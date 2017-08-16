<?php
/**
 * Created by PhpStorm.
 * User: Marcos Santiago
 * Date: 15/08/2017
 * Time: 21:09
 */
// Exemplo de Paradigma Funcional - Pode ser usado funções dentro de variaveis
$input = array(22,34,17,18,13,22,25);
$filter = function(int $age){
    return ($age >= 18);
};

$output = array_filter($input,function(int $age){
    return ($age >= 18);
});

print_r($output);