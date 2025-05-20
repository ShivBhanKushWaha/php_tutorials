<?php 
// die and exit -> code ki execution ki stop krne ke liye , also use for debugging
// return -> limited use and stop of code execution , function se output get krne ke liye bhi use hota hai 

$a = 10;
$b = 20;
echo $a - $b;
echo "<br/>";
echo test();
// return; // yha se execution ruk jayega 
echo $a + $b;
echo "<br/>";
// die("Yha error hia"); // yha se code ruk jayega with function
// die; // yha se code ruk jayega without function
echo $a * $b;
echo "<br/>";
// exit; // with out function 
// exit("Exit here"); //with function php use c , c++ and purl for internal language so die comes from purl and exit comes from c

echo $a / $b;
echo "<br/>";

function test() : int {
    // die; yha se pura ruk jayega
    return 20; // isme return function ke execution ko rokega baki ke code execute hoga
}