<?php
$userneed = 5;
// break statement
for($i = 0; $i < 10; $i++){
    echo $i;
    echo "<br/>";
    if($i == $userneed){
        break;
    }
}
echo "<br/>";

// continue statement
for($i = 0; $i < 10; $i++){
    if($i == $userneed || $i ==7){
        continue;
    }
    echo $i;
    echo "<br/>";
}
?>