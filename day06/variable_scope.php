<?php 

// Local variables -> inside the functions all variable is local variable
// global variable -> declare the out side the function and accessible in every where in the file 
// global aur local same name se bhi ho skte hai

// global variable
// $name = "global variable";
// function getName(){
//     // local variable
//     // $name="shiv <br/>";
//     // echo $name;

//     // to access the global variable inside the function
//     global $name;
//     // to update th global variable
//     $name="update global";
//     echo $name;
// }
// echo $name. "<br/>";
// getName();

$name = "Shiv";
function test(){
    $name = "test";
    echo $name;

    function inerTest(){
        // $name ="inner test";
        // global krne pr global variablke access hoga
        global $name;
        echo $name;
    }
}

test();
echo "<br/>";
inerTest();
echo $name;

?>