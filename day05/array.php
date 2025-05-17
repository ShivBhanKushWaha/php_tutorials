<?php

// arrray -> collection of data 
// data can be any type 
// types of array 
// 1 indexed array
// 2 associative array
// 3 multi dimensinal array

// Index array

// $users = ["Shivbhan","Kushwaha","Govind","Ram","Ravendra"];
// // user started with 0 index
// echo $users[0]; 
// echo "<br/>";

// echo "Length of array is " .count($users);
// echo "<br/>";

// for($i = 0; $i < count($users); $i++){
//     echo "<h1 style='color:red'>$users[$i]</h1>" ;
//     echo "<br/>";
// }


// Associative array
// it has the key and value
// $userDetails = [
//     "name" => "Shivbhan",
//     "age" => 25,
//     "City" => "Hamirpur",
//     "contact" => 9115379563,
//     "email" => "shivbhan@gmail.com"
// ];

// // echo $userDetails["age"];

// // without key
// foreach($userDetails as $data){
//     echo $data;
//     echo "<br/>";
// }

// // with key 
// foreach($userDetails as $key => $data){
//     echo $key. " is " .$data;
//     echo "<br/>";
// }

// // 2nd way 
// foreach ($userDetails as $key => $data):
//     echo $key. " is " .$data;
//     echo "<br/>";
// endforeach;


// Multi dimensinal array 
// $users = [
//     [1,"Shiv","noida"],
//     [2,"bhan","agra"],
//     [3,"kush","gurgaon"],
//     [4,"waha","delhi","email"]
// ];
// // to print an array use print_r
// print_r($users);
// echo "<br/>";

// for($i = 0; $i < count($users); $i++){
//     for($j = 0; $j < count($users[$i]); $j++){
//         echo " " .$users[$i][$j];

//     }
//     echo "<br/>";
// }

// Multi dimensional associative array -> multi dimensinal array with key 

$users = [
    ["name" => "Shivbhan", "age" => 24, "city" => "Hamirpur"],
    ["name" => "Govind", "age" => 22, "city" => "Rohari"],
    ["name" => "Ravendra", "age" => 54, "city" => "Patanpur"],
];

echo "<table border='1'>";
echo "<tr>
        <th>Name</th>
        <th>Age</th>
        <th>City</th>
      </tr>";
foreach ($users as $user):
    echo "<tr>";
    foreach ($user as $key => $data) {
        // echo $key . " is " . $data;
        echo "<td>" . $data . "</td>";
    }
    echo "</tr>";
endforeach;
echo "</table>"
?>