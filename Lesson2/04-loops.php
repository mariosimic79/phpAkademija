<?php
header('Content-Type: text/plain');
/*
$a = [1, 'two', 3, 4];

foreach($a as $value)
{
    echo $value."\n";
}

for ($i = 0; $i<10; $i++)
{
    echo $i;
}
*/
//break; break 2;  break 2 je za preskakanje nakon 2 izvrsena ovisno broju
//continue
//while, do-while


/*1. Parse following array and display it in format 
   Tag list:
 * <a> anchor
 * <p> paragraph



*/




$list = [
    '<a> - anchor',
    '<p> - paragraph',
    '<ul> - unordered list ',
    '<table> - table'   
];

foreach($list as $value)
{
    $razdvoji = explode(' - ', $value);
    echo $razdvoji[0]. "\t" . $razdvoji[1]."\n";
    
}
