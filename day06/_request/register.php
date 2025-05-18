<?php
//  $_REQUEST
// isme get aur post dono ka data mil jata hai 
// echo "register";

// dono get aur post ka data get krne ke liye $_REQUEST ka use krte hai 

echo "User name is " . $_REQUEST['user_name'];
echo "<br/>";
echo "user password is " . $_REQUEST['user_password'];
echo "<br/>";
print_r($_REQUEST);// to print all entities

// check that request is available or not
if ($_REQUEST) {
    echo "User name is " . $_REQUEST['user_name'];
    echo "<br/>";
    echo "user password is " . $_REQUEST['user_password'];
    echo "<br/>";
print_r($_REQUEST);// to print all entities
}

// dummy data dalne ke liye
$_REQUEST['dummy'] = "dumm";

// ek sath sabhi data ko nikalne ke liye
foreach($_REQUEST as $key => $data){
    echo $key. " is " .$data;
    echo "<br/>";
}

?>