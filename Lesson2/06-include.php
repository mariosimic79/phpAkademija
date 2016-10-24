<?php
//header('Content-Type: text/plain');

//include, require, require_once 
//include ubacuje sve iz jednog u drugi file
//include_once učita samo jednom a sve ostale preskaće
//require ako ga nema ruši se jer ne može bez toga

require 'include_file.php';

var_dump(__DIR__);
var_dump(__FILE__);





