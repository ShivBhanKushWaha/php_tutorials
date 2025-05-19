<?php 
$users = ["anil","shiv","sam","bhan","anil","sam"];
$user = ["name" => "shiv","age" => 25];
// $users = "not an arsay";

echo is_array($users);

if(is_array($users)){
    echo "this is an array";
}
else{
    echo "this is not an array";
}

// total element count krne ke liye 
echo count($users);

// array se kisi particular element ko delete krne ke liye ya unset krne iey
unset($users[1]);
print_r($users);

// to add elennt from last side 
array_push($users,"peter");
print_r($users);

// to remove from array from last at a time
array_pop($users);
print_r($users);

// show only keys not value 
print_r(array_keys($user));

// to convert an array into string use implode()
echo implode($users);

// to convert string into array use explode() aur kis base pr krna chahte ho space se , se etc
$str = "hello , this is , shivbhan kushwaha";
print_r(explode(" ",$str));
// based on 'o'
print_r(explode("o",$str));
// based on ','
print_r(explode(",",$str));

// two array ko merge krne ke liye
print_r(array_merge($users,$user));

echo "<br/>";
// duplicate elemnt ko remove krne ke liye
$data = array_unique(($users));
print_r($data);