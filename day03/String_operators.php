<?php
                            // string and string operators

$name = "Shivbhan Kushwaha";
$str1 = "peter";
$str2 = 10;

// single quotes is not valid for string
// dot .operators
echo "my name is " .$name;
echo "my name is " .$name. ' and my age is ' .$str2;
echo $name .$str2;

// how to add a string 
$str1.= $str2;
echo $str1;
?>