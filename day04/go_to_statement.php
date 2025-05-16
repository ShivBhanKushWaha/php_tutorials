<?php
// to skip the line of code based on condition 
$x = 10;
echo "Value of x is $x <br/>";
if($x != 10){
    goto jump;
}
echo "Value of x is $x <br/>";

$name = "Shiv <br/>";
echo $name;





jump:
    echo "statement is jumped on line nu 17";

    // always goto statement written after condition not above the code 
for($i = 0; $i < 10; $i++){
    echo "$i <br/>";
    if($i == 5){
        goto OutSideLoop;
    }
}

OutSideLoop:
    echo "Loop is break ";

?>