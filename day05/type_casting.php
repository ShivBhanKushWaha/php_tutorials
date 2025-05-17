<?php

// casting is converting one data type to another data types 

// casting types string int float bool array object 

$a = 55645;
// $a = "1230213";
var_dump($a);
// $b = (string) $a;
// $b = (bool) $a;
// $b = (float) $a;
// $b = (int) $a;
// $b = (bool) $a;
// $b = (array) $a;
// print_r($b);
$b = (object) $a;
var_dump($b);
// echo $b;

// array ko string me convert nhi kiya ja skta hai type conversion ka error ata hao
$x = ["ram"];
$s = (string) $x;
echo $s;


?>