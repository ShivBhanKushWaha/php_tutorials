<?php 
                                    //  connection with mysql using mysqli class
// ways to connect php with mysql
// latest version is using MYSQLi class
// 4 neccessary varibale 
// 1 - host name  
// 2 - user name // bydefault "root"
// 3 - password
// 4 - databse name 

$host = "localhost";
$username = "root";
$password = null;
$database = "college";

// isi kram me value pass krni hai
$connection = new mysqli($host,$username,$password,$database);
if($connection -> connect_errno){
    die ("Some error while connection databse") .$connection -> $connect_error;
}

echo "database connect successfully";
echo "<br/>";

// yha se jo quesry chalayeg vo query vha pr bhi chalni chahiye
// tables ko show krne ke liye
$result = $connection -> query("show tables") -> fetch_all();
print_r($result);

?>