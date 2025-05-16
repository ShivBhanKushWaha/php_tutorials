<?php
                        // functions
function displayUserName(){
    dummy();
    echo "Username is shivbhan";
    echo "<br/>";
    echo "User age is 25";
    echo "<br/>";
    echo "User email id is shivbhan@gmail.com";
    echo "<hr/>";
}

function dummy(){
    echo "<h1>User details</h1>";
}
displayUserName();

                        // functions with parameter
function sum($a,$b){
    echo $a + $b. "<br/>";
}

sum(2,5);
sum(5,45);
sum(20,54);

function userData ($name, $color){
    echo "<h1 style='color:$color'>$name</h1>";
}

userData("shiv","red");
userData("bhan","green");

                        //  function with return statement 
function userName(){
    return "Shivbhan Kushwaha";
}

echo "<h1>Hi current user name " .userName()."</h1>";

                        // default parameter
function fruits($name="Mango",$color="green"){
    echo "this is $name and it's color is $color <br/>";
}

fruits("apple","red");
fruits("apple");
fruits();

                        // Nested Function
                        
function test(){
    echo "test functoion call <br/>";

    function apple(){
        echo "apple function called";
    }
}
// phle main function call krna hoga iske bad nested function work karega otherwise error ayega
// aur main funtion declaration ke phle bhi call kr skte hai 
test();
apple();
?>