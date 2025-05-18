<?php
                        // Super global variables -> by defaults variables or predefined variables access anywhere
                    
// 8 types of super global variables 
// $GLOBALS -> sabhi global variables ko dekhne ke liye
// $_SERVER -> server ki information dekhne ke liye
// $_REQUEST -> get aur post data ko access krne ke liye
// $_POST -> only post type data ko access krne ke liye
// $_GET -> only get type data ko access krne ke liye
// $_FILES -> jab files uplaod krte hai tab sari files yha pr get kr skte hai
// $_COOKIE -> manage cookiew data to all cookies data get by this variable
// $_SESSION -> ek tab ka data dusre tab me bhi access hota hai jaise ki kaun se website visit hui aur login hua to session me store hota hai
// $_ENV -> -> environmental file me key value ko rkhne ke liye

// bhut se global variables declare hai kisi file me to unko ek sath dekhne ke liye 
// aur yadi sabhi file connected ho ya include ho to us ke bhi globala varibales show hoge
$a = "10"; 

print_r($GLOBALS);
echo "<br/>";
print_r($_SERVER);
echo "<br/>";
print_r($_REQUEST);
echo "<br/>";
print_r($_POST);
echo "<br/>";
print_r($_GET);
echo "<br/>";

?>