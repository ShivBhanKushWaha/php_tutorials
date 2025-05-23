<?php
$host = "localhost";
$username = "root";
$password = null;
$db = "college";


$conn = new PDO("mysql:host=$host;dbname=$db",$username,$password);
$conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo "Connection establish successfully <br/>";
?>