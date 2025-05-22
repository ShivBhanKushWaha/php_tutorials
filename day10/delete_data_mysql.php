<?php
include_once("./config.php");

// to delte data
// $students = $conn -> prepare("DELETE from students where id = '6'");
// if it return 1 then execute suucess
// echo $students -> execute();

// isko yha dene se auto matic refresh ho jayega
if (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    $students = $conn->prepare("DELETE from students where id = '$id'");
    // if it return 1 then execute suucess
    echo $students->execute(); 
}

$students = $conn->prepare("SELECT * from students");
$students->execute();

$resutl = $students->fetchAll();
// print_r($resutl)

echo "<table border='1'";
foreach ($resutl as $student) {
    echo "<tr>
    <td>" . $student['name'] . "</td>
    <td>" . $student['course'] . "</td>
    <td>" . $student['batch'] . "</td>
    <td>" . $student['year'] . "</td>
    <td>" . $student['city'] . "</td>
    <td><form method='post'>
    <button name='delete' value=" . $student['id'] . ">Delete</button>
    </form></td>
    </tr>";
}
echo "</table>";

// yha se auto matic refresh nhi hoga 
// if (isset($_POST['delete'])) {
//     $id = $_POST['delete'];
//     $students = $conn->prepare("DELETE from students where id = '$id'");
//     // if it return 1 then execute suucess
//     echo $students->execute(); 
// }
 