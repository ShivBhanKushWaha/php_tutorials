<?php
                    // logical operators And &&  or || ! Xor 
$a = 0;
$b = 2;

if($a == 0 && $b == 2){
    echo "&& operators";
}
echo "<br/>";
if($a == 1 || $b == 2){
    echo "|| operators";
}
echo "<br/>";

if($a != 10){
    echo "not operators";
}
echo "<br/>";

if($a == 0 and $b == 2){
    echo "and operators";
}
echo "<br/>";

if($a == 1 or $b == 2){
    echo "or operators";
}
echo "<br/>";

// xor me ek true aur ek false hona chahiye same condition pr nhi run hoga
if($a == 1 xor $b == 2){
    echo "xor operators";
}
echo "<br/>";

?>