<?php
header('Content-Type: text/plain');

$n = 1;
$f = 2.55;

var_dump($n+$f);
echo"\n";

$n = 1;
$f = 2.55;
$b = true; // predstavlja 1
var_dump($n+$f+$b);
echo"\n";

$n = 1;
$n += 10;
$n *= 10;
var_dump($n);
$n++;
$n--;

echo"\n";

$s = 'PHP Akademija';
$s = $s.' u Osijeku'; // ili $s .= 'u Osijeku';
var_dump($s);
echo"\n";

$a = [1,2,'one' => 'a1', 'two' => 'a2'];
$b = [2,3,'two' => 'b1', 'three' =>  'b2'];

var_dump($a+$b);  //samo dodaje one elemente iz b koje nema u a
//var_dump(array_merge($a,$b)); // dodaje ih zajedno
//var_dump(array_replace($a+$b)); //zamjenjuje sve elemente iz a s elementima iz b s istim nazivom
