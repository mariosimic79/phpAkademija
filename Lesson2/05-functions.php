<?php
header('Content-Type: text/plain');

function test1()
{
    echo "Test funkcija";
}

test1();


//Globalna funkcija s argumentima
function test2($a, $b)
{
      return ($a*$b);
}

$c = test2(5);
var_dump($c);


//Anonymus funkcija - funkcija koja nema ime
$test = function()
{
    echo "Ovo je anonymus funkcija";
    
};
test();




