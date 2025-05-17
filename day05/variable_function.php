<?php
                        // variable function 
function test(){
    echo "test function called <br/>";
}

$test = "test";
// this will treated as function variable
// $test(); 
// this will treated as display as test only
// echo $test;

$apple = "Apple";
function Apple(){
    echo "Apple function called <br/>";
}
// function as a props
function main($abc){
    echo "main function called <br/>";
    $abc();
}

main($test);
main($apple);

?>