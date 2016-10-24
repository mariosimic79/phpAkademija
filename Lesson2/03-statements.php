<?php
header('Content-Type: text/plain');

$isTrue = true;
//$isTrue = ':]'; //isto je true 



if($isTrue)
{
      echo "it's true \n";
}

$isFalse = false;

if($isFalse)
{
    echo "It's False \n";  
}

if($isTrue || $isFalse)
{
    echo "It's true or false \n";
    
}
    

var_dump(123 == '123abc'); //pretvara string u broj i briše slova 
var_dump((1 == 1.0) == (true == 'false'));
var_dump(1 === '1'); //provjerava da li je jednako i da li su varijable iste 
echo "\n";
//-------------------------------------
$a = 1;
$b = 2;
if ($a > $b)
{
    echo "nesto";
}else if ($a<$b)
{
    echo "opet nesto";
}  else {
    echo "nesto trece";
}


$result = $isTrue ? 'one' : 'two';
/*
 * if($isTrue)
 * {
 *      $result = 'one';
 * }
 * else
 * {
 *      $result = 'two';
 * }
 * 
 *  */

$result = $isTrue ?: false; // skraćen if else

$day = 2;

switch ($day)
{
    case 1:
        echo 'Pon';
        break;
    case 2:
        echo 'Uto';
        break;
    default:
        echo "nije pon i uto";
}
echo "\n";

var_dump(isset($nesto)); // provjera da li ima nesto u varijabli ili ne 



