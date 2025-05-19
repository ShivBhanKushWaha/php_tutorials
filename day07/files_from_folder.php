<?php
// folder ke andr files ko nikalna ki kitne file hai aur kaun si kaun hai 
$path = "../files";
// directory ko scan kr lege
$items = scandir($path);
// array diff first array se seccond array ke  element ko remove kr dega
$items = array_diff($items,array(".",".."));
print_r($items);

foreach($items as $item){
    // to open the file use anchor tag
    echo "<a href='../files/$item'>open $item</a> <br/>";
    echo $item. "<br/>";
}

?>