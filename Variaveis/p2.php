<?php


$anoNacimento = 2002;
// variavel de nome

$nome = "mauricio";

$sobrenome = "sarpa";

$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;

echo "<br>";

echo "<br>";

unset($nomeCompleto);

if (isset($nomeCompleto)) {
    echo $nomeCompleto;
}
