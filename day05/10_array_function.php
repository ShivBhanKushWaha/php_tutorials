<?php

$users = ["Anil","shiv"];

// to add a new user -> (array name, new user name)

array_push($users,"peter");
array_push($users,"peter","kush");

// to remove from array from last at a time
array_pop($users);

// remove multiple user at a time
array_splice($users,-1);


print_r($users);

?>