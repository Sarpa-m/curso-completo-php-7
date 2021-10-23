<?php

$nome ="mauricio";

function test()
{

    global $nome;
    echo $nome;
}


function test2($nome)
{
    echo $nome . " test2";
}


test();
echo "<br>";
test2('rile');