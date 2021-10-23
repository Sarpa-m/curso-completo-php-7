<?php

$res = 10 + 3 / 2;

echo $res;

echo "<hr>";
$res = (10 + 3) / 2;

echo $res;

echo "<hr>";
$res = (10 + 3) / 2 > 5 && 10 + 5  < 3;

var_dump($res);

echo "<hr>";
$res = (10 + 3) / 2 > 5 && 10 + 5  < 20;

var_dump($res);

echo "<hr>";
$res = (10 + 3) / 2 > 5 || 10 + 5  < 3;

var_dump($res);

