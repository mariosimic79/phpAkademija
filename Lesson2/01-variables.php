<?php
header('Content-Type: text/plain');

$v = 42;

echo $v;
var_dump($v); //ispise koji je tip objekta i koja je vrijednost npr: int(42)




$n = 1;
var_dump($n);

$n= (2.55);
var_dump($n);


//Boolean
$b = false;

//String

$s= 'PHP Akademija $n';  //S jednostrukim ispisuje sve što piše
echo $s;
echo "\n";
$s = "PHP Akademija $n";    //Dvostruki navodnici ispisuju vrijednost varijable
echo $s;
echo "\n";

//Array

$a1 = [1,2,3]; //novi naćin 
//$a2 = array[1, 2, 3];  stari nacin
   
echo $a1[2]; // ispis podataka iz array

$a1[2] = 4; //izmjena nekog elementa
$a1[] = 5; //dodaje na kraju niz

$a3 = [1, 'dva', false]; // U array se može spremati bilo šta
echo "\n";
$a4 = [
    'key_1' => 1,
    'key_2' => 'Dva',
    'key_3' => [1,2,"tri"]
    
];
var_dump($a4['key_3']);
echo "\n";
//Objekti

$o = new StdClass();
$o->x = 'Just a property';

var_dump($o);