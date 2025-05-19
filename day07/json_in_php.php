<?php
// JSON -> Javascript object normalizer_get_raw_decomposition
// it is text based data exchange formate for structuring data 
// used to exchange data bet server and web application 

$user = ["name" => "shivbhan","age" => 25,"email" => "shiv@gmail.com"];

// print_r($user);

// to convert array to json fromate
$userJson = json_encode($user);
echo $userJson;

// to convert json data into array formate
$jsonData = '{"name":"shivbhan","age":25,"email":"shiv@gmail.com"}';
echo $jsonData;
//  true pass krege to array milega nhi to class base object milega
$dataArray = json_decode($jsonData,true);
print_r($dataArray);

?>