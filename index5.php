<?php
//Вариант 1 Сумма
$a = 1;
$b = 2;
echo "a = {$a} b = {$b}<br>";
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "a = {$a} b = {$b}<br><br>";

//Вариант 1 в одну строку
$a = 10;
$b = 20;
echo "a = {$a} b = {$b}<br>";
$a = $a + $b - $b = $a;
echo "a = {$a} b = {$b}<br><br>";

//Вариант 2 Битовые операции
$a = 11;
$b = 12;
echo "a = {$a} b = {$b}<br>";
$a = $a ^ $b;
$b = $b ^ $a;
$a = $a ^ $b;
echo "a = {$a} b = {$b}<br><br>";

//Вариант 2 в одну строку
$a = 21;
$b = 22;
echo "a = {$a} b = {$b}<br>";
$a = $a ^ $b = ($a = $a ^ $b) ^ $b;
echo "a = {$a} b = {$b}<br>";