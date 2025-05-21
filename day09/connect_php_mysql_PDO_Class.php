<?php
                            // connection with php and mysql by using PDO (php data object) class 
// neccessary variable
$host = "localhost";
$username = "root";
$password = null;

try{
    $connection = new PDO("mysql:host=$host;dbname=college",$username,$password);
    
    $connection -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); // readable message me error show krta hai agr connection nhi bn paya to
    echo "Connection successfully";
}catch(PDOException $error){
    echo "Coonection failed". $error -> getMessage();
}

echo "<br/>";

$result = $connection -> query("show tables"); // -> fetchAll();
print_r(($result));

//  agr bhut i sari tables hui to 
while($row = $result -> fetch(PDO::FETCH_NUM)){
    print_r($row);
}
?>