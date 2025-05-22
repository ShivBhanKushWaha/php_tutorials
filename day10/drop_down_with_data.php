<?php
include_once("./config.php");

// to get all data
// $getStudents = $conn -> prepare("SELECT * FROM students");
// to get only id and name
$getStudents = $conn -> prepare("SELECT id, name FROM students");
$getStudents -> execute();

$studentData = $getStudents -> fetchAll();

// print_r($studentData);

echo "<select>";
echo "<option>Select Name</option>";
foreach($studentData as $student){
    echo "<option value=".$student['id'].">".$student['name']."</option>";
}
echo "</select>";
?>