<?php
$str = "Shivbhan kushwaha";
// to count the length of string
echo strlen($str);
echo "<br/>";

$var = true;
// to check types of variables
var_dump($var);
echo "<br/>";

echo date("d"); // current date
echo "<br/>";
echo date("m"); // current month
echo "<br/>";
echo date("l"); // current day
echo "<br/>";
echo date("y"); // current year
echo "<br/>";
echo date("d.m.y"); // current date month year
echo "<br/>";

$today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
echo $today;
echo "<br/>";
$today = date("m.d.y");                         // 03.10.01
echo $today;
echo "<br/>";
$today = date("j, n, Y");                       // 10, 3, 2001
echo $today;
echo "<br/>";
$today = date("Ymd");                           // 20010310
echo $today;
echo "<br/>";
$today = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
echo $today;
echo "<br/>";
$today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
echo $today;
echo "<br/>";
$today = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
echo $today;
echo "<br/>";
$today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
echo $today;
echo "<br/>";
$today = date("H:i:s");                         // 17:16:18
echo $today;
echo "<br/>";
$today = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)
echo $today;
echo "<br/>";

// php info function 
// echo phpinfo();
// echo "<br/>";

$var = "is it string";
// if string hogi to 1 return krega other wise 0
echo is_string($var);  
echo "<br/>";

$var = 14;
// if int hogi to 1 return krega other wise 0
echo is_int($var);  
echo "<br/>";

// to generate random value rand(min,max)
echo rand();
echo "<br/>";
echo rand(1,100);
echo "<br/>";

// to stop the execute of code use die or exit
// echo "before";
// die();
// exit();
// echo "after";

// last me jitne letter ko leave krna ho vo pass krte hai
$str = "code by me";
echo substr($str,2);
?>